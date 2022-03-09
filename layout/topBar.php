<?php
include('header.php');
?>
<div class="d-flex" id="wrapper">
    <!-- Sidebar-->
    <?php include('sidebar.php'); ?>

    <!-- Page content wrapper-->
    <div id="page-content-wrapper">
        <!-- Top navigation-->
        <nav class="navbar navbar-expand-lg bg-theme-primary border-bottom-radius">
            <div class="container-fluid">
                <button class="navbar-toggler" id="sidebarToggle" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="input-group col-md-4">
                    <input class="form-control py-2 border-right-0 border" type="search" value="search" id="example-search-input">
                    <span class="input-group-append">
                        <button class="btn btn-outline-secondary border-left-0 border bg-white" type="button">
                            <i class="bi bi-search"></i>
                        </button>
                    </span>
                </div>
                <div class="collapse navbar-collapse col-md-3" id="navbarSupportedContent">
                    <div class="d-flex align-items-center flex-wrap gap-15">
                        <div class="avatarImage d-flex align-items-center gap-15">
                            <a class="text-dark notification position-relative" id="notification"><i class="bi bi-bell-fill"></i><span class="count">3</span></a>
                            <img src="../images/user-icon.png" alt="User Avatar" class="flex-shrink-0">
                        </div>
                        <div class="avatarInfo">
                            <a id="navbarDropdown">
                                <h3 class="text-white achivpFont h5 mb-0 mt-2">Sammy Aiden<i class="bi bi-chevron-down"></i></h3>
                            </a>
                            <p class="mb-0 text-dark">Admin</p>
                            <div class="dropdown-menu p-3 text-center">
                                <figure>
                                    <img src="../images/circle-icon.png" alt="Avatar">
                                </figure>
                                <p class="text-dark">Sammy Aiden</p>
                                <p><a href="#" class="btn bg-theme-primary text-white d-block" role="button" data-bs-toggle="button" aria-pressed="true">View Profile</a></p>
                                <p><a class="btn bg-theme-primary-outline text-white d-block" aria-disabled="true" role="button" data-bs-toggle="button">Logout</a></p>
                            </div>
                            <!-- notification -->

                            <div class="dropdown-notifcation p-3">
                                <h3 class="mb-0 achivpFont py-2 border-bottom font-weight-bold h5">Notifications</h3>
                                <div class="d-flex gap-15 py-3">
                                    <div class="notificationIcon flex-shrink-0">
                                        <i class="bi bi-bell-fill"></i>
                                    </div>
                                    <div class="notificationContent">
                                        <p class="text-secondary achivpFont">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar sic tempor.
                                        </p>
                                        <p class="theme-primary-text mb-0"><span class="pr-3">May 25, 2021</span><span>10:30 PM</span></p>
                                    </div>
                                </div>
                                <div class="d-flex gap-15 py-3">
                                    <div class="notificationIcon flex-shrink-0">
                                        <i class="bi bi-bell-fill"></i>
                                    </div>
                                    <div class="notificationContent">
                                        <p class="text-secondary achivpFont">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar sic tempor.
                                        </p>
                                        <p class="theme-primary-text mb-0"><span class="pr-3">May 25, 2021</span><span>10:30 PM</span></p>
                                    </div>
                                </div>
                                <div class="viewAll text-center py-3">
                                    <a href="#" class="text-dark font-weight-bold">VIEW ALL NOTIFICATIONS</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <div class="container">
            <!-- Page content-->