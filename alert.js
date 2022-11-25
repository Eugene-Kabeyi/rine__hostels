function msg(){
    alert("One can pay Via Mpesa, Paypal and through bank");
}
function umsg(){
    alert("Yes, there is damage precationary cost - 3000Ksh");
}
function vmsg(){
    alert("Some are self contained others single, while others are shared");
}
function fetchdata(){
    var prompt= prompt("Enter code sent to your email")
    while(prompt==1234){
        var payer= document.getElementById("payer").value;
        if (payer=="Kin"){
            window.location.assign("nextofkin.php")
        }else if (payer=="Kin"){
            window.location.assign("org.php")
        }else{
            alert("<div class="alert alert-primary" role="alert">"+
            "A simple primary alert—check it out!"+
          "</div>"
          )
        }
    }
}