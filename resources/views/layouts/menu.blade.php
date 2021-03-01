<li class="nav-item {{ Request::is('denuncias*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('denuncias.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Denuncias</span>
    </a>
</li>
<li class="nav-item {{ Request::is('soportes*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('soportes.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Soportes</span>
    </a>
</li>
<li class="nav-item {{ Request::is('asignacions*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('asignacions.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Asignacions</span>
    </a>
</li>
<li class="nav-item {{ Request::is('asignacions*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ url('sinasignar/sinasignar') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Sin Asignacion</span>
    </a>
</li>

<li class="nav-item {{ Request::is('asignacions*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ url('reporte') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Reportes</span>
    </a>
</li>