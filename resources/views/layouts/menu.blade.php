<li class="nav-item {{ Request::is('denuncias*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('denuncias.index') }}">
        <i class="icon-speech"></i>
        <span>Denuncias</span>
    </a>
</li>
<li class="nav-item {{ Request::is('soportes*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('soportes.index') }}">
        <i class="icon-wrench"></i>
        <span>Soportes</span>
    </a>
</li>
<li class="nav-item {{ Request::is('asignacions*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('asignacions.index') }}">
        <i class="icon-user-follow"></i>
        <span>Asignaciones</span>
    </a>
</li>
<li class="nav-item {{ Request::is('asignacions*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ url('sinasignar/sinasignar') }}">
        <i class="icon-user-unfollow"></i>
        <span>Sin Asignaciones</span>
    </a>
</li>

<li class="nav-item {{ Request::is('asignacions*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ url('reporte') }}">
        <i class="icon-book-open"></i>
        <span>Reportes</span>
    </a>
</li>