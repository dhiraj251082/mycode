(function($){   
$(document).ready(function()
{
  $('#register-form-name').focusout(function(){
    
    


  });

    $(document).on( 'submit', '#login-form', function(e){
        //login working
        e.preventDefault();
        
       // alert("login form working");

        $("#login-status").html('<div class="alert alert-info">Please wait while we log you in.</div>');
        $(this).hide();
        
        var form                                    =   {
            _wpnonce:                                   $("#_wpnonce").val(),
            action:                                     "exim_user_login",
            username:                                   $("#login-form-username").val(),
            pass:                                       $("#login-form-password").val()
        };
//response is working 
        $.post(login_main_object.ajax_url, form ).always(function(data){
            if( data.status == 2 ){
                $("#login-status").html('<div class="alert alert-success">Success!</div>');
                location.href                       =  login_main_object.home_url;
            }else{
                $("#login-status").html(
                    '<div class="alert alert-danger">Unable to login.</div>'
                );
                $("#login-form").show();
            }
        });
    }); //working fine dont touch


    $(document).on( 'submit', '#register_form', function(e){
        alert("inside resisteration response");
        e.preventDefault();
        var username2=$("#register-form-name").val();
      //  alert("Registration form " +username2);
     //   var ncat=$('#catagory').val

     

        $("#register-status").html(
            '<div class="alert alert alert-info">Please wait!</div>'
        );
       $(this).hide();

        var form                            =   {
            _wpnonce:                           $("#_wpnonce").val(),
            action:                             "exim_user_register",
            name:                               $("#register-form-name").val(),
            username:                           $("#register-form-username").val(),
            email:                              $("#register-form-email").val(),
            pass:                               $("#register-form-password").val(),
            confirm_pass:                       $("#register-form-repassword").val(),
            newcompany_name:                    $('#company_name').val(),
           newowner_name:                       $('#register-company-name').val(),
             //   newcontact_person:jQuery('#person-name').val(),
            newwebsite:                         $('#register-website').val(),
             new_industry:                       $('#industry').val(),
             new_bussiness:                     $('#catagory2').val(),
                                  
        };

        $.post(login_main_object.ajax_url, form ).always(function(data){
          var obj = jQuery.parseJSON(data);
           
          //  alert(data.statusnew);
            alert(obj.statusnew);
            
               
            if( obj.statusnew === 2 ){
                $("#register-status").html(
                    '<div class="alert alert-success">Account created!</div>'
                );
                bootbox.confirm({
                    title: "Exim Registration",
                    message: "Do you want want to give details more details.",
                    buttons: {
                        cancel: {
                            label: '<i class="fa fa-times"></i> Cancel'
                        },
                        confirm: {
                            label: '<i class="fa fa-check"></i> Confirm'
                        }
                    },
                    callback: function (result) {
                        if(result)
                        {
                          location.href               = "http://localhost/wp/testpage-2/";
                       }
                        else
                        {
                         
                            location.href               =   "http://localhost/wp/";
                        }
                    }
                }); 
                
            }else{
                alert("issue");
                $("#register_form").css("display","block");
                if(obj.statusnew === 3)
            {
           
                $("#register-status").html(
                    '<div class="alert alert-success">User Alerdy Exits in the Sytem</div>'
                );
            }
            if(obj.statusnew === 5)
            {
                $("#register-status").html(
                    '<div class="alert alert-success">Error in Creating User--Contact Support</div>'
                );
            }
                $("#this").show();
            }
        });
    });
//manufacturing submission testing


});

})(jQuery);

