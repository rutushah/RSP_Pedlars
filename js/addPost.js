/**
 * Prepared By : Rutu Shah
 * Student ID : 2094023
 * Date : 2nd May 2022
 * 
 */

// Add the following code if you want the name of the file appear on select
$(".custom-file-input").on("change", function() {
    var fileName = $(this).val().split("\\").pop();
    $(this).siblings(".label").addClass("selected").html(fileName);
    if(fileName == ''){
        alert("Please Select Image");
        return false;
    }
  });


  /**
   * 
   * The below js which I have added is for blank field validation, so user cannot submit the post without entering details.
   * 
   */
  function validation(){
    if($("#postTitle,#price, #description, #soldBy, #vinNumber, #make, #modal,#yearOfPurchase, #warrantyCars, #carFaxReport, #maintenanceReport, #uploadImage").val()==""){
        $("#postTitle, #price, #description, #soldBy, #vinNumber, #make, #modal,#yearOfPurchase, #warrantyCars, #carFaxReport, #maintenanceReport, #uploadImage").addClass('is-invalid');
        return false;
    }else{
        $("#postTitle, #price, #description, #soldBy, #vinNumber, #make, #modal,#yearOfPurchase, #warrantyCars, #carFaxReport, #maintenanceReport, #uploadImage").removeClass('is-invalid');
    }
  }
  
  //postTitle
  $(document).ready(function(e) {
    $("#postTitle").on("keyup",function(){
        if($("#postTitle").val()==""){
            $("#postTitle").addClass('is-invalid');
            return false;
        }else{
            $("#postTitle").removeClass('is-invalid');
        }
    });
    
    $(document).ready(function(e){
        $("#price").on("keyup",function(){
            if($("#price").val() == ""){
                $("price").addClass('is-invalid');
            }else{
                $("price").removeClass('is-invalid');
            }
        })
    });
  
    $(document).ready(function(e){
        $("#description").on("keyup",function(){
            if($("#description").val() == ""){
                $("description").addClass('is-invalid');
            }else{
                $("description").removeClass('is-invalid');
            }
        })
    });
  
    //soldby
    $("#soldBy").on("keyup",function(){
        if($("#soldBy").val()==""){
            $("#soldBy").addClass('is-invalid');
            return false;
        }else{
            $("#soldBy").removeClass('is-invalid');
        }
    });
  
    //vinnumber
    $("#vinNumber").on("keyup",function(){
        if($("#vinNumber").val()==""){
            $("#vinNumber").addClass('is-invalid');
            return false;
        }else{
            $("#vinNumber").removeClass('is-invalid');
        }
    });
  
    //make
    $("#make").on("keyup",function(){
        if($("#make").val()==""){
            $("#make").addClass('is-invalid');
            return false;
        }else{
            $("#make").removeClass('is-invalid');
        }
    });
  
    //modal
    $("#modal").on("keyup",function(){
      if($("#modal").val()==""){
          $("#modal").addClass('is-invalid');
          return false;
      }else{
          $("#modal").removeClass('is-invalid');
      }
  });
  
  
  //yearOfPurchase
  $("#yearOfPurchase").on("keyup",function(){
    if($("#yearOfPurchase").val()==""){
        $("#yearOfPurchase").addClass('is-invalid');
        return false;
    }else{
        $("#yearOfPurchase").removeClass('is-invalid');
    }
  });
  
  //warrantyCars
  $("#warrantyCars").on("keyup",function(){
    if($("#warrantyCars").val()==""){
        $("#warrantyCars").addClass('is-invalid');
        return false;
    }else{
        $("#warrantyCars").removeClass('is-invalid');
    }
  });
  
  //carFaxReports
  $("#carFaxReport").on("keyup",function(){
    if($("#carFaxReport").val()==""){
        $("#carFaxReport").addClass('is-invalid');
        return false;
    }else{
        $("#carFaxReport").removeClass('is-invalid');
    }
  });
  
  //maintainance report
  $("#maintenanceReport").on("keyup",function(){
    if($("#maintenanceReport").val()==""){
        $("#maintenanceReport").addClass('is-invalid');
        return false;
    }else{
        $("#maintenanceReport").removeClass('is-invalid');
    }
  });
  
  //imageUpload
  $("#uploadImage").on("keyup",function(){
    if($("#uploadImage").val()==""){
        $("#uploadImage").addClass('is-invalid');
        return false;
    }else{
        $("#uploadImage").removeClass('is-invalid');
    }
  });
  });
  
  