function msg(){
    alert("One can pay Via Mpesa, Paypal and through bank");
}
function umsg(){
    alert("Yes, there is damage precationary cost - 3000Ksh");
}
function vmsg(){
    alert("Some are self contained others single, while others are shared");
}
        }

function myFunction() {
    let code = prompt("Enter code sent to your email");
    if (code == 123) {
      /*var payer= document.getElementById("payer").value;
    
      if(payer==="kin"){*/
        window.location.href="nextofkin.php";
     /*}else{
        alert("Saved");
      }*/
    }else{
        alert("Bad")
    }
  }