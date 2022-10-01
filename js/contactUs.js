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
    if($("#fname, #lname, #email, #telephone, #message").val()==""){
        $("#fname, #lname, #email, #telephone, #message").addClass('is-invalid');
        return false;
    }else{
        $("#fname, #lname, #email, #telephone, #message").removeClass('is-invalid');
    }
}

$(document).ready(function(e) {
    $("#fname").on("keyup",function(){
        if($("#fname").val()==""){
            $("#fname").addClass('is-invalid');
            return false;
        }else{
            $("#fname").removeClass('is-invalid');
        }
    });
    $("#lname").on("keyup",function(){
        if($("#lname").val()==""){
            $("#lname").addClass('is-invalid');
            return false;
        }else{
            $("#lname").removeClass('is-invalid');
        }
    });
    // $("#email").on("keyup",function(){
    //     if($("#email").val()==""){
    //         $("#email").addClass('is-invalid');
    //         return false;
    //     }else{
    //         $("#email").removeClass('is-invalid');
    //     }
    // });
    $("#telephone").on("keyup",function(){
        if($("#telephone").val()==""){
            $("#telephone").addClass('is-invalid');
            return false;
        }else{
            $("#telephone").removeClass('is-invalid');
        }
    });
    $("#message").on("keyup",function(){
        if($("#message").val()==""){
            $("#message").addClass('is-invalid');
            return false;
        }else{
            $("#message").removeClass('is-invalid');
        }
    });
});

