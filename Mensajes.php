<!doctype html>
<html lang="en" class="no-focus">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

        <title>Codebase - Bootstrap 4 Admin Template &amp; UI Framework</title>

        <meta name="description" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">

        <!-- Open Graph Meta -->
        <meta property="og:title" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework">
        <meta property="og:site_name" content="Codebase">
        <meta property="og:description" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
        <meta property="og:type" content="website">
        <meta property="og:url" content="">
        <meta property="og:image" content="">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="assets/media/favicons/favicon.png">
        <link rel="icon" type="image/png" sizes="192x192" href="assets/media/favicons/favicon-192x192.png">
        <link rel="apple-touch-icon" sizes="180x180" href="assets/media/favicons/apple-touch-icon-180x180.png">
        <!-- END Icons -->

        <!-- Stylesheets -->

        <!-- Page JS Plugins CSS -->
        <link rel="stylesheet" href="assets/js/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css">
        <link rel="stylesheet" href="assets/js/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
        <link rel="stylesheet" href="assets/js/plugins/select2/css/select2.min.css">
        <link rel="stylesheet" href="assets/js/plugins/jquery-tags-input/jquery.tagsinput.min.css">
        <link rel="stylesheet" href="assets/js/plugins/jquery-auto-complete/jquery.auto-complete.min.css">
        <link rel="stylesheet" href="assets/js/plugins/ion-rangeslider/css/ion.rangeSlider.css">
        <link rel="stylesheet" href="assets/js/plugins/dropzonejs/dist/dropzone.css">
        <link rel="stylesheet" href="assets/js/plugins/flatpickr/flatpickr.min.css">

        <!-- Fonts and Codebase framework -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,400i,600,700&display=swap">
        <link rel="stylesheet" id="css-main" href="assets/css/codebase.min.css">

        <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
        <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/flat.min.css"> -->
        <!-- END Stylesheets -->
    </head>
    <body>

        <!-- Page Container -->
        <!--
            Available classes for #page-container:

        GENERIC

            'enable-cookies'                            Remembers active color theme between pages (when set through color theme helper Template._uiHandleTheme())

        SIDEBAR & SIDE OVERLAY

            'sidebar-r'                                 Right Sidebar and left Side Overlay (default is left Sidebar and right Side Overlay)
            'sidebar-mini'                              Mini hoverable Sidebar (screen width > 991px)
            'sidebar-o'                                 Visible Sidebar by default (screen width > 991px)
            'sidebar-o-xs'                              Visible Sidebar by default (screen width < 992px)
            'sidebar-inverse'                           Dark themed sidebar

            'side-overlay-hover'                        Hoverable Side Overlay (screen width > 991px)
            'side-overlay-o'                            Visible Side Overlay by default

            'enable-page-overlay'                       Enables a visible clickable Page Overlay (closes Side Overlay on click) when Side Overlay opens

            'side-scroll'                               Enables custom scrolling on Sidebar and Side Overlay instead of native scrolling (screen width > 991px)

        HEADER

            ''                                          Static Header if no class is added
            'page-header-fixed'                         Fixed Header

        HEADER STYLE

            ''                                          Classic Header style if no class is added
            'page-header-modern'                        Modern Header style
            'page-header-inverse'                       Dark themed Header (works only with classic Header style)
            'page-header-glass'                         Light themed Header with transparency by default
                                                        (absolute position, perfect for light images underneath - solid light background on scroll if the Header is also set as fixed)
            'page-header-glass page-header-inverse'     Dark themed Header with transparency by default
                                                        (absolute position, perfect for dark images underneath - solid dark background on scroll if the Header is also set as fixed)

        MAIN CONTENT LAYOUT

            ''                                          Full width Main Content if no class is added
            'main-content-boxed'                        Full width Main Content with a specific maximum width (screen width > 1200px)
            'main-content-narrow'                       Full width Main Content with a percentage width (screen width > 1200px)
        -->
        <div id="page-container" class="sidebar-o enable-page-overlay side-scroll page-header-modern main-content-boxed">
            <!-- Side Overlay-->
            <aside id="side-overlay">
                <!-- Side Header -->
                <div class="content-header content-header-fullrow">
                    <div class="content-header-section align-parent">
                        <!-- Close Side Overlay -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                        <button type="button" class="btn btn-circle btn-dual-secondary align-v-r" data-toggle="layout" data-action="side_overlay_close">
                            <i class="fa fa-times text-danger"></i>
                        </button>
                        <!-- END Close Side Overlay -->

                        <!-- User Info -->
                        <div class="content-header-item">
                            <a class="img-link mr-5" href="be_pages_generic_profile.html">
                                <img class="img-avatar img-avatar32" src="assets/media/avatars/avatar15.jpg" alt="">
                            </a>
                            <a class="align-middle link-effect text-primary-dark font-w600" href="be_pages_generic_profile.html">John Smith</a>
                        </div>
                        <!-- END User Info -->
                    </div>
                </div>
                <!-- END Side Header -->

                <!-- Side Content -->
                <div class="content-side">
                    <!-- Search -->
                    <div class="block pull-t pull-r-l">
                        <div class="block-content block-content-full block-content-sm bg-body-light">
                            <form action="be_pages_generic_search.html" method="post">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="side-overlay-search" name="side-overlay-search" placeholder="Search..">
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-secondary px-10">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- END Search -->

                    <!-- Mini Stats -->
                    <div class="block pull-r-l">
                        <div class="block-content block-content-full block-content-sm bg-body-light">
                            <div class="row">
                                <div class="col-4">
                                    <div class="font-size-sm font-w600 text-uppercase text-muted">Clients</div>
                                    <div class="font-size-h4">460</div>
                                </div>
                                <div class="col-4">
                                    <div class="font-size-sm font-w600 text-uppercase text-muted">Sales</div>
                                    <div class="font-size-h4">728</div>
                                </div>
                                <div class="col-4">
                                    <div class="font-size-sm font-w600 text-uppercase text-muted">Earnings</div>
                                    <div class="font-size-h4">$7,860</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END Mini Stats -->

                    <!-- Friends -->
                    <div class="block pull-r-l">
                        <div class="block-header bg-body-light">
                            <h3 class="block-title"><i class="fa fa-fw fa-users font-size-default mr-5"></i>Friends</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                    <i class="si si-refresh"></i>
                                </button>
                                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                            </div>
                        </div>
                        <div class="block-content">
                            <ul class="nav-users push">
                                <li>
                                    <a href="be_pages_generic_profile.html">
                                        <img class="img-avatar" src="assets/media/avatars/avatar1.jpg" alt="">
                                        <i class="fa fa-circle text-success"></i> Megan Fuller
                                        <div class="font-w400 font-size-xs text-muted">Photographer</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="be_pages_generic_profile.html">
                                        <img class="img-avatar" src="assets/media/avatars/avatar11.jpg" alt="">
                                        <i class="fa fa-circle text-success"></i> Jose Wagner
                                        <div class="font-w400 font-size-xs text-muted">Web Designer</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="be_pages_generic_profile.html">
                                        <img class="img-avatar" src="assets/media/avatars/avatar7.jpg" alt="">
                                        <i class="fa fa-circle text-warning"></i> Lori Grant
                                        <div class="font-w400 font-size-xs text-muted">UI Designer</div>
                                    </a>
                                </li>
                                <li>
                                    <a href="be_pages_generic_profile.html">
                                        <img class="img-avatar" src="assets/media/avatars/avatar10.jpg" alt="">
                                        <i class="fa fa-circle text-danger"></i> Ralph Murray
                                        <div class="font-w400 font-size-xs text-muted">Copywriter</div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- END Friends -->

                    <!-- Activity -->
                    <div class="block pull-r-l">
                        <div class="block-header bg-body-light">
                            <h3 class="block-title">
                                <i class="fa fa-fw fa-clock-o font-size-default mr-5"></i>Activity
                            </h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo">
                                    <i class="si si-refresh"></i>
                                </button>
                                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                            </div>
                        </div>
                        <div class="block-content">
                            <ul class="list list-activity">
                                <li>
                                    <i class="si si-wallet text-success"></i>
                                    <div class="font-w600">+$29 New sale</div>
                                    <div>
                                        <a href="javascript:void(0)">Admin Template</a>
                                    </div>
                                    <div class="font-size-xs text-muted">5 min ago</div>
                                </li>
                                <li>
                                    <i class="si si-close text-danger"></i>
                                    <div class="font-w600">Project removed</div>
                                    <div>
                                        <a href="javascript:void(0)">Best Icon Set</a>
                                    </div>
                                    <div class="font-size-xs text-muted">26 min ago</div>
                                </li>
                                <li>
                                    <i class="si si-pencil text-info"></i>
                                    <div class="font-w600">You edited the file</div>
                                    <div>
                                        <a href="javascript:void(0)">
                                            <i class="fa fa-file-text-o"></i> Docs.doc
                                        </a>
                                    </div>
                                    <div class="font-size-xs text-muted">3 hours ago</div>
                                </li>
                                <li>
                                    <i class="si si-plus text-success"></i>
                                    <div class="font-w600">New user</div>
                                    <div>
                                        <a href="javascript:void(0)">StudioWeb - View Profile</a>
                                    </div>
                                    <div class="font-size-xs text-muted">5 hours ago</div>
                                </li>
                                <li>
                                    <i class="si si-wrench text-warning"></i>
                                    <div class="font-w600">App v5.5 is available</div>
                                    <div>
                                        <a href="javascript:void(0)">Update now</a>
                                    </div>
                                    <div class="font-size-xs text-muted">8 hours ago</div>
                                </li>
                                <li>
                                    <i class="si si-user-follow text-pulse"></i>
                                    <div class="font-w600">+1 Friend Request</div>
                                    <div>
                                        <a href="javascript:void(0)">Accept</a>
                                    </div>
                                    <div class="font-size-xs text-muted">1 day ago</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- END Activity -->

                    <!-- Profile -->
                    <div class="block pull-r-l">
                        <div class="block-header bg-body-light">
                            <h3 class="block-title">
                                <i class="fa fa-fw fa-pencil font-size-default mr-5"></i>Profile
                            </h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                            </div>
                        </div>
                        <div class="block-content">
                            <form action="be_pages_dashboard.html" method="post" onsubmit="return false;">
                                <div class="form-group mb-15">
                                    <label for="side-overlay-profile-name">Name</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="side-overlay-profile-name" name="side-overlay-profile-name" placeholder="Your name.." value="John Smith">
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="fa fa-user"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mb-15">
                                    <label for="side-overlay-profile-email">Email</label>
                                    <div class="input-group">
                                        <input type="email" class="form-control" id="side-overlay-profile-email" name="side-overlay-profile-email" placeholder="Your email.." value="john.smith@example.com">
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="fa fa-envelope"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mb-15">
                                    <label for="side-overlay-profile-password">New Password</label>
                                    <div class="input-group">
                                        <input type="password" class="form-control" id="side-overlay-profile-password" name="side-overlay-profile-password" placeholder="New Password..">
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="fa fa-asterisk"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group mb-15">
                                    <label for="side-overlay-profile-password-confirm">Confirm New Password</label>
                                    <div class="input-group">
                                        <input type="password" class="form-control" id="side-overlay-profile-password-confirm" name="side-overlay-profile-password-confirm" placeholder="Confirm New Password..">
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="fa fa-asterisk"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-6">
                                        <button type="submit" class="btn btn-block btn-alt-primary">
                                            <i class="fa fa-refresh mr-5"></i> Update
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- END Profile -->

                    <!-- Settings -->
                    <div class="block pull-r-l">
                        <div class="block-header bg-body-light">
                            <h3 class="block-title">
                                <i class="fa fa-fw fa-wrench font-size-default mr-5"></i>Settings
                            </h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
                            </div>
                        </div>
                        <div class="block-content">
                            <div class="row gutters-tiny">
                                <div class="col-6">
                                    <div class="custom-control custom-checkbox mb-5">
                                        <input type="checkbox" class="custom-control-input" id="side-overlay-settings-status" name="side-overlay-settings-status" value="1" checked>
                                        <label class="custom-control-label" for="side-overlay-settings-status">Online Status</label>
                                    </div>
                                    <div class="custom-control custom-checkbox mb-5">
                                        <input type="checkbox" class="custom-control-input" id="side-overlay-settings-public-profile" name="side-overlay-settings-public-profile" value="1">
                                        <label class="custom-control-label" for="side-overlay-settings-public-profile">Public Profile</label>
                                    </div>
                                    <div class="custom-control custom-checkbox mb-5">
                                        <input type="checkbox" class="custom-control-input" id="side-overlay-settings-notifications" name="side-overlay-settings-notifications" value="1" checked>
                                        <label class="custom-control-label" for="side-overlay-settings-notifications">Notifications</label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="custom-control custom-checkbox mb-5">
                                        <input type="checkbox" class="custom-control-input" id="side-overlay-settings-updates" name="side-overlay-settings-updates" value="1">
                                        <label class="custom-control-label" for="side-overlay-settings-updates">Auto updates</label>
                                    </div>
                                    <div class="custom-control custom-checkbox mb-5">
                                        <input type="checkbox" class="custom-control-input" id="side-overlay-settings-api-access" name="side-overlay-settings-api-access" value="1" checked>
                                        <label class="custom-control-label" for="side-overlay-settings-api-access">API Access</label>
                                    </div>
                                    <div class="custom-control custom-checkbox mb-5">
                                        <input type="checkbox" class="custom-control-input" id="side-overlay-settings-limit-requests" name="side-overlay-settings-limit-requests" value="1">
                                        <label class="custom-control-label" for="side-overlay-settings-limit-requests">API Requests</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END Settings -->
                </div>
                <!-- END Side Content -->
            </aside>
            <!-- END Side Overlay -->

            <!-- Sidebar -->
            <!--
                Helper classes

                Adding .sidebar-mini-hide to an element will make it invisible (opacity: 0) when the sidebar is in mini mode
                Adding .sidebar-mini-show to an element will make it visible (opacity: 1) when the sidebar is in mini mode
                    If you would like to disable the transition, just add the .sidebar-mini-notrans along with one of the previous 2 classes

                Adding .sidebar-mini-hidden to an element will hide it when the sidebar is in mini mode
                Adding .sidebar-mini-visible to an element will show it only when the sidebar is in mini mode
                    - use .sidebar-mini-visible-b if you would like to be a block when visible (display: block)
            -->
            <nav id="sidebar">
                <!-- Sidebar Content -->
                <div class="sidebar-content">
                    <!-- Side Header -->
                    <div class="content-header content-header-fullrow px-15">
                        <!-- Mini Mode -->
                        <div class="content-header-section sidebar-mini-visible-b">
                            <!-- Logo -->
                            <span class="content-header-item font-w700 font-size-xl float-left animated fadeIn">
                                <span class="text-dual-primary-dark">c</span><span class="text-primary">b</span>
                            </span>
                            <!-- END Logo -->
                        </div>
                        <!-- END Mini Mode -->

                        <!-- Normal Mode -->
                        <div class="content-header-section text-center align-parent sidebar-mini-hidden">
                            <!-- Close Sidebar, Visible only on mobile screens -->
                            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                            <button type="button" class="btn btn-circle btn-dual-secondary d-lg-none align-v-r" data-toggle="layout" data-action="sidebar_close">
                                <i class="fa fa-times text-danger"></i>
                            </button>
                            <!-- END Close Sidebar -->

                            <!-- Logo -->
                            <div class="content-header-item">
                                <a class="link-effect font-w700" href="index.html">
                                    <i class="si si-fire text-primary"></i>
                                    <span class="font-size-xl text-dual-primary-dark">code</span><span class="font-size-xl text-primary">base</span>
                                </a>
                            </div>
                            <!-- END Logo -->
                        </div>
                        <!-- END Normal Mode -->
                    </div>
                    <!-- END Side Header -->

                    <!-- Side User -->
                    <div class="content-side content-side-full content-side-user px-10 align-parent">
                        <!-- Visible only in mini mode -->
                        <div class="sidebar-mini-visible-b align-v animated fadeIn">
                            <img class="img-avatar img-avatar32" src="assets/media/avatars/avatar15.jpg" alt="">
                        </div>
                        <!-- END Visible only in mini mode -->

                        <!-- Visible only in normal mode -->
                        <div class="sidebar-mini-hidden-b text-center">
                            <a class="img-link" href="be_pages_generic_profile.html">
                                <img class="img-avatar" src="assets/media/avatars/avatar15.jpg" alt="">
                            </a>
                            <ul class="list-inline mt-10">
                                <li class="list-inline-item">
                                    <a class="link-effect text-dual-primary-dark font-size-sm font-w600 text-uppercase" href="be_pages_generic_profile.html">J. Smith</a>
                                </li>
                                <li class="list-inline-item">
                                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                                    <a class="link-effect text-dual-primary-dark" data-toggle="layout" data-action="sidebar_style_inverse_toggle" href="javascript:void(0)">
                                        <i class="si si-drop"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="link-effect text-dual-primary-dark" href="op_auth_signin.html">
                                        <i class="si si-logout"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- END Visible only in normal mode -->
                    </div>
                    <!-- END Side User -->

                    <!-- Side Navigation -->
                    <div class="content-side content-side-full">
                        <ul class="nav-main">
                            <li>
                                <a href="be_pages_dashboard.html"><i class="si si-cup"></i><span class="sidebar-mini-hide">Dashboard</span></a>
                            </li>
                            <li>
                                <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-badge"></i><span class="sidebar-mini-hide">Page Kits</span></a>
                                <ul>
                                    <li>
                                        <a class="nav-submenu" data-toggle="nav-submenu" href="#"><span class="sidebar-mini-hide">Dashboards</span></a>
                                        <ul>
                                            <li>
                                                <a href="be_pages_dashboard2.html"><span class="sidebar-mini-hide">Dashboard 2</span></a>
                                            </li>
                                            <li>
                                                <a href="be_pages_dashboard3.html"><span class="sidebar-mini-hide">Dashboard 3</span></a>
                                            </li>
                                            <li>
                                                <a href="be_pages_dashboard4.html"><span class="sidebar-mini-hide">Dashboard 4</span></a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="nav-submenu" data-toggle="nav-submenu" href="#"><span class="sidebar-mini-hide">Hosting</span></a>
                                        <ul>
                                            <li>
                                                <a href="be_pages_hosting_dashboard.html">Dashboard</a>
                                            </li>
                                            <li>
                                                <a href="be_pages_hosting_emails.html">Emails</a>
                                            </li>
                                            <li>
                                                <a href="be_pages_hosting_account.html">Account</a>
                                            </li>
                                            <li>
                                                <a href="be_pages_hosting_support.html">Support</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="nav-submenu" data-toggle="nav-submenu" href="#"><span class="sidebar-mini-hide">Real Estate</span></a>
                                        <ul>
                                            <li>
                                                <a href="be_pages_real_estate_dashboard.html">Dashboard</a>
                                            </li>
                                            <li>
                                                <a href="be_pages_real_estate_listing.html">Listing</a>
                                            </li>
                                            <li>
                                                <a href="be_pages_real_estate_listing_new.html">Add New Listing</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="nav-submenu" data-toggle="nav-submenu" href="#"><span class="sidebar-mini-hide">Crypto</span></a>
                                        <ul>
                                            <li>
                                                <a href="be_pages_crypto_dashboard.html">Dashboard</a>
                                            </li>
                                            <li>
                                                <a href="be_pages_crypto_buy_sell.html">Buy/Sell</a>
                                            </li>
                                            <li>
                                                <a href="be_pages_crypto_wallets.html">Wallets</a>
                                            </li>
                                            <li>
                                                <a href="be_pages_crypto_settings.html">Settings</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="nav-submenu" data-toggle="nav-submenu" href="#"><span class="sidebar-mini-hide">e-Commerce</span></a>
                                        <ul>
                                            <li>
                                                <a href="be_pages_ecom_dashboard.html">Dashboard</a>
                                            </li>
                                            <li>
                                                <a href="be_pages_ecom_orders.html">Orders</a>
                                            </li>
                                            <li>
                                                <a href="be_pages_ecom_order.html">Order</a>
                                            </li>
                                            <li>
                                                <a href="be_pages_ecom_products.html">Products</a>
                                            </li>
                                            <li>
                                                <a href="be_pages_ecom_product_edit.html">Product Edit</a>
                                            </li>
                                            <li>
                                                <a href="be_pages_ecom_customer.html">Customer</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="nav-submenu" data-toggle="nav-submenu" href="#"><span class="sidebar-mini-hide">e-Learning</span></a>
                                        <ul>
                                            <li>
                                                <a href="be_pages_elearning_courses.html">Courses</a>
                                            </li>
                                            <li>
                                                <a href="be_pages_elearning_course.html">Course</a>
                                            </li>
                                            <li>
                                                <a href="be_pages_elearning_lesson.html">Lesson</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="nav-submenu" data-toggle="nav-submenu" href="#"><span class="sidebar-mini-hide">Forum</span></a>
                                        <ul>
                                            <li>
                                                <a href="be_pages_forum_categories.html">Categories</a>
                                            </li>
                                            <li>
                                                <a href="be_pages_forum_topics.html">Topics</a>
                                            </li>
                                            <li>
                                                <a href="be_pages_forum_discussion.html">Discussion</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="nav-submenu" data-toggle="nav-submenu" href="#"><span class="sidebar-mini-hide">Alternative Dashboards</span></a>
                                        <ul>
                                            <li>
                                                <a href="db_classic.html"><span class="sidebar-mini-hide">Classic</span></a>
                                            </li>
                                            <li>
                                                <a href="db_clean.html"><span class="sidebar-mini-hide">Clean</span></a>
                                            </li>
                                            <li>
                                                <a href="db_social.html"><span class="sidebar-mini-hide">Social</span></a>
                                            </li>
                                            <li>
                                                <a href="db_corporate.html"><span class="sidebar-mini-hide">Corporate</span></a>
                                            </li>
                                            <li>
                                                <a href="db_minimal.html"><span class="sidebar-mini-hide">Minimal</span></a>
                                            </li>
                                            <li>
                                                <a href="db_pop.html"><span class="sidebar-mini-hide">Pop</span></a>
                                            </li>
                                            <li>
                                                <a href="db_dark.html"><span class="sidebar-mini-hide">Dark</span></a>
                                            </li>
                                            <li>
                                                <a href="db_medical.html"><span class="sidebar-mini-hide">Medical</span></a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="nav-submenu" data-toggle="nav-submenu" href="#"><span class="sidebar-mini-hide">Boxed Backend</span></a>
                                        <ul>
                                            <li>
                                                <a href="bd_dashboard.html">Dashboard</a>
                                            </li>
                                            <li>
                                                <a href="bd_search.html">Search</a>
                                            </li>
                                            <li>
                                                <a href="bd_variations_hero_simple_1.html">Hero Simple 1</a>
                                            </li>
                                            <li>
                                                <a href="bd_variations_hero_simple_2.html">Hero Simple 2</a>
                                            </li>
                                            <li>
                                                <a href="bd_variations_hero_simple_3.html">Hero Simple 3</a>
                                            </li>
                                            <li>
                                                <a href="bd_variations_hero_simple_4.html">Hero Simple 4</a>
                                            </li>
                                            <li>
                                                <a href="bd_variations_hero_image_1.html">Hero Image 1</a>
                                            </li>
                                            <li>
                                                <a href="bd_variations_hero_image_2.html">Hero Image 2</a>
                                            </li>
                                            <li>
                                                <a href="bd_variations_hero_image_3.html">Hero Image 3</a>
                                            </li>
                                            <li>
                                                <a href="bd_variations_hero_image_4.html">Hero Image 4</a>
                                            </li>
                                            <li>
                                                <a href="bd_variations_hero_video_1.html">Hero Video 1</a>
                                            </li>
                                            <li>
                                                <a href="bd_variations_hero_video_2.html">Hero Video 2</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-main-heading"><span class="sidebar-mini-visible">UI</span><span class="sidebar-mini-hidden">User Interface</span></li>
                            <li>
                                <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-puzzle"></i><span class="sidebar-mini-hide">Blocks</span></a>
                                <ul>
                                    <li>
                                        <a href="be_blocks.html">Styles</a>
                                    </li>
                                    <li>
                                        <a href="be_blocks_draggable.html">Draggable</a>
                                    </li>
                                    <li>
                                        <a href="be_blocks_api.html">API</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-moustache"></i><span class="sidebar-mini-hide">Widgets</span></a>
                                <ul>
                                    <li>
                                        <a href="be_widgets_tiles.html">Tiles</a>
                                    </li>
                                    <li>
                                        <a href="be_widgets_users.html">Users</a>
                                    </li>
                                    <li>
                                        <a href="be_widgets_stats.html">Statistics</a>
                                    </li>
                                    <li>
                                        <a href="be_widgets_media.html">Media</a>
                                    </li>
                                    <li>
                                        <a href="be_widgets_blog.html">Blog</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-energy"></i><span class="sidebar-mini-hide">Elements</span></a>
                                <ul>
                                    <li>
                                        <a href="be_ui_grid.html">Grid</a>
                                    </li>
                                    <li>
                                        <a href="be_ui_icons.html">Icons</a>
                                    </li>
                                    <li>
                                        <a href="be_ui_typography.html">Typography</a>
                                    </li>
                                    <li>
                                        <a href="be_ui_activity.html">Activity</a>
                                    </li>
                                    <li>
                                        <a href="be_ui_buttons.html">Buttons</a>
                                    </li>
                                    <li>
                                        <a href="be_ui_navigation.html">Navigation</a>
                                    </li>
                                    <li>
                                        <a href="be_ui_tabs.html">Tabs</a>
                                    </li>
                                    <li>
                                        <a href="be_ui_modals_tooltips.html">Modals &amp; Tooltips</a>
                                    </li>
                                    <li>
                                        <a href="be_ui_images.html">Images</a>
                                    </li>
                                    <li>
                                        <a href="be_ui_animations.html">Animations</a>
                                    </li>
                                    <li>
                                        <a href="be_ui_ribbons.html">Ribbons</a>
                                    </li>
                                    <li>
                                        <a href="be_ui_timeline.html">Timeline</a>
                                    </li>
                                    <li>
                                        <a href="be_ui_accordion.html">Accordion</a>
                                    </li>
                                    <li>
                                        <a href="be_ui_color_themes.html">Color Themes</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-layers"></i><span class="sidebar-mini-hide">Tables</span></a>
                                <ul>
                                    <li>
                                        <a href="be_tables_styles.html">Styles</a>
                                    </li>
                                    <li>
                                        <a href="be_tables_responsive.html">Responsive</a>
                                    </li>
                                    <li>
                                        <a href="be_tables_helpers.html">Helpers</a>
                                    </li>
                                    <li>
                                        <a href="be_tables_pricing.html">Pricing</a>
                                    </li>
                                    <li>
                                        <a href="be_tables_datatables.html">DataTables</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="open">
                                <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-note"></i><span class="sidebar-mini-hide">Forms</span></a>
                                <ul>
                                    <li>
                                        <a href="be_forms_elements_bootstrap.html">Bootstrap Elements</a>
                                    </li>
                                    <li>
                                        <a href="be_forms_elements_material.html">Material Elements</a>
                                    </li>
                                    <li>
                                        <a href="be_forms_css_inputs.html">CSS Inputs</a>
                                    </li>
                                    <li>
                                        <a class="active" href="be_forms_plugins.html">Plugins</a>
                                    </li>
                                    <li>
                                        <a href="be_forms_editors.html">Editors</a>
                                    </li>
                                    <li>
                                        <a href="be_forms_validation.html">Validation</a>
                                    </li>
                                    <li>
                                        <a href="be_forms_wizard.html">Wizard</a>
                                    </li>
                                    <li>
                                        <a href="be_forms_premade.html">Pre-made</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-main-heading"><span class="sidebar-mini-visible">BD</span><span class="sidebar-mini-hidden">Build</span></li>
                            <li>
                                <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-vector"></i><span class="sidebar-mini-hide">Layout</span></a>
                                <ul>
                                    <li>
                                        <a class="nav-submenu" data-toggle="nav-submenu" href="#">General</a>
                                        <ul>
                                            <li>
                                                <a href="be_layout_default.html">Default</a>
                                            </li>
                                            <li>
                                                <a href="be_layout_flipped.html">Flipped</a>
                                            </li>
                                            <li>
                                                <a href="be_layout_native_scrolling.html">Native Scrolling</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="nav-submenu" data-toggle="nav-submenu" href="#">Header</a>
                                        <ul>
                                            <li>
                                                <a class="nav-submenu" data-toggle="nav-submenu" href="#">Static</a>
                                                <ul>
                                                    <li>
                                                        <a href="be_layout_header_modern.html">Modern</a>
                                                    </li>
                                                    <li>
                                                        <a href="be_layout_header_classic.html">Classic</a>
                                                    </li>
                                                    <li>
                                                        <a href="be_layout_header_classic_inverse.html">Classic Inverse</a>
                                                    </li>
                                                    <li>
                                                        <a href="be_layout_header_glass.html">Glass</a>
                                                    </li>
                                                    <li>
                                                        <a href="be_layout_header_glass_inverse.html">Glass Inverse</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <a class="nav-submenu" data-toggle="nav-submenu" href="#">Fixed</a>
                                                <ul>
                                                    <li>
                                                        <a href="be_layout_header_fixed_modern.html">Modern</a>
                                                    </li>
                                                    <li>
                                                        <a href="be_layout_header_fixed_classic.html">Classic</a>
                                                    </li>
                                                    <li>
                                                        <a href="be_layout_header_fixed_classic_inverse.html">Classic Inverse</a>
                                                    </li>
                                                    <li>
                                                        <a href="be_layout_header_fixed_glass.html">Glass</a>
                                                    </li>
                                                    <li>
                                                        <a href="be_layout_header_fixed_glass_inverse.html">Glass Inverse</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="nav-submenu" data-toggle="nav-submenu" href="#">Sidebar</a>
                                        <ul>
                                            <li>
                                                <a href="be_layout_sidebar_inverse.html">Inverse</a>
                                            </li>
                                            <li>
                                                <a href="be_layout_sidebar_hidden.html">Hidden</a>
                                            </li>
                                            <li>
                                                <a href="be_layout_sidebar_mini.html">Mini</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="nav-submenu" data-toggle="nav-submenu" href="#">Side Overlay</a>
                                        <ul>
                                            <li>
                                                <a href="be_layout_side_overlay_visible.html">Visible</a>
                                            </li>
                                            <li>
                                                <a href="be_layout_side_overlay_hoverable.html">Hoverable</a>
                                            </li>
                                            <li>
                                                <a href="be_layout_side_overlay_no_page_overlay.html">No Page Overlay</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="nav-submenu" data-toggle="nav-submenu" href="#">Main Content</a>
                                        <ul>
                                            <li>
                                                <a href="be_layout_content_boxed.html">Boxed</a>
                                            </li>
                                            <li>
                                                <a href="be_layout_content_narrow.html">Narrow</a>
                                            </li>
                                            <li>
                                                <a href="be_layout_content_full_width.html">Full Width</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="nav-submenu" data-toggle="nav-submenu" href="#">Hero</a>
                                        <ul>
                                            <li>
                                                <a href="be_layout_hero_color.html">Color</a>
                                            </li>
                                            <li>
                                                <a href="be_layout_hero_bubbles.html">Bubbles</a>
                                            </li>
                                            <li>
                                                <a href="be_layout_hero_image.html">Image</a>
                                            </li>
                                            <li>
                                                <a href="be_layout_hero_video.html">Video</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="be_layout_api.html">API</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-trophy"></i><span class="sidebar-mini-hide">Components</span></a>
                                <ul>
                                    <li>
                                        <a class="nav-submenu" data-toggle="nav-submenu" href="#"><span class="sidebar-mini-hide">Main Menu</span></a>
                                        <ul>
                                            <li>
                                                <a href="#">Link 1-1</a>
                                            </li>
                                            <li>
                                                <a href="#">Link 1-2</a>
                                            </li>
                                            <li>
                                                <a class="nav-submenu" data-toggle="nav-submenu" href="#">Sub Level 2</a>
                                                <ul>
                                                    <li>
                                                        <a href="#">Link 2-1</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Link 2-2</a>
                                                    </li>
                                                    <li>
                                                        <a class="nav-submenu" data-toggle="nav-submenu" href="#">Sub Level 3</a>
                                                        <ul>
                                                            <li>
                                                                <a href="#">Link 3-1</a>
                                                            </li>
                                                            <li>
                                                                <a href="#">Link 3-2</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="nav-submenu" data-toggle="nav-submenu" href="#">Chat</a>
                                        <ul>
                                            <li>
                                                <a href="be_comp_chat_multiple.html">Multiple</a>
                                            </li>
                                            <li>
                                                <a href="be_comp_chat_multiple_alt.html">Multiple Alt</a>
                                            </li>
                                            <li>
                                                <a href="be_comp_chat_single.html">Single</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="be_comp_charts.html">Charts</a>
                                    </li>
                                    <li>
                                        <a href="be_comp_nestable.html">Nestable</a>
                                    </li>
                                    <li>
                                        <a href="be_comp_gallery.html">Gallery</a>
                                    </li>
                                    <li>
                                        <a href="be_comp_sliders.html">Sliders</a>
                                    </li>
                                    <li>
                                        <a href="be_comp_scrolling.html">Scrolling</a>
                                    </li>
                                    <li>
                                        <a href="be_comp_rating.html">Rating</a>
                                    </li>
                                    <li>
                                        <a href="be_comp_filtering.html">Filtering</a>
                                    </li>
                                    <li>
                                        <a href="be_comp_appear.html">Appear</a>
                                    </li>
                                    <li>
                                        <a href="be_comp_countto.html">CountTo</a>
                                    </li>
                                    <li>
                                        <a href="be_comp_calendar.html">Calendar</a>
                                    </li>
                                    <li>
                                        <a href="be_comp_image_cropper.html">Image Cropper</a>
                                    </li>
                                    <li>
                                        <a href="be_comp_maps_google.html">Google Maps</a>
                                    </li>
                                    <li>
                                        <a href="be_comp_maps_vector.html">Vector Maps</a>
                                    </li>
                                    <li>
                                        <a href="be_comp_syntax_highlighting.html">Syntax Highlighting</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-main-heading"><span class="sidebar-mini-visible">PG</span><span class="sidebar-mini-hidden">Pages</span></li>
                            <li>
                                <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-globe-alt"></i><span class="sidebar-mini-hide">Generic</span></a>
                                <ul>
                                    <li>
                                        <a href="be_pages_generic_blank.html">Blank</a>
                                    </li>
                                    <li>
                                        <a href="be_pages_generic_blank_block.html">Blank (Block)</a>
                                    </li>
                                    <li>
                                        <a href="be_pages_generic_blank_breadcrumb.html">Blank (Breadcrumb)</a>
                                    </li>
                                    <li>
                                        <a href="be_pages_generic_scrumboard.html">Scrum Board</a>
                                    </li>
                                    <li>
                                        <a href="be_pages_generic_search.html">Search</a>
                                    </li>
                                    <li>
                                        <a href="be_pages_generic_profile.html">Profile</a>
                                    </li>
                                    <li>
                                        <a href="be_pages_generic_profile_edit.html">Profile Edit</a>
                                    </li>
                                    <li>
                                        <a href="be_pages_generic_inbox.html">Inbox</a>
                                    </li>
                                    <li>
                                        <a href="be_pages_generic_invoice.html">Invoice</a>
                                    </li>
                                    <li>
                                        <a href="be_pages_generic_faq.html">FAQ</a>
                                    </li>
                                    <li>
                                        <a href="be_pages_generic_blog.html">Blog</a>
                                    </li>
                                    <li>
                                        <a href="be_pages_generic_story.html">Story</a>
                                    </li>
                                    <li>
                                        <a href="be_pages_generic_project_list.html">Project List</a>
                                    </li>
                                    <li>
                                        <a href="be_pages_generic_project.html">Project</a>
                                    </li>
                                    <li>
                                        <a href="be_pages_generic_upgrade_plan.html">Upgrade Plan</a>
                                    </li>
                                    <li>
                                        <a href="be_pages_generic_team.html">Team</a>
                                    </li>
                                    <li>
                                        <a href="be_pages_generic_contact.html">Contact</a>
                                    </li>
                                    <li>
                                        <a href="be_pages_generic_todo.html">Todo</a>
                                    </li>
                                    <li>
                                        <a href="op_coming_soon.html">Coming Soon</a>
                                    </li>
                                    <li>
                                        <a href="op_maintenance.html">Maintenance</a>
                                    </li>
                                    <li>
                                        <a href="op_status.html">Status</a>
                                    </li>
                                    <li>
                                        <a href="op_installation.html">Installation</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-lock"></i><span class="sidebar-mini-hide">Authentication</span></a>
                                <ul>
                                    <li>
                                        <a href="be_pages_auth_all.html">All</a>
                                    </li>
                                    <li>
                                        <a href="op_auth_signin.html">Sign In</a>
                                    </li>
                                    <li>
                                        <a href="op_auth_signin2.html">Sign In 2</a>
                                    </li>
                                    <li>
                                        <a href="op_auth_signin3.html">Sign In 3</a>
                                    </li>
                                    <li>
                                        <a href="op_auth_signup.html">Sign Up</a>
                                    </li>
                                    <li>
                                        <a href="op_auth_signup2.html">Sign Up 2</a>
                                    </li>
                                    <li>
                                        <a href="op_auth_signup3.html">Sign Up 3</a>
                                    </li>
                                    <li>
                                        <a href="op_auth_lock.html">Lock Screen</a>
                                    </li>
                                    <li>
                                        <a href="op_auth_lock2.html">Lock Screen 2</a>
                                    </li>
                                    <li>
                                        <a href="op_auth_lock3.html">Lock Screen 3</a>
                                    </li>
                                    <li>
                                        <a href="op_auth_reminder.html">Pass Reminder</a>
                                    </li>
                                    <li>
                                        <a href="op_auth_reminder2.html">Pass Reminder 2</a>
                                    </li>
                                    <li>
                                        <a href="op_auth_reminder3.html">Pass Reminder 3</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="nav-submenu" data-toggle="nav-submenu" href="#"><i class="si si-flag"></i><span class="sidebar-mini-hide">Error</span></a>
                                <ul>
                                    <li>
                                        <a href="be_pages_error_all.html">All</a>
                                    </li>
                                    <li>
                                        <a href="op_error_400.html">400</a>
                                    </li>
                                    <li>
                                        <a href="op_error_401.html">401</a>
                                    </li>
                                    <li>
                                        <a href="op_error_403.html">403</a>
                                    </li>
                                    <li>
                                        <a href="op_error_404.html">404</a>
                                    </li>
                                    <li>
                                        <a href="op_error_500.html">500</a>
                                    </li>
                                    <li>
                                        <a href="op_error_503.html">503</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- END Side Navigation -->
                </div>
                <!-- Sidebar Content -->
            </nav>
            <!-- END Sidebar -->

            <!-- Header -->
            <header id="page-header">
                <!-- Header Content -->
                <div class="content-header">
                    <!-- Left Section -->
                    <div class="content-header-section">
                        <!-- Toggle Sidebar -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                        <button type="button" class="btn btn-circle btn-dual-secondary" data-toggle="layout" data-action="sidebar_toggle">
                            <i class="fa fa-navicon"></i>
                        </button>
                        <!-- END Toggle Sidebar -->

                        <!-- Open Search Section -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                        <button type="button" class="btn btn-circle btn-dual-secondary" data-toggle="layout" data-action="header_search_on">
                            <i class="fa fa-search"></i>
                        </button>
                        <!-- END Open Search Section -->

                        <!-- Layout Options (used just for demonstration) -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-circle btn-dual-secondary" id="page-header-options-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-wrench"></i>
                            </button>
                            <div class="dropdown-menu min-width-300" aria-labelledby="page-header-options-dropdown">
                                <h5 class="h6 text-center py-10 mb-10 border-b text-uppercase">Settings</h5>
                                <h6 class="dropdown-header">Color Themes</h6>
                                <div class="row no-gutters text-center mb-5">
                                    <div class="col-2 mb-5">
                                        <a class="text-default" data-toggle="theme" data-theme="default" href="javascript:void(0)">
                                            <i class="fa fa-2x fa-circle"></i>
                                        </a>
                                    </div>
                                    <div class="col-2 mb-5">
                                        <a class="text-elegance" data-toggle="theme" data-theme="assets/css/themes/elegance.min.css" href="javascript:void(0)">
                                            <i class="fa fa-2x fa-circle"></i>
                                        </a>
                                    </div>
                                    <div class="col-2 mb-5">
                                        <a class="text-pulse" data-toggle="theme" data-theme="assets/css/themes/pulse.min.css" href="javascript:void(0)">
                                            <i class="fa fa-2x fa-circle"></i>
                                        </a>
                                    </div>
                                    <div class="col-2 mb-5">
                                        <a class="text-flat" data-toggle="theme" data-theme="assets/css/themes/flat.min.css" href="javascript:void(0)">
                                            <i class="fa fa-2x fa-circle"></i>
                                        </a>
                                    </div>
                                    <div class="col-2 mb-5">
                                        <a class="text-corporate" data-toggle="theme" data-theme="assets/css/themes/corporate.min.css" href="javascript:void(0)">
                                            <i class="fa fa-2x fa-circle"></i>
                                        </a>
                                    </div>
                                    <div class="col-2 mb-5">
                                        <a class="text-earth" data-toggle="theme" data-theme="assets/css/themes/earth.min.css" href="javascript:void(0)">
                                            <i class="fa fa-2x fa-circle"></i>
                                        </a>
                                    </div>
                                </div>
                                <h6 class="dropdown-header">Header</h6>
                                <div class="row gutters-tiny text-center mb-5">
                                    <div class="col-6">
                                        <button type="button" class="btn btn-sm btn-block btn-alt-secondary" data-toggle="layout" data-action="header_fixed_toggle">Fixed Mode</button>
                                    </div>
                                    <div class="col-6">
                                        <button type="button" class="btn btn-sm btn-block btn-alt-secondary d-none d-lg-block mb-10" data-toggle="layout" data-action="header_style_classic">Classic Style</button>
                                    </div>
                                </div>
                                <h6 class="dropdown-header">Sidebar</h6>
                                <div class="row gutters-tiny text-center mb-5">
                                    <div class="col-6">
                                        <button type="button" class="btn btn-sm btn-block btn-alt-secondary mb-10" data-toggle="layout" data-action="sidebar_style_inverse_off">Light</button>
                                    </div>
                                    <div class="col-6">
                                        <button type="button" class="btn btn-sm btn-block btn-alt-secondary mb-10" data-toggle="layout" data-action="sidebar_style_inverse_on">Dark</button>
                                    </div>
                                </div>
                                <div class="d-none d-xl-block">
                                    <h6 class="dropdown-header">Main Content</h6>
                                    <button type="button" class="btn btn-sm btn-block btn-alt-secondary mb-10" data-toggle="layout" data-action="content_layout_toggle">Toggle Layout</button>
                                </div>
                                <div class="dropdown-divider"></div>
                                <div class="row gutters-tiny text-center">
                                    <div class="col-6">
                                        <a class="dropdown-item mb-0" href="be_layout_api.html">
                                            <i class="si si-chemistry mr-5"></i> Layout API
                                        </a>
                                    </div>
                                    <div class="col-6">
                                        <a class="dropdown-item mb-0" href="be_ui_color_themes.html">
                                            <i class="fa fa-paint-brush mr-5"></i> Color Themes
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END Layout Options -->
                    </div>
                    <!-- END Left Section -->

                    <!-- Right Section -->
                    <div class="content-header-section">
                        <!-- User Dropdown -->
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-rounded btn-dual-secondary" id="page-header-user-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-user d-sm-none"></i>
                                <span class="d-none d-sm-inline-block">J. Smith</span>
                                <i class="fa fa-angle-down ml-5"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right min-width-200" aria-labelledby="page-header-user-dropdown">
                                <h5 class="h6 text-center py-10 mb-5 border-b text-uppercase">User</h5>
                                <a class="dropdown-item" href="be_pages_generic_profile.html">
                                    <i class="si si-user mr-5"></i> Profile
                                </a>
                                <a class="dropdown-item d-flex align-items-center justify-content-between" href="be_pages_generic_inbox.html">
                                    <span><i class="si si-envelope-open mr-5"></i> Inbox</span>
                                    <span class="badge badge-primary">3</span>
                                </a>
                                <a class="dropdown-item" href="be_pages_generic_invoice.html">
                                    <i class="si si-note mr-5"></i> Invoices
                                </a>
                                <div class="dropdown-divider"></div>

                                <!-- Toggle Side Overlay -->
                                <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                                <a class="dropdown-item" href="javascript:void(0)" data-toggle="layout" data-action="side_overlay_toggle">
                                    <i class="si si-wrench mr-5"></i> Settings
                                </a>
                                <!-- END Side Overlay -->

                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="op_auth_signin.html">
                                    <i class="si si-logout mr-5"></i> Sign Out
                                </a>
                            </div>
                        </div>
                        <!-- END User Dropdown -->

                        <!-- Notifications -->
                        <div class="btn-group" role="group">
                            <button type="button" class="btn btn-rounded btn-dual-secondary" id="page-header-notifications" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-flag"></i>
                                <span class="badge badge-primary badge-pill">5</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right min-width-300" aria-labelledby="page-header-notifications">
                                <h5 class="h6 text-center py-10 mb-0 border-b text-uppercase">Notifications</h5>
                                <ul class="list-unstyled my-20">
                                    <li>
                                        <a class="text-body-color-dark media mb-15" href="javascript:void(0)">
                                            <div class="ml-5 mr-15">
                                                <i class="fa fa-fw fa-check text-success"></i>
                                            </div>
                                            <div class="media-body pr-10">
                                                <p class="mb-0">You’ve upgraded to a VIP account successfully!</p>
                                                <div class="text-muted font-size-sm font-italic">15 min ago</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="text-body-color-dark media mb-15" href="javascript:void(0)">
                                            <div class="ml-5 mr-15">
                                                <i class="fa fa-fw fa-exclamation-triangle text-warning"></i>
                                            </div>
                                            <div class="media-body pr-10">
                                                <p class="mb-0">Please check your payment info since we can’t validate them!</p>
                                                <div class="text-muted font-size-sm font-italic">50 min ago</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="text-body-color-dark media mb-15" href="javascript:void(0)">
                                            <div class="ml-5 mr-15">
                                                <i class="fa fa-fw fa-times text-danger"></i>
                                            </div>
                                            <div class="media-body pr-10">
                                                <p class="mb-0">Web server stopped responding and it was automatically restarted!</p>
                                                <div class="text-muted font-size-sm font-italic">4 hours ago</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="text-body-color-dark media mb-15" href="javascript:void(0)">
                                            <div class="ml-5 mr-15">
                                                <i class="fa fa-fw fa-exclamation-triangle text-warning"></i>
                                            </div>
                                            <div class="media-body pr-10">
                                                <p class="mb-0">Please consider upgrading your plan. You are running out of space.</p>
                                                <div class="text-muted font-size-sm font-italic">16 hours ago</div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="text-body-color-dark media mb-15" href="javascript:void(0)">
                                            <div class="ml-5 mr-15">
                                                <i class="fa fa-fw fa-plus text-primary"></i>
                                            </div>
                                            <div class="media-body pr-10">
                                                <p class="mb-0">New purchases! +$250</p>
                                                <div class="text-muted font-size-sm font-italic">1 day ago</div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-center mb-0" href="javascript:void(0)">
                                    <i class="fa fa-flag mr-5"></i> View All
                                </a>
                            </div>
                        </div>
                        <!-- END Notifications -->

                        <!-- Toggle Side Overlay -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                        <button type="button" class="btn btn-circle btn-dual-secondary" data-toggle="layout" data-action="side_overlay_toggle">
                            <i class="fa fa-tasks"></i>
                        </button>
                        <!-- END Toggle Side Overlay -->
                    </div>
                    <!-- END Right Section -->
                </div>
                <!-- END Header Content -->

                <!-- Header Search -->
                <div id="page-header-search" class="overlay-header">
                    <div class="content-header content-header-fullrow">
                        <form action="be_pages_generic_search.html" method="post">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <!-- Close Search Section -->
                                    <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                                    <button type="button" class="btn btn-secondary" data-toggle="layout" data-action="header_search_off">
                                        <i class="fa fa-times"></i>
                                    </button>
                                    <!-- END Close Search Section -->
                                </div>
                                <input type="text" class="form-control" placeholder="Search or hit ESC.." id="page-header-search-input" name="page-header-search-input">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-secondary">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- END Header Search -->

                <!-- Header Loader -->
                <!-- Please check out the Activity page under Elements category to see examples of showing/hiding it -->
                <div id="page-header-loader" class="overlay-header bg-primary">
                    <div class="content-header content-header-fullrow text-center">
                        <div class="content-header-item">
                            <i class="fa fa-sun-o fa-spin text-white"></i>
                        </div>
                    </div>
                </div>
                <!-- END Header Loader -->
            </header>
            <!-- END Header -->

            <!-- Main Container -->
            <main id="main-container">

                <!-- Page Content -->
                <div class="content">
                    <!-- Flatpickr Datetimepicker (.js-flatpickr class is initialized in Helpers.flatpickr()) -->
                    <!-- For more info and examples you can check out https://github.com/flatpickr/flatpickr -->
                    <h2 class="content-heading">Flatpickr Datetimepicker</h2>
                    <div class="block">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">Examples</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option">
                                    <i class="si si-wrench"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content">
                            <div class="row items-push">
                                <!-- Flatpickr Datetimepicker (Bootstrap forms) -->
                                <div class="col-xl-6">
                                    <form action="be_forms_plugins.html" method="post" onsubmit="return false;">
                                        <div class="form-row">
                                            <div class="form-group col-lg-8">
                                                <label for="example-flatpickr-default">Default format</label>
                                                <input type="text" class="js-flatpickr form-control bg-white" id="example-flatpickr-default" name="example-flatpickr-default" placeholder="Y-m-d">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-lg-8">
                                                <label for="example-flatpickr-custom">Custom format</label>
                                                <input type="text" class="js-flatpickr form-control bg-white" id="example-flatpickr-custom" name="example-flatpickr-custom" placeholder="d-m-Y" data-date-format="d-m-Y">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-lg-8">
                                                <label for="example-flatpickr-friendly">Friendly format</label>
                                                <input type="text" class="js-flatpickr form-control bg-white" id="example-flatpickr-friendly" name="example-flatpickr-friendly" placeholder="F j, Y" data-alt-input="true" data-date-format="Y-m-d" data-alt-format="F j, Y">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-lg-8">
                                                <label for="example-flatpickr-range">Range</label>
                                                <input type="text" class="js-flatpickr form-control bg-white" id="example-flatpickr-range" name="example-flatpickr-range" placeholder="Select Date Range" data-mode="range" data-min-date="today">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-lg-8">
                                                <label for="example-flatpickr-time-standalone">Time Standalone</label>
                                                <input type="text" class="js-flatpickr form-control bg-white" id="example-flatpickr-time-standalone" name="example-flatpickr-time-standalone" data-enable-time="true" data-no-calendar="true" data-date-format="H:i">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-lg-8">
                                                <label for="example-flatpickr-time-standalone-24">Time Standalone (24-hour format)</label>
                                                <input type="text" class="js-flatpickr form-control bg-white" id="example-flatpickr-time-standalone-24" name="example-flatpickr-time-standalone-24" data-enable-time="true" data-no-calendar="true" data-date-format="H:i" data-time_24hr="true">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-lg-8">
                                                <label for="example-flatpickr-datetime">Calendar and time picker</label>
                                                <input type="text" class="js-flatpickr form-control bg-white" id="example-flatpickr-datetime" name="example-flatpickr-datetime" data-enable-time="true">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-lg-8">
                                                <label for="example-flatpickr-datetime-24">Calendar and time picker (24-hour format)</label>
                                                <input type="text" class="js-flatpickr form-control bg-white" id="example-flatpickr-datetime-24" name="example-flatpickr-datetime-24" data-enable-time="true" data-time_24hr="true">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-lg-8">
                                                <label for="example-flatpickr-inline">Inline Datepicker</label>
                                                <input type="text" class="js-flatpickr form-control" id="example-flatpickr-inline" name="example-flatpickr-inline" data-inline="true">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-lg-8">
                                                <label for="example-flatpickr-inline-time">Inline Datetimepicker</label>
                                                <input type="text" class="js-flatpickr form-control" id="example-flatpickr-inline-time" name="example-flatpickr-inline-time" data-inline="true" data-enable-time="true">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- END Flatpickr Datetimepicker (Bootstrap forms) -->

                                <!-- Flatpickr Datetimepicker (Material forms) -->
                                <div class="col-xl-6">
                                    <form action="be_forms_plugins.html" method="post" onsubmit="return false;">
                                        <div class="form-row">
                                            <div class="form-group col-lg-8">
                                                <div class="form-material">
                                                    <input type="text" class="js-flatpickr form-control" id="example-material-flatpickr-default" name="example-material-flatpickr-default" placeholder="Y-m-d" data-allow-input="true">
                                                    <label for="example-material-flatpickr-default">Default format</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-lg-8">
                                                <div class="form-material">
                                                    <input type="text" class="js-flatpickr form-control" id="example-material-flatpickr-custom" name="example-material-flatpickr-custom" placeholder="d-m-Y" data-allow-input="true" data-date-format="d-m-Y">
                                                    <label for="example-material-flatpickr-custom">Custom format</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-lg-8">
                                                <div class="form-material">
                                                    <input type="text" class="js-flatpickr form-control" id="example-material-flatpickr-friendly" name="example-material-flatpickr-friendly" placeholder="F j, Y" data-allow-input="true" data-alt-input="true" data-date-format="Y-m-d" data-alt-format="F j, Y">
                                                    <label for="example-material-flatpickr-friendly">Friendly format</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-lg-8">
                                                <div class="form-material">
                                                    <input type="text" class="js-flatpickr form-control" id="example-material-flatpickr-range" name="example-material-flatpickr-range" placeholder="Select Date Range" data-allow-input="true" data-mode="range" data-min-date="today">
                                                    <label for="example-material-flatpickr-range">Range</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-lg-8">
                                                <div class="form-material">
                                                    <input type="text" class="js-flatpickr form-control" id="example-material-flatpickr-time-standalone" name="example-material-flatpickr-time-standalone" data-allow-input="true" data-enable-time="true" data-no-calendar="true" data-date-format="H:i">
                                                    <label for="example-material-flatpickr-time-standalone">Time Standalone</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-lg-8">
                                                <div class="form-material">
                                                    <input type="text" class="js-flatpickr form-control" id="example-material-flatpickr-time-standalone-24" name="example-material-flatpickr-time-standalone-24" data-allow-input="true" data-enable-time="true" data-no-calendar="true" data-date-format="H:i" data-time_24hr="true">
                                                    <label for="example-material-flatpickr-time-standalone-24">Time Standalone (24-hour format)</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-lg-8">
                                                <div class="form-material">
                                                    <input type="text" class="js-flatpickr form-control" id="example-material-flatpickr-datetime" name="example-material-flatpickr-datetime" data-allow-input="true" data-enable-time="true">
                                                    <label for="example-material-flatpickr-datetime">Calendar and time picker</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-lg-8">
                                                <div class="form-material">
                                                    <input type="text" class="js-flatpickr form-control" id="example-material-flatpickr-datetime-24" name="example-material-flatpickr-datetime-24" data-allow-input="true" data-enable-time="true" data-time_24hr="true">
                                                    <label for="example-material-flatpickr-datetime-24">Calendar and time picker (24-hour format)</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-lg-8">
                                                <div class="form-material">
                                                    <input type="text" class="js-flatpickr form-control" id="example-material-flatpickr-inline" name="example-material-flatpickr-inline" data-inline="true">
                                                    <label for="example-material-flatpickr-inline">Inline Datepicker</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-lg-8">
                                                <div class="form-material">
                                                    <input type="text" class="js-flatpickr form-control" id="example-material-flatpickr-inline-time" name="example-material-flatpickr-inline-time" data-inline="true" data-enable-time="true">
                                                    <label for="example-material-flatpickr-inline-time">Inline Datetimepicker</label>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- END Flatpickr Datetimepicker (Material forms) -->
                            </div>
                        </div>
                    </div>
                    <!-- END Flatpickr Datetimepicker -->

                    <!-- jQuery Password Strength Meter functionality is initialized in js/pages/be_forms_plugins.min.js which was auto compiled from _es6/pages/be_forms_plugins.js -->
                    <!-- For more info and examples you can check out https://github.com/ablanco/jquery.pwstrength.bootstrap -->
                    <h2 class="content-heading">Password Strength Meter</h2>
                    <div class="block">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">Examples</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option">
                                    <i class="si si-wrench"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content">
                            <div class="row items-push">
                                <div class="col-xl-6">
                                    <!-- Password Strength (Bootstrap forms) -->
                                    <form action="be_forms_plugins.html" method="post" onsubmit="return false;">
                                        <div id="js-pw-strength1-container" class="form-group row">
                                            <label class="col-12" for="example-pw-strength1">Password</label>
                                            <div class="col-lg-8">
                                                <input type="password" class="js-pw-strength1 form-control" id="example-pw-strength1" name="example-pw-strength1">
                                                <div class="js-pw-strength1-progress pw-strength-progress mt-5"></div>
                                                <p class="js-pw-strength1-feedback form-text"></p>
                                                <p class="form-text mb-0">
                                                    Please start typing a password to check its strength
                                                </p>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- END Password Strength (Bootstrap forms) -->
                                </div>
                                <div class="col-xl-6">
                                    <!-- Password Strength (Material forms) -->
                                    <form action="be_forms_plugins.html" method="post" onsubmit="return false;">
                                        <div id="js-pw-strength2-container" class="form-group row">
                                            <div class="col-lg-8">
                                                <div class="form-material">
                                                    <input type="password" class="js-pw-strength2 form-control" id="example-pw-strength2" name="example-pw-strength2">
                                                    <label for="example-pw-strength2">Password</label>
                                                </div>
                                                <div class="js-pw-strength2-progress pw-strength-progress mt-5"></div>
                                                <p class="js-pw-strength2-feedback form-text"></p>
                                                <p class="form-text mb-0">
                                                    Please start typing a password to check its strength
                                                </p>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- END Password Strength (Material forms) -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END jQuery Password Strength Meter -->

                    <!-- Bootstrap Datepicker (.js-datepicker and .input-daterange class is initialized in Helpers.datepicker()) -->
                    <!-- For more info and examples you can check out https://github.com/eternicode/bootstrap-datepicker -->
                    <h2 class="content-heading">Bootstrap Datepicker</h2>
                    <div class="block">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">Examples</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option">
                                    <i class="si si-wrench"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content">
                            <div class="row items-push">
                                <!-- Datepicker (Bootstrap forms) -->
                                <div class="col-xl-6">
                                    <form action="be_forms_plugins.html" method="post" onsubmit="return false;">
                                        <div class="form-group row">
                                            <label class="col-12" for="example-datepicker1">Datepicker</label>
                                            <div class="col-lg-8">
                                                <input type="text" class="js-datepicker form-control" id="example-datepicker1" name="example-datepicker1" data-week-start="1" data-autoclose="true" data-today-highlight="true" data-date-format="mm/dd/yy" placeholder="mm/dd/yy">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-8">
                                                <input type="text" class="js-datepicker form-control" id="example-datepicker2" name="example-datepicker2" data-week-start="1" data-autoclose="true" data-today-highlight="true" data-date-format="dd/mm/yy" placeholder="dd/mm/yy">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-8">
                                                <input type="text" class="js-datepicker form-control" id="example-datepicker3" name="example-datepicker3" data-week-start="1" data-autoclose="true" data-today-highlight="true" data-date-format="dd-mm-yyyy" placeholder="dd-mm-yyyy">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12" for="example-daterange1">Date Range</label>
                                            <div class="col-lg-8">
                                                <div class="input-daterange input-group" data-date-format="mm/dd/yyyy" data-week-start="1" data-autoclose="true" data-today-highlight="true">
                                                    <input type="text" class="form-control" id="example-daterange1" name="example-daterange1" placeholder="From" data-week-start="1" data-autoclose="true" data-today-highlight="true">
                                                    <div class="input-group-prepend input-group-append">
                                                        <span class="input-group-text font-w600">to</span>
                                                    </div>
                                                    <input type="text" class="form-control" id="example-daterange2" name="example-daterange2" placeholder="To" data-week-start="1" data-autoclose="true" data-today-highlight="true">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12">Inline Datepicker</label>
                                            <div class="col-12">
                                                <div class="js-datepicker" data-week-start="1" data-today-highlight="true"></div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- END Datepicker (Bootstrap forms) -->

                                <!-- Datepicker (Material forms) -->
                                <div class="col-xl-6">
                                    <form action="be_forms_plugins.html" method="post" onsubmit="return false;">
                                        <div class="form-group row">
                                            <div class="col-lg-8">
                                                <div class="form-material">
                                                    <input type="text" class="js-datepicker form-control" id="example-datepicker4" name="example-datepicker4" data-week-start="1" data-autoclose="true" data-today-highlight="true" data-date-format="mm/dd/yy" placeholder="mm/dd/yy">
                                                    <label for="example-datepicker4">Choose a date</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-8">
                                                <div class="form-material">
                                                    <input type="text" class="js-datepicker form-control" id="example-datepicker5" name="example-datepicker5" data-week-start="1" data-autoclose="true" data-today-highlight="true" data-date-format="dd/mm/yy" placeholder="dd/mm/yy">
                                                    <label for="example-datepicker5">Choose a date</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-8">
                                                <div class="form-material">
                                                    <input type="text" class="js-datepicker form-control" id="example-datepicker6" name="example-datepicker6" data-week-start="1" data-autoclose="true" data-today-highlight="true" data-date-format="dd-mm-yyyy" placeholder="dd-mm-yyyy">
                                                    <label for="example-datepicker6">Choose a date</label>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- END Datepicker (Material forms) -->
                            </div>
                        </div>
                    </div>
                    <!-- END Bootstrap Datepicker -->

                    <!-- Bootstrap Colorpicker (.js-colorpicker class is initialized in Helpers.colorpicker()) -->
                    <!-- For more info and examples you can check out https://github.com/itsjavi/bootstrap-colorpicker/ -->
                    <h2 class="content-heading">Bootstrap Colorpicker</h2>
                    <div class="block">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">Examples</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option">
                                    <i class="si si-wrench"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content">
                            <div class="row items-push">
                                <!-- Colorpicker (Bootstrap forms) -->
                                <div class="col-xl-6">
                                    <form action="be_forms_plugins.html" method="post" onsubmit="return false;">
                                        <div class="form-group row">
                                            <label class="col-12" for="example-colorpicker1">Normal</label>
                                            <div class="col-lg-8">
                                                <input type="text" class="js-colorpicker form-control" id="example-colorpicker1" name="example-colorpicker1" data-format="hex" value="#42a5f5">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12" for="example-colorpicker2">As Component</label>
                                            <div class="col-lg-8">
                                                <div class="js-colorpicker input-group" data-format="hex">
                                                    <input type="text" class="form-control" id="example-colorpicker2" name="example-colorpicker2" value="#42a5f5">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text colorpicker-input-addon">
                                                            <i></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12" for="example-colorpicker3">RGBa</label>
                                            <div class="col-lg-8">
                                                <input type="text" class="js-colorpicker form-control" data-format="rgba" id="example-colorpicker3" name="example-colorpicker3" value="rgba(66, 165, 245, .9)">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12" for="example-colorpicker4">RGBa (component)</label>
                                            <div class="col-lg-8">
                                                <div class="js-colorpicker input-group" data-format="rgba">
                                                    <input type="text" class="form-control" id="example-colorpicker4" name="example-colorpicker4" value="rgba(66, 165, 245, .9)">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text colorpicker-input-addon">
                                                            <i></i>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12">Inline</label>
                                            <div class="col-12">
                                                <div class="js-colorpicker" id="color-container" data-container="#color-container" data-format="hex" data-inline="true" data-color="#42a5f5"></div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12">Inline (RGBa)</label>
                                            <div class="col-12">
                                                <div class="js-colorpicker" id="color-container2" data-container="#color-container2" data-format="rgba" data-inline="true" data-color="rgba(66, 165, 245, .9)"></div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- END Colorpicker (Bootstrap forms) -->

                                <!-- Colorpicker (Material forms) -->
                                <div class="col-xl-6">
                                    <form action="be_forms_plugins.html" method="post" onsubmit="return false;">
                                        <div class="form-group row">
                                            <div class="col-lg-8">
                                                <div class="form-material">
                                                    <input type="text" class="js-colorpicker form-control" id="example-colorpicker5" name="example-colorpicker5" data-format="hex" value="#42a5f5">
                                                    <label for="example-colorpicker5">Choose a color</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-8">
                                                <div class="form-material">
                                                    <input type="text" class="js-colorpicker form-control" data-format="rgba" id="example-colorpicker6" name="example-colorpicker6" value="#42a5f5">
                                                    <label for="example-colorpicker6">Choose a color (RGBa)</label>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- END Colorpicker (Material forms) -->
                            </div>
                        </div>
                    </div>
                    <!-- END Bootstrap Colorpicker -->

                    <!-- Bootstrap Maxlength (.js-maxlength class is initialized in Helpers.maxlength()) -->
                    <!-- For more info and examples you can check out https://github.com/mimo84/bootstrap-maxlength -->
                    <h2 class="content-heading">Bootstrap Maxlength</h2>
                    <div class="block">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">Examples</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option">
                                    <i class="si si-wrench"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content">
                            <div class="row items-push">
                                <!-- Bootstrap Maxlength (Bootstrap forms) -->
                                <div class="col-xl-6">
                                    <form action="be_forms_plugins.html" method="post" onsubmit="return false;">
                                        <div class="form-group row">
                                            <label class="col-12" for="example-maxlength1">Normal</label>
                                            <div class="col-lg-8">
                                                <input type="text" class="js-maxlength form-control" id="example-maxlength1" name="example-maxlength1" maxlength="20" placeholder="Try typing beyond 10 chars..">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12" for="example-maxlength2">Threshold</label>
                                            <div class="col-lg-8">
                                                <input type="text" class="js-maxlength form-control" id="example-maxlength2" name="example-maxlength2" maxlength="20" placeholder="When to appear (5 chars).." data-threshold="15">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12" for="example-maxlength3">Always Show</label>
                                            <div class="col-lg-8">
                                                <input type="text" class="js-maxlength form-control" id="example-maxlength3" name="example-maxlength3" maxlength="20" placeholder="When focused.." data-always-show="true">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12" for="example-maxlength4">Custom Text</label>
                                            <div class="col-lg-8">
                                                <input type="text" class="js-maxlength form-control" id="example-maxlength4" name="example-maxlength4" maxlength="20" placeholder="20 chars limit.." data-always-show="true" data-pre-text="Used " data-separator=" of " data-post-text=" characters">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12" for="example-maxlength5">Themed Label</label>
                                            <div class="col-lg-8">
                                                <input type="text" class="js-maxlength form-control" id="example-maxlength5" name="example-maxlength5" maxlength="20" placeholder="Primary color of active theme.." data-always-show="true" data-warning-class="badge badge-primary" data-limit-reached-class="badge badge-primary">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12" for="example-maxlength6">Position (top)</label>
                                            <div class="col-lg-8">
                                                <input type="text" class="js-maxlength form-control" id="example-maxlength6" name="example-maxlength6" maxlength="20" placeholder="Top.." data-always-show="true" data-placement="top">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12" for="example-maxlength7">Position (top-right)</label>
                                            <div class="col-lg-8">
                                                <input type="text" class="js-maxlength form-control" id="example-maxlength7" name="example-maxlength7" maxlength="20" placeholder="Top Right.." data-always-show="true" data-placement="top-right">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12" for="example-maxlength8">Position (right)</label>
                                            <div class="col-lg-8">
                                                <input type="text" class="js-maxlength form-control" id="example-maxlength8" name="example-maxlength8" maxlength="20" placeholder="Right.." data-always-show="true" data-placement="right">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12" for="example-maxlength9">Position (bottom-right)</label>
                                            <div class="col-lg-8">
                                                <input type="text" class="js-maxlength form-control" id="example-maxlength9" name="example-maxlength9" maxlength="20" placeholder="Bottom Right.." data-always-show="true" data-placement="bottom-right">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12" for="example-maxlength10">Textarea</label>
                                            <div class="col-lg-8">
                                                <textarea class="js-maxlength form-control" id="example-maxlength10" name="example-maxlength10" rows="3" maxlength="100" placeholder="It even works on textareas.." data-always-show="true"></textarea>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- END Bootstrap Maxlength (Bootstrap forms) -->

                                <!-- Bootstrap Maxlength (Material forms) -->
                                <div class="col-xl-6">
                                    <form action="be_forms_plugins.html" method="post" onsubmit="return false;">
                                        <div class="form-group row">
                                            <div class="col-lg-8">
                                                <div class="form-material">
                                                    <input type="text" class="js-maxlength form-control" id="example-material-maxlength1" name="example-material-maxlength1" maxlength="20" placeholder="Try typing beyond 10 chars..">
                                                    <label for="example-material-maxlength1">Normal</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-8">
                                                <div class="form-material">
                                                    <input type="text" class="js-maxlength form-control" id="example-material-maxlength2" name="example-material-maxlength2" maxlength="20" placeholder="When to appear (5 chars).." data-threshold="15">
                                                    <label for="example-material-maxlength2">Threshold</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-8">
                                                <div class="form-material">
                                                    <input type="text" class="js-maxlength form-control" id="example-material-maxlength3" name="example-material-maxlength3" maxlength="20" placeholder="When focused.." data-always-show="true">
                                                    <label for="example-material-maxlength3">Threshold</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-8">
                                                <div class="form-material">
                                                    <input type="text" class="js-maxlength form-control" id="example-material-maxlength4" name="example-material-maxlength4" maxlength="20" placeholder="20 chars limit.." data-always-show="true" data-pre-text="Used " data-separator=" of " data-post-text=" characters">
                                                    <label for="example-material-maxlength4">Custom Text</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-8">
                                                <div class="form-material">
                                                    <input type="text" class="js-maxlength form-control" id="example-material-maxlength5" name="example-material-maxlength5" maxlength="20" placeholder="Primary color of active theme.." data-always-show="true" data-warning-class="badge badge-primary" data-limit-reached-class="badge badge-primary">
                                                    <label for="example-material-maxlength5">Themed Label</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-8">
                                                <div class="form-material">
                                                    <input type="text" class="js-maxlength form-control" id="example-material-maxlength6" name="example-material-maxlength6" maxlength="20" placeholder="Top Right.." data-always-show="true" data-placement="top-right">
                                                    <label for="example-material-maxlength6">Position (top-right)</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-8">
                                                <div class="form-material">
                                                    <textarea class="js-maxlength form-control" id="example-material-maxlength7" name="example-material-maxlength7" rows="3" maxlength="100" placeholder="It even works on textareas.." data-always-show="true"></textarea>
                                                    <label for="example-material-maxlength7">Textarea</label>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- END Bootstrap Maxlength (Material forms) -->
                            </div>
                        </div>
                    </div>
                    <!-- END Bootstrap Maxlength -->

                    <!-- Select2 (.js-select2 class is initialized in Helpers.select2()) -->
                    <!-- For more info and examples you can check out https://github.com/select2/select2 -->
                    <h2 class="content-heading">Select2</h2>
                    <div class="block">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">Examples</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option">
                                    <i class="si si-wrench"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content">
                            <div class="row items-push">
                                <!-- Select2 (Bootstrap forms) -->
                                <div class="col-xl-6">
                                    <form action="be_forms_plugins.html" method="post" onsubmit="return false;">
                                        <div class="form-group row">
                                            <label class="col-12" for="example-select2">Normal</label>
                                            <div class="col-lg-8">
                                                <select class="js-select2 form-control" id="example-select2" name="example-select2" style="width: 100%;" data-placeholder="Choose one..">
                                                    <option></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                                    <option value="1">HTML</option>
                                                    <option value="2">CSS</option>
                                                    <option value="3">JavaScript</option>
                                                    <option value="4">PHP</option>
                                                    <option value="5">MySQL</option>
                                                    <option value="6">Ruby</option>
                                                    <option value="7">Angular</option>
                                                    <option value="8">React</option>
                                                    <option value="9">Vue.js</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12" for="example-select2-multiple">Multiple Values</label>
                                            <div class="col-lg-8">
                                                <select class="js-select2 form-control" id="example-select2-multiple" name="example-select2-multiple" style="width: 100%;" data-placeholder="Choose many.." multiple>
                                                    <option></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                                    <option value="1">HTML</option>
                                                    <option value="2">CSS</option>
                                                    <option value="3">JavaScript</option>
                                                    <option value="4">PHP</option>
                                                    <option value="5">MySQL</option>
                                                    <option value="6">Ruby</option>
                                                    <option value="7">Angular</option>
                                                    <option value="8">React</option>
                                                    <option value="9">Vue.js</option>
                                                </select>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- END Select2 (Bootstrap forms) -->

                                <!-- Select2 (Material forms) -->
                                <div class="col-xl-6">
                                    <form action="be_forms_plugins.html" method="post" onsubmit="return false;">
                                        <div class="form-group row">
                                            <div class="col-lg-8">
                                                <div class="form-material">
                                                    <select class="js-select2 form-control" id="example2-select2" name="example2-select2" style="width: 100%;" data-placeholder="Choose one..">
                                                        <option></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                                        <option value="1">HTML</option>
                                                        <option value="2">CSS</option>
                                                        <option value="3">JavaScript</option>
                                                        <option value="4">PHP</option>
                                                        <option value="5">MySQL</option>
                                                        <option value="6">Ruby</option>
                                                        <option value="7">AngularJS</option>
                                                    </select>
                                                    <label for="example2-select2">Normal</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-8">
                                                <div class="form-material">
                                                    <select class="js-select2 form-control" id="example2-select2-multiple" name="example2-select2-multiple" style="width: 100%;" data-placeholder="Choose many.." multiple>
                                                        <option></option><!-- Required for data-placeholder attribute to work with Select2 plugin -->
                                                        <option value="1">HTML</option>
                                                        <option value="2">CSS</option>
                                                        <option value="3">JavaScript</option>
                                                        <option value="4">PHP</option>
                                                        <option value="5">MySQL</option>
                                                        <option value="6">Ruby</option>
                                                        <option value="7">AngularJS</option>
                                                    </select>
                                                    <label for="example2-select2-multiple">Multiple Values</label>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- END Select2 (Material forms) -->
                            </div>
                        </div>
                    </div>
                    <!-- END Select2 -->

                    <!-- jQuery Tags Input (.js-tags-input class is initialized in Helpers.tagsInput()) -->
                    <!-- For more info and examples you can check out https://github.com/xoxco/jQuery-Tags-Input -->
                    <h2 class="content-heading">jQuery Tags Input</h2>
                    <div class="block">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">Examples</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option">
                                    <i class="si si-wrench"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content">
                            <div class="row items-push">
                                <!-- jQuery Tags Input (Bootstrap forms) -->
                                <div class="col-xl-6">
                                    <form action="be_forms_plugins.html" method="post" onsubmit="return false;">
                                        <div class="form-group row">
                                            <label class="col-12" for="example-tags1">Normal</label>
                                            <div class="col-lg-10">
                                                <input type="text" class="js-tags-input form-control" data-height="34px" id="example-tags1" name="example-tags1" value="HTML,CSS,JavaScript">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12" for="example-tags1">Normal (big)</label>
                                            <div class="col-lg-10">
                                                <input type="text" class="js-tags-input form-control" id="example-tags2" name="example-tags2" value="HTML,CSS,JavaScript">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- END jQuery Tags Input (Bootstrap forms) -->

                                <!-- jQuery Tags Input (Material forms) -->
                                <div class="col-xl-6">
                                    <form action="be_forms_plugins.html" method="post" onsubmit="return false;">
                                        <div class="form-group row">
                                            <div class="col-lg-10">
                                                <div class="form-material">
                                                    <input type="text" class="js-tags-input form-control" data-height="34px" id="example-tags3" name="example-tags3" value="HTML,CSS,JavaScript">
                                                    <label for="example-tags3">Material</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-10">
                                                <div class="form-material">
                                                    <input type="text" class="js-tags-input form-control" id="example-tags4" name="example-tags4" value="HTML,CSS,JavaScript">
                                                    <label for="example-tags4">Material (big)</label>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- END jQuery Tags Input (Material forms) -->
                            </div>
                        </div>
                    </div>
                    <!-- END jQuery Tags Input -->

                    <!-- jQuery AutoComplete functionality is initialized in js/pages/be_forms_plugins.min.js which was auto compiled from _es6/pages/be_forms_plugins.js -->
                    <!-- For more info and examples you can check out https://github.com/Pixabay/jQuery-autoComplete -->
                    <h2 class="content-heading">jQuery AutoComplete</h2>
                    <div class="block">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">Examples</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option">
                                    <i class="si si-wrench"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content">
                            <div class="row items-push">
                                <!-- jQuery Auto Complete (Bootstrap forms) -->
                                <div class="col-xl-6">
                                    <form action="be_forms_plugins.html" method="post" onsubmit="return false;">
                                        <div class="form-group row">
                                            <label class="col-12" for="example-autocomplete1">Normal Search</label>
                                            <div class="col-lg-8">
                                                <input type="text" class="js-autocomplete form-control" id="example-autocomplete1" name="example-autocomplete1" placeholder="Countries..">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- END jQuery Auto Complete (Bootstrap forms) -->

                                <!-- jQuery Auto Complete (Material forms) -->
                                <div class="col-xl-6">
                                    <form action="be_forms_plugins.html" method="post" onsubmit="return false;">
                                        <div class="form-group row">
                                            <div class="col-lg-8">
                                                <div class="form-material">
                                                    <input type="text" class="js-autocomplete form-control" id="example-autocomplete2" name="example-autocomplete2" placeholder="Countries..">
                                                    <label for="example-autocomplete2">Material Search</label>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- END jQuery Auto Complete (Material forms) -->
                            </div>
                        </div>
                    </div>
                    <!-- END jQuery AutoComplete -->

                    <!-- Masked Inputs (.js-masked-* classes are initialized in Helpers.maskedInputs()) -->
                    <!-- For more info and examples you can check out http://digitalbush.com/projects/masked-input-plugin/ -->
                    <h2 class="content-heading">Masked Inputs</h2>
                    <div class="block">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">Default</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option">
                                    <i class="si si-wrench"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content">
                            <div class="row">
                                <!-- Masked Inputs (Bootstrap forms) -->
                                <div class="col-xl-6">
                                    <form action="be_forms_plugins.html" method="post" onsubmit="return false;">
                                        <div class="form-group row">
                                            <label class="col-12" for="example-masked-date1">Date (format 1)</label>
                                            <div class="col-lg-8">
                                                <input type="text" class="js-masked-date form-control" id="example-masked-date1" name="example-masked-date1" placeholder="dd/mm/yyyy">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12" for="example-masked-date2">Date (format 2)</label>
                                            <div class="col-lg-8">
                                                <input type="text" class="js-masked-date-dash form-control" id="example-masked-date2" name="example-masked-date2" placeholder="dd-mm-yyyy">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12" for="example-masked-phone">Phone</label>
                                            <div class="col-lg-8">
                                                <input type="text" class="js-masked-phone form-control" id="example-masked-phone" name="example-masked-phone" placeholder="(999) 999-9999">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12" for="example-masked-phone-ext">Phone (Ext)</label>
                                            <div class="col-lg-8">
                                                <input type="text" class="js-masked-phone-ext form-control" id="example-masked-phone-ext" name="example-masked-phone-ext" placeholder="(999) 999-9999? x99999">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12" for="example-masked-taxid">Tax ID</label>
                                            <div class="col-lg-8">
                                                <input type="text" class="js-masked-taxid form-control" id="example-masked-taxid" name="example-masked-taxid" placeholder="99-9999999">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12" for="example-masked-ssn">SSN</label>
                                            <div class="col-lg-8">
                                                <input type="text" class="js-masked-ssn form-control" id="example-masked-ssn" name="example-masked-ssn" placeholder="999-99-9999">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12" for="example-masked-pkey">Product Key</label>
                                            <div class="col-lg-8">
                                                <input type="text" class="js-masked-pkey form-control" id="example-masked-pkey" name="example-masked-pkey" placeholder="a*-999-a999">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12" for="example-masked-time">Time Format</label>
                                            <div class="col-lg-8">
                                                <input type="text" class="js-masked-time form-control" id="example-masked-time" name="example-masked-time" placeholder="00:00">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- END Masked Inputs (Bootstrap forms) -->

                                <!-- Masked Inputs (Material forms) -->
                                <div class="col-xl-6">
                                    <form action="be_forms_plugins.html" method="post" onsubmit="return false;">
                                        <div class="form-group row">
                                            <div class="col-lg-8">
                                                <div class="form-material">
                                                    <input type="text" class="js-masked-date form-control" id="example-masked2-date1" name="example-masked2-date1" placeholder="dd/mm/yyyy">
                                                    <label for="example-masked2-date1">Date (format 1)</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-8">
                                                <div class="form-material">
                                                    <input type="text" class="js-masked-date-dash form-control" id="example-masked2-date2" name="example-masked2-date2" placeholder="dd-mm-yyyy">
                                                    <label for="example-masked2-date2">Date (format 2)</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-8">
                                                <div class="form-material floating">
                                                    <input type="text" class="js-masked-phone form-control" id="example-masked2-phone" name="example-masked2-phone">
                                                    <label for="example-masked2-phone">Phone <small class="text-muted">(999) 999-9999</small></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-8">
                                                <div class="form-material floating">
                                                    <input type="text" class="js-masked-phone-ext form-control" id="example-masked2-phone-ext" name="example-masked2-phone-ext">
                                                    <label for="example-masked2-phone-ext">Phone (Ext) <small class="text-muted">(999) 999-9999? x99999</small></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-8">
                                                <div class="form-material floating">
                                                    <input type="text" class="js-masked-pkey form-control" id="example-masked2-pkey" name="example-masked2-pkey">
                                                    <label for="example-masked2-pkey">Product Key <small class="text-muted">a*-999-a999</small></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-lg-8">
                                                <div class="form-material floating">
                                                    <input type="text" class="js-masked-time form-control" id="example-masked2-time" name="example-masked2-time">
                                                    <label for="example-masked2-time">Time Format <small class="text-muted">00:00</small></label>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- END Masked Inputs (Material forms) -->
                            </div>
                        </div>
                    </div>
                    <!-- END Masked Inputs -->

                    <!-- Range Sliders -->
                    <!-- Ion Range Sliders (.js-rangeslider class is initialized in Helpers.rangeslider()) -->
                    <!-- For more info and examples you can check out https://github.com/IonDen/ion.rangeSlider -->
                    <h2 class="content-heading">Range Sliders</h2>
                    <div class="block">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">Examples</h3>
                            <div class="block-options">
                                <button type="button" class="btn-block-option">
                                    <i class="si si-wrench"></i>
                                </button>
                            </div>
                        </div>
                        <div class="block-content">
                            <form action="be_forms_plugins.html" method="post" onsubmit="return false;">
                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label mt-10">Normal</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="js-rangeslider" id="example-rangeslider1" name="example-rangeslider1" value="25">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label mt-10">Min Max</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="js-rangeslider" id="example-rangeslider2" name="example-rangeslider2" value="330" data-min="0" data-max="1000">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label mt-10">Grid</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="js-rangeslider" id="example-rangeslider3" name="example-rangeslider3" value="660" data-grid="true" data-min="0" data-max="1000">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label mt-10">Double</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="js-rangeslider" id="example-rangeslider4" name="example-rangeslider4" data-type="double" data-grid="true" data-min="0" data-max="1000" data-from="200" data-to="800">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label mt-10">Negative</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="js-rangeslider" id="example-rangeslider5" name="example-rangeslider5" data-type="double" data-grid="true" data-min="-500" data-max="500" data-from="-150" data-to="150">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label mt-10">Step</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="js-rangeslider" id="example-rangeslider6" name="example-rangeslider6" data-type="double" data-grid="true" data-min="-500" data-max="500" data-from="-250" data-to="250" data-step="50">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label mt-10">Custom</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="js-rangeslider" id="example-rangeslider7" name="example-rangeslider7" data-grid="true" data-from="5" data-values="January, February, March, April, May, June, July, August, September, October, November, December">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label mt-10">Prefixes</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="js-rangeslider" id="example-rangeslider8" name="example-rangeslider8" data-type="double" data-grid="true" data-min="0" data-max="10000" data-from="2500" data-to="7500" data-prefix="$">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label mt-10">Postfixes</label>
                                    <div class="col-lg-10">
                                        <input type="text" class="js-rangeslider" id="example-rangeslider9" name="example-rangeslider9" data-grid="true" data-min="-20" data-max="90" data-from="35" data-postfix="&deg;">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- END Range Sliders -->

                    <!-- DropzoneJS -->
                    <!-- For more info and examples you can check out http://www.dropzonejs.com/#usage -->
                    <h2 class="content-heading">DropzoneJS</h2>
                    <div class="block">
                        <div class="block-content block-content-full">
                            <!-- DropzoneJS Container -->
                            <form class="dropzone" action="be_forms_plugins.html"></form>
                        </div>
                    </div>
                    <!-- END DropzoneJS -->
                </div>
                <!-- END Page Content -->

            </main>
            <!-- END Main Container -->

            <!-- Footer -->
            <footer id="page-footer" class="opacity-0">
                <div class="content py-20 font-size-sm clearfix">
                    <div class="float-right">
                        Crafted with <i class="fa fa-heart text-pulse"></i> by <a class="font-w600" href="https://1.envato.market/ydb" target="_blank">pixelcave</a>
                    </div>
                    <div class="float-left">
                        <a class="font-w600" href="https://1.envato.market/95j" target="_blank">Codebase 3.3</a> &copy; <span class="js-year-copy"></span>
                    </div>
                </div>
            </footer>
            <!-- END Footer -->
        </div>
        <!-- END Page Container -->

        <!--
            Codebase JS Core

            Vital libraries and plugins used in all pages. You can choose to not include this file if you would like
            to handle those dependencies through webpack. Please check out assets/_es6/main/bootstrap.js for more info.

            If you like, you could also include them separately directly from the assets/js/core folder in the following
            order. That can come in handy if you would like to include a few of them (eg jQuery) from a CDN.

            assets/js/core/jquery.min.js
            assets/js/core/bootstrap.bundle.min.js
            assets/js/core/simplebar.min.js
            assets/js/core/jquery-scrollLock.min.js
            assets/js/core/jquery.appear.min.js
            assets/js/core/jquery.countTo.min.js
            assets/js/core/js.cookie.min.js
        -->
        <script src="assets/js/codebase.core.min.js"></script>

        <!--
            Codebase JS

            Custom functionality including Blocks/Layout API as well as other vital and optional helpers
            webpack is putting everything together at assets/_es6/main/app.js
        -->
        <script src="assets/js/codebase.app.min.js"></script>

        <!-- Page JS Plugins -->
        <script src="assets/js/plugins/pwstrength-bootstrap/pwstrength-bootstrap.min.js"></script>
        <script src="assets/js/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
        <script src="assets/js/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
        <script src="assets/js/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
        <script src="assets/js/plugins/select2/js/select2.full.min.js"></script>
        <script src="assets/js/plugins/jquery-tags-input/jquery.tagsinput.min.js"></script>
        <script src="assets/js/plugins/jquery-auto-complete/jquery.auto-complete.min.js"></script>
        <script src="assets/js/plugins/masked-inputs/jquery.maskedinput.min.js"></script>
        <script src="assets/js/plugins/ion-rangeslider/js/ion.rangeSlider.min.js"></script>
        <script src="assets/js/plugins/dropzonejs/dropzone.min.js"></script>
        <script src="assets/js/plugins/flatpickr/flatpickr.min.js"></script>

        <!-- Page JS Code -->
        <script src="assets/js/pages/be_forms_plugins.min.js"></script>

        <!-- Page JS Helpers (Flatpickr + BS Datepicker + BS Colorpicker + BS Maxlength + Select2 + Masked Input + Range Sliders + Tags Inputs plugins) -->
        <script>jQuery(function(){ Codebase.helpers(['flatpickr', 'datepicker', 'colorpicker', 'maxlength', 'select2', 'masked-inputs', 'rangeslider', 'tags-inputs']); });</script>
    </body>
</html>

//codigo basura





<?php // ca_empresa.php datos dela emrpesa y sus ofertas de trabajo

/* *****************************************************************************
 * Includes
** ************************************************************************** */
include("../assets/funciones/globales0.inc.php");
include("../assets/funciones/definiciones.inc.php");
include("../assets/funciones/db_functions.inc.php");
include("../assets/funciones/filtroipmx.inc.php");
include("../assets/funciones/cuerdas.inc.php");
include("../assets/funciones/plantilla_candidato.inc.php");
//include("../assets/funciones/ca_empresa.inc.php");

/* *****************************************************************************
 * Filtros de seleccion de IP y pais de la IP
** ************************************************************************** */

//estaenmexico();

/* *****************************************************************************
 * Constantes

    $ev_paquete['ev_id'] = $ev_id;
    $ev_paquete['ev_nombre'] = $v['ev_nombre'];
    $ev_paquete['ev_cli_id'] = $v['ev_cli_id'];
    $ev_paquete['cli_nombre'] = $v['cli_nombre'];
    $ev_paquete['cli_rfc'] = $v['cli_rfc'];
    $ev_paquete['ev_empresas'] = $v['ev_empresas'];
    $ev_paquete['ev_candidatos'] = $v['ev_candidatos'];
    $ev_paquete['ev_fechai'] = $v['ev_fechai'];
    $ev_paquete['ev_fechaf'] = $v['ev_fechaf'];

** ************************************************************************** */

$nivel = 1;
$servicio = 'candidato';    // area en que se aplica esta rutina
$suite = 'Suite del Candidato';
$destino = 'can/feria.php';

// seleccion es el ev_id a desplegar
if(!@$_SESSION['seleccion']) {
    // selecciona la feria a desplegar
    $_SESSION['seleccion'] = @$_POST['seleccion'];
}
$seleccion = $_SESSION['seleccion'];

// desplegará la info del evento 'seleccion';
$ev_paquete = ev_paquete($seleccion);
// tablas del evento:
$cartucho_em = 'z_'. $ev_paquete['ev_id'] .'_'. $ev_paquete['ev_cli_id'] .'_em';
$cartucho_of = 'z_'. $ev_paquete['ev_id'] .'_'. $ev_paquete['ev_cli_id'] .'_of';

// la sesion
// la suite del cadidato tiene el servicio 'candidato'
$ip = @$_SESSION['ip']; // dirección IP del visitante
$servicio = @$_SESSION['u_servicio']; // suite, candidato
$ev_id = @$_SESSION['ev_id']; // numero de evento en el que está en candidato
$ca_id = @$_SESSION['ca_id']; // numero de candidato en la tabla de candidatos del evento
$candidatos = @$_SESSION['candidatos']; // nombre de la tabla de candidatos: cartucho_ca
$u_nombre = @$_SESSION['u_nombre']; // nombre y apellidos del candidato

// directorios de imagenes
$dir_imgs = '../archivero/ev_'. $ev_paquete['ev_id'] .'/imgs/img_'; // archivero/ev_1/imgs
$dir_logos = '../archivero/ev_'. $ev_paquete['ev_id'] .'/logos/logo_'; // archivero/ev_1/logos
$img_vacia = '../archivero/vacia.png';

// letreros del aviso o respuesta
$tarea = 'Entrada al Sistema';
$retorno = 'candidato.php';
$feria = 'ca_feria.php';

/* *****************************************************************************
 * Rutina de entrada
** ************************************************************************** */

//estaenmexico();
mo('candidato');

$titulo = 'Datos de la Empresa';
$mensaje = 'Selecciona tu proceso';
echo cabeza_candidato1($titulo, $mensaje);

// busca la id
$id = '';
if(@$_GET['id']) {
    $id = $_GET['id'];
} else {
    if(@$_POST['id']) {
        $id = @$_POST['id'];
    }
}
//$id = @$_POST['id'];
//echo '88. id: '. $id .'<br>';
if( !$id ) {
    echo '<script>
	document.location.href = "' . $feria . '";
</script>
';
}

// asiento de bitacora
//bi_asienta($ev_id, $ti_vi, $vi_id, $bi_ti_pa, $bi_pa_id, $bi_ip);
bi_asienta(@$_SESSION['ev_id'], 1, @$_SESSION['ca_id'], 5, @$id, @$_SESSION['ip']); // suite del candidato

// lee el maximo de empresas para hacer circular el breacrumb
if(!@$id) {
    $id = 1;
}

//$ev_empresas = lee_campo($eventos, 'ev_id', 'ev_empresas', @$_SESSION['ev_id']);
$ev_empresas = $ev_paquete['ev_empresas']; // lee el numero de empresas del evento seleccionado 2020-06-17 11:23
$siguiente = $id + 1;
if($siguiente > $ev_empresas) { $siguiente = 1;}
$anterior = $id - 1;
if($anterior < 1) { $anterior = $ev_empresas; }
// nombres de las empresas
$em_nombre_sig = lee_campo($cartucho_em, 'em_id', 'em_nombre', $siguiente);
$em_nombre_ant = lee_campo($cartucho_em, 'em_id', 'em_nombre', $anterior);

// si los nombres estan en blanco entocnes no despliega nada
$sig = '';
$ant = '';
if($em_nombre_sig) { $sig = '<li class="breadcrumb-item"> <a href="ca_empresa.php?id='. $siguiente .'"><i class="far fa-arrow-circle-right"></i> '. $em_nombre_sig .'</a></li>'; }
if($em_nombre_ant) { $ant = '<li class="breadcrumb-item"> &nbsp;&nbsp; <a href="ca_empresa.php?id='. $anterior .'">'. $em_nombre_ant .' <i class="far fa-arrow-circle-left"></i></a></li>'; }
// nombre de la empresa
$em_nombre = lee_campo($cartucho_em, 'em_id', 'em_nombre', $id);

$cuerda = '
<!-- breadcrumbs -->
<nav aria-label="breadcrumb" role="navigation">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="entrada.php"><i class="far fa-home"></i> Entrada</a></li>
    <li class="breadcrumb-item"><a href="ca_feria.php"><i class="far fa-sitemap"></i> '. $ev_paquete['ev_nombre'] .'</a></li>
    '. $ant .'
    <li class="breadcrumb-item active" aria-current="page"> '. $em_nombre .' </li>
    '. $sig .'
  </ol>
</nav>
<!-- Despliega los datos de la empresa -->
';
/*
<!-- encabezado -->
<div class="row"><div class="col-sm-12 text-center">
<h3>Feria de Reclutamiento</h3>
<h1>'. $ev_paquete['ev_nombre'] .'</h1>
</div></div>
*/

$cuerda .= '
<!-- Despliega los datos de la empresa -->
';

// procesa las postulaciones
$accion = @$_POST['accion'];
switch ($accion) {
    case 'postular':
        // procesa las postulaciones del candidato
        $cuerda = ca_postularme();
        break;
    default:
        $cuerda .= ca_datos_empresa( $id );
}

//$cuerda .= ca_datos_empresa( $id );
$cuerda .= '    
<!-- espaciador -->
<div class="pb-5"></div>
';

echo $cuerda;
echo pie_candidato1 ();

/* *****************************************************************************
 * Funciones principales
** ************************************************************************** */
// forma un arreglo con los datos del evento, cliente y la dinamica
function ev_paquete($ev_id)
{
    // forma un arreglo con los parametros del evento
    global $mysqli, $eventos, $clientes;

    // ev_id, ev_a_id, ev_nombre, ev_cli_id, ev_empresas, ev_candidatos, ev_fechai, ev_fechaf, ev_actualizado, ev_desde
    // cli_id, cli_a_id, cli_nombre, cli_rfc, cli_pass, cli_cto_nombre, cli_cto_genero, cli_cto_apellido_pat,
    // cli_cto_apellido_mat, cli_tel, cli_email, cli_calle, cli_num_ext, cli_colonia, cli_num_int, cli_mpio, cli_ciudad,
    // cli_cp, cli_edo_id, cli_actualizado, cli_desde
    $sql = "SELECT ev_a_id, ev_nombre, ev_cli_id, ev_empresas, ev_candidatos, ev_fechai, ev_fechaf,
    cli_nombre, cli_rfc
    FROM $eventos, $clientes
    WHERE ev_id = '$ev_id'
    AND cli_id = ev_cli_id
    AND cli_a_id > 1
    ORDER BY cli_nombre ASC
    ";
//echo 'eventos.ev_paquete.155. sql: '. $sql ."<br>\r\n";
    $r = $mysqli->query($sql);
    if ($mysqli->error) {
        printf("eventos.ev_paquete. SQL: %s\nError: %s\n", $sql, $mysqli->error);
        exit;
    }

    // ev_id, ev_a_id, ev_nombre, ev_cli_id, ev_di_id, ev_afluencia, ev_equipos, ev_fechai, ev_fechaf, ev_actualizado, ev_desde
    $v = $r->fetch_array();
    $ev_paquete = array();
    $ev_paquete['ev_id'] = $ev_id;
    $ev_paquete['ev_nombre'] = $v['ev_nombre'];
    $ev_paquete['ev_cli_id'] = $v['ev_cli_id'];
    $ev_paquete['cli_nombre'] = $v['cli_nombre'];
    $ev_paquete['cli_rfc'] = $v['cli_rfc'];
    $ev_paquete['ev_empresas'] = $v['ev_empresas'];
    $ev_paquete['ev_candidatos'] = $v['ev_candidatos'];
    $ev_paquete['ev_fechai'] = $v['ev_fechai'];
    $ev_paquete['ev_fechaf'] = $v['ev_fechaf'];

    $ev_paquete['ev_acentos'] = 'no';
//echo print_r($ev_paquete); exit;
    return $ev_paquete;
}

$vacantes = ca_vacantes( $id );

function ca_datos_empresa( $id )
{
    global $mysqli;
    global $ev_paquete, $cartucho_em, $cartucho_of, $cartucho_po, $dir_imgs, $img_vacia;
    global $seleccion, $edos, $sexo;

    // lee la empresa, su logotipo y video
    // em_id, em_a_id, em_ev_id, em_cli_id, em_video, em_nip, em_pass, em_nombre, em_actividadp, em_descripcion, em_rfc,
    // em_cto_nombre, em_cto_genero, em_cto_apellido_pat, em_cto_apellido_mat, em_tel, em_email, em_calle, em_num_ext,
    // em_colonia, em_num_int, em_mpio, em_ciudad, em_cp, em_edo_id, em_actualizado, em_desde
    $sql = "SELECT *
    FROM $cartucho_em
    WHERE em_id = '$id'
    AND em_a_id > 1
    ";
    $r = $mysqli->query($sql);
    if ($mysqli->error) {
        printf("ca_empresa.ca_datos_empresa. SQL: %s\nError: %s\n", $sql, $mysqli->error);
        exit;
    }
    $cuantas = $r->num_rows;
//echo '207. id: '. $id .'; cuantas: '. $cuantas .'<br>'; exit;
    // si esta vacio entonces sale
    if (!$cuantas) {

        // no hay empresas
        $tarea = 'Despliega Empresa';
        $aviso = 'La Empresa ' . $id . ' no tiene registro';
        $retorno = 'candidato.php';
        $cuerda = aviso($tarea, $aviso, $retorno);
    } else {

        // despliega los datos de la empresa
        $v = $r->fetch_assoc();
        $estado = lee_campo($edos, 'edo_id', 'edo_nombre', $v['em_edo_id'] );
        $logotipo = em_logo($v['em_id']);
		$logotipo2 = em_logo2($v['em_id']);

        // variables de la lista de información
        // actividadp
        $actividadp = '';
        if($v['em_actividadp']) {
            $actividadp = '<li><span>Actividad Principal:</span><br>' . $v['em_actividadp'] . '</li>
';
        }
        // contacto
        $contacto = '';
        if($v['em_cto_nombre']) {
            $sx = lee_campo($sexo, 'sx_id', 'sx_inicial', $v['em_cto_genero'] );
            $contacto = '<li><span>Contacto de Reclutamiento:</span><br>' .'('. $sx .') '. $v['em_cto_nombre'] .' '.
                $v['em_cto_apellido_pat'] .' '. $v['em_cto_apellido_mat'] .'</li>
';
        }

        // tel
        $tel = '';
        if($v['em_tel']) {
            $tel = '<li><span>Teléfono reclutamiento:</span><br>' . $v['em_tel'] . '</li>
';
        }

        // email
        $email = '';
        if($v['em_email']) {
            $email = '<li><span>Correo reclutamiento:</span><br>' . $v['em_email'] . '</li>
';
        }

        // domicilio
        $domicilio = '';
        if($v['em_calle']) {
            $domicilio = '<li><span>Domicilio:</span><br>' . $v['em_calle'] .' '. $v['em_num_ext'] .' '. $v['em_num_int'] .'<br>
            '. $v['em_colonia'] .'<br>
            '. $v['em_cp'] .', '.  $v['em_ciudad'] .' '. $v['em_mpio'] .', '. $estado .'</li>
';
        }


        //             <p><i class="far fa-briefcase"></i> ' . $v['em_actividadp'] . ' &nbsp;&nbsp;
        //            <i class="far fa-map-marker-alt"></i> ' . $v['em_ciudad'] .' '. $estado .'</p></div>

        // liga el pdf, si lo hay
        // presentacion PDF
        if($v['em_pdf']) {
            // hace la liga a la presentacion
            $archivo = '../archivero/ev_'. $seleccion .'/em/em_'. $id .'.pdf';
            $liga_pdf = '<a href="'. $archivo .'" target="_blank">';
        } else {
            $liga_pdf = '<a href="#">';
        }


        // cabeza de la pagina, el stand, a 3 cuerpos video al centro
        // busca las imagenes, si, sc sd
        $si = '../assets/materiales/si.jpg'; //dd.jpg'; //si
        $sc = '../assets/materiales/sc.jpg'; //.jpg';
        $sd = '../assets/materiales/sd.jpg'; //.jpg';

        // partes del Stand de la empresa, banner de encabezado, img izquierda, video en el centro y img derecha
        $sizq = '<a href="#nombre"><img src="' . $logotipo . '" class="em-si" alt="" title="Presentación en PDF"></a>';
		      

        // Centro del stand. player del video o imagen
        if($v['em_video']) {
            // pone el player
            $scen = '<div class="plyr__video-embed" id="player">
              <iframe
                src="'. $v['em_video'] .'?loop=false&amp;byline=false&amp;portrait=false&amp;title=false&amp;speed=true&amp;transparent=0&amp;gesture=media"
                allowfullscreen
                allowtransparency
                allow="autoplay"
                >
              </iframe>
            </div>';
        } else {
            // pone la imagen dummy
            $scen = '<img src="' . $sc . '" class="em-sc" alt="" title="'. $v['em_nombre'] .'">';
        }
        $sder = '<a href="'. @$archivo .'" target="_blank" ><img src="' . $logotipo2 . '" class="em-sd" alt="" title="Vacantes"></a>';

        // despliega la empresa
        $cuerda = '<section id="em_' . $seleccion . '" class="emp">
<div class="container">

        <div class="row">
        <div class="col-sm-5 sinp">'. $sizq .'</div>
        <div class="col-sm-2 sinp">'. $scen .'</div>
        <div class="col-sm-5 sinp">'. $sder .'</div>

</div>         
';

        //        <div class="col-md-2"><img src="' . $logotipo . '" class="img-logo" alt=""></div>
     $cuerda .= '   
     <div class="row mt-5">
        <div class="col-md-8 text-center" id="nombre"><h3>' . $v['em_nombre'] . '</h3>
     ';

     if($v['em_vc_fecha']) {
        $cuerda .= '<strong><i class="far fa-webcam"></i> Videoconferencia</strong><br>
            Fecha: ' . $v['em_vc_fecha'] .'<br>
            Enlace a la videoconferencia en:<br>
            <a href="'. $v['em_vc_liga'] .'" target="_blank">'. $v['em_vc_liga'] .'</a>';
    }

     $cuerda .= '
        </div>
        
     </div>   

    <div class="row pt76" id="video">
        <div class="col-md-8">
';
/*
        // video, opcional
        if(strlen($v['em_video']) > 1 ) {
            $cuerda .= '<!-- párrafo de video, opcional -->
            <h3><i class="far fa-video porfuera"></i>Video</h3>
            <div class="plyr__video-embed" id="player">
              <iframe
                src="'. $v['em_video'] .'?loop=false&amp;byline=false&amp;portrait=false&amp;title=false&amp;speed=true&amp;transparent=0&amp;gesture=media"
                allowfullscreen
                allowtransparency
                allow="autoplay"
                >
              </iframe>
            </div>
';
        }
*/
        $cuerda .= '
           
            '. $v['em_descripcion'] .'
        </div>
';

        // recuadro de información
        $cuerda .= '
        <!-- recuadro de información columna derecha-->
        <div class="col-md-4 info">
';
        $tira = $actividadp . $contacto . $tel . $email . $domicilio;
        if(strlen($tira) > 1) {
            $cuerda .= '            <h3>Información</h3>
            <ul>
';
            $cuerda .= $tira;
            $cuerda .= '
            </ul>
';
        }
        $cuerda .= '        </div>    
    </div>
';


        // presentacion PDF
        if($v['em_pdf']) {
            // hace la liga a la presentacion
            $archivo = '../archivero/ev_'. $seleccion .'/em/em_'. $id .'.pdf';
            $cuerda .= '<!-- Presentacion en PDF, opcional -->
    <div class="row pt76" id="pdf">
        <div class="col-md-8">
            <h3><i class="far fa-file-pdf porfuera"></i>Presentación en PDF</h3>
            <p><a href="'. $archivo .'" target="_blank" title="abre una ventana para desplegar el archivo"><i class="far fa-file-pdf"></i> Presentación en PDF</a></p>
        </div>
    </div>
';
        }


        // vacantes, opcional
        $cuerda .= '<!-- vacantes -->
   
';
        // valvula de cv para postular
//echo 'ca_empresa.438. u_cv: '. @$_SESSION['u_cv'] .'<br>';
        if(@$_SESSION['u_cv']) {
            $cuerda .= ca_vacantes($id);
        } else {
            $cuerda .= '';
        }
        $cuerda .= '
        </div>
    </div>
';

        // cierra la pagina
        $cuerda .= '
</div>
</section>
';

    }
    return $cuerda;
}

// busca el archivo del logotipo de la empresa
function em_logo( $em_id) {
    // busca el archivo del logotipo de la empresa
    global $dir_logos, $img_vacia;
    $im = $dir_logos . $em_id .'.png';
    if(!is_file($im)) {
        $im = $dir_logos . $em_id .'.jpg';
        if(!is_file($im)) {
            $im = $img_vacia;
        }
    }
    return $im;
}

function em_logo2( $em_id) {
    // busca el archivo del logotipo de la empresa
    global $dir_logos, $img_vacia;
    $im = $dir_logos . $em_id .'a.png';
    if(!is_file($im)) {
        $im = $dir_logos . $em_id .'a.jpg';
        if(!is_file($im)) {
            $im = $img_vacia;
        }
    }
    return $im;
}

// cuenta las vacantes de la empresa
function ca_cuenta_vacantes($id)
{
    // cuenta las vacantes vigentes de la empresa
    global $mysqli, $cartucho_of;

    $hoy = date("Y-m-d");
    $sql = "SELECT COUNT(of_id) as cuantas FROM $cartucho_of
    WHERE of_em_id = '$id'
    AND of_desde <= '$hoy'
    AND of_hasta >= '$hoy'
    ";

    $r = $mysqli->query($sql);
    if ($mysqli->error) {
        printf("ca_empresa.ca_cuenta_vacantes. SQL: %s\nError: %s\n", $sql, $mysqli->error);
        exit;
    }
    $v = $r->fetch_assoc();
    $cuantas = $v['cuantas'];

    switch($cuantas) {
        case 0:
            $cuerda = 'No hay Vacantes';
            break;
        case 1:
            $cuerda = $cuantas .' Vacante';
            break;
        default:
            $cuerda = $cuantas .' Vacantes';
    }

    return $cuerda;
}

// hace la lista de vacantes de la empresa, con forma de selección
function ca_vacantes( $id ) {
    //
    global $mysqli, $cartucho_of;
    global $em_nombre;

    $hoy = date("Y-m-d");
    // busca las ofertas de trabajo de la empresa.
    // of_id, of_a_id, of_ev_id, of_em_id, of_clave, of_nombre, of_descripcion, of_lugar, of_requisitos, of_ofrece,
    // of_salario, of_desde, of_hasta, of_actualizado, of_fecha
    $sql = "SELECT * FROM $cartucho_of
    WHERE of_em_id = '$id'
    AND of_a_id > 1
    AND of_desde <= '$hoy'
    AND of_hasta >= '$hoy'
    ";
    $r = $mysqli->query($sql);
    if ($mysqli->error) {
        printf("ca_empresa.ca_vacantes. SQL: %s\nError: %s\n", $sql, $mysqli->error);
        exit;
    }
    $cuantas = $r->num_rows;
//echo '391. cartucho_of: '. $cartucho_of .'; SQL: '. $sql .'; cuantas: '. $cuantas ."<br>\r\n";
    // si esta vacio entonces sale
    if (!$cuantas) {
        // no hay vacantes
        $cuerda = '<div class="row"><div class="col-sm-12 text-center">
    <h4>En este momento la Empresa no tiene vacantes activas</h4>
</div></div>';
    } else {
        // forma una cuerda html con las vacantes, dentro de una forma para postularse
        $cuerda = '
<form name="vacantes" method="post" action="ca_empresa.php">
<input type="hidden" name="cartucho" value="'. $cartucho_of .'">
<input type="hidden" name="id" value="'. $id .'">
<input type="hidden" name="em_nombre" value="'. $em_nombre .'">
';
        $i = 0;
        while ($v = $r->fetch_assoc()) {
            $descripcion = '';
            if ($v['of_descripcion']) {
                $descripcion = '<span class="spanb">Descripción:</span> ' . $v['of_descripcion'] . '<br>
';
            }
            $lugar = '';
            if ($v['of_lugar']) {
                $lugar = '<span class="spanb">Lugar:</span> ' . $v['of_lugar'];
            }
            $requisitos = '';
            if ($v['of_lugar']) {
                $requisitos = ' | <span class="spanb">Requisitos:</span> ' . $v['of_requisitos'];
            }
            $ofrece = '';
            if ($v['of_ofrece']) {
                $ofrece = ' | <span class="spanb">Ofrece:</span> ' . $v['of_ofrece'];
            }
            $salario = '';
            if ($v['of_salario']) {
                $salario = ' | <span class="spanb">Salario:</span> ' . $v['of_salario'];
            }

            $vigencia = '';
            if ($v['of_desde']) {
                $vigencia = ' | <span class="spanb">Vigencia:</span> ' . $v['of_desde'] . ' hasta: ' . $v['of_hasta'];
            }

            $cuerda .= '
<div class="row pb-4">
  <div class="col-md-1">
    <div class="form-check">
    <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="po_'. $i .'" value="' . $v['of_clave'] . '">
        <span class="form-check-sign">
            <span class="check"></span>
        </span>
    </label>
    </div>
  </div>

  <div class="col-md-11 vacante"><span class="grandeb">' . $v['of_nombre'] . '</span><br>
';
            //<div class="col-md-11">(' . $v['of_clave'] . ') <span class="grandeb">' . $v['of_nombre'] . '</span><br>
            //$cuerda .= $descripcion . $lugar . $requisitos . $ofrece . $salario . $vigencia;
            $cuerda .= $descripcion . $lugar . $requisitos . $ofrece . $salario;
            $cuerda .= '
  </div>
</div>
';
            ++$i;
        }

        $cuerda .= '
<div class="row"><div class="col-md-12 text-center">
	<button type="submit" class="btn btn-sm btn-success" name="accion" value="postular">postularme</button>
</div></div>

</form>
';
    }

    return $cuerda;

}

// procesa las postulaciones del candidato
function ca_postularme()
{
    // las postulaciones se guardan en la tabla de postulaciones del evento en donde participa el candidato
    global $mysqli;
    global $eventos, $ev_id, $ca_id, $id, $em_nombre;

    // ofertas.inc.php 395:
    // forma la clave de la oferta, 5 dimensiones
    //$datos['of_clave'] = 'of' .'.'. $of_ev_id .'.'. $of_cli_id .'.'. $datos['of_em_id'] .'.'. $datos['of_id'];

    // hace el nombre del cartucho de postulaciones del candidato
    $ev_cli_id = lee_campo($eventos, 'ev_id', 'ev_cli_id', $ev_id);
    $cartucho_po = 'z_' . $ev_id . '_' . $ev_cli_id . '_po';
//echo '508. cartucho po: ', $cartucho_po ."<br>\r\n";
    $id = $_POST['id']; // numero de empresa en el evento
    $em_nombre = $_POST['em_nombre'];

    // todas las postulaciones ocurren en la misma empresa en el mismo evento
    //supone que puede haber hast 20 postulacione por empresa
    $i = 0;
    $contador = 0;
    for($i = 0; $i < 20; ++$i) {
        if (@$_POST['po_' . $i]) {
            $po_id = 'po_' . $i;
            // revisa la clave con la que se postulo
            $clave = $_POST[$po_id];
            $arr = explode('.', $clave);
            $dims = count($arr);
            if ($dims == 5) {
                //es buena y la inserta
                // po_id, po_ca_id, po_of_id, po_em_id, po_ev_id
                $po_ca_id = $ca_id;
                $po_of_id = $arr[4];
                $po_em_id = $arr[3];
                $po_ev_id = $arr[1];
                // hace al nombre del cartucho de postulaciones del candidato

                // no repite postulaciones, revisa si ya existe una identica
                $sql0 = "SELECT po_id FROM $cartucho_po
                WHERE
                po_ca_id = '$po_ca_id'
                AND po_of_id = '$po_of_id'
                AND po_em_id = '$po_em_id'
                AND po_ev_id = '$po_ev_id'
            ";
                $r0 = $mysqli->query($sql0);
                $hay = $r0->num_rows; //  $v0 = $r0->fetch_assoc();
//echo 'sql: '. $sql0 .'; hay: '. $hay .'<br>'; exit;
                if ($hay > 0) {
                    // ya existe y no duplica
                } else {
                    // la inserta
                    $sql = "INSERT INTO $cartucho_po
                SET
                po_ca_id = '$po_ca_id',
                po_of_id = '$po_of_id',
                po_em_id = '$po_em_id',
                po_ev_id = '$po_ev_id'
                ";
                    $r = $mysqli->query($sql);
//echo '537. sql: '. $sql ."<br>\r\n";
                    if ($mysqli->error) {
                        printf("ca_empresa.ca_postularme. SQL: %s\nError: %s\n", $sql, $mysqli->error);
                        exit;
                    }
                }
            }
            ++$contador;
        }
    }

    $tarea = 'Postulaciones';
    switch($contador){
        case '0':
            // sin postulaciones
            $aviso = 'No hubo postulaciones';
            break;
        case '1':
            // solo es una postulacion
            $aviso =  'Ya anoté 1 postulación';
            break;
        default:
            $aviso = 'Ya anoté ' . $contador .' postulaciones';
    }
    $retorno = 'ca_feria.php';
    $cuerda = aviso($tarea, $aviso, $retorno);
    return $cuerda;
}

