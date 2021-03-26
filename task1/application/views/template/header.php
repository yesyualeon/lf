<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link type="text/css" rel="stylesheet" href="<?= base_url(); ?>/assets/vendor/bs5-beta/css/bootstrap.css">
    <link type="text/css" rel="stylesheet" href="<?= base_url(); ?>/assets/css/dashboard.css">
    <link type="text/css" href="<?= base_url(); ?>/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/vendor/chartist/dist/chartist.min.css">
    <title>Dashboard Admin</title>
</head>

<body>
    <div class="container-fluid h100vh poppins-light">
        <div class="row ">
            <!-- Sidebar -->
            <div class="col-xl-2 col-lg-3 col-md-3 col-sm-4 d-none d-sm-block d-md-block d-lg-block"></div>
            <div class="position-fixed col-xl-2 col-lg-3 col-md-3 col-sm-4 d-none d-sm-block d-md-block d-lg-block bg-indigo h100vh border-end border-0 z-1">
                <div class="p-1 mt-2 text-center">
                    <div class="d-flex flex-row place-center">
                        <h3 class="dashboard-title poppins-md text-uppercase">Dashboadminssss</h3>
                    </div>
                </div>
                <ul class="navbar-nav mb-lg-0 my-3">
                    <!-- Admin -->
                    <li class="nav-item p-1">
                        <a class="<?= $this->uri->segment(1) == 'admin' && $this->uri->segment(2) == '' ? 'active': '' ?> nav-link px-4 py-2 rounded-3 text-default" aria-current="page" href="<?= site_url() ;?>admin"><span class="fas fa-users">&nbsp;&nbsp;</span> User</a>
                    </li>
                    <li class="nav-item p-1">
                        <a class="<?= $this->uri->segment(2) == 'jadwal' ? 'active': '' ?> nav-link px-4 py-2 rounded-3 text-default" aria-current="page" href="<?= site_url() ;?>admin/jadwal"><span class="fas fa-calendar">&nbsp;&nbsp;</span> Jadwal</a>
                    </li>
                    <!-- Dokter -->
                    <li class="nav-item p-1">
                        <a class="<?= $this->uri->segment(1) == 'dokter' && $this->uri->segment(2) == '' ? 'active': '' ?> nav-link px-4 py-2 rounded-3 text-default" aria-current="page" href="<?= site_url() ;?>dokter"><span class="fas fa-chart-pie">&nbsp;&nbsp;</span> Diagnosa</a>
                    </li>
                    <!-- Perawat -->
                    <li class="nav-item p-1">
                        <a class="<?= $this->uri->segment(1) == 'perawat' && $this->uri->segment(2) == '' ? 'active': '' ?> nav-link px-4 py-2 rounded-3 text-default" aria-current="page" href="<?= site_url() ;?>perawat"><span class="fas fa-user">&nbsp;&nbsp;</span> Panggil</a>
                    </li>
                    <!-- Pasien -->
                    <li class="nav-item p-1">
                        <a class="<?= $this->uri->segment(1) == 'pasien' && $this->uri->segment(2) == '' ? 'active': '' ?> nav-link px-4 py-2 rounded-3 text-default" aria-current="page" href="<?= site_url() ;?>pasien"><span class="fas fa-chart-bar">&nbsp;&nbsp;</span> Rekam Medis</a>
                    </li>
                </ul>
            </div>
            <!-- End of Sidebar -->

            <!-- Navbar on Phone only-->
            <div class="px-0 d-sm-none d-md-none d-lg-none d-xl-none d-xxl-none d-block">
                <nav class="navbar navbar-expand-lg bg-indigo ps-3">
                    <a class="navbar-brand text-light poppins-md text-uppercase" href="#">Navbar</a>
                    <!-- Button trigger modal -->
                    <a class="btn btn-transparent text-light" data-bs-toggle="modal" data-bs-target="#sidebarModal">
                        <span class="fas fa-hamburger fs-3"></span>
                    </a>
                </nav>
            </div>
            <!-- Enf of Navbar -->
            <!-- Content -->
            <div class="col-xl-10 col-lg-9 col-md-9 col-sm-8 bg-container">
                <!-- Navbar Content -->
                <div class="position-fixed bg-container z-2 w-navbar msw-0 d-none d-sm-block d-md-block d-lg-block d-xl-block d-xxl-block">
                    <div class="position-relative">
                        <div id="navbar-change" class="">
                            <div class="row">
                                <div class="col-12">
                                    <span class="navbar-nav pe-5 float-end flex-row">
                                        <li class="nav-item align-self-center">
                                            <a class="text-dark fs-5 btn-transparent" href="#hehe"><span class="far fa-envelope"><sup><span class="badge rounded-circle bg-info poppins-light text-dark">3</span></sup>
                                                </span>
                                            </a>
                                        </li>
                                        <li class="nav-item align-self-center">
                                            <a class="text-dark fs-5 btn-transparent" href="#hehe"><span class="far fa-bell"><sup><span class="badge rounded-circle bg-warning poppins-light text-dark">4</span></sup></span></a>
                                        </li>
                                        <li class="nav-item dropdown me-0">
                                            <a class="bg-transparent nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <img src="assets/upload/image/user/profile-picture-1.jpg" alt="profile-picture" class="rounded-circle img-profile-thumbnail">
                                                <span class="fs-7 text-grey d-lg-inline d-md-inline d-sm-none"> Dadang
                                                    Nurjaman</span>
                                            </a>
                                            <div class="dropdown-menu shadow rounded w-100 border-0" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item fs-7 text-grey" href="#"><span class="far fa-user-circle">&nbsp;</span> My Profile</a>
                                                <a class="dropdown-item fs-7 text-grey" href="#"><span class="fas fa-cog">&nbsp;</span> Settings</a>
                                                <a class="dropdown-item fs-7 text-grey" href="#"><span class="fas fa-envelope-open-text">&nbsp;</span> Messages</a>
                                                <a class="dropdown-item fs-7 text-grey" href="#"><span class="fas fa-user-shield">&nbsp;</span>Support</a>
                                                <a class="dropdown-item fs-7 text-grey" href="#"><span class="fas fa-sign-out-alt text-danger">&nbsp;</span> Logout</a>
                                            </div>
                                        </li>
                                    </span>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>