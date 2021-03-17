<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ asset('asset/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('asset/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
                <a href="{{ route('dashboard') }}" class="nav-link {{ Request::is('dashboard*') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    Dashboard
                  </p>
                </a>
              </li>
          <li class="nav-item has-treeview {{ Request::is('category*') ? 'menu-open' : '' }}">
            {{-- <a href="#" class="nav-link {{ Request::is('admin/category/vendor*') ? 'active' : '' }}"> --}}
                <a href="#" class="nav-link {{ Request::is('admin/category*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-th"></i>
              <p>
                Category
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('category.create') }}" class="nav-link active">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Create Category</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('category.index') }}" class="nav-link active {{ Request::is('category*') ? 'active' : '' }}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Category</p>
                    </a>
                </li>

                {{-- <li class="nav-item">
                    <a href="./index3.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Dashboard v3</p>
                    </a>
                </li> --}}
            </ul>
          </li>

        <li class="nav-item has-treeview {{ Request::is('item*') ? 'menu-open' : '' }}">
            {{-- <a href="#" class="nav-link {{ Request::is('admin/item/vendor*') ? 'active' : '' }}"> --}}
                <a href="#" class="nav-link {{ Request::is('item*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-th"></i>
              <p>
                Item
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('item.create') }}" class="nav-link active">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Create Item</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('item.index') }}" class="nav-link active {{ Request::is('item*') ? 'active' : '' }}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Item</p>
                    </a>
                </li>

            </ul>
        </li>

                <li class="nav-item has-treeview {{ Request::is('slider*') ? 'menu-open' : '' }}">
                    {{-- <a href="#" class="nav-link {{ Request::is('admin/item/vendor*') ? 'active' : '' }}"> --}}
                        <a href="#" class="nav-link {{ Request::is('slider*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-th"></i>
                      <p>
                        Slider
                        <i class="right fas fa-angle-left"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('slider.create') }}" class="nav-link active">
                              <i class="far fa-circle nav-icon"></i>
                              <p>Create Slider</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('slider.index') }}" class="nav-link active {{ Request::is('slider*') ? 'active' : '' }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Slider</p>
                            </a>
                        </li>

                {{-- <li class="nav-item">
                    <a href="./index3.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Dashboard v3</p>
                    </a>
                </li> --}}
            </ul>
          </li>
          {{-- <li class="nav-item">
            <a href="pages/widgets.html" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Widgets
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li> --}}
          <li class="nav-item has-treeview {{ Request::is('reservation*') ? 'menu-open' : '' }}">
            <a href="#" class="nav-link {{ Request::is('reservation*') ? 'active' : '' }}">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Reservation
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('reservation.index') }}" class="nav-link {{ Request::is('reservation*') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Reservation</p>
                </a>
              </li>

            </ul>
          </li>

          <li class="nav-item has-treeview {{ Request::is('contact*') ? 'menu-open' : '' }}">
            <a href="#" class="nav-link {{ Request::is('contact*') ? 'active' : '' }}">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Contact
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('contact.index') }}" class="nav-link {{ Request::is('contact*') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Contact</p>
                </a>
              </li>

            </ul>
          </li>

        <li class="nav-item has-treeview {{ Request::is('role-register*') ? 'menu-open' : '' }}">
            <a href="#" class="nav-link {{ Request::is('role-register*') ? 'active' : '' }}">
                <i class="nav-icon fas fa-th"></i>
                <p>
                    Role Register
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('role-register') }}" class="nav-link active {{ Request::is('role-register*') ? 'active' : '' }}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Role Register</p>
                    </a>
                </li>
            </ul>
        </li>
          {{-- <li class="nav-item has-treeview {{ Request::is('stock/report*') ? 'menu-open' : '' }}">
            <a href="#" class="nav-link {{ Request::is('stock/report*') ? 'active' : '' }}">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Reports
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('stock/report') }}" class="nav-link {{ Request::is('stock/report*') ? 'active' : '' }}">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Stock Reports</p>
                    </a>
                </li>
            </ul>
          </li> --}}
        </ul>
        </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
