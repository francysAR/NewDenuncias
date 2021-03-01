<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAsignacionRequest;
use App\Http\Requests\UpdateAsignacionRequest;
use App\Repositories\AsignacionRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\Models\Soporte;
use App\Models\Denuncia;
use Flash;
use Response;

class AsignacionController extends AppBaseController
{
    /** @var  AsignacionRepository */
    private $asignacionRepository;

    public function __construct(AsignacionRepository $asignacionRepo)
    {
        $this->asignacionRepository = $asignacionRepo;
    }

    /**
     * Display a listing of the Asignacion.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $asignacions = $this->asignacionRepository->all();

        return view('asignacions.index')
            ->with('asignacions', $asignacions);
    }

    /**
     * Show the form for creating a new Asignacion.
     *
     * @return Response
     */
    public function create()
    {
        $soporte=Soporte::pluck('nombre','id');
        $denuncia=Denuncia::pluck('descripcion','id');

        return view('asignacions.create', compact('soporte','denuncia'));
    }

    /**
     * Store a newly created Asignacion in storage.
     *
     * @param CreateAsignacionRequest $request
     *
     * @return Response
     */
    public function store(CreateAsignacionRequest $request)
    {
        $input = $request->all();

        $asignacion = $this->asignacionRepository->create($input);

        Flash::success('Asignacion saved successfully.');

        return redirect(route('asignacions.index'));
    }

    /**
     * Display the specified Asignacion.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $asignacion = $this->asignacionRepository->find($id);

        if (empty($asignacion)) {
            Flash::error('Asignacion not found');

            return redirect(route('asignacions.index'));
        }

        return view('asignacions.show')->with('asignacion', $asignacion);
    }

    /**
     * Show the form for editing the specified Asignacion.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $asignacion = $this->asignacionRepository->find($id);

         $soporte=Soporte::pluck('nombre','id');
         $denuncia=Denuncia::pluck('descripcion','id');

        if (empty($asignacion)) {
            Flash::error('Asignacion not found');

            return redirect(route('asignacions.index'));
        }

        return view('asignacions.edit', compact('soporte','denuncia','asignacion'));
    }

    /**
     * Update the specified Asignacion in storage.
     *
     * @param int $id
     * @param UpdateAsignacionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAsignacionRequest $request)
    {
        $asignacion = $this->asignacionRepository->find($id);

        if (empty($asignacion)) {
            Flash::error('Asignacion not found');

            return redirect(route('asignacions.index'));
        }

        $asignacion = $this->asignacionRepository->update($request->all(), $id);

        Flash::success('Asignacion updated successfully.');

        return redirect(route('asignacions.index'));
    }

    /**
     * Remove the specified Asignacion from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $asignacion = $this->asignacionRepository->find($id);

        if (empty($asignacion)) {
            Flash::error('Asignacion not found');

            return redirect(route('asignacions.index'));
        }

        $this->asignacionRepository->delete($id);

        Flash::success('Asignacion deleted successfully.');

        return redirect(route('asignacions.index'));
    }
}
