<?php
include "header.php"?>

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
            <label class="form-label grey">Second Name:</label>
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
            <input class="form-control" type="text" name="phoneNumber">
        </div>
    </div>




</main>

    <?php
include "footer.php";
?>