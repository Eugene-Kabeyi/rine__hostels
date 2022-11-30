<?php
 $link = mysqli_connect("localhost", "root", "", "motor");

if (isset($_POST["submit"])) {
    $fnameapp = $_POST["fname_app"];
    $lnameapp = $_POST["lname_app"];
    $emailapp = $_POST["email_app"];
    $telapp = $_POST["tel_app"];
    $hosteltype = $_POST["hostel_type"];
    $payer = $_POST["payer"];
    $fnamekin = $_POST["fname_kin"];
    $lnamekin = $_POST["lname_kin"];
    $emailkin = $_POST["email_kin"];
    $telkin = $_POST["tel_kin"];
    $emailorg = $_POST["email_org"];
    $telorg = $_POST["tel_org"];

    $payer1="Kin"
    $payer2="Organisation"
    if($payer=$payer1){
      header("location:kin.php");
    }elseif ($payer=$payer2) {
      header("location:kin.php");
    }else{
      echo"WAIT..."
    }

    

  $sql= "INSERT INTO `application`(`fnameapp`, `lnameapp`, `emailapp`, `telapp`, `hosteltype`, `payer`, `fnamekin`, `lnamekin`, `emailkin`, `telkin`, `emailorg`, `telorg`) 
  VALUES ('fnameapp','lnameapp','emailapp ','telapp','hosteltype','payer','fnamekin','lnamekin','emailkin','telkin ','emailorg','telorg')"
 $result = mysqli_query($link,$sql);  
 if($result){
  echo "You have been Registered";

}else{
  echo "error executing  query $sql".mysqli_error($link);

}
}
    