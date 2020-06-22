jQuery(function($) {
    $(document).ready(function () {
        $('#industry').multiselect({
            nonSelectedText: 'Select Type Of Industry',
            enableFiltering: true,
            enableCaseInsensitiveFiltering: true,
            buttonWidth: '300px',
           
        });
      
        $('.register').click(function()
        {
             alert("hello new practice");
        }
        );
       $('#catagory2').multiselect({
            nonSelectedText: 'Select Bussiness',
            enableFiltering: true,
            enableCaseInsensitiveFiltering: true,
            buttonWidth: '300px'
       
           
        }); 
        $('#catagory2').change(function()
        {
            alert(" i am changed 19.06.2020 21.21");
            //alert("in catagory catagory");
       var v_catagory = $(this).val();
      
        //   var v_catagory =$('#catagory2').serialize();
          
  event.preventDefault();
        //var state = $(this).name();
      
        if(v_catagory==9)
        {
      
            var ConfFile = $("#catagory_other");
            ConfFile.attr('type', 'text');
            ConfFile.show();
            //$(".catagory_other").attr("hidden", false)
        }
        else
        {
            var ConfFile = $("#catagory_other");
            ConfFile.attr('type', 'hidden');
            ConfFile.hide();
        }
           
        }
        );
        $('#industry').change(function()
        {
            var v_industry=$(this).val();
        if(v_industry==14)
        {
          //  alert ('comming in others');
            var industry = $("#industry_other");
          industry.attr('type', 'text');
            industry.show();
            //$(".catagory_other").attr("hidden", false)
        }
        else
        {
            var industry = $("#industry_other");
            industry.attr('type', 'hidden');
            industry.hide();
        }

        }
        );
    });
});