function validation(){
    let currentPass = document.getElementById('currentPassword').value;
    let newPass = document.getElementById('newPassword').value;
    let confirmNewPass = document.getElementById('confirmNewPassword').value;

    if($("#currentPassword, #newPassword, #confirmNewPassword").val()==""){
        $("#currentPassword, #newPassword, #confirmNewPassword").addClass('is-invalid');
        $("#currentPass").html('<span class="text-danger">Enter Current password</span>');
        $("#newPass").html('<span class="text-danger">Enter New Password</span>');
        $("#cp").html('<span class="text-danger">Enter Confirm Password</span>');
        return false;
    }else{
        $("#currentPassword, #newPassword, #confirmNewPassword").removeClass('is-invalid');
    }
     
    if($("#newPassword").val()!=$("#confirmNewPassword").val()){
        $("#confirmNewPassword").addClass('is-invalid');
        $("#cp").html('<span class="text-danger">Password and confirm password not matched!</span>');
        return false;
    }

//    if(currentPass.value == ""){
//     $("#currentPass").html('<span class="text-danger">Enter Current password</span>');
//    }else if(newPass.value == ""){
//     $("#confirmNewPassword").html('<span class="text-danger">Enter New Password</span>');
//    }else if(confirmNewPass.value == ""){
//     $("#cp").html('<span class="text-danger">Enter Confirm Password</span>');
//    }

   

}

$(document).ready(function(e) {
    $("#currentPassword").on("keyup",function(){
        if($("#currentPassword").val()==""){
            $("#currentPassword").addClass('is-invalid');
            return false;
        }else{
            $("#currentPassword").removeClass('is-invalid');
        }
    });
    $("#newPassword").on("keyup",function(){
        if($("#newPassword").val()==""){
            $("#newPassword").addClass('is-invalid');
            return false;
        }else{
            $("#newPassword").removeClass('is-invalid');
        }
    });
    $("#confirmNewPassword").on("keyup",function(){
        if($("#confirmNewPassword").val()==""){
            $("#confirmNewPassword").addClass('is-invalid');
            return false;
        }else{
            $("#confirmNewPassword").removeClass('is-invalid');
        }
    });
});
