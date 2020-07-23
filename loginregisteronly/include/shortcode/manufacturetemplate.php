<div class="form-bottom">NONCE_FIELD_PH
				                    <form role="form" action="" method="post" class="exim_form" id="exim_form" >
                                    <div class="form-group2">
                                      <div><label>Specify Your Bussiness</div>
                                            <select name="product" class="product" id="product" name="product" required>
                                     <option value="">Specific Product</option>
                                      <?php foreach ($myproduct as  $arrayproduct) {
                                   ?>         
                           <option value="<?php echo $arrayproduct->product_id; ?>"><?php echo $arrayproduct->productname; ?></option>
                           <?php
                             }
                           ?>
                            </select>
                            <input type="text" id="other_product" class="other_product" name="other_product" placeholder="Enter Your Product If Others" disabled >
                              </div>         
                                        <div class="form-group2">
                                         
                                            <select class="venture" id="venture_text" name="venture_text" required>
                                            <option value="">You are looking for</option>
                                          <?php foreach ($venture_result as  $arrayventure) {
                                   ?>         
                           <option value="<?php echo $arrayventure->venture_id; ?>"><?php echo $arrayventure->venture_name; ?></option>
                           <?php
                             }
                           ?>
                                               
                                            </select>
                                           
                                        </div>
                                            <div class="form-group2">
                                              <div><label>Any Preference of Country/Region</label></div>
                                            <select name="interested_country2" class="interested_country2" id="interested_country2" name="interested_country2" required>
                                     <option value="">SELECT COUNTRY</option>
                               <?php foreach ($result as  $country) {
                                   ?>         
                           <option value=<?php echo $country->id; ?>><?php echo $country->location_name; ?></option>
                           <?php
                             }
                          ?>
                     </select>
                     <input type="text" id="other_interested_country2" class="other_interested_country2" name="other_interested_country2" placeholder="Provide Preference of Country/Region" disabled >
                     
                           </div>
                                <div class="form-group2"><label> Do you have IEC Code</label>
                                <input type="checkbox" id="iec_code_check" name="iec_code_check">
                                <input type="text" id="iec_code_text" name=iec_code_text id =iec_code_text placeholder="If Yes Provide IEC Code " disabled>
                               
                                
                                        <div class="login-status" id="login-status">New Details</div>
                                        
                    <button type="submit" class="btn" id="submit">Save details!</button>
                            </div>
				                    </form>
			                    </div>

        <!-- Top content -->
        



