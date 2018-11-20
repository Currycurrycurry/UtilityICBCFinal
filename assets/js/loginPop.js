$("#login").click(function () {
    $(".hide-center").fadeIn("slow");
    $(".overCurtain").fadeIn("slow");
});
$("#close").click(function () {
    $(".hide-center").fadeOut("slow");
    $(".overCurtain").fadeOut("slow");
});

$("#Cpassword").blur(function(){
    if($("#password").value !== $("#Cpassword").value){
        $("#prompt").style.display ="inline";
    }
    if($("#password").value === $("#Cpassword").value){
        $("#prompt").style.display = "none";

    }

});

$("#recharge").click(function () {
    $(".Rhide-center").fadeIn("slow");
    $(".RoverCurtain").fadeIn("slow");
});
$("#Rclose").click(function () {
    $(".Rhide-center").fadeOut("fast");
    $(".RoverCurtain").fadeOut("fast");
});