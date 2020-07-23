(function($){   
    $(document).ready(function()
{
 
 
  $('#exim_form').validate({
    rules: {
    product: {
       required: true
       },
       other_product: {
        required: true
        },
       interested_country2: {
        required: true
        },
        other_interested_country2:  {
          required: true
        },
        service_country2: {
          required: true
          },
          other_service_country2:  {
            required: true
          },
   manufacture_interest: {
       required: true
       },
       iec_code_text:{
         required: true
       }, 
       venture_text:{
        required: true
      }, 
       

     },
     messages: {
    product:  "Missing Product Details",
    other_product: "Missing Other Product Details ",
    interested_country2: "Missing Preference Country ",
    other_interested_country2: "Missing Preference Country As Others Selected",
    service_country2: "Missing Service Country ",
    service_interested_country2: "Missing service Country if Selected Others",
    iec_code_text: "Mising IEC Code as IEC  Code is Selected",
    venture_text: "Mising  venture Details",
     },
   
    submitHandler: function(form) 
    
    {
      alert("inserting");
      
      
      
         
         var form                                    =   { 
          _wpnonce:                                                  $("#_wpnonce").val(),

          action:                                                   "exim_insertingdetails",
          product:                                                   $("#product").val(),
          product_name:                                              $( "#product option:selected" ).text(),
          other_product:                                             $("#other_product").val(),
          service_country:                                           $("#service_country2").val(),
          service_country_name:                                      $( "#service_country2 option:selected" ).text(),                                       
          other_service_country:                                     $("#other_service_country2").val(),
          interested_country:                                        $("#interested_country2").val(),
          interested_country_name:                                   $( "#interested_country2 option:selected" ).text(),
          
          other_interested_country:                                  $("#other_interested_country2").val(),
          iec_code:                                                  $("#iec_code_text").val(),
          venture_id:                                                 $("#venture_text").val(), 
          venture_name:                                             $( "#venture_text option:selected" ).text(),

      }
//response is working 
      $.post(login_main_object.ajax_url, form ).always(function(data){
        alert(data.status);
        alert("successfully insertted");
       if(data.status==2)
       {
         alert("successfully Insertted");
       }
        

  });
   
}
    // other options
});

$('#product').click(function()
{

  $(this).css('background-color', '#ffffff'); 

});

    $('#service_country2').change(function()
    {
      var service_country2_name=  $( "#service_country2 option:selected" ).text();
          var service_country2=$('#service_country2').val();
          if(service_country2==8000)
   {
     //  alert("enabled");
       $('#other_service_country2').prop("disabled", false);
   }
   
   if(service_country2!=8000)
   {
    $('#other_service_country2').prop("disabled", true);
    
   }
          
    });


    $('#interested_country2').change(function()
    {
          var interested_country2=$('#interested_country2').val();
        var interested_country2_name=  $( "#interested_country2 option:selected" ).text();
        alert(interested_country2_name);
          if(interested_country2==8000)
   {
     //  alert("enabled");
       $('#other_interested_country2').prop("disabled", false);
   }
   
   if(interested_country2!=8000)
   {
     //  alert("disable");
    $('#other_interested_country2').prop("disabled", true);
   }
      });
    $('#product').change(function(){  
      var product_name=  $( "#product option:selected" ).text();
   var product = $("#product").val();
   alert(product_name);
   if(product==8000)
      {
     
       $('#other_product').prop("disabled", false);
   }
   
   if(product!=8000)
   {
    
    $('#other_product').prop("disabled", true);
   }
    });
    $('#iec_code_check').click(function(){
      alert("checked");
var status=$('#iec_code_check').prop("checked");

 if(status==true)
 {
    
  $('#iec_code_text').prop("disabled", false);  
 }
 else
 {
  $('#iec_code_text').prop("disabled",true);   
 }
  });
        
    
       
            });
        
    })(jQuery);
    