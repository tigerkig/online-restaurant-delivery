<!-- head -->
<?php require_once('seller_include/head.php') ?>
<!-- head.// -->

<div class="screen-overlay"></div>
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
        <div class="content-header">
            <h2 class="content-title">Transactions</h2>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-9">
                        <header class="border-bottom mb-4 pb-4">
                            <div class="row">
                                <div class="col-lg-5 col-6 me-auto">
                                    <input type="text" placeholder="Search..." class="form-control" />
                                </div>
                                <div class="col-lg-2 col-6">
                                    <select class="form-select">
                                                <option>Method</option>
                                                <option>Master card</option>
                                                <option>Visa card</option>
                                                <option>Paypal</option>
                                            </select>
                                </div>
                            </div>
                        </header>
                        <!-- card-header end// -->
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Transaction ID</th>
                                        <th>Paid</th>
                                        <th>Method</th>
                                        <th>Date</th>
                                        <th class="text-end">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><b>#456667</b></td>
                                        <td>$294.00</td>
                                        <td>
                                            <div class="icontext">
                                                <img class="icon border" src="assets/imgs/card-brands/1.png" alt="Payment" />
                                                <span class="text text-muted">Amex</span>
                                            </div>
                                        </td>
                                        <td>16.12.2020, 14:21</td>
                                        <td class="text-end">
                                            <a href="#" class="btn btn-sm btn-light font-sm rounded">Details</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><b>#134768</b></td>
                                        <td>$294.00</td>
                                        <td>
                                            <div class="icontext">
                                                <img class="icon border" src="assets/imgs/card-brands/2.png" alt="Payment" />
                                                <span class="text text-muted">Master card</span>
                                            </div>
                                        </td>
                                        <td>16.12.2020, 14:21</td>
                                        <td class="text-end">
                                            <a href="#" class="btn btn-sm btn-light font-sm rounded">Details</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><b>#134768</b></td>
                                        <td>$294.00</td>
                                        <td>
                                            <div class="icontext">
                                                <img class="icon border" src="assets/imgs/card-brands/3.png" alt="Payment" />
                                                <span class="text text-muted">Paypal</span>
                                            </div>
                                        </td>
                                        <td>16.12.2020, 14:21</td>
                                        <td class="text-end">
                                            <a href="#" class="btn btn-sm btn-light font-sm rounded">Details</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><b>#134768</b></td>
                                        <td>$294.00</td>
                                        <td>
                                            <div class="icontext">
                                                <img class="icon border" src="assets/imgs/card-brands/4.png" alt="Payment" />
                                                <span class="text text-muted">Visa</span>
                                            </div>
                                        </td>
                                        <td>16.12.2020, 14:21</td>
                                        <td class="text-end">
                                            <a href="#" class="btn btn-sm btn-light font-sm rounded">Details</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><b>#887780</b></td>
                                        <td>$294.00</td>
                                        <td>
                                            <div class="icontext">
                                                <img class="icon border" src="assets/imgs/card-brands/4.png" alt="Payment" />
                                                <span class="text text-muted">Visa</span>
                                            </div>
                                        </td>
                                        <td>16.12.2020, 14:21</td>
                                        <td class="text-end">
                                            <a href="#" class="btn btn-sm btn-light font-sm rounded">Details</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><b>#344556</b></td>
                                        <td>$294.00</td>
                                        <td>
                                            <div class="icontext">
                                                <img class="icon border" src="assets/imgs/card-brands/4.png" alt="Payment" />
                                                <span class="text text-muted">Visa</span>
                                            </div>
                                        </td>
                                        <td>16.12.2020, 14:21</td>
                                        <td class="text-end">
                                            <a href="#" class="btn btn-sm btn-light font-sm rounded">Details</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><b>#134768</b></td>
                                        <td>$294.00</td>
                                        <td>
                                            <div class="icontext">
                                                <img class="icon border" src="assets/imgs/card-brands/2.png" alt="Payment" />
                                                <span class="text text-muted">Master card</span>
                                            </div>
                                        </td>
                                        <td>16.12.2020, 14:21</td>
                                        <td class="text-end">
                                            <a href="#" class="btn btn-sm btn-light font-sm rounded">Details</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><b>#134768</b></td>
                                        <td>$294.00</td>
                                        <td>
                                            <div class="icontext">
                                                <img class="icon border" src="assets/imgs/card-brands/2.png" alt="Payment" />
                                                <span class="text text-muted">Master card</span>
                                            </div>
                                        </td>
                                        <td>16.12.2020, 14:21</td>
                                        <td class="text-end">
                                            <a href="#" class="btn btn-sm btn-light font-sm rounded">Details</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><b>#998784</b></td>
                                        <td>$294.00</td>
                                        <td>
                                            <div class="icontext">
                                                <img class="icon border" src="assets/imgs/card-brands/3.png" alt="Payment" />
                                                <span class="text text-muted">Paypal</span>
                                            </div>
                                        </td>
                                        <td>16.12.2020, 14:21</td>
                                        <td class="text-end">
                                            <a href="#" class="btn btn-sm btn-light font-sm rounded">Details</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><b>#556667</b></td>
                                        <td>$294.00</td>
                                        <td>
                                            <div class="icontext">
                                                <img class="icon border" src="assets/imgs/card-brands/3.png" alt="Payment" />
                                                <span class="text text-muted">Paypal</span>
                                            </div>
                                        </td>
                                        <td>16.12.2020, 14:21</td>
                                        <td class="text-end">
                                            <a href="#" class="btn btn-sm btn-light font-sm rounded">Details</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><b>#098989</b></td>
                                        <td>$294.00</td>
                                        <td>
                                            <div class="icontext">
                                                <img class="icon border" src="assets/imgs/card-brands/3.png" alt="Payment" />
                                                <span class="text text-muted">Paypal</span>
                                            </div>
                                        </td>
                                        <td>16.12.2020, 14:21</td>
                                        <td class="text-end">
                                            <a href="#" class="btn btn-sm btn-light font-sm rounded">Details</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><b>#134768</b></td>
                                        <td>$294.00</td>
                                        <td>
                                            <div class="icontext">
                                                <img class="icon border" src="assets/imgs/card-brands/4.png" alt="Payment" />
                                                <span class="text text-muted">Visa</span>
                                            </div>
                                        </td>
                                        <td>16.12.2020, 14:21</td>
                                        <td class="text-end">
                                            <a href="#" class="btn btn-sm btn-light font-sm rounded">Details</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- table-responsive.// -->
                    </div>
                    <!-- col end// -->
                    <aside class="col-lg-3">
                        <div class="box bg-light" style="min-height: 80%">
                            <p class="text-center text-muted my-5">
                                Please select transaction <br /> to see details
                            </p>
                        </div>
                    </aside>
                    <!-- col end// -->
                </div>
                <!-- row end// -->
            </div>
            <!-- card-body // -->
        </div>
        <!-- card end// -->
        <div class="pagination-area mt-30 mb-50">
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-start">
                    <li class="page-item active"><a class="page-link" href="#">01</a></li>
                    <li class="page-item"><a class="page-link" href="#">02</a></li>
                    <li class="page-item"><a class="page-link" href="#">03</a></li>
                    <li class="page-item"><a class="page-link dot" href="#">...</a></li>
                    <li class="page-item"><a class="page-link" href="#">16</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#"><i class="material-icons md-chevron_right"></i></a>
                    </li>
                </ul>
            </nav>
        </div>
    </section>
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