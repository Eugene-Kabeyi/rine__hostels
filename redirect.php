<?php
 $link = mysqli_connect("localhost", "root", "", "motor");

if (isset($_POST["submit"])) {
    $fnameapp = $_POST["fnameapp"];
    $lnameapp = $_POST["lnameapp"];
    $emailapp = $_POST["emailapp"];
    $telapp = $_POST["telapp"];
    $hosteltype = $_POST["hosteltype"];
    $payer = $_POST["payer"];
    $fnamekin = $_POST["fnamekin"];
    $lnamekin = $_POST["lnamekin"];
    $emailkin = $_POST["emailkin"];
    $telkin = $_POST["telkin"];
    $emailorg = $_POST["emailorg"];
    $telorg = $_POST["telorg"];

     $payer1="Kin";
    $payer2="Organisation";
    if($payer==$payer1){
      header("location:kin.php");
    }elseif ($payer==$payer2) {
      header("location:kin.php");
    }else{
     echo"Wait...";
    }
    

    

 $sql= "INSERT INTO `application`(`fnameapp`, `lnameapp`, `emailapp`, `telapp`, `hosteltype`, `payer`, `fnamekin`, `lnamekin`, `emailkin`, `telkin`, `emailorg`, `telorg`) 
  VALUES ('$fnameapp','$lnameapp','$emailapp ','$telapp','$hosteltype','$payer','$fnamekin','$lnamekin','$emailkin','$telkin ','$emailorg','$telorg')";
 $result = mysqli_query($link,$sql);  
 if($result){
  echo "You have been Registered";

}else{
  echo "error executing  query $sql".mysqli_error($link);

}
}
    