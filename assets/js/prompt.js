
function EmptyUsernameHint(){

    if(document.getElementById("name").value === ""){
        document.getElementById("promptEN").classList.remove("hide");
        document.getElementById("register_submit").disabled = true;
        //alert(document.getElementById("name").value);
    } else{
        document.getElementById("promptEN").classList.add("hide");
        document.getElementById("register_submit").disabled = false;
        //alert(document.getElementById("name").value);
    }

}
function EmptyPasswordHint(){
    if(document.getElementById("password").value == ""){
        document.getElementById("promptEP").classList.remove("hide");
        document.getElementById("register_submit").disabled = true;
    }
    else{
        document.getElementById("promptEP").classList.add("hide");
        document.getElementById("register_submit").disabled = false;
    }
}
function EmptyCardNumber(){
    if(document.getElementById("cardNumber").value == ""){
        document.getElementById("promptEC").classList.remove("hide");
        document.getElementById("register_submit").disabled = true;
    }
    else{
        document.getElementById("promptEC").classList.add("hide");
        document.getElementById("register_submit").disabled = false;
    }
}
function DifferentPasswordHint(){
    if(document.getElementById("password").value !== document.getElementById("Cpassword").value){
        document.getElementById("promptDP").classList.remove("hide");
        document.getElementById("register_submit").disabled = true;
    }else{
        document.getElementById("promptDP").classList.add("hide");
        document.getElementById("register_submit").disabled = false;
    }
}
function EmptyPhoneHint(){
    if(document.getElementById("phone").value === ""){
        document.getElementById("promptEPhone").classList.remove("hide");
        document.getElementById("register_submit").disabled = true;
    }
    else{
        document.getElementById("promptEPhone").classList.add("hide");
        document.getElementById("register_submit").disabled = false;
    }
}
function WrongUsernameFormHint(){
    var i =document.getElementById("name").value.toString();
    var p = /[0-9 a-z]/i;
    var b = p.test(i);
    if(((!b)&&i.length>0)|| (i.length<6&&i.length>0)){
        document.getElementById("promptWrongUser").classList.remove("hide");
        document.getElementById("register_submit").disabled = true;
    }
    else{
        document.getElementById("promptWrongUser").classList.add("hide");
        document.getElementById("register_submit").disabled = false;
    }
}

function WrongPasswordFormHint(){
    if(document.getElementById("password").value.toString().length<=6&&document.getElementById("password").value.toString().length!=0){
        document.getElementById("promptErrorP").classList.remove("hide");
        document.getElementById("register_submit").disabled = true;
    }
    else{
        document.getElementById("promptErrorP").classList.add("hide");
        document.getElementById("register_submit").disabled = false;
    }
}

function EmptyCPasswordHint(){
    if(document.getElementById("Cpassword").value === ""){
        document.getElementById("promptEmptyPassword").classList.remove("hide");
        document.getElementById("register_submit").disabled = true;
    }
    else{
        document.getElementById("promptEmptyPassword").classList.add("hide");
        document.getElementById("register_submit").disabled = false;
    }
}

function WrongPhoneHint(){
    var phone = document.getElementById("phone").value;
    if((isInteger(phone)&&phone.length===11)||phone===""){
        document.getElementById("wrong_phone_form_hint").classList.add("hide");
        document.getElementById("register_submit").disabled = false;
    }else{
        document.getElementById("wrong_phone_form_hint").classList.remove("hide");
        document.getElementById("register_submit").disabled = true;
    }
    // alert(isInteger(phone));
}

function WrongCardNumberHint(){
    var phone = document.getElementById("cardNumber").value;
    if((isInteger(phone)&&phone.length===16)||phone===""){
        document.getElementById("promptWrongCard").classList.add("hide");
        document.getElementById("register_submit").disabled = false;
    }else{
        document.getElementById("promptWrongCard").classList.remove("hide");
        document.getElementById("register_submit").disabled = true;
    }
    // alert(isInteger(phone));
}



function EmptyEmailHint(){
    if(document.getElementById("email").value == ""){
        document.getElementById("empty_email_hint").classList.remove("hide");
        document.getElementById("register_submit").disabled = true;
    }
    else{
        document.getElementById("empty_email_hint").classList.add("hide");
        document.getElementById("register_submit").disabled = false;
    }
}
function WrongEmailHint(){
    var email = document.getElementById("email").value.toString();
    var myReg=/^[a-zA-Z0-9_-]+@([a-zA-Z0-9]+\.)+(com|cn|net|org)$/;
    var flag = myReg.test(email);
    if((!flag)&&email.length>0){
        document.getElementById("wrong_email_form_hint").classList.remove("hide");
        document.getElementById("register_submit").disabled = true;
    }
    else{
        document.getElementById("wrong_email_form_hint").classList.add("hide");
        document.getElementById("register_submit").disabled = false;
    }
}
function isInteger(obj) {
    // alert(obj%1);
    return obj%1 === 0;
}



//login
function EmptyUsernameHintLogin(){
    if(document.getElementById("nameLogin").value == ""){
        document.getElementById("empty_login_username_hint").classList.remove("hide");
        document.getElementById("log_in_submit").disabled = true;
    } else{
        document.getElementById("empty_login_username_hint").classList.add("hide");
        document.getElementById("log_in_submit").disabled = false;
    }
}
function EmptyPasswordHintLogin(){
    if(document.getElementById("passwordLogin").value == ""){
        document.getElementById("empty_login_password_hint").classList.remove("hide");
        document.getElementById("log_in_submit").disabled = true;
    }
    else{
        document.getElementById("empty_login_password_hint").classList.add("hide");
        document.getElementById("log_in_submit").disabled = false;
    }
}

//logout
function delog() {
    var xmlhttp;
    if (window.XMLHttpRequest)
    {
        xmlhttp=new XMLHttpRequest();
    } else {
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
    // alert("success");
    console.log(xmlhttp.readyState);
    console.log(xmlhttp.status);
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState===4 && xmlhttp.status===200) {
            document.location.reload();

        }
    };
    xmlhttp.open("POST","exit.php",true);
    xmlhttp.send();
}

//logincheck
function alertIt(id){
    // var el = document.getElementById(id);
    function hideIt(id){
        document.getElementById(id).classList.add("hide");
    }
    document.getElementById(id).classList.remove("hide");
    setTimeout(hideIt,500,id);
}

// function



