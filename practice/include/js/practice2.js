jQuery(function($) {
    $(document).ready(function() {



;        $('.register').click(function() {
            var formData2 = $('#industry').val();
                                var bussiness_temp = jQuery('#catagory2  option:selected').text();
                                if (bussiness_temp != 'Others') {
                                    var bussiness = jQuery('#catagory2  option:selected').text();

                                } else {
                                    var bussiness = jQuery('#catagory_other').val();

                                }
                                var industry_temp = jQuery('#industry  option:selected').text();
                                if (industry_temp != 'Others') {
                                    var industry = jQuery('#industry  option:selected').text();

                                } else {
                                    var industry = jQuery('#industry_other').val();

                                }
            alert("we are right here");

            var formData = $('#catagory2').val();
            if (formData != '') {


                // Delete id
                //  var deleteid = $(this).data('id');
                bootbox.confirm({
                    message: "Do you want to enter more activity?",
                    buttons: {
                        confirm: {
                            label: 'Yes',
                            className: 'btn-success'
                        },
                        cancel: {
                            label: 'No',
                            className: 'btn-danger'
                        }
                    },
                    callback: function(result) {
                            if (result) {
                                


                                //   var formData=new FormData(document.getElementById('framework_form'));

                                // formData.append("action", "custom_landlord_registration_process");
                                // formData.append("action", "json_process");
                                alert("bussiness " + bussiness);
                                alert("industry" + industry);
                                jQuery.ajax({
                                    type: "POST",
                                    url: ajax_object_learning.ajaxurl,
                                    data: {
                                        'action': 'json_process',
                                        'new_bussiness': bussiness,
                                        'new_industry': industry,
                                        'new_result': result,
                                        newusername: jQuery('#new-username').val(),
                                        newuseremail: jQuery('#new-useremail').val(),
                                    //    var newUserPassword = jQuery('#new-userpassword').val();
                                       newpassword: jquery('#password').val(),
                                  
                                     newcompany_name: jQuery('#company_name').val(),
                                     newowner_name: jQuery('#owner_name').val(),
                                     newcontact_person:jQuery('#person-name').val(),
                                     newwebsite: jQuery('#website').val(),
                                  
                                
                                    },


                                    success: function(data) {
                                        // console.log(data);

                                        $('#industry option:selected').each(function() {
                                            $(this).prop('selected', false);
                                        });
                                        $('#industry').multiselect('refresh');

                                        $('#catagory2 option:selected').each(function() {
                                            $(this).prop('selected', false);
                                        });
                                        $('#catagory2').multiselect('refresh');

                                    }
                                }); //ajax url loop

                            } //if rusult loop
                            else {

                                bootbox.confirm({
                                    message: "Do you like to enter more details?",
                                    buttons: {
                                        confirm: {
                                            label: 'Yes',
                                            className: 'btn-success'
                                        },
                                        cancel: {
                                            label: 'No',
                                            className: 'btn-danger'
                                        }
                                    },
                                    callback: function(result2) {
                                        alert('This was logged in the callback in second loop: ' + result2);
                                    }
                                }); // second conformation details
                                //console.log('This was logged in the callback: ' + result);
                            } //if then else details
                        } // call function of first box
                });
            } else {
                alert("Please select activity or Industry");
            } //first confirm box





            // Confirm box
                bootbox.confirm("insert more data?", function (result) {
                    alert (result);

                    if (result) {
                        var formData2 = $('#industry').val();

                        if (formData=='')
                        {

                            alert ("select industry first");
                        }
                        //   var formData=new FormData(document.getElementById('framework_form'));

                        // formData.append("action", "custom_landlord_registration_process");
                        // formData.append("action", "json_process");
                        alert("bussiness " + formData);
                        alert("industry" + formData2);
                        jQuery.ajax({
                            type: "POST",
                            url: ajax_object_learning.ajaxurl,
                            data: {
                                'action': 'json_process',
                                'new_bussiness': formData,
                                'new_industry': formData2,
                            },


                            success: function(data) {
                                // console.log(data);

                                $('#industry option:selected').each(function() {
                                    $(this).prop('selected', false);
                                });
                                $('#industry').multiselect('refresh');
                        
                                $('#catagory2 option:selected').each(function() {
                                    $(this).prop('selected', false);
                                });
                                $('#catagory2').multiselect('refresh');
                             
                            }
                        });

                    } //upto this 
                });
        });
    });
});