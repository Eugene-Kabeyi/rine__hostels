<?php
include "header.php"?>

<head>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel='stylesheet' href='bootstrap/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">
    <link rel="stylesheet" href="newstyle.css">

    <script src='bootstrap/js/popper.min.js'></script>
    <script src='bootstrap/js/jquery.min.js '></script>
    <script src='bootstrap/js/bootstrap.min.js '></script>
    <title></title>

</head>



<div class="col bg-light">
    <br>
    <br>
    <div class="row">
        <div class="col-8">
            <marquee width="60%" direction="left" height="100px" scrollamount="3">
                Are you looking for a hostel with the best best environment to optimise your higher studies?
            </marquee>
        </div>
        <div class="col-4" id="blink">

            Then <span class="text-info">RINE HOSTELS </span> is your <span class="text-info">ANSWER</span>

        </div>
        <!--Making the text above Blink-->
        <script type="text/javascript">
        var blink =
            document.getElementById('blink');

        setInterval(function() {
            blink.style.opacity =
                (blink.style.opacity == 0 ? 1 : 0);
        }, 1000);
        </script>
    </div>
</div>
<div class="row bg-light" id="caro">
   
    <span class="renown" style=" padding-left: 15%;">We have a renowned hostel with a great reputation</span>
    <br>
    <!--SLIDE-->
    <div class="slide11">
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="3000" id="image_caro">
                    <img src="pics/thehostel.jpg" class="d-block w-100" alt="suburb environment">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Environment</h5>
                        <p>Achieve your best at our quiet Suburb environment.</p>
                    </div>

                    
                </div>
                <div class="carousel-item" data-bs-interval="2000" id="image_caro">
                    <img src="pics/personreading.jpg" class="d-block w-100" alt="reading space">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Facilities </h5>
                        <p>Take advantage of our facilities.</p>
                    </div>
                   
                </div>
                <div class="carousel-item" id="image_caro">
                    <img src="pics/pool.jpg" class="d-block w-100" alt="pool game" id="image_caro">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Entertainment</h5>
                        <p>Entertain yourself with games.</p>
                    </div>
                 
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <div>
        <table class="table table-success table-striped-columns">
            ...
        </table>
    </div>
    <br>
    <hr>


</div>

<div class="row bg-light">


        <div class="col-4 btn btn-outline-info" id="endd">
           <a href="" style="text-decoration: none;">Any Queries ??</a> 

        </div>

        <div class="col-4 offset-4 btn btn-outline-info" id="endd">
        <i class="fas fa-hand-point-right " style="margin :4px "></i>
           <a href="book.php" style="text-decoration: none;">BOOK NOW</a> 
        </div>

    </div>
<div class="push"></div>

</main>

<?php
include "footer.php";
?>