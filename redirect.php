<?php

 var payer = document.getElementById("payer").value
 var payer1= "kin"
 //let payer2= "self"
 let payer3= "org"
 
 if (payer == payer1) {
  window.location= 'kin.php';
 } else if(payer == payer3) {
   window.location.href='/opt/lampp/htdocs/codes/semester_project/org.php';
 }else{
   alert("Saved")
 }
 $link = mysqli_connect("localhost", "root", "", "motor");

if (isset($_POST["submit"])) {
    $fullname = $_POST["fullName"];
    $admissionNo = $_POST["admissionNo"];
    $stream = $_POST["stream"];
    $email = $_POST["emailAddress"];
    $phone = $_POST["phoneNumber"];
    $location = $_POST["location"];
    $dob = $_POST["dob"];
    $gender = $_POST["gender"];}
    