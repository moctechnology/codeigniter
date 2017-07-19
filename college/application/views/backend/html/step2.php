<div class="maincontent">

<?php //print_r($this->session->all_userdata()); ?>
        	<div class="contentinner">
			<form action="http://localhost/school/index.php/backend/student/admission_step2/" method="post" id="">

				<h4 class="widgettitle">Personal Details</h4>
				<div>
				<ul class="form_details">
				<li><label>First Name:</label><input type="text" name="first_name" placeholder="First Name" /></li>
				<li><label>Middle Name:</label><input type="text" name="middle_name" placeholder="Middle Name" /></li>
				<li><label>Last Name:</label><input type="text" name="last_name" placeholder="Last Name" /></li>
				<li><label>Date of Birth:</label><input id="input_01" class=" span3 datepicker picker__input  d " name="date_from1" type="text" autofocuss=""  data-valuee=""  aria-haspopup="true" aria-expanded="false" aria-owns="input_01_root" placeholder= "Pick a date From" required></li>
				<li><label>Sex:</label><select>
				<option>Select Sex</option>
				<option>Male</option>
				<option>Female</option>
				<option>Other</option>
				</select></li>
				<li><label>Blood Group:</label><select>
				<option>Select Group</option>
				<option>A+</option>
				<option>A-</option>
				<option>B+</option>
				<option>B-</option>
				<option>AB+</option>
				<option>AB-</option>
				<option>O+</option>
				<option>O-</option>
				</select></li>
				<li><label>Birth Place:</label><input type="text" name="birth_place" placeholder="Birth Place" /></li>
				<li><label>Nationality:</label><select>
				<option>Select Nationality</option>
				<option>India</option>
				<option>America</option>
				<option>Iran</option>
				<option>Africa</option>
				<option>Afghanistan</option>
				<option>Brazil</option>
				</select></li>
				<li><label>Mother Tongue:</label><input type="text" name="mother_tongue" placeholder="Mother Tongue" /></li>
				<li><label>Category:</label><select>
				<option>Select Category</option>
				<option>ascd</option>
				<option>assxc</option>
				<option>assd</option>
				<option>sss</option>
				<option>erw</option>
				<option>dfdf</option>
				</select></li>
				<li><label>Religion:</label><input type="text" name="religion" placeholder="Religion" /></li>
				
				
				</ul>
				</div>
			
				<div class="submit">
                <input type="submit" name="submit" value="Submit"  />
				</div>
                </form>
                
            </div><!--contentinner-->
        </div>
		
		