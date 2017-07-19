<div class="maincontent">
<?php $data1 = $this->session->all_userdata(); ?>
<?php $deliveryData   = $this->session->userdata('user_data'); ?>
<?php print_r($deliveryData); ?>


<?php foreach($data1 as $d){
//print_r($d);
}?>


        	<div class="contentinner">
			<form action="http://localhost/college/index.php/backend/student/admission_step8/" method="post" id="">

				<h4 class="widgettitle last">Previous Qualification Details</h4>
				<div>
				<ul class="form_details">
				<li><label>School Name:</label><input type="text" name="school_name" placeholder="School Name" /></li>
				<li><label>School Address:</label><input type="text" name="s_address" placeholder="School Address" /></li>
				<li><label>Qualification:</label><input type="text" name="qualification" placeholder="Qualification" /></li>
				<li>Transport<input type="checkbox" name="transport" /></li>
				<li>Hostel:<input type="checkbox" name="hostel" /></li>
				</ul>
				</div>
				
			
				<div class="submit">
                <input type="submit" name="submit" value="Submit"  />
				</div>
                </form>
                
            </div><!--contentinner-->
        </div>
		
		