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
        <div class="content-header">
            <div>
                <h2 class="content-title card-title">Order List</h2>
                <p>Lorem ipsum dolor sit amet.</p>
            </div>
            <div>
                <input type="text" placeholder="Search order ID" class="form-control bg-white" />
            </div>
        </div>
        <div class="card mb-4">
            <header class="card-header">
                <div class="row gx-3">
                    <div class="col-lg-4 col-md-6 me-auto">
                        <input type="text" placeholder="Search..." class="form-control" />
                    </div>
                    <div class="col-lg-2 col-6 col-md-3">
                        <select class="form-select">
                                    <option>Status</option>
                                    <option>Active</option>
                                    <option>Disabled</option>
                                    <option>Show all</option>
                                </select>
                    </div>
                    <div class="col-lg-2 col-6 col-md-3">
                        <select class="form-select">
                                    <option>Show 20</option>
                                    <option>Show 30</option>
                                    <option>Show 40</option>
                                </select>
                    </div>
                </div>
            </header>
            <!-- card-header end// -->
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Total</th>
                                <th scope="col">Status</th>
                                <th scope="col">Date</th>
                                <th scope="col" class="text-end">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>0901</td>
                                <td><b>Marvin McKinney</b></td>
                                <td>marvin@example.com</td>
                                <td>$9.00</td>
                                <td><span class="badge rounded-pill alert-warning">Pending</span></td>
                                <td>03.12.2020</td>
                                <td class="text-end">
                                    <a href="page-orders-detail.html" class="btn btn-md rounded font-sm">Detail</a>
                                    <div class="dropdown">
                                        <a href="#" data-bs-toggle="dropdown" class="btn btn-light rounded btn-sm font-sm"> <i class="material-icons md-more_horiz"></i> </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="page-orders-detail.html">View detail</a>
                                            <a class="dropdown-item" href="#">Edit info</a>
                                            <a class="dropdown-item text-danger" href="#">Delete</a>
                                        </div>
                                    </div>
                                    <!-- dropdown //end -->
                                </td>
                            </tr>
                            <tr>
                                <td>2323</td>
                                <td><b>Leslie Alexander</b></td>
                                <td>leslie@example.com</td>
                                <td>$46.61</td>
                                <td><span class="badge rounded-pill alert-warning">Pending</span></td>
                                <td>21.02.2020</td>
                                <td class="text-end">
                                    <a href="page-orders-detail.html" class="btn btn-md rounded font-sm">Detail</a>
                                    <div class="dropdown">
                                        <a href="#" data-bs-toggle="dropdown" class="btn btn-light rounded btn-sm font-sm"> <i class="material-icons md-more_horiz"></i> </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="page-orders-detail.html">View detail</a>
                                            <a class="dropdown-item" href="#">Edit info</a>
                                            <a class="dropdown-item text-danger" href="#">Delete</a>
                                        </div>
                                    </div>
                                    <!-- dropdown //end -->
                                </td>
                            </tr>
                            <tr>
                                <td>1233</td>
                                <td><b>Esther Howard</b></td>
                                <td>esther@example.com</td>
                                <td>$12.00</td>
                                <td><span class="badge rounded-pill alert-danger">Canceled</span></td>
                                <td>03.07.2020</td>
                                <td class="text-end">
                                    <a href="page-orders-detail.html" class="btn btn-md rounded font-sm">Detail</a>
                                    <div class="dropdown">
                                        <a href="#" data-bs-toggle="dropdown" class="btn btn-light rounded btn-sm font-sm"> <i class="material-icons md-more_horiz"></i> </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="page-orders-detail.html">View detail</a>
                                            <a class="dropdown-item" href="#">Edit info</a>
                                            <a class="dropdown-item text-danger" href="#">Delete</a>
                                        </div>
                                    </div>
                                    <!-- dropdown //end -->
                                </td>
                            </tr>
                            <tr>
                                <td>1233</td>
                                <td><b>Esther Howard</b></td>
                                <td>esther@example.com</td>
                                <td>$12.00</td>
                                <td><span class="badge rounded-pill alert-danger">Canceled</span></td>
                                <td>03.07.2020</td>
                                <td class="text-end">
                                    <a href="page-orders-detail.html" class="btn btn-md rounded font-sm">Detail</a>
                                    <div class="dropdown">
                                        <a href="#" data-bs-toggle="dropdown" class="btn btn-light rounded btn-sm font-sm"> <i class="material-icons md-more_horiz"></i> </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="page-orders-detail.html">View detail</a>
                                            <a class="dropdown-item" href="#">Edit info</a>
                                            <a class="dropdown-item text-danger" href="#">Delete</a>
                                        </div>
                                    </div>
                                    <!-- dropdown //end -->
                                </td>
                            </tr>
                            <tr>
                                <td>2323</td>
                                <td><b>Jenny Wilson</b></td>
                                <td>jenny@example.com</td>
                                <td>$589.99</td>
                                <td><span class="badge rounded-pill alert-success">Received</span></td>
                                <td>22.05.2020</td>
                                <td class="text-end">
                                    <a href="page-orders-detail.html" class="btn btn-md rounded font-sm">Detail</a>
                                    <div class="dropdown">
                                        <a href="#" data-bs-toggle="dropdown" class="btn btn-light rounded btn-sm font-sm"> <i class="material-icons md-more_horiz"></i> </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="page-orders-detail.html">View detail</a>
                                            <a class="dropdown-item" href="#">Edit info</a>
                                            <a class="dropdown-item text-danger" href="#">Delete</a>
                                        </div>
                                    </div>
                                    <!-- dropdown //end -->
                                </td>
                            </tr>
                            <tr>
                                <td>2112</td>
                                <td><b>Marvin McKinney</b></td>
                                <td>marvin@example.com</td>
                                <td>$16.58</td>
                                <td><span class="badge rounded-pill alert-success">Received</span></td>
                                <td>23.04.2020</td>
                                <td class="text-end">
                                    <a href="page-orders-detail.html" class="btn btn-md rounded font-sm">Detail</a>
                                    <div class="dropdown">
                                        <a href="#" data-bs-toggle="dropdown" class="btn btn-light rounded btn-sm font-sm"> <i class="material-icons md-more_horiz"></i> </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="page-orders-detail.html">View detail</a>
                                            <a class="dropdown-item" href="#">Edit info</a>
                                            <a class="dropdown-item text-danger" href="#">Delete</a>
                                        </div>
                                    </div>
                                    <!-- dropdown //end -->
                                </td>
                            </tr>
                            <tr>
                                <td>7897</td>
                                <td><b>Albert Flores</b></td>
                                <td>albert@example.com</td>
                                <td>$10.00</td>
                                <td><span class="badge rounded-pill alert-success">Received</span></td>
                                <td>13.03.2020</td>
                                <td class="text-end">
                                    <a href="page-orders-detail.html" class="btn btn-md rounded font-sm">Detail</a>
                                    <div class="dropdown">
                                        <a href="#" data-bs-toggle="dropdown" class="btn btn-light rounded btn-sm font-sm"> <i class="material-icons md-more_horiz"></i> </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="page-orders-detail.html">View detail</a>
                                            <a class="dropdown-item" href="#">Edit info</a>
                                            <a class="dropdown-item text-danger" href="#">Delete</a>
                                        </div>
                                    </div>
                                    <!-- dropdown //end -->
                                </td>
                            </tr>
                            <tr>
                                <td>2323</td>
                                <td><b>Wade Warren</b></td>
                                <td>wade@example.com</td>
                                <td>$105.55</td>
                                <td><span class="badge rounded-pill alert-success">Received</span></td>
                                <td>23.09.2019</td>
                                <td class="text-end">
                                    <a href="page-orders-detail.html" class="btn btn-md rounded font-sm">Detail</a>
                                    <div class="dropdown">
                                        <a href="#" data-bs-toggle="dropdown" class="btn btn-light rounded btn-sm font-sm"> <i class="material-icons md-more_horiz"></i> </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="page-orders-detail.html">View detail</a>
                                            <a class="dropdown-item" href="#">Edit info</a>
                                            <a class="dropdown-item text-danger" href="#">Delete</a>
                                        </div>
                                    </div>
                                    <!-- dropdown //end -->
                                </td>
                            </tr>
                            <tr>
                                <td>2324</td>
                                <td><b>Jane Cooper</b></td>
                                <td>jane@example.com</td>
                                <td>$710.68</td>
                                <td><span class="badge rounded-pill alert-success">Received</span></td>
                                <td>28.04.2020</td>
                                <td class="text-end">
                                    <a href="page-orders-detail.html" class="btn btn-md rounded font-sm">Detail</a>
                                    <div class="dropdown">
                                        <a href="#" data-bs-toggle="dropdown" class="btn btn-light rounded btn-sm font-sm"> <i class="material-icons md-more_horiz"></i> </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="page-orders-detail.html">View detail</a>
                                            <a class="dropdown-item" href="#">Edit info</a>
                                            <a class="dropdown-item text-danger" href="#">Delete</a>
                                        </div>
                                    </div>
                                    <!-- dropdown //end -->
                                </td>
                            </tr>
                            <tr>
                                <td>2325</td>
                                <td><b>Savannah Nguyen</b></td>
                                <td>savannah@example.com</td>
                                <td>$710.68</td>
                                <td><span class="badge rounded-pill alert-success">Received</span></td>
                                <td>23.03.2020</td>
                                <td class="text-end">
                                    <a href="page-orders-detail.html" class="btn btn-md rounded font-sm">Detail</a>
                                    <div class="dropdown">
                                        <a href="#" data-bs-toggle="dropdown" class="btn btn-light rounded btn-sm font-sm"> <i class="material-icons md-more_horiz"></i> </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="page-orders-detail.html">View detail</a>
                                            <a class="dropdown-item" href="#">Edit info</a>
                                            <a class="dropdown-item text-danger" href="#">Delete</a>
                                        </div>
                                    </div>
                                    <!-- dropdown //end -->
                                </td>
                            </tr>
                            <tr>
                                <td>2326</td>
                                <td><b>Guy Hawkins</b></td>
                                <td>guy@example.com</td>
                                <td>$767.50</td>
                                <td><span class="badge rounded-pill alert-success">Received</span></td>
                                <td>28.04.2020</td>
                                <td class="text-end">
                                    <a href="page-orders-detail.html" class="btn btn-md rounded font-sm">Detail</a>
                                    <div class="dropdown">
                                        <a href="#" data-bs-toggle="dropdown" class="btn btn-light rounded btn-sm font-sm"> <i class="material-icons md-more_horiz"></i> </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="page-orders-detail.html">View detail</a>
                                            <a class="dropdown-item" href="#">Edit info</a>
                                            <a class="dropdown-item text-danger" href="#">Delete</a>
                                        </div>
                                    </div>
                                    <!-- dropdown //end -->
                                </td>
                            </tr>
                            <tr>
                                <td>2327</td>
                                <td><b>Darrell Steward</b></td>
                                <td>darrel@example.com</td>
                                <td>$406.27</td>
                                <td><span class="badge rounded-pill alert-success">Received</span></td>
                                <td>14.07.2020</td>
                                <td class="text-end">
                                    <a href="page-orders-detail.html" class="btn btn-md rounded font-sm">Detail</a>
                                    <div class="dropdown">
                                        <a href="#" data-bs-toggle="dropdown" class="btn btn-light rounded btn-sm font-sm"> <i class="material-icons md-more_horiz"></i> </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="page-orders-detail.html">View detail</a>
                                            <a class="dropdown-item" href="#">Edit info</a>
                                            <a class="dropdown-item text-danger" href="#">Delete</a>
                                        </div>
                                    </div>
                                    <!-- dropdown //end -->
                                </td>
                            </tr>
                            <tr>
                                <td>2328</td>
                                <td><b>Jane Cooper</b></td>
                                <td>jane@example.com</td>
                                <td>$601.13</td>
                                <td><span class="badge rounded-pill alert-success">Received</span></td>
                                <td>18.03.2020</td>
                                <td class="text-end">
                                    <a href="page-orders-detail.html" class="btn btn-md rounded font-sm">Detail</a>
                                    <div class="dropdown">
                                        <a href="#" data-bs-toggle="dropdown" class="btn btn-light rounded btn-sm font-sm"> <i class="material-icons md-more_horiz"></i> </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="page-orders-detail.html">View detail</a>
                                            <a class="dropdown-item" href="#">Edit info</a>
                                            <a class="dropdown-item text-danger" href="#">Delete</a>
                                        </div>
                                    </div>
                                    <!-- dropdown //end -->
                                </td>
                            </tr>
                            <tr>
                                <td>2329</td>
                                <td><b>Darlene Robertson</b></td>
                                <td>deriene@example.com</td>
                                <td>$948.55</td>
                                <td><span class="badge rounded-pill alert-success">Received</span></td>
                                <td>03.07.2020</td>
                                <td class="text-end">
                                    <a href="page-orders-detail.html" class="btn btn-md rounded font-sm">Detail</a>
                                    <div class="dropdown">
                                        <a href="#" data-bs-toggle="dropdown" class="btn btn-light rounded btn-sm font-sm"> <i class="material-icons md-more_horiz"></i> </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="page-orders-detail.html">View detail</a>
                                            <a class="dropdown-item" href="#">Edit info</a>
                                            <a class="dropdown-item text-danger" href="#">Delete</a>
                                        </div>
                                    </div>
                                    <!-- dropdown //end -->
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- table-responsive //end -->
            </div>
            <!-- card-body end// -->
        </div>
        <!-- card end// -->
        <div class="pagination-area mt-15 mb-50">
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