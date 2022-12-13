<?php

?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel='stylesheet' href='bootstrap/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">
    <link rel="stylesheet" href="headerstyle.css">
    
    <script src='bootstrap/js/popper.min.js'></script>
    <script src='bootstrap/js/jquery.min.js '></script>
    <script src='bootstrap/js/bootstrap.min.js '></script>
    <script src='alert.js'></script>

</head>

<body>
    <header>
        <div class='container-fluid bg-dark'>
            <div class="row">


                <nav class="navbar navbar-expand-lg ">
                    <div class="container-fluid">
                        <div class="col-md-4">

                            <a class="navbar-brand" href="#">
                                <i class="fa fa-hotel fa-2x " style="margin:2px"></i>
                                <span class="h4">Rine Hostels</span></a>

                        </div>
                        <div class="col-md-6 offset-md-2">
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <i class="fa fa-bars"></i>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="#"></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="book.php">
                                            <i class="fas fa-hand-point-right" style="margin :2px ;color: cyan"></i>
                                            <span style="font-size : 17px ;color: cyan">Book Now</span></a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" role="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            Questions??
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="#" onclick="msg()">How do I pay?</a></li>
                                            <li><a class="dropdown-item" href="#" onclick="umsg()">Are there any other
                                                    miscallenous cost?
                                                    </self-contined></a></li>
                                            <li>
                                                <hr class="dropdown-divider">
                                            </li>
                                            <li><a class="dropdown-item" href="#" onclick="vmsg()">Are our rooms
                                                    self-contained?</a></li>
                                        </ul>
                                    </li>

                                </ul>
                                <form class="d-flex" role="search">
                                    <input class="form-control me-2" type="search" placeholder="Search"
                                        aria-label="Search">
                                    <button class="btn btn-outline-info" type="submit">Search</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </nav>

            </div>
        </div>
    </header>
    <main>
        <div class="row" style="margin:2px;">
            <div class="col-md-3 col-lg-3" style="margin: 0%">
                <div class="bg-dark" style=" border-right:6px solid cyan; margin-left: 0%">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="home.php">
                                <i class="fas fa-home"></i>
                                <span class="h5" style="color :blue">Home</span>
                            </a>
                        </li>
                        <hr class="bg-white">
                        <li class="nav-item navsep">
                            <a class="nav-link " href="aboutus.php">
                                <i class="fa fa-group"></i>
                                <span class=" h5" style="color :blue">About Us</span>
                            </a>
                        <li>
                            <hr class="bg-white">
                        <li class="nav-item navsep">
                            <a class="nav-link " href="quiz.php">
                                <i class="fas fa-comments"></i>
                                <span class=" h5" style="color :blue">Inquires</span>
                            </a>
                        <li>
                            <hr class="bg-white">
                    </ul>
                </div>
            </div>