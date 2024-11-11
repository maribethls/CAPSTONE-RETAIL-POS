<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Retail | POS Dashboard</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset ('import/assets/images/favicon-osave.ico')  }}" />
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset ('import/assets/css/backend-plugin.min.css')  }}">
    <link rel="stylesheet" href="{{ asset ('import/assets/css/backend.css?v=1.0.0')  }}">
    <link rel="stylesheet" href="{{ asset ('import/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css')  }}">
    <link rel="stylesheet" href="{{ asset ('import/assets/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css')  }}">
    <link rel="stylesheet" href="{{ asset ('import/assets/vendor/remixicon/fonts/remixicon.css')  }}">
    <style>
        .page-title {
            font-size: 1.25rem;
            font-weight: 600;
            margin-left: 20px;
            transition: margin-left 0.3s ease;
        }

        .iq-sidebar-toggle .page-title {
            margin-left: 60px;
        }

        .svg-icon i {
            font-size: 1.5rem;
            transition: color 0.3s ease;
        }

        .svg-icon i:hover,
        .iq-menu .active .svg-icon i {
            color: orange;
        }

        /* Sticky footer styles */
        html,
        body {
            height: 100%;
            margin: 0;
        }

        .wrapper {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        .content-page {
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        .iq-footer {
            text-align: left;
            width: 100%;
            position: auto;
        }

        .iq-footer a {
            color: black;
            transition: color 0.3s ease;
        }

        .iq-footer a:hover {
            color: rgb(46, 158, 233);
        }

    </style>
</head>

<body class="">
    <!-- loader Start -->
    <div id="loading">
        <div id="loading-center"></div>
    </div>
    <!-- loader END -->
    <!-- Wrapper Start -->
    <div class="wrapper">

        <!-- Sidebar Start -->
        <div class="iq-sidebar sidebar-default">
            <div class="iq-sidebar-logo d-flex align-items-center justify-content-between">
                <a href="homepage" class="header-logo">
                    {{-- <img src="{{ asset ('import/assets/images/logo.png')  }}" class="img-fluid rounded-normal light-logo" alt="logo"> --}}
                    <h5 class="logo-title light-logo ml-2">POS</h5>
                </a>
                <div class="iq-menu-bt-sidebar ml-2">
                    <i class="las la-bars wrapper-menu"></i>
                </div>
            </div>
            <div class="data-scrollbar" data-scroll="1">
                <nav class="iq-sidebar-menu">
                    <ul id="iq-sidebar-toggle" class="iq-menu">
                        <li class="active">
                            <a href="homepage" class="svg-icon">
                                <i class="las la-home"></i>
                                <span class="ml-4">Dashboard</span>
                            </a>
                        </li>
                        {{-- <li>
                            <a href="validate-sales-data.html" class="svg-icon">
                                <i class="las la-check-circle"></i>
                                <span class="ml-4">Validate Sales Data</span>
                            </a>
                        </li> --}}
                        {{-- <li class="">
                            <a href="#orderManagement" class="collapsed" data-toggle="collapse" aria-expanded="false">
                                <svg class="svg-icon" id="s-dash" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                                    <line x1="8" y1="12" x2="16" y2="12"></line>
                                    <line x1="12" y1="8" x2="12" y2="16"></line>
                                </svg>
                                <span class="ml-4">Order Management</span>
                                <svg class="svg-icon iq-arrow-right arrow-active" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="10 15 15 20 20 15"></polyline>
                                    <path d="M4 4h7a4 4 0 0 1 4 4v12"></path>
                                </svg>
                            </a>
                            <ul id="orderManagement" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                                <li class="">
                                    <a href="order-management.html">
                                        <i class="las la-minus"></i><span>Main Page</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="order-view.html">
                                        <i class="las la-minus"></i><span>View Order</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="order-create.html">
                                        <i class="las la-minus"></i><span>Create Order</span>
                                    </a>
                                </li>
                            </ul>
                        </li> --}}
                        {{-- <li>
                            <a href="payment-processing.html" class="svg-icon">
                                <i class="las la-credit-card"></i>
                                <span class="ml-4">Payment Processing</span>
                            </a>
                        </li> --}}
                        {{-- <li class="">
                            <a href="#salesTracking" class="collapsed" data-toggle="collapse" aria-expanded="false">
                                <svg class="svg-icon" id="s-dash" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                                    <line x1="8" y1="12" x2="16" y2="12"></line>
                                    <line x1="12" y1="8" x2="12" y2="16"></line>
                                </svg>
                                <span class="ml-4">Sales Tracking</span>
                                <svg class="svg-icon iq-arrow-right arrow-active" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="10 15 15 20 20 15"></polyline>
                                    <path d="M4 4h7a4 4 0 0 1 4 4v12"></path>
                                </svg>
                            </a>
                            <ul id="salesTracking" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                                <li class="">
                                    <a href="sales-tracking.html">
                                        <i class="las la-minus"></i><span>Main Page</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="sales-data-filter.html">
                                        <i class="las la-minus"></i><span>Filter Sales Data</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="sales-data-view.html">
                                        <i class="las la-minus"></i><span>View Sales Data</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="sales-report.html">
                                        <i class="las la-minus"></i><span>Sales Report</span>
                                    </a>
                                </li>
                            </ul>
                        </li> --}}
                        <li>
                            <a href="item-master" class="svg-icon">
                                <i class="las la-book"></i>
                                <span class="ml-4">Item Master</span>
                            </a>
                        </li>
                        <li>
                            <a href="sales-module" class="svg-icon">
                                <i class="las la-cash-register"></i>
                                <span class="ml-4">Sales Module</span>
                            </a>
                        </li>
                        <li>
                            <a href="reporting-module" class="svg-icon">
                                <i class="las la-file-alt"></i>
                                <span class="ml-4">Reporting Module</span>
                            </a>
                        </li>
                        {{-- <li>
                            <a href="logistics-integration.html" class="svg-icon">
                                <i class="las la-box"></i>
                                <span class="ml-4">Logistics & Inventory</span>
                            </a>
                        </li> --}}
                        {{-- <li>
                            <a href="user-settings.html" class="svg-icon">
                                <i class="las la-user"></i>
                                <span class="ml-4">User Settings</span>
                            </a>
                        </li> --}}
                        {{-- <li>
                            <a href="auth-sign-in.html" class="svg-icon">
                                <i class="las la-sign-out-alt"></i>
                                <span class="ml-4">Logout</span>
                            </a>
                        </li> --}}
                    </ul>
                </nav>

                <div class="pt-5 pb-2"></div>
            </div>
        </div>
        <!-- Sidebar End -->

    <!-- Top Navbar Start -->
    <div class="iq-top-navbar">
        <div class="iq-navbar-custom">
            <nav class="navbar navbar-expand-lg navbar-light p-0">
                <div class="iq-navbar-logo d-flex align-items-center justify-content-between">
                    <a href="homepage" class="header-logo">
                        {{-- <img src="{{ asset ('import/assets/images/logo.png')  }}" class="img-fluid rounded-normal light-logo" alt="logo"> --}}
                        <h5 class="logo-title light-logo ml-2">POS</h5>
                    </a>
                    <div class="iq-menu-bt-sidebar ml-2">
                        <i class="las la-bars wrapper-menu"></i>
                    </div>
                </div>
                <div class="page-title d-none d-md-block">

                </div>
                <div class="d-flex align-items-center">
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-label="Toggle navigation">
                        <i class="ri-menu-3-line"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto navbar-list align-items-center">
                            <li class="nav-item">
                                <a href="sales-module" class="iq-waves-effect d-flex align-items-center bg-primary rounded" id="btn-new-sale">
                                    <i class="las la-cart-plus"></i>
                                    <span class="ml-2">New Sale</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="item-master" class="iq-waves-effect d-flex align-items-center bg-warning rounded" id="btn-restock">
                                    <i class="las la-box"></i>
                                    <span class="ml-2">Restock</span>
                                </a>
                            </li>
                            <li class="nav-item nav-icon dropdown">
                                <a href="#" class="search-toggle dropdown-toggle" id="dropdownMenuButton2"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="ri-mail-line"></i>
                                    <span class="bg-primary"></span>
                                </a>
                                <div class="iq-sub-dropdown dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                    <div class="card shadow-none m-0">
                                        <div class="card-body p-0">
                                            <div class="cust-title p-3">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <h5 class="mb-0">All Messages</h5>
                                                    <a class="badge badge-primary badge-card" href="#">3</a>
                                                </div>
                                            </div>
                                            <div class="px-3 pt-0 pb-0 sub-card">
                                                <a href="#" class="iq-sub-card">
                                                    <div class="media align-items-center cust-card py-3 border-bottom">
                                                        <div class="">
                                                            <img class="avatar-50 rounded-small"
                                                                src="{{ asset ('import/assets/images/user/01.jpg')  }}" alt="01">
                                                        </div>
                                                        <div class="media-body ml-3">
                                                            <div class="d-flex align-items-center justify-content-between">
                                                                <h6 class="mb-0">Emma Watson</h6>
                                                                <small class="text-dark"><b>12 : 47 pm</b></small>
                                                            </div>
                                                            <small class="mb-0">Lorem ipsum dolor sit amet</small>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="#" class="iq-sub-card">
                                                    <div class="media align-items-center cust-card py-3 border-bottom">
                                                        <div class="">
                                                            <img class="avatar-50 rounded-small"
                                                                src="{{ asset ('import/assets/images/user/02.jpg')  }}" alt="02">
                                                        </div>
                                                        <div class="media-body ml-3">
                                                            <div class="d-flex align-items-center justify-content-between">
                                                                <h6 class="mb-0">Ashlynn Franci</h6>
                                                                <small class="text-dark"><b>11 : 30 pm</b></small>
                                                            </div>
                                                            <small class="mb-0">Lorem ipsum dolor sit amet</small>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="#" class="iq-sub-card">
                                                    <div class="media align-items-center cust-card py-3 border-bottom">
                                                        <div class="">
                                                            <img class="avatar-50 rounded-small"
                                                                src="{{ asset ('import/assets/images/user/03.jpg')  }}" alt="03">
                                                        </div>
                                                        <div class="media-body ml-3">
                                                            <div class="d-flex align-items-center justify-content-between">
                                                                <h6 class="mb-0">Jessica Brown</h6>
                                                                <small class="text-dark"><b>10 : 05 pm</b></small>
                                                            </div>
                                                            <small class="mb-0">Lorem ipsum dolor sit amet</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item nav-icon dropdown">
                                <a href="#" class="search-toggle dropdown-toggle" id="dropdownMenuButton"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-bell">
                                        <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path>
                                        <path d="M13.73 21a2 2 0 0 1-3.46 0"></path>
                                    </svg>
                                    <span class="bg-primary "></span>
                                </a>
                                <div class="iq-sub-dropdown dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <div class="card shadow-none m-0">
                                        <div class="card-body p-0 ">
                                            <div class="cust-title p-3">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <h5 class="mb-0">Notifications</h5>
                                                    <a class="badge badge-primary badge-card" href="#">3</a>
                                                </div>
                                            </div>
                                            <div class="px-3 pt-0 pb-0 sub-card">
                                                <a href="#" class="iq-sub-card">
                                                    <div class="media align-items-center cust-card py-3 border-bottom">
                                                        <div class="">
                                                            <i class="ri-shopping-cart-2-line text-primary"></i>
                                                        </div>
                                                        <div class="media-body ml-3">
                                                            <h6 class="mb-0">New order received</h6>
                                                            <small class="mb-0">You have 5 new orders</small>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="#" class="iq-sub-card">
                                                    <div class="media align-items-center cust-card py-3 border-bottom">
                                                        <div class="">
                                                            <i class="ri-stack-line text-success"></i>
                                                        </div>
                                                        <div class="media-body ml-3">
                                                            <h6 class="mb-0">Product stock low</h6>
                                                            <small class="mb-0">Only 3 left in stock</small>
                                                        </div>
                                                    </div>
                                                </a>
                                                <a href="#" class="iq-sub-card">
                                                    <div class="media align-items-center cust-card py-3 border-bottom">
                                                        <div class="">
                                                            <i class="ri-alert-line text-danger"></i>
                                                        </div>
                                                        <div class="media-body ml-3">
                                                            <h6 class="mb-0">System alert</h6>
                                                            <small class="mb-0">Check system settings</small>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img src="{{ asset ('import/assets/images/user/1.png')  }}" class="img-fluid rounded-circle"
                                        alt="user">
                                    <span class="ml-2">Joan Duo</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">Profile</a>
                                    <a class="dropdown-item" href="#">Settings</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Logout</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Top Navbar End -->


        <!-- Main Content Start -->
        <div class="content-page">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card card-block card-stretch card-height">
                                    <div class="card-body">
                                        <h4 class="card-title">Sales Overview</h4>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h3>₱50,000</h3>
                                            <span class="text-success">+5%</span>
                                        </div>
                                        <div class="progress bg-primary-light mt-4" style="height: 6px;">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="card card-block card-stretch card-height">
                                    <div class="card-body">
                                        <h4 class="card-title">Recent Transactions</h4>
                                        <ul class="list-unstyled mb-0">
                                            <li class="d-flex align-items-center justify-content-between mb-3">
                                                <div>Order #12345</div>
                                                <span>₱1,200</span>
                                            </li>
                                            <li class="d-flex align-items-center justify-content-between mb-3">
                                                <div>Order #12346</div>
                                                <span>₱850</span>
                                            </li>
                                            <li class="d-flex align-items-center justify-content-between mb-3">
                                                <div>Order #12347</div>
                                                <span>₱1,450</span>
                                            </li>
                                            <li class="d-flex align-items-center justify-content-between mb-3">
                                                <div>Order #12348</div>
                                                <span>₱2,300</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="card card-block card-stretch card-height">
                                    <div class="card-body">
                                        <h4 class="card-title">Product Availability</h4>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="progress bg-danger-light mt-4" style="height: 6px;">
                                                <div class="progress-bar bg-danger" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <span class="text-danger">30% Stock</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="card card-block card-stretch card-height">
                                    <div class="card-body">
                                        <h4 class="card-title">Top-Selling Products</h4>
                                        <ul class="list-unstyled mb-0">
                                            <li class="d-flex align-items-center justify-content-between mb-3">
                                                <div>Product A</div>
                                                <span>1200 Units</span>
                                            </li>
                                            <li class="d-flex align-items-center justify-content-between mb-3">
                                                <div>Product B</div>
                                                <span>850 Units</span>
                                            </li>
                                            <li class="d-flex align-items-center justify-content-between mb-3">
                                                <div>Product C</div>
                                                <span>1450 Units</span>
                                            </li>
                                            <li class="d-flex align-items-center justify-content-between mb-3">
                                                <div>Product D</div>
                                                <span>2300 Units</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="card card-block card-stretch card-height">
                                    <div class="card-body">
                                        <h4 class="card-title">Total Customers</h4>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h3>1500</h3>
                                            <span class="text-success">+12%</span>
                                        </div>
                                        <div class="progress bg-primary-light mt-4" style="height: 6px;">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="card card-block card-stretch card-height">
                                    <div class="card-body">
                                        <h4 class="card-title">Revenue Growth</h4>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <h3>₱100,000</h3>
                                            <span class="text-success">+8%</span>
                                        </div>
                                        <div class="progress bg-primary-light mt-4" style="height: 6px;">
                                            <div class="progress-bar bg-primary" role="progressbar" style="width: 78%;" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Content End -->

        <!-- Footer Start -->
        <div class="iq-footer">
            <div class="container-fluid">
                <div class="card">
                    <div class="card-body">
                        <div class="text-center">
                            &copy; 2024 Retail POS | All Rights Reserved.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->
    </div>
    <!-- Wrapper End -->

    <!-- Optional JavaScript -->
    <script src="{{ asset ('import/assets/js/backend-bundle.min.js')  }}"></script>
    <script src="{{ asset ('import/assets/js/customizer.js')  }}"></script>
    <script src="{{ asset ('import/assets/js/chart-custom.js')  }}"></script>
    <script src="{{ asset ('import/assets/js/app.js')  }}"></script>
</body>

</html>
