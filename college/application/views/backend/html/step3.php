<div class="maincontent">
<?php //print_r($this->session->all_userdata()); ?>
        	<div class="contentinner">
			<form action="http://localhost/school/index.php/backend/student/admission_step3/" method="post" id="">

				<h4 class="widgettitle">Contact Details</h4>
				<div>
				<ul class="form_details">
				<li><label>Permanent Address:</label><textarea name="p_address"></textarea></li>
				<li><label>Present Address:</label><textarea name="Presnt_address"></textarea></li>
				<li><label>City Name:</label><input type="text" name="city" placeholder="City Name" /></li>
				<li><label>Pin:</label><input type="text" name="pin" placeholder="Pin Number" /></li>
				
				<li><label>Country:</label><select>
				<option>Select Country</option>
				<option>India</option>
				<option>AMerica</option>
				<option>Pakistan</option>
				</select></li>
				<li><label>State:</label><select>
				<option>Select State</option>
				<option>upo</option>
				<option>mp</option>
				<option>mahrashtra</option>
				<option>hariyana</option>
				<option>bihar</option>
				<option>delhi</option>
				<option>odisa</option>
				<option>arunachal prades</option>
				</select></li>
				<li><label>Phone Number:</label><input type="text" name="phone" placeholder="Phone Number" /></li>
				<li><label>Mobile Number:</label><input type="text" name="mobile" placeholder="Mobile Number" /></li>
				<li><label>Email:</label><input type="email" name="email" placeholder="Email" /></li>
				
				
				
				
				</ul>
				</div>
			
				<div class="submit">
                <input type="submit" name="submit" value="Submit"  />
				</div>
                </form>
                
            </div><!--contentinner-->
        </div>
		
		