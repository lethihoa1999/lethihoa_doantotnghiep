<body class="hold-transition dark-skin sidebar-mini theme-success fixed">

<div class="wrapper">
    <div id="loader"></div>

    <header class="main-header">
        <div class="d-flex align-items-center logo-box justify-content-start">
            <!-- Logo -->
            <a href="index.php" class="logo">
                <!-- logo-->
                <div class="logo-mini w-50">
                    <span class="light-logo"><img src="public/layout/images/anhdoan/logoh.png" alt="logo"></span>
                    <span class="dark-logo"><img src="public/layout/images/anhdoan/logoh.png" alt="logo"></span>
                </div>
                <div class="logo-lg">
                    <span class="light-logo"><img src="public/layout/images/anhdoan/logotext.png" alt="logo"></span>
                    <span class="dark-logo"><img src="public/layout/images/anhdoan/logotext.png" alt="logo"></span>
                </div>
            </a>
        </div>
        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <div class="app-menu">
                <ul class="header-megamenu nav">
                    <li class="btn-group nav-item">
                        <a href="#" class="waves-effect waves-light nav-link push-btn btn-primary-light" data-toggle="push-menu" role="button">
                            <i data-feather="align-left"></i>
                        </a>
                    </li>
                    <li class="btn-group d-lg-inline-flex d-none">
                        <div class="app-menu">
                            <div class="search-bx mx-5">
                                <form>
                                    <div class="input-group">
                                        <input type="search" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="button-addon2">
                                        <div class="input-group-append">
                                            <button class="btn" type="submit" id="button-addon3"><i data-feather="search"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="navbar-custom-menu r-side">
                <ul class="nav navbar-nav">
                    <li class="btn-group nav-item d-lg-inline-flex d-none">
                        <a href="#" data-provide="fullscreen" class="waves-effect waves-light nav-link full-screen btn-warning-light" title="Full Screen">
                            <i data-feather="maximize"></i>
                        </a>
                    </li>
                    <!-- Notifications -->
                    <li class="dropdown notifications-menu">
                        <a href="#" class="waves-effect waves-light dropdown-toggle btn-info-light" data-bs-toggle="dropdown" title="Notifications">
                            <i data-feather="bell"></i>
                        </a>
                        <ul class="dropdown-menu animated bounceIn">

                            <li class="header">
                                <div class="p-20">
                                    <div class="flexbox">
                                        <div>
                                            <h4 class="mb-0 mt-0">Notifications</h4>
                                        </div>
                                        <div>
                                            <a href="#" class="text-danger">Clear All</a>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class="menu sm-scrol">
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-users text-info"></i> Curabitur id eros quis nunc suscipit blandit.
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-warning text-warning"></i> Duis malesuada justo eu sapien elementum, in semper diam posuere.
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-users text-danger"></i> Donec at nisi sit amet tortor commodo porttitor pretium a erat.
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-shopping-cart text-success"></i> In gravida mauris et nisi
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-user text-danger"></i> Praesent eu lacus in libero dictum fermentum.
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-user text-primary"></i> Nunc fringilla lorem
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-user text-success"></i> Nullam euismod dolor ut quam interdum, at scelerisque ipsum imperdiet.
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="#">View all</a>
                            </li>
                        </ul>
                    </li>

                    <!-- Control Sidebar Toggle Button -->

                    <!-- <li class="btn-group nav-item">
                        <a href="#" data-toggle="control-sidebar" title="Setting" class="waves-effect full-screen waves-light btn-danger-light">
                            <i data-feather="settings"></i>
                        </a>
                    </li> -->

                    <!-- User Account-->
                    <li class="dropdown user user-menu">
                    <?php
                        @session_start();
                        if (isset($_SESSION['user'])) {
                        ?>
                        <a href="#" class="waves-effect waves-light dropdown-toggle w-auto l-h-12 bg-transparent py-0 no-shadow" data-bs-toggle="dropdown" title="User">
                            <div class="d-flex pt-5">
                                <div class="text-end me-10">
                                    <p class="pt-5 fs-14 mb-0 fw-700 text-primary"></p>
                                    <small class="fs-10 mb-0 text-uppercase text-mute">
                                        <?php
                                        echo $_SESSION['user'];
                                         ?>
                                    </small>
                                </div>
                                <img src="public/layout/images/avatar/avatar-1.png" class="avatar rounded-10 bg-primary-light h-40 w-40" alt="" />
                            </div>
                        </a>
                        <?php
                            }else {
                                ?>
                                    <a href = "login.php" style= "width: 100px; font-size: 15px;"> ????ng nh???p </a>
                                    <?php
                                }
                                ?>
                        <ul class="dropdown-menu animated flipInX">
                            <li class="user-body">
                                <a class="dropdown-item" href="#"><i class="ti-user text-muted me-2"></i> Profile</a>
                                <a class="dropdown-item" href="#"><i class="ti-settings text-muted me-2"></i> Settings</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="logout.php?func=exit"><i class="ti-lock text-muted me-2"></i> Logout</a>
                            </li>
                        </ul>
                    </li>

                </ul>
            </div>
        </nav>
    </header>

