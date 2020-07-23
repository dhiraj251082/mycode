
  <div class="form-bottom">
                                 <form role="form" action="" method="post" class="exim_form" id="exim_form" >
                                    <div class="form-group2">
                                     <div><label>Specify the Product you Deal in</div>
                                            <select name="product" class="product" id="product">
                                     <option value="">Specific Product</option>
                                      <?php foreach ($myproduct as  $arrayproduct) {
                                   ?>         
                           <option value="<?php echo $arrayproduct->product_id; ?>"><?php echo $arrayproduct->productname; ?></option>
                           <?php
                             }
                           ?>
                            </select>
                            <input type="text" id="other_product" class="other_product" name="other_product"  disabled >
                              </div>                             
                                     <div class="form-group2">
                                     <div><label>Specify the Countries your Currently catering to<div>
                                            <select name="service_country2" class="service_country2" id="service_country2">
                                     <option value="">SELECT COUNTRY</option>
                               <?php foreach ($result as  $country) {
                                   ?>         
                           <option value="<?php echo $country->id; ?>"><?php echo $country->location_name; ?></option>
                           <?php
                            }
                           ?>
                            </select>
                            <input type="text" id="other_service_country2" class="other_service_country2" name="other_service_country2"  disabled >
                              </div>
                              <div class="form-group2">
                                     <div><label>Any specific Country / Region you would like to target </div>
                                            <select name="interested_country2" class="interested_country2" id="interested_country2">
                                     <option value="">SELECT COUNTRY</option>
                               <?php foreach ($result as  $country) {
                                   ?>         
                           <option value=<?php echo $country->id; ?>><?php echo $country->location_name; ?></option>
                           <?php
                     }
                     ?>
                     </select>
                    
                
                     <input type="text" id="other_interested_country2" class="other_interested_country2" placeholder="Enter Your Country If Others" disabled >
                      
              </div>
                                <div class="form-group2">
                                     
                                     <div class="login-status" id="login-status">New Details</div>
                                     
                                     <button type="submit" class="btnexportimport" id="btnexportimport">Save details!</button>
                            </div>
                                 </form>
                             </div>
                             <?php
                             
                             ?>