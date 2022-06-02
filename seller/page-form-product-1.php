<!-- head -->
<?php require_once('seller_include/head.php') ?>
<!-- head.// -->

<div class="screen-overlay">
</div>
<aside class="navbar-aside" id="offcanvas_aside">
    <div class="aside-top">
        <a href="index.html" class="brand-wrap">
            <img src="assets/imgs/theme/logo.png" class="logo" alt="Nest Dashboard" />
        </a>
        <div>
            <button class="btn btn-icon btn-aside-minimize"><i class="text-muted material-icons md-menu_open"></i></button>
        </div>
    </div>
    <nav>
        <ul class="menu-aside">
            <li class="menu-item active">
                <a class="menu-link" href="index.html">
                    <i class="icon material-icons md-home"></i>
                    <span class="text">Dashboard</span>
                </a>
            </li>
            <li class="menu-item has-submenu">
                <a class="menu-link" href="page-products-list.html">
                    <i class="icon material-icons md-shopping_bag"></i>
                    <span class="text">Products</span>
                </a>
                <div class="submenu">
                    <a href="page-products-list.html">Product List</a>
                    <a href="page-form-product-1.html">Add Product</a>
                    <a href="page-categories.html">Categories</a>
                </div>
            </li>
            <li class="menu-item has-submenu">
                <a class="menu-link" href="page-orders-1.html">
                    <i class="icon material-icons md-shopping_cart"></i>
                    <span class="text">Orders</span>
                </a>
                <div class="submenu">
                    <a href="page-orders-1.html">Order list</a>
                    <a href="page-orders-detail.html">Order detail</a>
                </div>
            </li>
            <li class="menu-item has-submenu">
                <a class="menu-link" href="page-sellers-cards.html">
                    <i class="icon material-icons md-store"></i>
                    <span class="text">Sellers</span>
                </a>
                <div class="submenu">
                    <a href="page-seller-detail.html">Seller profile</a>
                </div>
            </li>
            <li class="menu-item has-submenu">
                <a class="menu-link" href="page-transactions-1.html">
                    <i class="icon material-icons md-monetization_on"></i>
                    <span class="text">Transactions</span>
                </a>
                <div class="submenu">
                    <a href="page-transactions-1.html">Transaction list</a>
                </div>
            </li>
            <li class="menu-item has-submenu">
                <a class="menu-link" href="#">
                    <i class="icon material-icons md-person"></i>
                    <span class="text">Account</span>
                </a>
                <div class="submenu">
                    <a href="page-account-login.html">User login</a>
                    <a href="page-account-register.html">User registration</a>
                    <a href="page-error-404.html">Error 404</a>
                </div>
            </li>
            <li class="menu-item">
                <a class="menu-link" href="page-reviews.html">
                    <i class="icon material-icons md-comment"></i>
                    <span class="text">Reviews</span>
                </a>
            </li>
        </ul>
        <hr />
        <ul class="menu-aside">
            <li class="menu-item has-submenu">
                <a class="menu-link" href="#">
                    <i class="icon material-icons md-settings"></i>
                    <span class="text">Settings</span>
                </a>
                <div class="submenu">
                    <a href="page-settings-1.html">Setting sample 1</a>
                </div>
            </li>
        </ul>
        <br />
        <br />
    </nav>
</aside>
<main class="main-wrap">
    <header class="main-header navbar">
        <div class="col-search">
            <form class="searchform">
                <div class="input-group">
                    <input list="search_terms" type="text" class="form-control" placeholder="Search term" />
                    <button class="btn btn-light bg" type="button"><i class="material-icons md-search"></i></button>
                </div>
                <datalist id="search_terms">
                            <option value="Products"></option>
                            <option value="New orders"></option>
                            <option value="Apple iphone"></option>
                            <option value="Ahmed Hassan"></option>
                        </datalist>
            </form>
        </div>
        <div class="col-nav">
            <button class="btn btn-icon btn-mobile me-auto" data-trigger="#offcanvas_aside"><i class="material-icons md-apps"></i></button>
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link btn-icon" href="#">
                        <i class="material-icons md-notifications animation-shake"></i>
                        <span class="badge rounded-pill">3</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn-icon darkmode" href="#"> <i class="material-icons md-nights_stay"></i> </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="requestfullscreen nav-link btn-icon"><i class="material-icons md-cast"></i></a>
                </li>
                <li class="dropdown nav-item">
                    <a class="dropdown-toggle" data-bs-toggle="dropdown" href="#" id="dropdownAccount" aria-expanded="false"> <img class="img-xs rounded-circle" src="assets/imgs/people/avatar-2.png" alt="User" /></a>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownAccount">
                        <a class="dropdown-item" href="page-settings-1.html"><i class="material-icons md-perm_identity"></i>Edit Profile</a>
                        <a class="dropdown-item" href="#"><i class="material-icons md-account_balance_wallet"></i>Wallet</a>
                        <a class="dropdown-item" href="#"><i class="material-icons md-receipt"></i>Billing</a>
                        <a class="dropdown-item" href="#"><i class="material-icons md-help_outline"></i>Help center</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item text-danger" href="#"><i class="material-icons md-exit_to_app"></i>Logout</a>
                    </div>
                </li>
            </ul>
        </div>
    </header>
    <section class="content-main">
        <div class="row">
            <div class="col-9">
                <div class="content-header">
                    <h2 class="content-title">Add New Product</h2>
                    <div>
                        <button class="btn btn-light rounded font-sm mr-5 text-body hover-up">Save to draft</button>
                        <button class="btn btn-md rounded font-sm hover-up">Publich</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card mb-4">
                    <div class="card-header">
                        <h4>Basic</h4>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="mb-4">
                                <label for="product_name" class="form-label">Product title</label>
                                <input type="text" placeholder="Type here" class="form-control" id="product_name" />
                            </div>
                            <div class="mb-4">
                                <label class="form-label">Full description</label>
                                <textarea placeholder="Type here" class="form-control" rows="4"></textarea>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="mb-4">
                                        <label class="form-label">Regular price</label>
                                        <div class="row gx-2">
                                            <input placeholder="$" type="text" class="form-control" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="mb-4">
                                        <label class="form-label">Promotional price</label>
                                        <input placeholder="$" type="text" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <label class="form-label">Currency</label>
                                    <select class="form-select">
                                                <option>USD</option>
                                                <option>EUR</option>
                                                <option>RUBL</option>
                                            </select>
                                </div>
                            </div>
                            <div class="mb-4">
                                <label class="form-label">Tax rate</label>
                                <input type="text" placeholder="%" class="form-control" id="product_name" />
                            </div>
                            <label class="form-check mb-4">
                                        <input class="form-check-input" type="checkbox" value="" />
                                        <span class="form-check-label"> Make a template </span>
                                    </label>
                        </form>
                    </div>
                </div>
                <!-- card end// -->
                <div class="card mb-4">
                    <div class="card-header">
                        <h4>Shipping</h4>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="mb-4">
                                        <label for="product_name" class="form-label">Width</label>
                                        <input type="text" placeholder="inch" class="form-control" id="product_name" />
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="mb-4">
                                        <label for="product_name" class="form-label">Height</label>
                                        <input type="text" placeholder="inch" class="form-control" id="product_name" />
                                    </div>
                                </div>
                            </div>
                            <div class="mb-4">
                                <label for="product_name" class="form-label">Weight</label>
                                <input type="text" placeholder="gam" class="form-control" id="product_name" />
                            </div>
                            <div class="mb-4">
                                <label for="product_name" class="form-label">Shipping fees</label>
                                <input type="text" placeholder="$" class="form-control" id="product_name" />
                            </div>
                        </form>
                    </div>
                </div>
                <!-- card end// -->
            </div>
            <div class="col-lg-3">
                <div class="card mb-4">
                    <div class="card-header">
                        <h4>Media</h4>
                    </div>
                    <div class="card-body">
                        <div class="input-upload">
                            <img src="assets/imgs/theme/upload.svg" alt="" />
                            <input class="form-control" type="file" />
                        </div>
                    </div>
                </div>
                <!-- card end// -->
                <div class="card mb-4">
                    <div class="card-header">
                        <h4>Organization</h4>
                    </div>
                    <div class="card-body">
                        <div class="row gx-2">
                            <div class="col-sm-6 mb-3">
                                <label class="form-label">Category</label>
                                <select class="form-select">
                                            <option>Automobiles</option>
                                            <option>Home items</option>
                                            <option>Electronics</option>
                                            <option>Smartphones</option>
                                            <option>Sport items</option>
                                            <option>Baby and Tous</option>
                                        </select>
                            </div>
                            <div class="col-sm-6 mb-3">
                                <label class="form-label">Sub-category</label>
                                <select class="form-select">
                                            <option>Nissan</option>
                                            <option>Honda</option>
                                            <option>Mercedes</option>
                                            <option>Chevrolet</option>
                                        </select>
                            </div>
                            <div class="mb-4">
                                <label for="product_name" class="form-label">Tags</label>
                                <input type="text" class="form-control" />
                            </div>
                        </div>
                        <!-- row.// -->
                    </div>
                </div>
                <!-- card end// -->
            </div>
        </div>
    </section>
    <!-- content-main end// -->
    <footer class="main-footer font-xs">
        <div class="row pb-30 pt-15">
            <div class="col-sm-6">
                <script>
                    document.write(new Date().getFullYear());
                </script>
                &copy; TheSharepage Restaurant Module.
            </div>
            <div class="col-sm-6">
                <div class="text-sm-end">All rights reserved</div>
            </div>
        </div>
    </footer>
</main>

<!-- scripts -->
<?php require_once('seller_include/scripts.php') ?>
<!-- scripts.// -->
</body>

</html>