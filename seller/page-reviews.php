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
            <div>
                <h2 class="content-title card-title">Reviews</h2>
                <p>Lorem ipsum dolor sit amet.</p>
            </div>
            <div>
                <input type="text" placeholder="Search by name" class="form-control bg-white" />
            </div>
        </div>
        <div class="card mb-4">
            <header class="card-header">
                <div class="row gx-3">
                    <div class="col-lg-4 col-md-6 me-auto">
                        <input type="text" placeholder="Search..." class="form-control" />
                    </div>
                    <div class="col-lg-2 col-md-3 col-6">
                        <select class="form-select">
                                    <option>Status</option>
                                    <option>Active</option>
                                    <option>Disabled</option>
                                    <option>Show all</option>
                                </select>
                    </div>
                    <div class="col-lg-2 col-md-3 col-6">
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
                                <th>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" />
                                    </div>
                                </th>
                                <th>#ID</th>
                                <th>Product</th>
                                <th>Name</th>
                                <th>Rating</th>
                                <th>Date</th>
                                <th class="text-end">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" />
                                    </div>
                                </td>
                                <td>23</td>
                                <td><b>Organic Quinoa, Brown, & Red Rice</b></td>
                                <td>Devon Lane</td>
                                <td>
                                    <ul class="rating-stars">
                                        <li style="width: 60%" class="stars-active">
                                            <img src="assets/imgs/icons/stars-active.svg" alt="stars" />
                                        </li>
                                        <li>
                                            <img src="assets/imgs/icons/starts-disable.svg" alt="stars" />
                                        </li>
                                    </ul>
                                </td>
                                <td>10.03.2020</td>
                                <td class="text-end">
                                    <a href="#" class="btn btn-md rounded font-sm">Detail</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" />
                                    </div>
                                </td>
                                <td>24</td>
                                <td><b>All Natural Italian-Style</b></td>
                                <td>Guy Hawkins</td>
                                <td>
                                    <ul class="rating-stars">
                                        <li style="width: 80%" class="stars-active">
                                            <img src="assets/imgs/icons/stars-active.svg" alt="stars" />
                                        </li>
                                        <li>
                                            <img src="assets/imgs/icons/starts-disable.svg" alt="stars" />
                                        </li>
                                    </ul>
                                </td>
                                <td>04.12.2019</td>
                                <td class="text-end">
                                    <a href="#" class="btn btn-md rounded font-sm">Detail</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" />
                                    </div>
                                </td>
                                <td>25</td>
                                <td><b>Angie’s Boomchickapop Sweet</b></td>
                                <td>Steven John</td>
                                <td>
                                    <ul class="rating-stars">
                                        <li style="width: 90%" class="stars-active">
                                            <img src="assets/imgs/icons/stars-active.svg" alt="stars" />
                                        </li>
                                        <li>
                                            <img src="assets/imgs/icons/starts-disable.svg" alt="stars" />
                                        </li>
                                    </ul>
                                </td>
                                <td>25.05.2020</td>
                                <td class="text-end">
                                    <a href="#" class="btn btn-md rounded font-sm">Detail</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" />
                                    </div>
                                </td>
                                <td>26</td>
                                <td><b>Foster Farms Takeout Crispy Classic</b></td>
                                <td>Kristin Watson</td>
                                <td>
                                    <ul class="rating-stars">
                                        <li style="width: 90%" class="stars-active">
                                            <img src="assets/imgs/icons/stars-active.svg" alt="stars" />
                                        </li>
                                        <li>
                                            <img src="assets/imgs/icons/starts-disable.svg" alt="stars" />
                                        </li>
                                    </ul>
                                </td>
                                <td>01.06.2020</td>
                                <td class="text-end">
                                    <a href="#" class="btn btn-md rounded font-sm">Detail</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" />
                                    </div>
                                </td>
                                <td>27</td>
                                <td><b>Blue Diamond Almonds Lightly Salted</b></td>
                                <td>Jane Cooper</td>
                                <td>
                                    <ul class="rating-stars">
                                        <li style="width: 100%" class="stars-active">
                                            <img src="assets/imgs/icons/stars-active.svg" alt="stars" />
                                        </li>
                                        <li>
                                            <img src="assets/imgs/icons/starts-disable.svg" alt="stars" />
                                        </li>
                                    </ul>
                                </td>
                                <td>13.03.2020</td>
                                <td class="text-end">
                                    <a href="#" class="btn btn-md rounded font-sm">Detail</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" />
                                    </div>
                                </td>
                                <td>28</td>
                                <td><b>Chobani Complete Vanilla Greek Yogurt</b></td>
                                <td>Courtney Henry</td>
                                <td>
                                    <ul class="rating-stars">
                                        <li style="width: 100%" class="stars-active">
                                            <img src="assets/imgs/icons/stars-active.svg" alt="stars" />
                                        </li>
                                        <li>
                                            <img src="assets/imgs/icons/starts-disable.svg" alt="stars" />
                                        </li>
                                    </ul>
                                </td>
                                <td>21.02.2020</td>
                                <td class="text-end">
                                    <a href="#" class="btn btn-md rounded font-sm">Detail</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" />
                                    </div>
                                </td>
                                <td>29</td>
                                <td><b>Canada Dry Ginger Ale – 2 L Bottle</b></td>
                                <td>Ralph Edwards</td>
                                <td>
                                    <ul class="rating-stars">
                                        <li style="width: 90%" class="stars-active">
                                            <img src="assets/imgs/icons/stars-active.svg" alt="stars" />
                                        </li>
                                        <li>
                                            <img src="assets/imgs/icons/starts-disable.svg" alt="stars" />
                                        </li>
                                    </ul>
                                </td>
                                <td>23.03.2020</td>
                                <td class="text-end">
                                    <a href="#" class="btn btn-md rounded font-sm">Detail</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" />
                                    </div>
                                </td>
                                <td>30</td>
                                <td><b>Encore Seafoods Stuffed Alaskan</b></td>
                                <td>Courtney Henry</td>
                                <td>
                                    <ul class="rating-stars">
                                        <li style="width: 70%" class="stars-active">
                                            <img src="assets/imgs/icons/stars-active.svg" alt="stars" />
                                        </li>
                                        <li>
                                            <img src="assets/imgs/icons/starts-disable.svg" alt="stars" />
                                        </li>
                                    </ul>
                                </td>
                                <td>20.02.2020</td>
                                <td class="text-end">
                                    <a href="#" class="btn btn-md rounded font-sm">Detail</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" />
                                    </div>
                                </td>
                                <td>31</td>
                                <td><b>Gorton Beer Battered Fish Fillets</b></td>
                                <td>Theresa Webb</td>
                                <td>
                                    <ul class="rating-stars">
                                        <li style="width: 20%" class="stars-active">
                                            <img src="assets/imgs/icons/stars-active.svg" alt="stars" />
                                        </li>
                                        <li>
                                            <img src="assets/imgs/icons/starts-disable.svg" alt="stars" />
                                        </li>
                                    </ul>
                                </td>
                                <td>10.03.2020</td>
                                <td class="text-end">
                                    <a href="#" class="btn btn-md rounded font-sm">Detail</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" />
                                    </div>
                                </td>
                                <td>32</td>
                                <td><b>Haagen-Dazs Caramel Cone</b></td>
                                <td>Darrell Steward</td>
                                <td>
                                    <ul class="rating-stars">
                                        <li style="width: 80%" class="stars-active">
                                            <img src="assets/imgs/icons/stars-active.svg" alt="stars" />
                                        </li>
                                        <li>
                                            <img src="assets/imgs/icons/starts-disable.svg" alt="stars" />
                                        </li>
                                    </ul>
                                </td>
                                <td>10.04.2020</td>
                                <td class="text-end">
                                    <a href="#" class="btn btn-md rounded font-sm">Detail</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" />
                                    </div>
                                </td>
                                <td>33</td>
                                <td><b>Nestle Original Coffee-Mate Coffee Creamer </b></td>
                                <td>Leslie Alexander</td>
                                <td>
                                    <ul class="rating-stars">
                                        <li style="width: 50%" class="stars-active">
                                            <img src="assets/imgs/icons/stars-active.svg" alt="stars" />
                                        </li>
                                        <li>
                                            <img src="assets/imgs/icons/starts-disable.svg" alt="stars" />
                                        </li>
                                    </ul>
                                </td>
                                <td>25.05.2020</td>
                                <td class="text-end">
                                    <a href="#" class="btn btn-md rounded font-sm">Detail</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" />
                                    </div>
                                </td>
                                <td>34</td>
                                <td><b>Seeds of Change Organic Quinoa</b></td>
                                <td>Esther Howard</td>
                                <td>
                                    <ul class="rating-stars">
                                        <li style="width: 100%" class="stars-active">
                                            <img src="assets/imgs/icons/stars-active.svg" alt="stars" />
                                        </li>
                                        <li>
                                            <img src="assets/imgs/icons/starts-disable.svg" alt="stars" />
                                        </li>
                                    </ul>
                                </td>
                                <td>07.04.2020</td>
                                <td class="text-end">
                                    <a href="#" class="btn btn-md rounded font-sm">Detail</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" />
                                    </div>
                                </td>
                                <td>35</td>
                                <td><b>Organic Frozen Triple Berry Blend</b></td>
                                <td>Steven John</td>
                                <td>
                                    <ul class="rating-stars">
                                        <li style="width: 100%" class="stars-active">
                                            <img src="assets/imgs/icons/stars-active.svg" alt="stars" />
                                        </li>
                                        <li>
                                            <img src="assets/imgs/icons/starts-disable.svg" alt="stars" />
                                        </li>
                                    </ul>
                                </td>
                                <td>10.10.2019</td>
                                <td class="text-end">
                                    <a href="#" class="btn btn-md rounded font-sm">Detail</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- table-responsive//end -->
            </div>
            <!-- card-body end// -->
        </div>
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