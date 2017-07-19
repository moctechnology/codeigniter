<div class="maincontent">
<?php print_r($this->session->all_userdata()); ?>
        	<div class="contentinner">
			<form action="http://localhost/college/index.php/backend/student/admission_step4/" method="post" id="">

				<h4 class="widgettitle">Father Details</h4>
				<div>
				<ul class="form_details">
				<li><label>Father Name:</label><input type="text" name="father_name" placeholder="Father Name" /></li>
				<li><label>Mobile:</label><input type="text" name="mobile1" placeholder="Mobile Number" /></li>
				<li><label>Job:</label><select>
				<option>Select job</option>
				<option>Eduction</option>
				<option>Business</option>
				<option>Doctor</option>
				<option>Engineer</option>
				<option>Advocate</option>
				<option>Agriculture</option>
				<option>Farmer</option>
				<option>Labourer</option>
				<option>Other</option>
				</select></li>
				</ul>
				</div>
			
				<div class="submit">
                <input type="submit" name="submit" value="Next"  />
				</div>
                </form>
                
            </div><!--contentinner-->
        </div>
		
		