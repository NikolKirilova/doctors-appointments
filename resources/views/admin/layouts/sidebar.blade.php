<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">

    <span class="brand-text font-weight-light">Hospital</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">Alexander Pierce</a>
      </div>
    </div>
    <div class="nav-item">
      <a href="{{url('dashboard')}}" class="nav-link active"><i class="fas fa-cog"></i>
        <span>Dashboard</span></a>
    </div>

    <!-- SidebarSearch Form -->
    <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">

      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               @if(auth()->check()&& auth()->user()->role->name === 'admin')
        <li class="nav-item ">
          <a href="#" class="nav-link ">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Doctors
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{route('doctor.index')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>View</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('doctor.create')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Create</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Inactive Page</p>
              </a>
            </li>
@endif
          </ul>
        </li>
        <li class="nav-item ">
          <a href="#" class="nav-link ">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Appointment
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{route('appointment.index')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Check</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('appointment.create')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Create</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Inactive Page</p>
              </a>
            </li>

          </ul>
        </li>
        @if(auth()->check()&& auth()->user()->role->name === 'doctor')
        <li class="nav-item ">
          <a href="#" class="nav-link ">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Patient Appointment
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{route('patient')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Today Appointment</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('all.appointments')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>All Appointments</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Inactive Page</p>
              </a>
            </li>

          </ul>
        </li>
        @endif


        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Simple Link
              <span class="right badge badge-danger">New</span>
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
          </a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
          </form>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>