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
    if($("#firstName, #lastName, #email, #phone, #password, #cpassword").val()==""){
        $("#firstName, #lastName, #email, #phone, #password, #cpassword").addClass('is-invalid');
        return false;
    }else{
        $("#firstName, #lastName, #email, #phone, #password, #cpassword").removeClass('is-invalid');
    }
     
    if($("#password").val()!=$("#cpassword").val()){
        $("#cpassword").addClass('is-invalid');
        $("#cp").html('<span class="text-danger">Password and confirm password not matched!</span>');
        return false;
    }
}

$(document).ready(function(e) {
    $("#firstName").on("keyup",function(){
        if($("#firstName").val()==""){
            $("#firstName").addClass('is-invalid');
            return false;
        }else{
            $("#firstName").removeClass('is-invalid');
        }
    });
    $("#lastName").on("keyup",function(){
        if($("#lastName").val()==""){
            $("#lastName").addClass('is-invalid');
            return false;
        }else{
            $("#lastName").removeClass('is-invalid');
        }
    });
    $("#phone").on("keyup",function(){
        if($("#phone").val()==""){
            $("#phone").addClass('is-invalid');
            return false;
        }else{
            $("#phone").removeClass('is-invalid');
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
    $("#cpassword").on("keyup",function(){
        if($("#cpassword").val()==""){
            $("#cpassword").addClass('is-invalid');
            return false;
        }else{
            $("#cpassword").removeClass('is-invalid');
        }
    });
});

function redirectToLoginPage(){
    window.location = "login.php"
}