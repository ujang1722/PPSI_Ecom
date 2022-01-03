<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard</title>

    <!-- Fontfaces CSS-->
    <link href="<?=base_url(). 'assets/css/font-face.css'?>" rel="stylesheet" media="all">
    <link href="<?=base_url(). 'assets/font-awesome-4.7/css/font-awesome.min.css'?>" rel="stylesheet" media="all">
    <link href="<?=base_url(). 'assets/font-awesome-5/css/fontawesome-all.min.css'?>" rel="stylesheet" media="all">
    <link href="<?=base_url(). 'assets/mdi-font/css/material-design-iconic-font.min.css'?>" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="<?=base_url(). 'assets/bootstrap-4.1/bootstrap.min.css'?>" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="<?=base_url(). 'assets/animsition/animsition.min.css'?>" rel="stylesheet" media="all">
    <link href="<?=base_url(). 'assets/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css'?>" rel="stylesheet" media="all">
    <link href="<?=base_url(). 'assets/wow/animate.css'?>" rel="stylesheet" media="all">
    <link href="<?=base_url(). 'assets/css-hamburgers/hamburgers.min.css'?>" rel="stylesheet" media="all">
    <link href="<?=base_url(). 'assets/slick/slick.css'?>" rel="stylesheet" media="all">
    <link href="<?=base_url(). 'assets/select2/select2.min.css'?>" rel="stylesheet" media="all">
    <link href="<?=base_url(). 'assets/perfect-scrollbar/perfect-scrollbar.css'?>" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="<?=base_url(). 'assets/css/theme.css'?>" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="<?=base_url(). 'assets/images/logo.png'?>" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="index.html">Dashboard 1</a>
                                </li>
                                <li>
                                    <a href="index2.html">Dashboard 2</a>
                                </li>
                                <li>
                                    <a href="index3.html">Dashboard 3</a>
                                </li>
                                <li>
                                    <a href="index4.html">Dashboard 4</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="chart.html">
                                <i class="fas fa-chart-bar"></i>Customer List</a>
                        </li>
                        <li>
                            <a href="table.html">
                                <i class="fas fa-table"></i>Tickets</a>
                        </li>
                        <li>
                            <a href="form.html">
                                <i class="far fa-check-square"></i>Konfirmasi Pemesanan</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-calendar-alt"></i>Pembelian</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#" style="max-width: 100px">
                    <img src="<?=base_url(). 'assets/images/logo.png'?>" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub"><!-- 
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="index.html">Dashboard 1</a>
                                </li>
                                <li>
                                    <a href="index2.html">Dashboard 2</a>
                                </li>
                                <li>
                                    <a href="index3.html">Dashboard 3</a>
                                </li>
                                <li>
                                    <a href="index4.html">Dashboard 4</a>
                                </li>
                            </ul>
                        </li> -->
                        <li>
                            <a href="<?=base_url().'admin'?>">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="<?=base_url().'admin/customer_list'?>">
                                <i class="fas fa-users"></i>Customer List</a>
                        </li>
                        <li>
                            <a href="<?=base_url().'admin/tickets'?>">
                                <i class="fas fa-ticket-alt"></i>Tickets</a>
                        </li>
                        <li>
                            <a href="<?=base_url().'admin/confirm'?>">
                                <i class="far fa-check-square"></i>Konfirmasi Pemesanan</a>
                        </li>
                        <li>
                            <a href="<?=base_url().'admin/list_buy'?>">
                                <i class="fas fa-shopping-cart"></i>Pembelian</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->
        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="hidden" name="search" placeholder="Search for datas &amp; reports..." />
                                </button>
                            </form>
                            <div class="header-button">
                                <div class="noti-wrap">
                                    <div class="noti__item js-item-menu">
                                    </div>
                                    <div class="noti__item js-item-menu">
                                    </div>
                                    <div class="noti__item js-item-menu">
                                    </div>
                                </div>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">
                                                <?=$this->session->userdata('full_name');?>
                                            </a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                    <h5 class="name">
                                                        <?=$this->session->userdata('full_name');?>
                                                    </h5>
                                                    <span class="email"><?=$this->session->userdata('email');?></span>
                                            </div>
                                            <div class="account-dropdown__body">  
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-lock"></i>Ganti Password</a>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="<?=base_url().'admin/logout'?>">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->