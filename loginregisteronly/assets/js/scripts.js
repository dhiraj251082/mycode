(function($){   
$(document).ready(function()
{

});

    

    $(document).on( 'submit', '#login-form', function(e){
        //login working
        e.preventDefault();
        
        alert("login form working");

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


    $(document).on( 'submit', '#register-form', function(e){
        e.preventDefault();
        var username2=$("#register-form-name").val();
        alert("Registration form " +username2);

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
            confirm_pass:                       $("#register-form-repassword").val()
        };

        $.post(login_main_object.ajax_url, form ).always(function(data){
            
            if( data.status == 2 ){
                $("#register-status").html(
                    '<div class="alert alert-success">Account created!</div>'
                );
                location.href               =   login_main_object.home_url;
            }else{
                $("#register-status").html(
                    '<div class="alert alert-danger">Unable to create an account.</div>'
                );
                $("#register-form").show();
            }
        });
    });
})(jQuery);