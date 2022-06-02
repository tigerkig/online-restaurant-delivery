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
            <h2 class="content-title">Profile setting</h2>
        </div>
        <div class="card">
            <div class="card-body">
                <div class="row gx-5">
                    <aside class="col-lg-3 border-end">
                        <nav class="nav nav-pills flex-lg-column mb-4">
                            <a class="nav-link active" aria-current="page" href="#">General</a>
                            <a class="nav-link" href="#">Moderators</a>
                            <a class="nav-link" href="#">Admin account</a>
                            <a class="nav-link" href="#">SEO settings</a>
                            <a class="nav-link" href="#">Mail settings</a>
                            <a class="nav-link" href="#">Newsletter</a>
                        </nav>
                    </aside>
                    <div class="col-lg-9">
                        <section class="content-body p-xl-4">
                            <form>
                                <div class="row">
                                    <div class="col-lg-8">
                                        <div class="row gx-3">
                                            <div class="col-6 mb-3">
                                                <label class="form-label">First name</label>
                                                <input class="form-control" type="text" placeholder="Type here" />
                                            </div>
                                            <!-- col .// -->
                                            <div class="col-6 mb-3">
                                                <label class="form-label">Last name</label>
                                                <input class="form-control" type="text" placeholder="Type here" />
                                            </div>
                                            <!-- col .// -->
                                            <div class="col-lg-6 mb-3">
                                                <label class="form-label">Email</label>
                                                <input class="form-control" type="email" placeholder="example@mail.com" />
                                            </div>
                                            <!-- col .// -->
                                            <div class="col-lg-6 mb-3">
                                                <label class="form-label">Phone</label>
                                                <input class="form-control" type="tel" placeholder="+1234567890" />
                                            </div>
                                            <!-- col .// -->
                                            <div class="col-lg-12 mb-3">
                                                <label class="form-label">Address</label>
                                                <input class="form-control" type="text" placeholder="Type here" />
                                            </div>
                                            <!-- col .// -->
                                            <div class="col-lg-6 mb-3">
                                                <label class="form-label">Birthday</label>
                                                <input class="form-control" type="date" />
                                            </div>
                                            <!-- col .// -->
                                        </div>
                                        <!-- row.// -->
                                    </div>
                                    <!-- col.// -->
                                    <aside class="col-lg-4">
                                        <figure class="text-lg-center">
                                            <img class="img-lg mb-3 img-avatar" src="assets/imgs/people/avatar-1.png" alt="User Photo" />
                                            <figcaption>
                                                <a class="btn btn-light rounded font-md" href="#"> <i class="icons material-icons md-backup font-md"></i> Upload </a>
                                            </figcaption>
                                        </figure>
                                    </aside>
                                    <!-- col.// -->
                                </div>
                                <!-- row.// -->
                                <br />
                                <button class="btn btn-primary" type="submit">Save changes</button>
                            </form>
                            <hr class="my-5" />
                            <div class="row" style="max-width: 920px">
                                <div class="col-md">
                                    <article class="box mb-3 bg-light">
                                        <a class="btn float-end btn-light btn-sm rounded font-md" href="#">Change</a>
                                        <h6>Password</h6>
                                        <small class="text-muted d-block" style="width: 70%">You can reset or change your password by clicking here</small>
                                    </article>
                                </div>
                                <!-- col.// -->
                                <div class="col-md">
                                    <article class="box mb-3 bg-light">
                                        <a class="btn float-end btn-light rounded btn-sm font-md" href="#">Deactivate</a>
                                        <h6>Remove account</h6>
                                        <small class="text-muted d-block" style="width: 70%">Once you delete your account, there is no going back.</small>
                                    </article>
                                </div>
                                <!-- col.// -->
                            </div>
                            <!-- row.// -->
                        </section>
                        <!-- content-body .// -->
                    </div>
                    <!-- col.// -->
                </div>
                <!-- row.// -->
            </div>
            <!-- card body end// -->
        </div>
        <!-- card end// -->
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