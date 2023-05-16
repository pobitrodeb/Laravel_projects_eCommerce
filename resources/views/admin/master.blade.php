<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ asset('/') }}admin/assets/images/favicon-32x32.png" type="image/png" />
    <!--plugins-->
    <link href="{{ asset('/') }}admin/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <link href="{{ asset('/') }}admin/assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <link href="{{ asset('/') }}admin/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
    <link href="{{ asset('/') }}admin/assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
    <!-- Bootstrap CSS -->
    <link href="{{ asset('/') }}admin/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="{{ asset('/') }}admin/assets/css/bootstrap-extended.css" rel="stylesheet" />
    <link href="{{ asset('/') }}admin/assets/css/style.css" rel="stylesheet" />
    <link href="{{ asset('/') }}admin/assets/css/icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">


    <!-- loader-->
    <link href="{{ asset('/') }}admin/assets/css/pace.min.css" rel="stylesheet" />

    <!--Theme Styles-->
    <link href="{{ asset('/') }}admin/assets/css/dark-theme.css" rel="stylesheet" />
    <link href="{{ asset('/') }}admin/assets/css/light-theme.css" rel="stylesheet" />
    <link href="{{ asset('/') }}admin/assets/css/semi-dark.css" rel="stylesheet" />
    <link href="{{ asset('/') }}admin/assets/css/header-colors.css" rel="stylesheet" />
    <!-- Onedash -  -->
    @yield('css')
    <title>keyapBazar | @yield('title') </title>
</head>

<body>

    <!--start wrapper-->
    <div class="wrapper">
        @yield('header-top')

        <!--start sidebar -->
        <aside class="sidebar-wrapper" data-simplebar="true">
            <div class="sidebar-header">
                <div>
                    <img src="{{ asset('/') }}admin/assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
                </div>
                <div>
                    <h4 class="logo-text">POBITRO</h4>
                </div>
                <div class="toggle-icon ms-auto"> <i class="bi bi-list"></i>
                </div>
            </div>
            <!--navigation-->
            <ul class="metismenu" id="menu">
                <li>
                    <a href="javascript:;" class="has-arrow">
                        <div class="parent-icon"><i class="bi bi-house-fill"></i>
                        </div>
                        <div class="menu-title">Dashboard</div>
                    </a>
                    <ul>
                        <li> <a href="index.html"><i class="bi bi-circle"></i>Blue Dashboard</a>
                        </li>
                        <li> <a href="index2.html"><i class="bi bi-circle"></i>Color Dashboard</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="has-arrow">
                        <div class="parent-icon"><i class="bi bi-grid-fill"></i>
                        </div>
                        <div class="menu-title">Application</div>
                    </a>
                    <ul>
                        <li> <a href="app-emailbox.html"><i class="bi bi-circle"></i>Email</a>
                        </li>
                        <li> <a href="app-chat-box.html"><i class="bi bi-circle"></i>Chat Box</a>
                        </li>
                        <li> <a href="app-file-manager.html"><i class="bi bi-circle"></i>File Manager</a>
                        </li>
                        <li> <a href="app-to-do.html"><i class="bi bi-circle"></i>Todo List</a>
                        </li>
                        <li> <a href="app-invoice.html"><i class="bi bi-circle"></i>Invoice</a>
                        </li>
                        <li> <a href="app-fullcalender.html"><i class="bi bi-circle"></i>Calendar</a>
                        </li>
                    </ul>
                </li>
                <li class="menu-label">UI Elements</li>
                <li>
                    <a href="javascript:;" class="has-arrow">
                        <div class="parent-icon"><i class="bi bi-droplet-fill"></i>
                        </div>
                        <div class="menu-title">Widgets</div>
                    </a>
                    <ul>
                        <li> <a href="widgets-static-widgets.html"><i class="bi bi-circle"></i>Static Widgets</a>
                        </li>
                        <li> <a href="widgets-data-widgets.html"><i class="bi bi-circle"></i>Data Widgets</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="has-arrow">
                        <div class="parent-icon"><i class="bi bi-basket2-fill"></i>
                        </div>
                        <div class="menu-title">eCommerce</div>
                    </a>
                    <ul>
                        <li> <a href="ecommerce-products-list.html"><i class="bi bi-circle"></i>Products List</a>
                        </li>
                        <li> <a href="ecommerce-products-grid.html"><i class="bi bi-circle"></i>Products Grid</a>
                        </li>
                        <li> <a href="ecommerce-products-categories.html"><i class="bi bi-circle"></i>Categories</a>
                        </li>
                        <li> <a href="ecommerce-orders.html"><i class="bi bi-circle"></i>Orders</a>
                        </li>
                        <li> <a href="ecommerce-orders-detail.html"><i class="bi bi-circle"></i>Order details</a>
                        </li>
                        <li> <a href="ecommerce-add-new-product.html"><i class="bi bi-circle"></i>Add New Product</a>
                        </li>
                        <li> <a href="ecommerce-add-new-product-2.html"><i class="bi bi-circle"></i>Add New Product
                                2</a>
                        </li>
                        <li> <a href="ecommerce-transactions.html"><i class="bi bi-circle"></i>Transactions</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="has-arrow" href="javascript:;">
                        <div class="parent-icon"><i class="bi bi-award-fill"></i>
                        </div>
                        <div class="menu-title">Components</div>
                    </a>
                    <ul>
                        <li> <a href="component-alerts.html"><i class="bi bi-circle"></i>Alerts</a>
                        </li>
                        <li> <a href="component-accordions.html"><i class="bi bi-circle"></i>Accordions</a>
                        </li>
                        <li> <a href="component-badges.html"><i class="bi bi-circle"></i>Badges</a>
                        </li>
                        <li> <a href="component-buttons.html"><i class="bi bi-circle"></i>Buttons</a>
                        </li>
                        <li> <a href="component-cards.html"><i class="bi bi-circle"></i>Cards</a>
                        </li>
                        <li> <a href="component-carousels.html"><i class="bi bi-circle"></i>Carousels</a>
                        </li>
                        <li> <a href="component-list-groups.html"><i class="bi bi-circle"></i>List Groups</a>
                        </li>
                        <li> <a href="component-media-object.html"><i class="bi bi-circle"></i>Media Objects</a>
                        </li>
                        <li> <a href="component-modals.html"><i class="bi bi-circle"></i>Modals</a>
                        </li>
                        <li> <a href="component-navs-tabs.html"><i class="bi bi-circle"></i>Navs & Tabs</a>
                        </li>
                        <li> <a href="component-navbar.html"><i class="bi bi-circle"></i>Navbar</a>
                        </li>
                        <li> <a href="component-paginations.html"><i class="bi bi-circle"></i>Pagination</a>
                        </li>
                        <li> <a href="component-popovers-tooltips.html"><i class="bi bi-circle"></i>Popovers &
                                Tooltips</a>
                        </li>
                        <li> <a href="component-progress-bars.html"><i class="bi bi-circle"></i>Progress</a>
                        </li>
                        <li> <a href="component-spinners.html"><i class="bi bi-circle"></i>Spinners</a>
                        </li>
                        <li> <a href="component-notifications.html"><i class="bi bi-circle"></i>Notifications</a>
                        </li>
                        <li> <a href="component-avtars-chips.html"><i class="bi bi-circle"></i>Avatrs & Chips</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="has-arrow" href="javascript:;">
                        <div class="parent-icon"><i class="bi bi-cloud-arrow-down-fill"></i>
                        </div>
                        <div class="menu-title">Icons</div>
                    </a>
                    <ul>
                        <li> <a href="icons-line-icons.html"><i class="bi bi-circle"></i>Line Icons</a>
                        </li>
                        <li> <a href="icons-boxicons.html"><i class="bi bi-circle"></i>Boxicons</a>
                        </li>
                        <li> <a href="icons-feather-icons.html"><i class="bi bi-circle"></i>Feather Icons</a>
                        </li>
                    </ul>
                </li>
                <li class="menu-label">Forms & Tables</li>
                <li>
                    <a class="has-arrow" href="javascript:;">
                        <div class="parent-icon"><i class="bi bi-file-earmark-break-fill"></i>
                        </div>
                        <div class="menu-title">Forms</div>
                    </a>
                    <ul>
                        <li> <a href="form-elements.html"><i class="bi bi-circle"></i>Form Elements</a>
                        </li>
                        <li> <a href="form-input-group.html"><i class="bi bi-circle"></i>Input Groups</a>
                        </li>
                        <li> <a href="form-layouts.html"><i class="bi bi-circle"></i>Forms Layouts</a>
                        </li>
                        <li> <a href="form-validations.html"><i class="bi bi-circle"></i>Form Validation</a>
                        </li>
                        <li> <a href="form-wizard.html"><i class="bi bi-circle"></i>Form Wizard</a>
                        </li>
                        <li> <a href="form-date-time-pickes.html"><i class="bi bi-circle"></i>Date Pickers</a>
                        </li>
                        <li> <a href="form-select2.html"><i class="bi bi-circle"></i>Select2</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="has-arrow" href="javascript:;">
                        <div class="parent-icon"><i class="bi bi-file-earmark-spreadsheet-fill"></i>
                        </div>
                        <div class="menu-title">Tables</div>
                    </a>
                    <ul>
                        <li> <a href="table-basic-table.html"><i class="bi bi-circle"></i>Basic Table</a>
                        </li>
                        <li> <a href="table-advance-tables.html"><i class="bi bi-circle"></i>Advance Tables</a>
                        </li>
                        <li> <a href="table-datatable.html"><i class="bi bi-circle"></i>Data Table</a>
                        </li>
                    </ul>
                </li>
                <li class="menu-label">Pages</li>
                <li>
                    <a class="has-arrow" href="javascript:;">
                        <div class="parent-icon"><i class="bi bi-lock-fill"></i>
                        </div>
                        <div class="menu-title">Authentication</div>
                    </a>
                    <ul>
                        <li> <a href="" target="_blank"><i class="bi bi-circle"></i>Sign In</a>
                        </li>
                        <li> <a href="" target="_blank"><i class="bi bi-circle"></i>Sign Up</a>
                        </li>
                        <li> <a href="" target="_blank"><i class="bi bi-circle"></i>Sign In with Header &
                                Footer</a>
                        </li>
                        <li> <a href="" target="_blank"><i class="bi bi-circle"></i>Sign Up with Header &
                                Footer</a>
                        </li>
                        <li> <a href="" target="_blank"><i class="bi bi-circle"></i>Forgot Password</a>
                        </li>
                        <li> <a href="" target="_blank"><i class="bi bi-circle"></i>Reset Password</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="pages-user-profile.html">
                        <div class="parent-icon"><i class="bi bi-person-lines-fill"></i>
                        </div>
                        <div class="menu-title">User Profile</div>
                    </a>
                </li>
                <li>
                    <a href="pages-timeline.html">
                        <div class="parent-icon"><i class="bi bi-collection-play-fill"></i>
                        </div>
                        <div class="menu-title">Timeline</div>
                    </a>
                </li>
                <li>
                    <a class="has-arrow" href="javascript:;">
                        <div class="parent-icon"><i class="bi bi-exclamation-triangle-fill"></i>
                        </div>
                        <div class="menu-title">Errors</div>
                    </a>
                    <ul>
                        <li> <a href="" target="_blank"><i class="bi bi-circle"></i>404 Error</a>
                        </li>
                        <li> <a href="pages-errors-500-error.html" target="_blank"><i class="bi bi-circle"></i>500
                                Error</a>
                        </li>
                        <li> <a href="pages-errors-coming-soon.html" target="_blank"><i
                                    class="bi bi-circle"></i>Coming Soon</a>
                        </li>
                        <li> <a href="pages-blank-page.html" target="_blank"><i class="bi bi-circle"></i>Blank
                                Page</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="pages-faq.html">
                        <div class="parent-icon"><i class="bi bi-question-lg"></i>
                        </div>
                        <div class="menu-title">FAQ</div>
                    </a>
                </li>
                <li>
                    <a href="pages-pricing-tables.html">
                        <div class="parent-icon"><i class="bi bi-tags-fill"></i>
                        </div>
                        <div class="menu-title">Pricing Tables</div>
                    </a>
                </li>
                <li class="menu-label">Charts & Maps</li>
                <li>
                    <a class="has-arrow" href="javascript:;">
                        <div class="parent-icon"><i class="bi bi-bar-chart-line-fill"></i>
                        </div>
                        <div class="menu-title">Charts</div>
                    </a>
                    <ul>
                        <li> <a href="charts-apex-chart.html"><i class="bi bi-circle"></i>Apex</a>
                        </li>
                        <li> <a href="charts-chartjs.html"><i class="bi bi-circle"></i>Chartjs</a>
                        </li>
                        <li> <a href="charts-highcharts.html"><i class="bi bi-circle"></i>Highcharts</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="has-arrow" href="javascript:;">
                        <div class="parent-icon"><i class="bi bi-pin-map-fill"></i>
                        </div>
                        <div class="menu-title">Maps</div>
                    </a>
                    <ul>
                        <li> <a href="map-google-maps.html"><i class="bi bi-circle"></i>Google Maps</a>
                        </li>
                        <li> <a href="map-vector-maps.html"><i class="bi bi-circle"></i>Vector Maps</a>
                        </li>
                    </ul>
                </li>
                <li class="menu-label">Others</li>
                <li>
                    <a class="has-arrow" href="javascript:;">
                        <div class="parent-icon"><i class="bi bi-music-note-list"></i>
                        </div>
                        <div class="menu-title">Menu Levels</div>
                    </a>
                    <ul>
                        <li> <a class="has-arrow" href="javascript:;"><i class="bi bi-circle"></i>Level One</a>
                            <ul>
                                <li> <a class="has-arrow" href="javascript:;"><i class="bi bi-circle"></i>Level
                                        Two</a>
                                    <ul>
                                        <li> <a href="javascript:;"><i class="bi bi-circle"></i>Level Three</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="https://codervent.com/skodash/documentation/index.html" target="_blank">
                        <div class="parent-icon"><i class="bi bi-file-code-fill"></i>
                        </div>
                        <div class="menu-title">Documentation</div>
                    </a>
                </li>
                <li>
                    <a href="https://themeforest.net/user/codervent" target="_blank">
                        <div class="parent-icon"><i class="bi bi-telephone-fill"></i>
                        </div>
                        <div class="menu-title">Support</div>
                    </a>
                </li>
            </ul>
            <!--end navigation-->
        </aside>
        <!--end sidebar -->

        @yield('main-content')

        <!--start overlay-->
        <div class="overlay nav-toggle-icon"></div>
        <!--end overlay-->

        <!--Start Back To Top Button-->
        <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
        <!--End Back To Top Button-->

        <!--start switcher-->
        <div class="switcher-body">
            <button class="btn btn-primary btn-switcher shadow-sm" type="button" data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"><i
                    class="bi bi-paint-bucket me-0"></i></button>
            <div class="offcanvas offcanvas-end shadow border-start-0 p-2" data-bs-scroll="true"
                data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling">
                <div class="offcanvas-header border-bottom">
                    <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Theme Customizer</h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
                </div>
                <div class="offcanvas-body">
                    <h6 class="mb-0">Theme Variation</h6>
                    <hr>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="LightTheme"
                            value="option1" checked>
                        <label class="form-check-label" for="LightTheme">Light</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="DarkTheme"
                            value="option2">
                        <label class="form-check-label" for="DarkTheme">Dark</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="SemiDarkTheme"
                            value="option3">
                        <label class="form-check-label" for="SemiDarkTheme">Semi Dark</label>
                    </div>
                    <hr>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="MinimalTheme"
                            value="option3">
                        <label class="form-check-label" for="MinimalTheme">Minimal Theme</label>
                    </div>
                    <hr />
                    <h6 class="mb-0">Header Colors</h6>
                    <hr />
                    <div class="header-colors-indigators">
                        <div class="row row-cols-auto g-3">
                            <div class="col">
                                <div class="indigator headercolor1" id="headercolor1"></div>
                            </div>
                            <div class="col">
                                <div class="indigator headercolor2" id="headercolor2"></div>
                            </div>
                            <div class="col">
                                <div class="indigator headercolor3" id="headercolor3"></div>
                            </div>
                            <div class="col">
                                <div class="indigator headercolor4" id="headercolor4"></div>
                            </div>
                            <div class="col">
                                <div class="indigator headercolor5" id="headercolor5"></div>
                            </div>
                            <div class="col">
                                <div class="indigator headercolor6" id="headercolor6"></div>
                            </div>
                            <div class="col">
                                <div class="indigator headercolor7" id="headercolor7"></div>
                            </div>
                            <div class="col">
                                <div class="indigator headercolor8" id="headercolor8"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end switcher-->
    </div>
    <!--end wrapper-->

    <!-- Bootstrap bundle JS -->
    <script src="{{ asset('/') }}admin/assets/js/bootstrap.bundle.min.js"></script>
    <!--plugins-->
    <script src="{{ asset('/') }}admin/assets/js/jquery.min.js"></script>
    <script src="{{ asset('/') }}admin/assets/plugins/simplebar/js/simplebar.min.js"></script>
    <script src="{{ asset('/') }}admin/assets/plugins/metismenu/js/metisMenu.min.js"></script>
    <script src="{{ asset('/') }}admin/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
    <script src="{{ asset('/') }}admin/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="{{ asset('/') }}admin/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="{{ asset('/') }}admin/assets/js/pace.min.js"></script>
    <script src="{{ asset('/') }}admin/assets/plugins/chartjs/js/Chart.min.js"></script>
    <script src="{{ asset('/') }}admin/assets/plugins/chartjs/js/Chart.extension.js"></script>
    <script src="{{ asset('/') }}admin/assets/plugins/apexcharts-bundle/js/apexcharts.min.js"></script>
    <!--app-->
    <script src="{{ asset('/') }}admin/assets/js/app.js"></script>
    <script src="{{ asset('/') }}admin/assets/js/index.js"></script>
    <script>
        new PerfectScrollbar(".best-product")
    </script>
    @yield('script')
</body>

</html>
