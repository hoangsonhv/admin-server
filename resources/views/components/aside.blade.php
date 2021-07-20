<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{url("admin/home")}}" class="brand-link">
        <img src="{{asset("dist/img/AdminLTELogo.png")}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset("dist/img/user2-160x160.jpg")}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Alexander Pierce</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{url("admin/products")}}" class="nav-link">
                        <i class="nav-icon far fa-circle text-danger"></i>
                        <p class="text">Product</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url("admin/categories")}}" class="nav-link">
                        <i class="nav-icon far fa-circle text-warning"></i>
                        <p>Category</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url("admin/users")}}" class="nav-link">
                        <i class="nav-icon far fa-circle text-info"></i>
                        <p>User</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url("admin/logout")}}" class="nav-link">
                        <i class="nav-icon far fa-circle text-info"></i>
                        <p>Logout</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
