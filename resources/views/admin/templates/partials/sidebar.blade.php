<div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('assets/dist/img/kv.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Moch Nurul Kafi</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{route('admin.author.index')}}" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Penulis
                <span class="right badge badge-success"></span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('admin.book.index')}}" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Buku
                <span class="right badge badge-success"></span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages/widgets.html" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Users
                <span class="right badge badge-success"></span>
              </p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
</div>