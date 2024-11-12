<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Item Master</title>

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

        #search-box {
            margin-bottom: 20px;
            width: 100%;
            padding: 10px;
            border: 1px solid #ced4da;
            border-radius: 4px;
        }

        .table th,
        .table td {
            vertical-align: middle;
        }

        .btn-sm {
            padding: 0.25rem 0.5rem;
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
                        <li class="active">
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
                        <li>
                            <a href="reporting-module" class="svg-icon">
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
                            Item Master
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


            <!-- Page Content Start -->
            <div class="container-fluid">
                <!-- Item Master Module -->
                <div id="item-master">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mb-4">Create New Item</h4>
                                    <form id="create-item-form" method="POST" action="{{ route('item-master.store') }}">
                                        @csrf
                                        <div class="form-group">
                                            <label for="item-name">Item Name</label>
                                            <input type="text" class="form-control" id="item-name" name="item-name" placeholder="Enter item name" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="item-description">Description</label>
                                            <textarea class="form-control" id="item-description" name="item-description" rows="3" placeholder="Enter item description"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="item-code">Item Code/SAN</label>
                                            <input type="text" class="form-control" id="item-code" name="item-code" placeholder="Enter item code or SAN" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="barcode">Barcode</label>
                                            <input type="text" class="form-control" id="barcode" name="barcode" placeholder="Enter barcode" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="price">Price</label>
                                            <input type="text" class="form-control" id="price" name="price" placeholder="Enter price" required>
                                        </div>
                                        <div class="form-group" id="item-status-group">
                                            <label for="item-status">Item Status</label>
                                            <select class="form-control" id="item-status" name="item-status">
                                                <option value="Active">Active</option>
                                                <option value="Delisted">Delisted</option>
                                                <option value="Inactive">Inactive</option>
                                                <option value="Temporary-delisted">Temporary Delisted</option>
                                                <option value="Others">Others</option>
                                            </select>
                                        </div>
                                        <div class="form-group" id="item-brand-group">
                                            <label for="item-brand">Item Brand</label>
                                            <select class="form-control" id="item-brand" name="item-brand">
                                                <option value="Commercial">Commercial</option>
                                                <option value="Exclusive">Exclusive</option>
                                                <option value="Private">Private</option>
                                                <option value="Seasonal">Seasonal</option>
                                                <option value="Spot">Spot</option>
                                                <option value="Test">Test</option>
                                                <option value="Others">Others</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="item-category">Item Category</label>
                                            <input type="text" class="form-control" id="item-category" name="item-category" placeholder="Enter category">
                                        </div>
                                        <div class="form-group">
                                            <label for="item-subcategory">Item Sub-Category</label>
                                            <input type="text" class="form-control" id="item-subcategory" name="item-subcategory" placeholder="Enter sub-category">
                                        </div>
                                        <button type="submit" class="btn btn-primary">Save Item</button>
                                    </form>

                                    <!-- Edit Item Form - Initially Hidden -->
                                    <hr class="mt-5">
                                    <div id="edit-item-container" style="display: none;"> <!-- Use a container to control the visibility -->
                                        <h4 class="mb-4">Edit Item</h4>
                                        <form id="edit-item-form" method="POST">
                                            @csrf
                                            @method('PUT') <!-- Use PUT method for updating -->

                                            <!-- Add a hidden input field to hold the item ID -->
                                            <input type="hidden" id="edit-item-id" name="id">

                                            <!-- Form fields for editing (similar to the create form but with different IDs) -->
                                            <div class="form-group">
                                                <label for="edit-item-name">Item Name</label>
                                                <input type="text" class="form-control" id="edit-item-name" name="item-name" placeholder="Enter item name" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="edit-item-description">Description</label>
                                                <input type="text" class="form-control" id="edit-item-description" name="item-description" placeholder="Enter item description">
                                            </div>
                                            <div class="form-group">
                                                <label for="edit-item-code">Item Code/SAN</label>
                                                <input type="text" class="form-control" id="edit-item-code" name="item-code" placeholder="Enter item code or SAN" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="edit-barcode">Barcode</label>
                                                <input type="text" class="form-control" id="edit-barcode" name="barcode" placeholder="Enter barcode" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="edit-price">Price</label>
                                                <input type="text" class="form-control" id="edit-price" name="price" placeholder="Enter price" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="edit-item-status">Item Status</label>
                                                <select class="form-control" id="edit-item-status" name="item-status">
                                                    <option value="Active">Active</option>
                                                    <option value="Delisted">Delisted</option>
                                                    <option value="Inactive">Inactive</option>
                                                    <option value="Temporary-delisted">Temporary Delisted</option>
                                                    <option value="Others">Others</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="edit-item-brand">Item Brand</label>
                                                <select class="form-control" id="edit-item-brand" name="item-brand">
                                                    <option value="Commercial">Commercial</option>
                                                    <option value="Exclusive">Exclusive</option>
                                                    <option value="Private">Private</option>
                                                    <option value="Seasonal">Seasonal</option>
                                                    <option value="Spot">Spot</option>
                                                    <option value="Test">Test</option>
                                                    <option value="Others">Others</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="edit-item-category">Item Category</label>
                                                <input type="text" class="form-control" id="edit-item-category" name="item-category" placeholder="Enter category" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="edit-item-subcategory">Item Sub-Category</label>
                                                <input type="text" class="form-control" id="edit-item-subcategory" name="item-subcategory" placeholder="Enter sub-category" required>
                                            </div>

                                            <!-- Update and Cancel buttons -->
                                            <button type="submit" class="btn btn-primary">Update Item</button>
                                            <button type="button" class="btn btn-secondary" id="cancel-edit">Cancel</button>
                                        </form>
                                    </div>


                                    <hr class="mt-5">
                                    <h4 class="mb-4">Product Catalog</h4>
                                    <input type="text" id="search-box" placeholder="Search item name...">
                                    <table class="table table-bordered" id="product-catalog">
                                        <thead>
                                            <tr>
                                                <th>Item Name</th>
                                                <th>Description</th>
                                                <th>Item Code/SAN</th>
                                                <th>Barcode</th>
                                                <th>Price</th>
                                                <th>Status</th>
                                                <th>Brand</th>
                                                <th>Category</th>
                                                <th>Sub-Category</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- Items will be dynamically added here -->
                                            @foreach($items as $item)
                                                @if($item->status != 'delisted')
                                                    <tr>
                                                        <td>{{ $item->name }}</td>
                                                        <td>{{ $item->description }}</td>
                                                        <td>{{ $item->code }}</td>
                                                        <td>{{ $item->barcode }}</td>
                                                        <td>{{ $item->price }}</td>
                                                        <td>{{ $item->status }}</td>
                                                        <td>{{ $item->brand }}</td>
                                                        <td>{{ $item->category }}</td>
                                                        <td>{{ $item->subcategory }}</td>
                                                        <td>
                                                            <button class="btn btn-warning btn-sm edit-item" data-id="{{ $item->id }}">Edit</button>
                                                            <button class="btn btn-danger btn-sm delete-item" data-id="{{ $item->id }}">Delete</button>
                                                        </td>
                                                    </tr>
                                                @endif
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Item Master Module -->
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
        document.getElementById('create-item-form').addEventListener('submit', function (e) {
        e.preventDefault(); // Prevent the default form submission

        const formData = new FormData(this); // Get form data

        fetch('{{ route('item-master.store') }}', {
            method: 'POST',
            body: formData,
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}' // Include CSRF token
            }
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) { // Assuming your backend returns a success key in response
                // Append the new item to the table
                const newRow = `
                    <tr>
                        <td>${data.item.name}</td>
                        <td>${data.item.description}</td>
                        <td>${data.item.code}</td>
                        <td>${data.item.barcode}</td>
                        <td>${data.item.price}</td>
                        <td>${data.item.status}</td>
                        <td>${data.item.brand}</td>
                        <td>${data.item.category}</td>
                        <td>${data.item.subcategory}</td>
                        <td>
                            <button class="btn btn-warning btn-sm edit-item" data-id="${data.item.id}">Edit</button>
                            <button class="btn btn-danger btn-sm delete-item" data-id="${data.item.id}">Delete</button>
                        </td>
                    </tr>
                `;
                document.querySelector('#product-catalog tbody').insertAdjacentHTML('beforeend', newRow);

                // Clear form fields
                document.getElementById('create-item-form').reset();
            } else {
                // Handle errors if any
                console.error('Failed to create item:', data.error);
            }
        })
        .catch(error => {
            console.error('Error:', error);
        });
        });

        // Edit and Delete functionality
        // Event listener for Edit button click
        document.querySelector('#product-catalog tbody').addEventListener('click', function (e) {
            if (e.target.classList.contains('edit-item')) {
                const row = e.target.closest('tr');

                // Populate the form fields with existing data
                document.getElementById('edit-item-id').value = e.target.dataset.id; // Set ID for update
                document.getElementById('edit-item-name').value = row.children[0].textContent;
                document.getElementById('edit-item-description').value = row.children[1].textContent;
                document.getElementById('edit-item-code').value = row.children[2].textContent;
                document.getElementById('edit-barcode').value = row.children[3].textContent;
                document.getElementById('edit-price').value = row.children[4].textContent;
                document.getElementById('edit-item-status').value = row.children[5].textContent;
                document.getElementById('edit-item-brand').value = row.children[6].textContent;
                document.getElementById('edit-item-category').value = row.children[7].textContent;
                document.getElementById('edit-item-subcategory').value = row.children[8].textContent;

                // Show the edit form container
                document.getElementById('edit-item-container').style.display = 'block';
            }

            if (e.target.classList.contains('delete-item')) {
                // Logic for deleting item
                const row = e.target.closest('tr');
                row.remove();  // Simple delete or implement archiving logic
            }
        });

        // AJAX request to update the item
        document.getElementById('edit-item-form').addEventListener('submit', function (e) {
            e.preventDefault();

            const formData = new FormData(this);
            const itemId = document.getElementById('edit-item-id').value;

            fetch(`/item-master/${itemId}`, { // Use the update route with item ID
                method: 'POST', // This should be POST but we override to PUT in headers
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'X-HTTP-Method-Override': 'PUT' // Use PUT method override
                },
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    // Find the existing row and update it
                    const row = document.querySelector(`button[data-id='${itemId}']`).closest('tr');
                    row.children[0].textContent = data.item.name;
                    row.children[1].textContent = data.item.description;
                    row.children[2].textContent = data.item.code;
                    row.children[3].textContent = data.item.barcode;
                    row.children[4].textContent = data.item.price;
                    row.children[5].textContent = data.item.status;
                    row.children[6].textContent = data.item.brand;
                    row.children[7].textContent = data.item.category;
                    row.children[8].textContent = data.item.subcategory;

                    // Hide the edit form after updating
                    document.getElementById('edit-item-form').reset();
                    document.getElementById('edit-item-container').style.display = 'none';
                } else {
                    console.error('Failed to update item:', data.error);
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });
        });

        // Cancel edit action
        document.getElementById('cancel-edit').addEventListener('click', function () {
            document.getElementById('edit-item-form').reset();
            document.getElementById('edit-item-container').style.display = 'none';
        });



        // Search functionality
        document.getElementById('search-box').addEventListener('keyup', function () {
            const searchText = this.value.toLowerCase();
            const rows = document.querySelectorAll('#product-catalog tbody tr');

            rows.forEach(function (row) {
                const itemName = row.children[0].textContent.toLowerCase();
                if (itemName.includes(searchText)) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        });

    </script>

    {{-- <!-- Edit Item Modal -->
    <div class="modal fade" id="editItemModal" tabindex="-1" aria-labelledby="editItemModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editItemModalLabel">Edit Item</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="edit-item-form" method="POST">
                        @csrf
                        @method('PUT') <!-- Use PUT method for updating -->

                        <!-- Add a hidden input field to hold the item ID -->
                        <input type="hidden" id="edit-item-id" name="id">

                        <!-- Form fields for editing (similar to the create form but with different IDs) -->
                        <div class="form-group">
                            <label for="edit-item-name">Item Name</label>
                            <input type="text" class="form-control" id="edit-item-name" name="item-name" placeholder="Enter item name" required>
                        </div>
                        <div class="form-group">
                            <label for="edit-item-description">Description</label>
                            <input type="text" class="form-control" id="edit-item-description" name="item-description" placeholder="Enter item description">
                        </div>
                        <div class="form-group">
                            <label for="edit-item-code">Item Code/SAN</label>
                            <input type="text" class="form-control" id="edit-item-code" name="item-code" placeholder="Enter item code or SAN" required>
                        </div>
                        <div class="form-group">
                            <label for="edit-barcode">Barcode</label>
                            <input type="text" class="form-control" id="edit-barcode" name="barcode" placeholder="Enter barcode" required>
                        </div>
                        <div class="form-group">
                            <label for="edit-price">Price</label>
                            <input type="text" class="form-control" id="edit-price" name="price" placeholder="Enter price" required>
                        </div>
                        <div class="form-group">
                            <label for="edit-item-status">Item Status</label>
                            <select class="form-control" id="edit-item-status" name="item-status">
                                <option value="Active">Active</option>
                                <option value="Delisted">Delisted</option>
                                <option value="Inactive">Inactive</option>
                                <option value="Temporary-delisted">Temporary Delisted</option>
                                <option value="Others">Others</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="edit-item-brand">Item Brand</label>
                            <select class="form-control" id="edit-item-brand" name="item-brand">
                                <option value="Commercial">Commercial</option>
                                <option value="Exclusive">Exclusive</option>
                                <option value="Private">Private</option>
                                <option value="Seasonal">Seasonal</option>
                                <option value="Spot">Spot</option>
                                <option value="Test">Test</option>
                                <option value="Others">Others</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="edit-item-category">Item Category</label>
                            <input type="text" class="form-control" id="edit-item-category" name="item-category" placeholder="Enter category" required>
                        </div>
                        <div class="form-group">
                            <label for="edit-item-subcategory">Item Sub-Category</label>
                            <input type="text" class="form-control" id="edit-item-subcategory" name="item-subcategory" placeholder="Enter sub-category" required>
                        </div>

                        <!-- Update and Cancel buttons -->
                        <button type="submit" class="btn btn-primary">Update Item</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div> --}}


</body>

</html>
