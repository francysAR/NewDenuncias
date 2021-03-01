<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSoporteRequest;
use App\Http\Requests\UpdateSoporteRequest;
use App\Repositories\SoporteRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class SoporteController extends AppBaseController
{
    /** @var  SoporteRepository */
    private $soporteRepository;

    public function __construct(SoporteRepository $soporteRepo)
    {
        $this->soporteRepository = $soporteRepo;
    }

    /**
     * Display a listing of the Soporte.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $soportes = $this->soporteRepository->all();

        return view('soportes.index')
            ->with('soportes', $soportes);
    }

    /**
     * Show the form for creating a new Soporte.
     *
     * @return Response
     */
    public function create()
    {
        return view('soportes.create');
    }

    /**
     * Store a newly created Soporte in storage.
     *
     * @param CreateSoporteRequest $request
     *
     * @return Response
     */
    public function store(CreateSoporteRequest $request)
    {
        $input = $request->all();

        $soporte = $this->soporteRepository->create($input);

        Flash::success('Soporte guardado correctamente.');

        return redirect(route('soportes.index'));
    }

    /**
     * Display the specified Soporte.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $soporte = $this->soporteRepository->find($id);

        if (empty($soporte)) {
            Flash::error('Soporte no encontrado');

            return redirect(route('soportes.index'));
        }

        return view('soportes.show')->with('soporte', $soporte);
    }

    /**
     * Show the form for editing the specified Soporte.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $soporte = $this->soporteRepository->find($id);

        if (empty($soporte)) {
            Flash::error('Soporte no encontrado');

            return redirect(route('soportes.index'));
        }

        return view('soportes.edit')->with('soporte', $soporte);
    }

    /**
     * Update the specified Soporte in storage.
     *
     * @param int $id
     * @param UpdateSoporteRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSoporteRequest $request)
    {
        $soporte = $this->soporteRepository->find($id);

        if (empty($soporte)) {
            Flash::error('Soporte no encontrado');

            return redirect(route('soportes.index'));
        }

        $soporte = $this->soporteRepository->update($request->all(), $id);

        Flash::success('Soporte actualizado correctamente.');

        return redirect(route('soportes.index'));
    }

    /**
     * Remove the specified Soporte from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $soporte = $this->soporteRepository->find($id);

        if (empty($soporte)) {
            Flash::error('Soporte no encontrado');

            return redirect(route('soportes.index'));
        }

        $this->soporteRepository->delete($id);

        Flash::success('Soporte borrado correctamente');

        return redirect(route('soportes.index'));
    }
}
