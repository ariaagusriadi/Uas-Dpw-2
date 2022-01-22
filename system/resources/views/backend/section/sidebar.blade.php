<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
        {{ Auth::user()->nama }} AS
        @if (auth()->user()->level == 1)
            admin
        @elseif (auth()->user()->level == 2)
            penjual 
        @endif   
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    <!-- Nav Item - Dashboard -->
    @if (auth()->user()->level == 1)
        <li class="nav-item active">
            <a class="nav-link" href="{{ url('admin/dashboard/admin') }}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>
    @elseif (auth()->user()->level == 2 )
        <li class="nav-item active">
            <a class="nav-link" href="{{ url('admin/dashboard/penjual') }}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>
    @endif



    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Data
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    @if (auth()->user()->level == 1)
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                aria-expanded="true" aria-controls="collapseTwo">
                <i class="fa fa-user"></i>
                <span>User</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">User Components:</h6>
                    <a class="collapse-item" href="{{ url('admin/datauser') }}">Data User</a>
                    <a class="collapse-item" href="{{ url('admin/user') }}">Option</a>
                </div>
            </div>
        </li>
    @elseif (auth()->user()->level == 2 )
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fa fa-user"></i>
            <span>Produk</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Produk Components:</h6>
                <a class="collapse-item" href="{{ url('admin/dataproduk') }}">Data Produk</a>
                <a class="collapse-item" href="{{ url('admin/produk') }}">Options</a>
                <a class="collapse-item" href="{{ url('admin/produk/create') }}">Add Produk</a>
            </div>
        </div>
    </li>
    @endif




    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
