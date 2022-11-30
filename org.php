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
<div class="col-md-9 col-lg-9 bg-light">
    <div class="col-md-9 col-lg-9 bg-light">
        <h3>Please fill in all the details</h3>
        <!--Organisation details-->
        <form action="redirect.php" method="post" enctype="multipart/form-data">
            <div class="row m-2 p-2">

                <div class=" col mb-3">

                    <label for="exampleInputEmail1" class="form-label">Email address:</label>
                    <input type="email" class="form-control" id="email_org" aria-describedby="emailHelp"
                        name="emailorg" placeholder="name@example.com" required>
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
            </div>
            <div class="row m-2 p-2">
                <div class="col-md-6">
                    <label class="form-label grey">Phone Number</label>
                    <input class="form-control" type="text" name="telorg" required>

                </div>
                <div>
                    <hr>
                </div>
                <div class="button_end">
                    <input class="btn btn-outline-info" type="submit" value="Submit" name="submit">
                </div>
            </div>
            <br>
        </form>
    </div>

</div>
</div>
<div class="push"></div>

</main>

<?php
include "footer.php";
?>