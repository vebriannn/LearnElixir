<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>LearnElixir</title>
    <!--begin::Primary Meta Tags-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="AdminLTE 4 | Widgets - Small Box">
    <meta name="author" content="ColorlibHQ">
    <meta name="description"
        content="AdminLTE is a Free Bootstrap 5 Admin Dashboard, 30 example pages using Vanilla JS.">
    <meta name="keywords"
        content="bootstrap 5, bootstrap, bootstrap 5 admin dashboard, bootstrap 5 dashboard, bootstrap 5 charts, bootstrap 5 calendar, bootstrap 5 datepicker, bootstrap 5 tables, bootstrap 5 datatable, vanilla js datatable, colorlibhq, colorlibhq dashboard, colorlibhq admin dashboard">
    <!--end::Primary Meta Tags-->
    <!--begin::Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <!--end::Fonts-->
    <!--begin::Third Party Plugin(OverlayScrollbars)-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.1.0/styles/overlayscrollbars.min.css"
        integrity="sha256-LWLZPJ7X1jJLI5OG5695qDemW1qQ7lNdbTfQ64ylbUY=" crossorigin="anonymous">
    <!--end::Third Party Plugin(OverlayScrollbars)-->
    <!--begin::Third Party Plugin(Font Awesome)-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.3.0/css/all.min.css"
        integrity="sha256-/4UQcSmErDzPCMAiuOiWPVVsNN2s3ZY/NsmXNcj0IFc=" crossorigin="anonymous">
    <!--end::Third Party Plugin(Font Awesome)-->
    <!--begin::Required Plugin(AdminLTE)-->
    <link rel="stylesheet" href="{{asset('adminlte/css/adminlte.css')}}">
    <link rel="stylesheet" href="{{asset('learnelixir/assets/css/superadmin&mentor.css')}}">
    <!--end::Required Plugin(AdminLTE)-->
    
</head>
<!--end::Head-->
<!--begin::Body-->

<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
    <!--begin::App Wrapper-->
    <div class="app-wrapper">
        <!--begin::Header-->
        <nav class="app-header navbar navbar-expand bg-body">
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
                    <!--begin::Navbar Search-->
                    <li class="nav-item my-auto me-4">
                        <form action="">
                            <div class="search">
                                <i class="fa-solid fa-search"></i>
                                <input class="search-input" type="search" placeholder="search">
                            </div>
                        </form>

                    </li>
                    <!--end::Navbar Search-->

                    <!--begin::User Menu Dropdown-->
                    <li class="nav-item dropdown user-menu">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img src="./assets/image/profile.png" class="user-image rounded-circle shadow" alt="User Image">
                            <span class="d-none d-md-inline text-white">Verxxy.ya</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                            <!--begin::User Image-->
                            <li class="user-header text-bg-primary bg-white">
                                <img src="./assets/image/profile.png" class="rounded-circle"
                                    alt="User Image">

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
                                <a href="#" class="btn btn-default btn-flat mx-auto" style="background-color: #00A3FF; color: white;">Sign out</a>
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
        <!--end::Header-->
        <!--begin::Sidebar-->
        <aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
            <!--begin::Sidebar Brand-->
            <div class="sidebar-brand">
                <!--begin::Brand Link-->
                <a href="../../index.html" class="brand-link">
                    <!--begin::Brand Text-->
                    <p class="brand-text fw-bold text-center">Learn<span>Elixir</span></p>
                    <!--end::Brand Text-->
                </a>
                <!--end::Brand Link-->
            </div>
            <!--end::Sidebar Brand-->
            <!--begin::Sidebar Wrapper-->
            <div class="sidebar-wrapper">
                <nav class="mt-2">
                    <!--begin::Sidebar Menu-->
                    <ul class="nav sidebar-menu flex-column " data-lte-toggle="treeview" role="menu"
                        data-accordion="false">
                        <li class="nav-item mx-auto dashboard menu-open">
                            <a href="javascript:;" class="nav-link d-flex fw-bold" style="width: 100%;">
                                <p class="mx-auto">
                                    Dashboard
                                </p>
                                <i class="fa-solid fa-chevron-down justify-content-between my-auto "></i>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item" >
                                    <a href="datamember.html" class="nav-link active dropdown-dashboard-active d-flex">
                                        <p class="mx-auto">Data Member</p>
                                    </a>
                                    <a href="datamentor.html" class="nav-link active dropdown-dashboard d-flex">
                                        <p class="mx-auto">Data Mentor</p>
                                    </a>
                                    <a href="datasuperadmin.html" class="nav-link active dropdown-dashboard d-flex">
                                        <p class="mx-auto"> Data Super Admin</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item  mx-auto dashboard mt-2">
                            <a href="javascript:;" class="nav-link d-flex fw-bold mb-0" style="width: 100%;">
                                <p class="mx-auto">
                                    Learn
                                </p>
                                <i class="fa-solid fa-chevron-down justify-content-between my-auto "></i>
                            </a>
                            <ul class="nav nav-treeview" aria-expanded="true">
                                <li class="nav-item" >
                                    <a href="course_superadmin.html" class="nav-link active dropdown-dashboard d-flex">
                                        <p class="mx-auto">Course</p>
                                    </a>
                                    <a href="lesson.html" class="nav-link active dropdown-dashboard d-flex">
                                        <p class="mx-auto">Lesson</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item mt-2">
                            <a href="category.html" class="nav-link active costum-white d-flex">
                                <p class="mx-auto">
                                    Category
                                </p>
                            </a>
                        </li>

                    </ul>
                    <!--end::Sidebar Menu-->
                </nav>
            </div>
            <!--end::Sidebar Wrapper-->
        </aside>
        <!--end::Sidebar-->
        <!--begin::App Main-->
        <main class="app-main">
            <!--begin::App Content Header-->
            <div class="app-content-header">
                <!--begin::Container-->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-end">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Data Member
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!--end::Container-->
            </div>
            <!--end::App Content Header-->
            <!--begin::App Content-->
            <div class="app-content">
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- DataTales Example -->
                    <div class="card shadow-card  mb-4">
                        <div class="card-header py-3 d-flex">
                            <h5 class="m-0 fw-bold"> Data Member</h5>
                            <button type="button" class="btn btn-primary btn-md position-relative d-block ms-auto me-0" style="background-color: #00A3FF; border: none;" data-bs-toggle="modal" data-bs-target="#addCourseModal">Create Member</button>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-responsive" id="dataTable">
                                    <thead>
                                        <tr>
                                            <th scope="col" style="width: 40%;">Name</th>
                                            <th scope="col" style="width: 30%;">Email</th>
                                            <th scope="col">Password</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Member Tercinta</td>
                                            <td>member@gmail.com</td>
                                            <td>sajs712sad9</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
    </div>
    <!--end::App Content-->
    </main>
    <!--end::App Main-->
    <footer class="app-footer d-flex">
        <!--begin::Copyright-->
        <strong class="mx-auto">
            Copyright &copy; 2024
            <a href="">Learn<span>Elixir</span></a>
            All rights reserved.
        </strong>
        <!--end::Copyright-->
    </footer>
    <!--end::Footer-->
    </div>
    </div>
    <!--end::App Wrapper-->
    <!--begin::Script-->
    <!--begin::Third Party Plugin(OverlayScrollbars)-->
    <script src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.1.0/browser/overlayscrollbars.browser.es6.min.js"
        integrity="sha256-NRZchBuHZWSXldqrtAOeCZpucH/1n1ToJ3C8mSK95NU=" crossorigin="anonymous"></script>
    <!--end::Third Party Plugin(OverlayScrollbars)--><!--begin::Required Plugin(popperjs for Bootstrap 5)-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"
        integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE"
        crossorigin="anonymous"></script>
    <!--end::Required Plugin(popperjs for Bootstrap 5)--><!--begin::Required Plugin(Bootstrap 5)-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"
        integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ"
        crossorigin="anonymous"></script>
    <!--end::Required Plugin(Bootstrap 5)--><!--begin::Required Plugin(AdminLTE)-->
    <script src="{{asset('adminlte/js/adminlte.js')}}"></script>
    <!--end::Required Plugin(AdminLTE)--><!--begin::OverlayScrollbars Configure-->
    <script>
        const SELECTOR_SIDEBAR_WRAPPER = ".sidebar-wrapper";
        const Default = {
            scrollbarTheme: "os-theme-light",
            scrollbarAutoHide: "leave",
            scrollbarClickScroll: true,
        };

        document.addEventListener("DOMContentLoaded", function () {
            const sidebarWrapper = document.querySelector(SELECTOR_SIDEBAR_WRAPPER);
            if (
                sidebarWrapper &&
                typeof OverlayScrollbarsGlobal?.OverlayScrollbars !== "undefined"
            ) {
                OverlayScrollbarsGlobal.OverlayScrollbars(sidebarWrapper, {
                    scrollbars: {
                        theme: Default.scrollbarTheme,
                        autoHide: Default.scrollbarAutoHide,
                        clickScroll: Default.scrollbarClickScroll,
                    },
                });
            }
        });
    </script>
    <!--end::OverlayScrollbars Configure-->
    <!--end::Script-->
</body><!--end::Body-->

</html>