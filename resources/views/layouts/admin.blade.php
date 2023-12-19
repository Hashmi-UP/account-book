<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- <meta charset="utf-8" />
        <title> | Hyper - Responsive Bootstrap 5 Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        App favicon
        <link rel="shortcut icon" href="assets/images/favicon.ico"> -->

        <meta charset="utf-8" />
                <title>Unikit - Admin & Dashboard Template</title>
                <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
                <meta content="" name="author" />
                <meta http-equiv="X-UA-Compatible" content="IE=edge" />

                <!-- App favicon -->
                <link rel="shortcut icon" href="assets/images/favicon.ico">



        <link href="assets/plugins/datatables/datatable.css" rel="stylesheet" type="text/css" />

         <!-- App css -->
         <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
         <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
         <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />

    </head>

    <body id="body" class="dark-sidebar">
        <!-- leftbar-tab-menu -->
        <div class="left-sidebar">
            <!-- LOGO -->
            <div class="brand">
                <a href="/dashboard" class="logo">
                    <span>
                        <img src="assets/images/logo-sm.png" alt="logo-small" class="logo-sm">
                    </span>
                    <span>
                        <img src="assets/images/logo.png" alt="logo-large" class="logo-lg logo-light">
                        <img src="assets/images/logo-dark.png" alt="logo-large" class="logo-lg logo-dark">
                    </span>
                </a>
            </div>
            <div class="sidebar-user-pro media border-end">
                <div class="position-relative mx-auto">
                    <img src="assets/images/users/user-4.jpg" alt="user" class="rounded-circle thumb-md">
                    <span class="online-icon position-absolute end-0"><i class="mdi mdi-record text-success"></i></span>
                </div>
                <div class="media-body ms-2 user-detail align-self-center">
                    <h5 class="font-14 m-0 fw-bold">{{ Auth::user()->name }} </h5>
                    <p class="opacity-50 mb-0">{{ Auth::user()->email }}</p>
                </div>
            </div>
            <div class="border-end">
                {{-- <ul class="nav nav-tabs menu-tab nav-justified" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#Main" role="tab" aria-selected="true">M<span>ain</span></a>
                    </li>

                </ul> --}}
            </div>
            <!-- Tab panes -->

            <!--end logo-->
            <div class="menu-content h-100" data-simplebar>
                <div class="menu-body navbar-vertical">
                    <div class="collapse navbar-collapse tab-content" id="sidebarCollapse">
                        <!-- Navigation -->
                        <ul class="navbar-nav tab-pane active" id="Main" role="tabpanel">
                            <a href="/dashboard"><li class="menu-label mt-0 text-primary font-12 fw-semibold">D<span>ashboard</span><br><span class="font-10 text-secondary fw-normal">Unique Dashboard</span></li></a>
                            <li class="nav-item">
                                <a class="nav-link" href="#sidebarAnalytics" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="sidebarAnalytics">
                                    <i class="ti ti-stack menu-icon"></i>
                                    <span>AED-PKR Menu</span>
                                </a>
                                <div class="collapse " id="sidebarAnalytics">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="/addnewrecord">AED Add Record</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a href="/aed_to_pkr" class="nav-link ">AED - PKR</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a href="analytics-reports.html" class="nav-link ">Reports</a>
                                        </li><!--end nav-item-->
                                    </ul><!--end nav-->
                                </div><!--end sidebarAnalytics-->
                            </li><!--end nav-item-->

                            <li class="nav-item">
                                <a class="nav-link" href="#sidebarCrypto" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="sidebarCrypto">
                                    <i class="ti ti-currency-bitcoin menu-icon"></i>
                                    <span>PKR-AED Menu</span>
                                </a>
                                <div class="collapse " id="sidebarCrypto">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="addpkrnewrecord">PKR Add Record </a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="/pkr_to_aed">PKR - AED</a>
                                        </li><!--end nav-item-->

                                    </ul><!--end nav-->
                                </div><!--end sidebarCrypto-->
                            </li><!--end nav-item-->

                            <li class="nav-item">
                                <a class="nav-link" href="#sidebarProjects" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="sidebarProjects">
                                    <i class="ti ti-brand-asana menu-icon"></i>
                                    <span>Credit Book</span>
                                </a>
                                <div class="collapse " id="sidebarProjects">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="/creditbook">AED Credit Details</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="/pkrcreditbook">PKR Credit Details</a>
                                        </li><!--end nav-item-->
                                        <li class="nav-item">
                                            <a class="nav-link" href="projects-team.html">Team</a>
                                        </li><!--end nav-item-->
                                    </ul><!--end nav-->
                                </div><!--end sidebarProjects-->
                            </li><!--end nav-item-->




                        </ul>

                    </div><!--end sidebarCollapse-->
                </div>
            </div>
        </div>
        <!-- end left-sidenav-->
        <!-- end leftbar-menu-->

        <!-- Top Bar Start -->
        <!-- Top Bar Start -->
        <div class="topbar">
            <!-- Navbar -->
            <nav class="navbar-custom" id="navbar-custom">
                <ul class="list-unstyled topbar-nav float-end mb-0">





                    <li class="dropdown">
                        <a class="nav-link dropdown-toggle nav-user" data-bs-toggle="dropdown" href="#" role="button"
                            aria-haspopup="false" aria-expanded="false">
                            <div class="d-flex align-items-center">
                                <img src="assets/images/users/user-4.jpg" alt="profile-user" class="rounded-circle me-2 thumb-sm" />
                                <div>
                                    <small class="d-none d-md-block font-11">admin</small>
                                    <span class="d-none d-md-block fw-semibold font-12">{{ Auth::user()->name }}<i
                                            class="mdi mdi-chevron-down"></i></span>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a class="dropdown-item" href="#"><i class="ti ti-user font-16 me-1 align-text-bottom"></i> Profile</a>
                            <a class="dropdown-item" href="#"><i class="ti ti-settings font-16 me-1 align-text-bottom"></i> Settings</a>
                            <div class="dropdown-divider mb-0"></div>
                            <form class="dropdown-item" method="POST" action="{{ route('logout') }}">
                                @csrf
                                <i class="ti ti-power font-16 me-1 align-text-bottom"></i>
                                <x-dropdown-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                            {{-- <a class="dropdown-item" href="/logout"><i class="ti ti-power font-16 me-1 align-text-bottom"></i> Logout</a> --}}
                        </div>
                    </li><!--end topbar-profile-->
                    <li class="notification-list">
                        <a class="nav-link arrow-none nav-icon offcanvas-btn" href="#" data-bs-toggle="offcanvas" data-bs-target="#Appearance" role="button" aria-controls="Rightbar">
                            <i class="ti ti-settings ti-spin"></i>
                        </a>
                    </li>
                </ul><!--end topbar-nav-->

                <ul class="list-unstyled topbar-nav mb-0">
                    <li>
                        <button class="nav-link button-menu-mobile nav-icon" id="togglemenu">
                            <i class="ti ti-menu-2"></i>
                        </button>
                    </li>
                    <li class="hide-phone app-search">
                        <form role="search" action="#" method="get">
                            <input type="search" name="search" class="form-control top-search mb-0" placeholder="Type text...">
                            <button type="submit"><i class="ti ti-search"></i></button>
                        </form>
                    </li>
                </ul>
            </nav>
            <!-- end navbar-->
        </div>
        <!-- Top Bar End -->
        <!-- Top Bar End -->


        @yield('content')



        <!--Start Footer-->
                <!-- Footer Start -->
                <footer class="footer text-center text-sm-start">
                    &copy; <script>
                        document.write(new Date().getFullYear())
                    </script> Unikit <span class="text-muted d-none d-sm-inline-block float-end">Crafted with <i
                            class="mdi mdi-heart text-danger"></i> by Mannatthemes</span>
                </footer>
                <!-- end Footer -->
                <!--end footer-->
            </div>
            <!-- end page content -->
        </div>
        <!-- end page-wrapper -->

        <!-- Javascript  -->

        <script src="assets/plugins/apexcharts/apexcharts.min.js"></script>
        <script src="assets/pages/analytics-index.init.js"></script>


         <!-- Javascript  -->
    <script src="assets/plugins/datatables/simple-datatables.js"></script>
    <script src="assets/pages/datatable.init.js"></script>
        <!-- App js -->
        <script src="assets/js/app.js"></script>

    </body>
    <!--end body-->
</html>
