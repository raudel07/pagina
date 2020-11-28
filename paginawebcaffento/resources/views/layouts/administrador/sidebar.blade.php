<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    <li class="nav-item active">
        <a class="nav-link" href="/admin/">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Admin</span>
        </a>
    </li>
    @if( Auth::user()->nivel == 'admin' )
    <li class="nav-item active">
        <a class="nav-link" href="/admin/usuarios">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Usuarios</span>
        </a>
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="/admin/menu">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Menú</span>
        </a>
    </li>
    @endif
    <li class="nav-item active">
        <a class="nav-link" href="/admin/servicio-domicilio">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Servicio a domicilio</span>
        </a>
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="/admin/reservaciones">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Reservaciones</span>
        </a>
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="/admin/blogs">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Blogs</span>
        </a>
    </li>
    <li class="nav-item active">
        <a class="nav-link" href="/admin/comentarios">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Comentarios</span>
        </a>
    </li>


</ul>