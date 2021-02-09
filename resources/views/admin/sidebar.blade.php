
  <!-- Preloader -->
  <button type="button" class="btn navbar-toggle" data-toggle="collapse" data-target="#sidebar">
    <i class="fas fa-align-left"></i>
</button>
<aside class="main-sidebar sidebar-dark-primary elevation-4" id="sidebar">
<button type="button" class="btn btn-secondary navbar-toggle" data-toggle="collapse" data-target="#sidebar">
    <i class="fas fa-align-left"></i>
</button>
    <!-- Brand Logo -->
    <a href="{{route('index')}}" class="brand-link">
      <img src="../../public/dist/img/AdminLTELogo.png" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">FeelSteel</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
    <ul class="menu">


    </ul>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column"  data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

          <li class="nav-item">
            <a href="dashboard" class="nav-link ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Pocetna
              </p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Forme
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">

              <li class="nav-item">
                <a href="add-product" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dodaj novi proizvod</p>
                </a>
              </li>


              <li class="nav-item">
                <a href="add-user" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dodaj novog korisnika</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="add-category" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dodaj novu kategoriju</p>
                </a>
              </li>

            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Tabele
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="data" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Svi korisnici</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="product-table" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Svi proizvodi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="order-table" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sve narudzbine</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="category-table" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sve kategorije</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="calendar" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Calendar
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../logout">Logout</a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  