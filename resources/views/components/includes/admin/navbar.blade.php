<nav class="app-header navbar navbar-expand ">
    <!--begin::Container-->
    <div class="container-fluid">
        <!--begin::Start Navbar Links-->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-lte-toggle="sidebar" href="#" role="button">
                    <i class="fa-solid fa-bars"></i>
                </a>
            </li>
        </ul>
        <!--end::Start Navbar Links-->

        <!--begin::End Navbar Links-->
        <ul class="navbar-nav ms-auto">

            <!--begin::User Menu Dropdown-->
            <li class="nav-item dropdown user-menu">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                    <img src="{{asset('storage/avatar/user.png')}}" class="user-image rounded-circle shadow" alt="User Image">
                    <span class="d-none d-md-inline text-white">Verxxy.ya</span>
                </a>
                <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                    <!--begin::User Image-->
                    <li class="user-header text-bg-primary bg-white">
                        <img src="{{asset('storage/avatar/user.png')}}" class="rounded-circle" alt="User Image">

                        <p class="text-black">
                            Verxxy.ya
                            <small>Super Admin</small>
                            <small>Fullstack Developer</small>
                            <small>Join in July 2024</small>
                        </p>
                    </li>
                    <!--end::User Image-->
                    <!--begin::Menu Footer-->
                    <li class="user-footer d-flex">
                        <a href="#" class="btn btn-default btn-flat mx-auto"
                            style="background-color: #00A3FF; color: white;">Sign out</a>
                    </li>
                    <!--end::Menu Footer-->
                </ul>
            </li>
            <!--end::User Menu Dropdown-->
        </ul>
        <!--end::End Navbar Links-->
    </div>
    <!--end::Container-->
</nav>
