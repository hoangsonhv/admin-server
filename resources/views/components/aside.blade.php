<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{url("admin/home")}}" class="brand-link">
        <img src="{{asset("dist/img/AdminLTELogo.png")}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Admin Shop Runner</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
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
                        <i class="nav-icon far fa-circle text-fuchsia"></i>
                        <p>User</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url("admin/comments")}}" class="nav-link">
                        <i class="nav-icon far fa-circle text-nowrap"></i>
                        <p>Comment</p>
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
