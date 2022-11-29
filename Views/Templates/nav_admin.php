<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url(); ?>dashboard">
        <div class="sidebar-brand-icon">
        <i class="fas fa-power-off"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Dycan Technology</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url(); ?>dashboard">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Nav Item - Productos -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url(); ?>productos" >
            <i class="fas fa-box-open"></i>
            <span>Productos</span>
        </a>
    </li>

    <!-- Nav Item - Pedidos -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url(); ?>perdidos">
        <i class="fas fa-truck"></i>
            <span>Pedidos</span>
        </a>
    </li>

    <!-- Nav Item - Users Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="<?= base_url(); ?>usuarios" data-toggle="collapse" data-target="#collapseUsers" aria-expanded="true" aria-controls="collapseUsers">
            <i class="fas fa-users"></i>
            <span>Usuarios</span></a>
            <div id="collapseUsers" class="collapse" aria-labelledby="headingUsers"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="<?= base_url(); ?>usuarios">Usuarios</a>
                <a class="collapse-item" href="<?= base_url(); ?>roles">Roles</a>
                <a class="collapse-item" href="<?= base_url(); ?>permisos">Permisos</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Client -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url(); ?>clientes">
        <i class="fas fa-user-plus"></i>
            <span>Clientes</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Nav Item - Ver Página -->
    <li class="nav-item">
        <a class="nav-link" target="_blank" href="<?= base_url(); ?>">
        <i class="fas fa-tag"></i>
            <span>Ver Página</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->