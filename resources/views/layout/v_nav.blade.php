  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="#" class="brand-link">
          <img src="{{ asset('gambar/logo_uang.png') }}" class="brand-image img-circle elevation-3" style="opacity: .8">
          <span class="brand-text font-weight-light">Aplikasi Iuran</span>
        </a>
    
        <!-- Sidebar -->
        <div class="sidebar">
          <!-- Sidebar user (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
              <img src="{{ asset('template') }}/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
              <a href="#" class="d-block">Admin</a>
            </div>
          </div>
    
          <!-- Sidebar Menu -->
          <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <!-- Add icons to the links using the .nav-icon class
                   with font-awesome or any other icon font library -->
              <li class="nav-item ">
                <a href="/" class="nav-link {{ request()->is('/') ? 'active' : '' }}">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    Dashboard
                  </p>
                </a>
              </li>
    
              <li class="nav-header">MASTER</li>
    
              <li class="nav-item ">
                <a href="/m_user" class="nav-link {{ request()->is('m_user') ? 'active' : '' }}">
                  <i class="nav-icon fas fa-user"></i>
                  <p>
                    Users
                  </p>
                </a>
              </li>
    
              <li class="nav-item">
                <a href="/m_tagihan" class="nav-link {{ request()->is('m_tagihan') ? 'active' : '' }}">
                  <i class="nav-icon fas fa-money-bill"></i>
                  <p>
                    Master Tagihan
                  </p>
                </a>
              </li>
    
              <li class="nav-header">INVOICE</li>
    
    
              <li class="nav-item">
                <a href="/tagihan" class="nav-link {{ request()->is('tagihan') ? 'active' : '' }}">
                  <i class="nav-icon fas fa-th"></i>
                  <p>
                    Tagihan
                  </p>
                </a>
              </li>
    
              <li class="nav-item">
                <a href="/pembayaran" class="nav-link {{ request()->is('pembayaran') ? 'active' : '' }}">
                  <i class="nav-icon fas fa-check"></i>
                  <p>
                    Approval Pembayaran
                    <span class="badge badge-info right">6</span>
                  </p>
                </a>
              </li>
    
              <li class="nav-item">
                <a href="/list_tagihan" class="nav-link {{ request()->is('list_tagihan') ? 'active' : '' }}">
                  <i class="nav-icon fas fa-table"></i>
                  <p>
                    List Data Tagihan
                  </p>
                </a>
              </li>
    
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-arrow-right"></i>
                  <p>
                    Log Out
                  </p>
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </aside>