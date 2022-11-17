<?php
include "header.php"
?>

<head>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel='stylesheet' href='bootstrap/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">

    <script src='bootstrap/js/popper.min.js'></script>
    <script src='bootstrap/js/jquery.min.js '></script>
    <script src='bootstrap/js/bootstrap.min.js '></script>
    <title></title>

</head>

<div class="col-md-9 col-lg-9 bg-light">
    <!--Applicants booking-->
    <br>
    <h3 class="text-info">Please fill in the details below :</h3>
    <br>
    <!--Applicants details-->
    <h5 class="text-primary">Applicants Details</h5>
    <div class="row m-2 p-2">
        <div class="col">
            <label class="form-label grey">First Name:</label>
            <input type="text" class="form-control" placeholder="First name" aria-label="First name" name="fname_app"
                required>

        </div>
        <div class="col">
            <label class="form-label grey">Last Name:</label>
            <input type="text" class="form-control" placeholder="Last name" aria-label="Last name" name="lname_app"
                required>

        </div>

    </div>
    <div class="row m-2 p-2">
        <div class=" col mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address:</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                name="email_app" placeholder="name@example.com" required>
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
    </div>
    <div class="row m-2 p-2">
        <div class="col-md-6">
            <label class="form-label grey">Phone Number</label>
            <input class="form-control" type="text" name="phoneNumber" required>

        </div>
        <div>
            <hr>
        </div>

    </div>
    <!--hostel and payment details-->
    <h5 class="text-primary">Payment Details</h5>
    <div class="row m-2 p-2">
        <label for="hostel_type">Choose your hostel type:</label>
        <select class="form-select" aria-label="Default select example" name="hostel_type" id="hostel_type">
            <option disabled selected>Select below</option>
            <option value="1">Single Room</option>
            <option value="2">Two-shared room</option>
            <option value="3">Self-contained shared room</option>
        </select>
    </div>
    <div class="row m-2 p-2">
    <label for="payer">Payment by :</label>
    <select class="form-select" aria-label="Default select example" name="payer" id="payer">
        <option disabled selected>Select below</option>
        <option value="1">Self</option>
        <option value="2">Kin</option>
        <option value="3">Organisation</option>
    </select>
    </div>



</div>



</main>

<?php
include "footer.php";
?>