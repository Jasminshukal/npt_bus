@php
$pagename=\Request::route()->getName();
@endphp
 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion toggled" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-bus"></i>
        </div>
        <div class="sidebar-brand-text mx-3">NPT</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item @if(strpos($pagename, 'home') !== false) active @endif">
        <a class="nav-link" href="{{ route('home') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <div class="sidebar-heading">
        Interface
    </div>
    <li class="nav-item @if(strpos($pagename, 'BusExpense') !== false) active @endif">
        <a class="nav-link" href="{{ route('BusExpense.index') }}">
            <i class="fas fa-fw fa-rupee-sign"></i>
            <span>Bus Expance</span></a>
    </li>
    <li class="nav-item @if(strpos($pagename, 'BranchExpense') !== false) active @endif">
        <a class="nav-link" href="{{ route('BranchExpense.index') }}">
            <i class="fas fa-fw fa-map-marker"></i>
            <span>Branch Expance</span></a>
    </li>
    <!-- Heading -->

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Masters</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Components:</h6>
                <a class="collapse-item" href="{{ route('Bus.index') }}">Bus Master</a>
                <a class="collapse-item" href="{{ route('Branch.index') }}">Branch Master</a>
            </div>
        </div>
    </li>


    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="charts.html">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Reports</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

    <!-- Sidebar Message -->
    {{-- <div class="sidebar-card d-none d-lg-flex">
        <img class="sidebar-card-illustration mb-2" src="img/undraw_rocket.svg" alt="...">
        <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!</p>
        <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to Pro!</a>
    </div> --}}

</ul>
<!-- End of Sidebar -->
