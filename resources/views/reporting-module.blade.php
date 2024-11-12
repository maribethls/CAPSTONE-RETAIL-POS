<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Reporting Module</title>

    <!-- Favicon -->
    {{-- <link rel="shortcut icon" href="{{ asset ('import/assets/images/favicon-osave.ico')  }}" /> --}}
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
            font-size: 2rem;
            transition: color 0.3s ease;
        }

        .svg-icon i:hover,
        .iq-menu .active .svg-icon i {
            color: orange;
        }

        @media (max-width: 991.98px) {
            .page-title {
                margin-left: 10px;
                font-size: 1rem;
            }
        }

        .iq-navbar-custom .page-title {
            margin-left: 20px;
        }

        .iq-sidebar-toggle .iq-navbar-custom .page-title {
            margin-left: 60px;
        }
    </style>
</head>

<body class="">
    <!-- Loader Start -->
    <div id="loading">
        <div id="loading-center"></div>
    </div>
    <!-- Loader END -->

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
                        <li>
                            <a href="homepage" class="svg-icon">
                                <i class="las la-home"></i>
                                <span class="ml-4">Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="item-master" class="svg-icon">
                                <i class="las la-box"></i>
                                <span class="ml-4">Item Master</span>
                            </a>
                        </li>
                        <li>
                            <a href="sales-module" class="svg-icon">
                                <i class="las la-cash-register"></i>
                                <span class="ml-4">Sales Module</span>
                            </a>
                        </li>
                        <li class="active">
                            <a href="reporting-module" class="svg-icon active">
                                <i class="las la-file-alt"></i>
                                <span class="ml-4">Reporting Module</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- Sidebar End -->

        <!-- Main Content Start -->
        <div class="content-page">
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
                            Reporting Module
                        </div>
                        <div class="d-flex align-items-center">
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-label="Toggle navigation">
                                <i class="ri-menu-3-line"></i>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav ml-auto navbar-list align-items-center">
                                    <li class="nav-item nav-icon dropdown">
                                        <a href="#" class="search-toggle dropdown-toggle" id="dropdownMenuButton2"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="ri-mail-line"></i>
                                            <span class="bg-primary"></span>
                                        </a>
                                        <div class="iq-sub-dropdown dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                            <div class="card shadow-none m-0">
                                                <div class="card-body p-0 ">
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
                                                                    <i class="ri-pie-chart-2-line text-primary"></i>
                                                                </div>
                                                                <div class="media-body ml-3">
                                                                    <h6 class="mb-0">New report generated</h6>
                                                                    <small class="mb-0">Check your reports</small>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <a href="#" class="iq-sub-card">
                                                            <div class="media align-items-center cust-card py-3 border-bottom">
                                                                <div class="">
                                                                    <i class="ri-stack-line text-success"></i>
                                                                </div>
                                                                <div class="media-body ml-3">
                                                                    <h6 class="mb-0">Low stock alert</h6>
                                                                    <small class="mb-0">Only 3 items left</small>
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

            <!-- Page Content Start -->
            <div class="container-fluid">
                <!-- Reporting Module Content -->
                <div id="reporting-module">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mb-4">Generate Reports</h4>
                                    <form id="generate-report-form">
                                        <div class="form-group">
                                            <label for="report-type">Report Type</label>
                                            <select class="form-control" id="report-type" onchange="toggleDateRange()">
                                                <option value="sales">Sales Report</option>
                                                <option value="inventory">Inventory Report</option>
                                                <option value="x-reading">X-Reading</option>
                                                <option value="z-reading">Z-Reading</option>
                                            </select>
                                        </div>
                                        <div class="form-group" id="date-range-group">
                                            <label for="date-range">Date Range</label>
                                            <input type="date" class="form-control" id="date-range">
                                        </div>
                                        <div class="form-group" id="shift-group" style="display:none;">
                                            <label for="shift">Shift</label>
                                            <select class="form-control" id="shift">
                                                <option value="morning">Morning Shift</option>
                                                <option value="evening">Evening Shift</option>
                                            </select>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Generate Report</button>
                                    </form>

                                    <hr class="mt-5">
                                    <h4 class="mb-4">Generated Reports</h4>
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Report Type</th>
                                                <th>Date Generated</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- Dummy data -->
                                            <tr>
                                                <td>Sales Report</td>
                                                <td>2024-08-25</td>
                                                <td>
                                                    <a href="#" class="btn btn-info btn-sm">View</a>
                                                    <button class="btn btn-danger btn-sm">Delete</button>
                                                </td>
                                            </tr>
                                            <!-- Add more rows as needed -->
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Reporting Module Content -->
            </div>
            <!-- Page Content End -->
        </div>
        <!-- Main Content End -->

    </div>
    <!-- Wrapper End -->

    <!-- Optional JavaScript -->
    <script src="{{ asset ('import/assets/js/backend-bundle.min.js')  }}"></script>
    <script src="{{ asset ('import/assets/js/app.js')  }}"></script>

    <script>
        document.getElementById('generate-report-form').addEventListener('submit', function(e) {
            e.preventDefault();
            const reportType = document.getElementById('report-type').value;

            if (reportType === 'x-reading') {
                generateXReadingReport();
            } else if (reportType === 'z-reading') {
                generateZReadingReport();
            } else {
                // Handle other report types (Sales, Inventory)
            }
        });

        function toggleDateRange() {
            const reportType = document.getElementById('report-type').value;
            const dateRangeGroup = document.getElementById('date-range-group');
            const shiftGroup = document.getElementById('shift-group');

            if (reportType === 'x-reading') {
                dateRangeGroup.style.display = 'block';
                shiftGroup.style.display = 'block';
            } else if (reportType === 'z-reading') {
                dateRangeGroup.style.display = 'none';
                shiftGroup.style.display = 'none';
            } else {
                dateRangeGroup.style.display = 'block';
                shiftGroup.style.display = 'none';
            }
        }

        function generateXReadingReport() {
            // Your logic to generate X-Reading report
            alert('X-Reading report generated');
            // Display, Print, or Export functionality
        }

        function generateZReadingReport() {
            // Your logic to generate Z-Reading report
            alert('Z-Reading report generated and register locked');
            // Lock register, Display, Print, Export, or Archive functionality
        }
    </script>
</body>

</html>
