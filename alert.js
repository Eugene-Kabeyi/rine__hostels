function msg() {
  alert("One can pay Via Mpesa, Paypal and through bank");
}
function umsg() {
  alert("Yes, there is damage precationary cost - 3000Ksh");
}
function vmsg() {
  alert("Some are self contained others single, while others are shared");
}

function myFunction() {
  let code = prompt("Enter code sent to your email");
  if (code == 123) {
    var payer = document.getElementById("payer").value
    let payer1= "kin"
    //let payer2= "self"
    let payer3= "org"
    
    if (payer == payer1) {
      window.location.href='kin.php';
    } else if(payer == payer3) {
      window.location.href='org.php';
    }else{
      alert("Saved")
    }

  } else {
    alert("Wrong Code")
  }
}