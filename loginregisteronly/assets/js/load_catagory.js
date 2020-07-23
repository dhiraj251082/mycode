(function($){   
    $(document).ready(function()
    {  
   

     //working fine dont touch touch

      $('#register-form-name').click(function(){
         // alert("catagory");
         var form
         = {
              action:  "load_catagory"
          };
          $.post(login_main_object.ajax_url,form,function(data)
          {
                //alert("dataundercatago;ry");
              $('#catagory2').html(data);
              $('#catagory2').multiselect({
                  nonSelectedText: 'Select Bussiness',
                  enableFiltering: true,
                  enableCaseInsensitiveFiltering: true,
                  //buttonWidth: '400px'
              });
      
          });
         // alert("industry");
          var form
         = {
              action:  "load_industry"
          };
          $.post(login_main_object.ajax_url,form,function(data)
          {
               // alert("dataunderindustry");
                $('#industry').html(data);
                $('#industry').multiselect({
                  nonSelectedText: 'Select Industry',
                  enableFiltering: true,
                  enableCaseInsensitiveFiltering: true,
                 // buttonWidth: '400px'
              });
      
              });

      });
        
      
    
    }); 
    $('#catagory').change(function()
    {
      alert("php load catagory");

    });
      $('#catagory2').change(function()
    {
     
      var datacatagory=$('#catagory2').val();
     
      
    });

    })(jQuery);