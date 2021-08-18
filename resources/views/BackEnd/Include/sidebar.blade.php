<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ asset('/BackEndSourceFile') }}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">E-Waitress</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('/BackEndSourceFile') }}/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        </div>
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

         <!-- Category -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-list-alt"></i>
              <p>
                Category
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('show_cate_table') }}" class="nav-link active">
                  <i class="fas fa-plus-circle"></i>
                  <p>Add Category</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('manage_cate') }}" class="nav-link">
                  <i class="far fa-edit nav-icon"></i>
                  <p>Manage Category</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- Category End -->

          <!-- Waitress -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-user-check"></i>
              <p>
                Waitress
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('show_wait_table') }}" class="nav-link active">
                  <i class="fas fa-plus-circle"></i>
                  <p>Add Waitress</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('manage_wait') }}" class="nav-link">
                  <i class="far fa-edit nav-icon"></i>
                  <p>Manage Waitress</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- Waitress End -->

          <!-- Food Menu -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-utensils"></i>
              <p>
                Food Menu
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('show_food_table') }}" class="nav-link active">
                  <i class="fas fa-plus-circle"></i>
                  <p>Add Food Menu</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('manage_food') }}" class="nav-link">
                  <i class="far fa-edit nav-icon"></i>
                  <p>Manage Food Menu</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- Food Menu End -->

          <!-- Delivery -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-user-check"></i>
              <p>
                Delivery
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('list_delivery') }}" class="nav-link">
                <i class="far fa-edit nav-icon"></i>
                <p>Manage Delivery</p>
              </a>
            </li>
          </ul>
          </li>
          <!-- Delivery End -->

          <!-- Delivery -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fa fa-bars"></i>
              <p>
                Order
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('show_order') }}" class="nav-link">
                <i class="far fa-edit nav-icon"></i>
                <p>Manage Order</p>
              </a>
            </li>
          </ul>
          </li>
          <!-- Delivery End -->

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
