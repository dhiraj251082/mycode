(function($){   
    $(document).ready(function()
    {

        var form
       = {
            action:  "load_industry"
        };
        $.post(login_main_object.ajax_url,form,function(data)
        {
              
              $('#industry').html(data);
              $('#industry').multiselect({
                nonSelectedText: 'Select Industry',
                enableFiltering: true,
                enableCaseInsensitiveFiltering: true,
               // buttonWidth: '400px'
            });
    
            });
    
        });
        $('#industry').onchange(function()
        {
        alert("industry change working");

        });
    
   

    })(jQuery);