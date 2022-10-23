<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link {{Request::is('dashboard') ? 'active' :''}}" aria-current="page" href="{{url('dashboard')}}">
              <span data-feather="home" class="align-text-bottom"></span>
              Dashboard
            </a>
          </li>
          <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
          <span>Blog</span>
          </a>
        </h6>

          <li class="nav-item">
            <a class="nav-link {{Request::is('berita-dashboard') ? 'active' :''}}" href="{{url('berita-dashboard')}}">
              <span data-feather="archive" class="align-text-bottom"></span>
              Berita
            </a>
          </li>

          <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
          <span>Wilayah</span>
          </a>
        </h6>
        <li class="nav-item">
            <a class="nav-link {{Request::is('provinsi-dashboard') ? 'active' :''}}" href="{{url('provinsi-dashboard')}}">
              <span data-feather="list" class="align-text-bottom"></span>
              Provinsi
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{Request::is('kota-dashboard') ? 'active' :''}}" href="{{url('kota-dashboard')}}">
              <span data-feather="list" class="align-text-bottom"></span>
              Kota
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{Request::is('kecamatan-dashboard') ? 'active' :''}}" href="{{url('kecamatan-dashboard')}}">
              <span data-feather="list" class="align-text-bottom"></span>
              Kecamatan
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{Request::is('daerah-dashboard') ? 'active' :''}}" href="{{url('daerah-dashboard')}}">
              <span data-feather="list" class="align-text-bottom"></span>
              Daerah
            </a>
          </li>
          <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
          <span>Kategori</span>
          </a>
        </h6>
        <li class="nav-item">
            <a class="nav-link {{Request::is('tipe-dashboard') ? 'active' :''}}" href="{{url('tipe-dashboard')}}">
              <span data-feather="list" class="align-text-bottom"></span>
              Tipe
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{Request::is('gender-dashboard') ? 'active' :''}}" href="{{url('gender-dashboard')}}">
              <span data-feather="list" class="align-text-bottom"></span>
              Gender
            </a>
          </li>
          <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
          <span>Item</span>
          </a>
        </h6>
        <li class="nav-item">
            <a class="nav-link {{Str::startsWith(request()->path(),'produk-dashboard') ? 'active' :''}}" href="{{url('produk-dashboard')}}">
              <span data-feather="list" class="align-text-bottom"></span>
              Produk
            </a>
          </li>
          <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
          <span>User</span>
          </a>
        </h6>
        <li class="nav-item">
            <a class="nav-link {{Request::is('user-dashboard') ? 'active' :''}}" href="{{url('user-dashboard')}}">
              <span data-feather="user" class="align-text-bottom"></span>
              Pengguna
            </a>
          </li>
        </ul>
      </div>
    </nav>