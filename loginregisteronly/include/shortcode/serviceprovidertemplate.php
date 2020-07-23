<?php    

 
 ?>
   

     <div class="container">NONCE_FIELD_PH
				                    <form role="form" action="" method="post" class="exim_form" id="exim_form" >
                                    <div class="form-group2">
                                      <label>Specify Your Bussiness</label>
                                    <select name="product" class="product" id="product">
                                     <option value="">Specific Product</option>
                                      <?php foreach ($myproduct as  $arrayproduct) {
                                   ?>         
                           <option value="<?php echo $arrayproduct->product_id; ?>"><?php echo $arrayproduct->productname; ?></option>
                           <?php
                             }
                           ?>
                            </select>
                            <input type="text" id="other_product" class="other_product" placeholder="Enter Your Product If Others" disabled >
                              </div>         
                                <div class="form-group2">
                                
    <input type="text" class="venture_text" id="venture_text" name="venture_text" Placeholder="Services/Product Looking for">
               
                              </div>
                                              
                                 <div class="form-group2">
                                
                                        <div class="login-status" id="login-status">New Details</div>
                                      
                                        
                    <button type="submit" class="btn" id="serviceprovider">Save details!</button>
                            </div>
				                    </form>
			                    </div>`

        <!-- Top content -->
        

