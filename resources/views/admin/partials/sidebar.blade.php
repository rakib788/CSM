<ul class="navbar-nav bg-dark sidebar sidebar-dark accordion side" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3"><h1>CMS</h1></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active bg-info">
        <a class="nav-link" href="{{ route('admin.dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">
<li class=" bg-info">
    <!-- Heading -->

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Services</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-light py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Services:</h6>
                <a class="collapse-item" href="{{ route('admin.index') }}"><i class="fa fa-plus"></i> Add Services</a>
                <a class="collapse-item" href="{{ route('show.service') }}"><i class="fa fa-circle"></i> Manage Services</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
     <li class="nav-item">
        <a class="nav-link" href="{{ route('create.client') }}">
            <i class="fa fa-user"></i>
            <span>Add Clients</span></a>
    </li>
     <li class="nav-item">
        <a class="nav-link" href="{{ route('show.client') }}">
            <i class="fas fa-fw fa-users"></i>
            <span>Clients List</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('create.store') }}">
            <i class="fas fa-fw fa-users"></i>
            <span>Invoices</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Reports</span>
        </a>
        <div id="collapseOne" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Reports:</h6>
                <a class="collapse-item" href="{{ route('date/reports') }}">B/W dates Reports</a>
                <a class="collapse-item" href="{{ route('sale/reports') }}">Sales Reports</a>
            </div>
        </div>
    </li>
        <li class="nav-item">
            <a class="nav-link" href="">
            <i class="fa fa-search"></i>
            <span>Invoices Search</span></a>
        </li>
    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
            aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-folder"></i>
            <span>page</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Login Screens:</h6>
                <a class="collapse-item" href="">Login</a>
                <a class="collapse-item" href="">Register</a>
                <a class="collapse-item" href="">Forgot Password</a>
                <div class="collapse-divider"></div>
                <h6 class="collapse-header">Other Pages:</h6>
                <a class="collapse-item" href="">404 Page</a>
                <a class="collapse-item" href="">Blank Page</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</li>
    <!-- Sidebar Message -->


</ul>
