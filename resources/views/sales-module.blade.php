<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sales Module</title>

    <!-- Favicon -->
    {{-- <link rel="shortcut icon" href="{{ asset ('import/assets/images/favicon-osave.ico')  }}" /> --}}
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset ('import/assets/css/backend-plugin.min.css')  }}">
    <link rel="stylesheet" href="{{ asset ('import/assets/css/backend.css?v=1.0.0')  }}">
    <link rel="stylesheet" href="{{ asset ('import/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css')  }}">
    <link rel="stylesheet" href="{{ asset ('import/assets/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css')  }}">
    <link rel="stylesheet" href="{{ asset ('import/assets/vendor/remixicon/fonts/remixicon.css')  }}">
    <style>
        .cart-remove-btn {
            color: red;
            cursor: pointer;
        }

        .product-slider {
            max-height: 400px;
            overflow-y: auto;
        }

        .quantity-input {
            width: 60px;
            margin-left: 10px;
        }

        .payment-section {
            margin-top: 20px;
        }

        .payment-section .form-group {
            margin-bottom: 15px;
        }
    </style>
</head>

<body class="">
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
                        <li class="active">
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
                            Sales Module
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

            <!-- Main Content -->
            <div class="col-md-10 mt-4">
                <div class="row">
                    <!-- Product Catalog Section -->
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Product Catalog</h4>
                                <input type="text" id="product-search" class="form-control" placeholder="Search Product...">
                                <input type="text" id="barcode-input" class="form-control mt-2" placeholder="Scan Barcode or Enter Item Code">
                            </div>
                            <div class="card-body product-slider">
                                <div class="row" id="product-list">
                                    <!-- Static Product Entries -->
                                    <div class="col-lg-4 col-md-6 mb-4"
                                        data-product-name="Cornetto Berry Matcha"
                                        data-product-description="Cornetto Berry Matcha 110mL">
                                        <div class="card h-100">
                                            <img src="{{ asset('import/assets/images/product/product3.jpg') }}" alt="Product 3">
                                            <div class="card-body">
                                                <h4 class="card-title">Cornetto Berry Matcha</h4>
                                                <h5>₱34.99</h5>
                                                <p class="card-text">Cornetto Berry Matcha 110mL</p>
                                            </div>
                                            <div class="card-footer">
                                                <button class="btn btn-primary add-to-cart" data-product-id="1" data-product-name="Cornetto Berry Matcha 110mL" data-product-price="34.99">Add to Cart</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 mb-4"
                                        data-product-name="Nestle Fresh Milk 1L"
                                        data-product-description="Nestle Fresh Milk Carton 1L">
                                        <div class="card h-100">
                                            <img src="{{ asset ('import/assets/images/product/product1.jpg')  }}" alt="Product 1">
                                            <div class="card-body">
                                                <h4 class="card-title">Nestle Fresh Milk</h4>
                                                <h5>₱99.99</h5>
                                                <p class="card-text">Nestle Fresh Milk Carton 1L</p>
                                            </div>
                                            <div class="card-footer">
                                                <button class="btn btn-primary add-to-cart" data-product-id="2" data-product-name="Nestle Fresh Milk 1L" data-product-price="99.99">Add to Cart</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 mb-4"
                                        data-product-name="Ice Breakers Duo Raspberry 36g"
                                        data-product-description="Ice Breakers Duo Raspberry Mints 36g">
                                        <div class="card h-100">
                                            <img src="{{ asset ('import/assets/images/product/product5.jpg')  }}" alt="Product 5">
                                            <div class="card-body">
                                                <h4 class="card-title">Ice Breakers Duo Raspberry</h4>
                                                <h5>₱119.99</h5>
                                                <p class="card-text">Ice Breakers Duo Raspberry Mints 36g</p>
                                            </div>
                                            <div class="card-footer">
                                                <button class="btn btn-primary add-to-cart" data-product-id="3" data-product-name="Ice Breakers Duo Raspberry 36g" data-product-price="119.99">Add to Cart</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 mb-4"
                                        data-product-name="Piattos Cheese 85g"
                                        data-product-description="Piattos Cheese Flavored Chips 85g">
                                        <div class="card h-100">
                                            <img src="{{ asset ('import/assets/images/product/product4.jpg')  }}" alt="Product 4">
                                            <div class="card-body">
                                                <h4 class="card-title">Piattos Cheese</h4>
                                                <h5>₱37.25</h5>
                                                <p class="card-text">Piattos Cheese Flavored Chips 85g</p>
                                            </div>
                                            <div class="card-footer">
                                                <button class="btn btn-primary add-to-cart" data-product-id="4" data-product-name="Piattos Cheese 85g" data-product-price="37.25">Add to Cart</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 mb-4"
                                        data-product-name="Fibisco Choco Chip Cookies 600g"
                                        data-product-description="Fibisco Choco Chip Cookies 600g">
                                        <div class="card h-100">
                                            <img src="{{ asset ('import/assets/images/product/product2.jpg')  }}" alt="Product 2">
                                            <div class="card-body">
                                                <h4 class="card-title">Fibisco Choco Chip Cookies</h4>
                                                <h5>₱249.99</h5>
                                                <p class="card-text">Fibisco Choco Chip Cookies 600g</p>
                                            </div>
                                            <div class="card-footer">
                                                <button class="btn btn-primary add-to-cart" data-product-id="5" data-product-name="Fibisco Choco Chip Cookies 600g" data-product-price="249.99">Add to Cart</button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Additional static products here -->
                                    <!-- Dynamic Product Entries from Database -->
                                    @foreach($items as $item)
                                        <div class="col-lg-4 col-md-6 mb-4"
                                            data-product-name="{{ $item->name }}"
                                            data-product-description="{{ $item->description }}">
                                            <div class="card h-100">
                                                <img src="{{ $item->image ? asset('import/assets/images/product/' . $item->image) : asset('import/assets/images/product/default_item.png') }}" alt="{{ $item->name }}">
                                                <div class="card-body">
                                                    <h4 class="card-title">{{ $item->name }}</h4>
                                                    <h5>₱{{ number_format($item->price, 2) }}</h5>
                                                    <p class="card-text">{{ $item->description }}</p>
                                                </div>
                                                <div class="card-footer">
                                                    <button class="btn btn-primary add-to-cart"
                                                            data-product-id="{{ $item->id }}"
                                                            data-product-name="{{ $item->name }}"
                                                            data-product-price="{{ $item->price }}">
                                                        Add to Cart
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Sales Module Section (Cart and Payment) -->
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Cart</h4>
                            </div>
                            <div class="card-body">
                                <ul class="cart-items">
                                    <!-- Items will be dynamically added here -->
                                </ul>
                                <div class="mt-3">
                                    <h5>Total: ₱<span id="cart-total">0.00</span></h5>
                                </div>

                                <!-- Payment Section -->
                                <div class="payment-section">
                                    <div class="form-group">
                                        <label for="payment-method">Select Payment Method:</label>
                                        <select class="form-control" id="payment-method">
                                            <option value="cash">Cash</option>
                                            <option value="mobile">Mobile Payment</option>
                                        </select>
                                    </div>
                                    <div class="form-group" id="cash-payment-group">
                                        <label for="cash-amount">Enter Cash Amount Received:</label>
                                        <input type="number" class="form-control" id="cash-amount" placeholder="Enter amount">
                                    </div>
                                    <div class="form-group" id="mobile-payment-group" style="display:none;">
                                        <label for="transaction-id">Enter Mobile Payment Transaction ID:</label>
                                        <input type="text" class="form-control" id="transaction-id" placeholder="Enter transaction ID">
                                    </div>
                                    <button class="btn btn-success btn-block mt-3" id="process-payment-button">Process Payment</button>
                                    <button class="btn btn-danger btn-block mt-3" id="refund-button">Process Refund</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Cash Drawer Management (US-005) -->
                <div class="card mt-4">
                    <div class="card-header">
                        <h4 class="card-title">Cash Drawer Management</h4>
                    </div>
                    <div class="card-body">
                        <form id="cash-drawer-form">
                            <div class="form-group">
                                <label for="initial-cash">Enter Initial Cash:</label>
                                <input type="number" class="form-control" id="initial-cash" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Confirm</button>
                        </form>
                        <div id="cash-drawer-confirmation" style="display:none;">
                            <h5>Initial Cash: ₱<span id="initial-cash-amount"></span></h5>
                            <button id="edit-cash-drawer" class="btn btn-secondary">Edit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        let cart = [];
        let total = 0;

        // Add to cart functionality
        document.querySelectorAll('.add-to-cart').forEach(button => {
            button.addEventListener('click', function() {
                const productId = this.getAttribute('data-product-id');
                const productName = this.getAttribute('data-product-name');
                const productPrice = parseFloat(this.getAttribute('data-product-price'));

                const productInCart = cart.find(item => item.id === productId);
                if (productInCart) {
                    productInCart.quantity++;
                } else {
                    cart.push({ id: productId, name: productName, price: productPrice, quantity: 1 });
                }

                total += productPrice;
                updateCart();
            });
        });

        // Remove from cart functionality
        function removeFromCart(productId) {
            const productInCart = cart.find(item => item.id === productId);
            if (productInCart) {
                total -= productInCart.price * productInCart.quantity;
                cart = cart.filter(item => item.id !== productId);
                updateCart();
            }
        }

        // Update cart display
        function updateCart() {
            const cartItemsElement = document.querySelector('.cart-items');
            cartItemsElement.innerHTML = '';
            cart.forEach(item => {
                const li = document.createElement('li');
                li.classList.add('list-group-item');
                li.innerHTML = `
                    ${item.name} - ₱${item.price.toFixed(2)} x
                    <input type="number" class="quantity-input" min="1" value="${item.quantity}" onchange="changeQuantity('${item.id}', this.value)">
                    <span class="cart-remove-btn" onclick="removeFromCart('${item.id}')">Remove</span>`;
                cartItemsElement.appendChild(li);
            });

            document.getElementById('cart-total').innerText = total.toFixed(2);
        }

        // Change quantity in cart
        function changeQuantity(productId, newQuantity) {
            const productInCart = cart.find(item => item.id === productId);
            if (productInCart) {
                total -= productInCart.price * productInCart.quantity;
                productInCart.quantity = parseInt(newQuantity);
                total += productInCart.price * productInCart.quantity;
                updateCart();
            }
        }

        // Product Search functionality
        document.getElementById('product-search').addEventListener('input', function() {
            const searchTerm = this.value.toLowerCase();
            document.querySelectorAll('#product-list .col-lg-4').forEach(product => {
                const productName = product.getAttribute('data-product-name').toLowerCase();
                product.style.display = productName.includes(searchTerm) ? '' : 'none';
            });
        });

        // Barcode and Item Code input
        document.getElementById('barcode-input').addEventListener('keypress', function(event) {
            if (event.key === 'Enter') {
                const code = this.value;
                const product = document.querySelector(`[data-product-id="${code}"]`) || document.querySelector(`[data-product-name*="${code}"]`);
                if (product) {
                    product.querySelector('.add-to-cart').click();
                } else {
                    alert('Product not found!');
                }
                this.value = '';
            }
        });

        // Payment Processing
        document.getElementById('process-payment-button').addEventListener('click', function() {
            const paymentMethod = document.getElementById('payment-method').value;
            if (paymentMethod === 'cash') {
                handleCashPayment();
            } else if (paymentMethod === 'mobile') {
                handleMobilePayment();
            } else {
                alert("Invalid Payment Method!");
            }
        });

        // Handle Cash Payment
        function handleCashPayment() {
            const cashAmount = parseFloat(document.getElementById('cash-amount').value);
            if (cashAmount >= total) {
                const change = cashAmount - total;
                alert(`Payment successful! Change: ₱${change.toFixed(2)}`);
                completeTransaction();
            } else {
                alert("Insufficient cash amount!");
            }
        }

        // Handle Mobile Payment
        function handleMobilePayment() {
            const transactionID = document.getElementById('transaction-id').value;
            if (transactionID) {
                alert(`Mobile payment successful! Transaction ID: ${transactionID}`);
                completeTransaction();
            } else {
                alert("Transaction failed. Please retry.");
            }
        }

        // Complete Transaction
        function completeTransaction() {
            cart = [];
            total = 0;
            updateCart();
            triggerReceiptPrinting();
        }

        // Trigger Receipt Printing
        function triggerReceiptPrinting() {
            alert("Receipt printing...");
            // Simulate receipt printing
        }

        // Refund Functionality
        document.getElementById('refund-button').addEventListener('click', function() {
            handleCashRefund();
        });

        function handleCashRefund() {
            const refundAmount = parseFloat(prompt("Enter refund amount:"));
            const refundReason = prompt("Enter refund reason (Defective product, Expired product, Other):");
            if (refundAmount <= total && refundReason) {
                alert(`Refund successful! Amount: ₱${refundAmount.toFixed(2)}`);
                completeTransaction();
            } else {
                alert("Refund failed. Please check the amount and reason.");
            }
        }

        // Cash Drawer Management (US-005)
        document.getElementById('cash-drawer-form').addEventListener('submit', function(event) {
            event.preventDefault();
            const initialCash = document.getElementById('initial-cash').value;
            document.getElementById('initial-cash-amount').innerText = parseFloat(initialCash).toFixed(2);
            document.getElementById('cash-drawer-form').style.display = 'none';
            document.getElementById('cash-drawer-confirmation').style.display = 'block';
        });

        document.getElementById('edit-cash-drawer').addEventListener('click', function() {
            document.getElementById('cash-drawer-form').style.display = 'block';
            document.getElementById('cash-drawer-confirmation').style.display = 'none';
        });

        // Show/hide payment fields based on method
        document.getElementById('payment-method').addEventListener('change', function() {
            const method = this.value;
            document.getElementById('cash-payment-group').style.display = method === 'cash' ? 'block' : 'none';
            document.getElementById('mobile-payment-group').style.display = method === 'mobile' ? 'block' : 'none';
        });

        // Product Search functionality
        document.getElementById('product-search').addEventListener('input', function() {
            const searchTerm = this.value.toLowerCase();
            document.querySelectorAll('#product-list .col-lg-4').forEach(product => {
                const productName = product.getAttribute('data-product-name').toLowerCase(); // Name
                const productDescription = product.getAttribute('data-product-description').toLowerCase(); // Description
                const isVisible = productName.includes(searchTerm) || productDescription.includes(searchTerm);
                product.style.display = isVisible ? '' : 'none';
            });
        });
    </script>
</body>

</html>
