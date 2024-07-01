<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
    <!--begin::Sidebar Brand-->
    <div class="sidebar-brand">
        <!--begin::Brand Link-->
        <a href="../index.html" class="brand-link">
            <!--begin::Brand Image-->
            <img src="{{asset('adminlte/assets/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image opacity-75 shadow">
            <!--end::Brand Image-->
            <!--begin::Brand Text-->
            <span class="brand-text fw-light">AdminLTE 4</span>
            <!--end::Brand Text-->
        </a>
        <!--end::Brand Link-->
    </div>
    <!--end::Sidebar Brand-->
    
    <!--begin::Sidebar Wrapper-->
    <div class="sidebar-wrapper">
        <nav class="mt-2">
            <!--begin::Sidebar Menu-->
            <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
                <li class="nav-item {{ request()->is('admin') ? 'menu-open' : '' }}">
                    <a href="{{route('admin.dashboard')}}" class="nav-link {{ request()->is('admin') ? 'menu-open' : '' }}">
                        <i class="nav-icon fa-solid fa-gauge-high"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item {{ request()->is('admin/course') ? 'menu-open' : '' }}">
                    <a href="{{route('admin.course')}}" class="nav-link {{ request()->is('admin/course') ? 'menu-open' : '' }}">
                        <i class="nav-icon fa-solid fa-box-open"></i>
                        <p>
                            Course
                        </p>
                    </a>
                </li>
            </ul>
            <!--end::Sidebar Menu-->
        </nav>
    </div>
    <!--end::Sidebar Wrapper-->
</aside>