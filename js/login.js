function emailCheck(){
    if($("#email").val()==""){
        $("#email").addClass('is-invalid');
        return false;
    }else{
        var regMail     =   /^([_a-zA-Z0-9-]+)(\.[_a-zA-Z0-9-]+)*@([a-zA-Z0-9-]+\.)+([a-zA-Z]{2,3})$/;
        if(regMail.test($("#email").val()) == false){
            $("#email").addClass('is-invalid');
            return false;
        }else{
            $("#email").removeClass('is-invalid');
            $('#next-form').collapse('show');
        }
    }
}
function validation(){
    if($("#email, #password").val()==""){
        $("#email, #password").addClass('is-invalid');
        return false;
    }else{
        $("#email, #password").removeClass('is-invalid');
    }
}

$(document).ready(function(e) {
    $("#email").on("keyup",function(){
        if($("#email").val()==""){
            $("#email").addClass('is-invalid');
            return false;
        }else{
            $("#email").removeClass('is-invalid');
        }
    });
    $("#password").on("keyup",function(){
        if($("#password").val()==""){
            $("#password").addClass('is-invalid');
            return false;
        }else{
            $("#password").removeClass('is-invalid');
        }
    });
});

function redirectToRegistrationPage(){
    window.location = "./register.php"
}