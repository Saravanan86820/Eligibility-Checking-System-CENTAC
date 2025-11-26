<?php $this->load->view("header"); ?>
<style type="text/css">
	.size{
		width: 800px;
		background: #aeedf3;
	}
	.con{
		width: 900px;
		background: #aeedf3;
	}
</style>
<body>
	<?php $this->load->view("navbar"); ?>
	<?php //print_r($login_data); ?>
	<div class="container size mt-4">
	<form name="stud" method="post" action="<?php echo base_url("stud_info_sub"); ?>">
		 	<h3>Personal Details</h3>
		 	<div class="row">

				<div class="col-sm-12 col-md-6 col-lg-6">
                    <h4>Student Name</h4>
                        <div class="form-group">
                        		<input type="text" name="name" id="name" readonly class="form-control" 
                        		value="<?php if(!empty($login_data)) { echo $login_data[0]->name; } ?>">
                        </div>
				</div>
			</div>

			<div class="row">
				<div class="col-sm-12 col-md-6 col-lg-6">
                    <h4>Gender</h4>
                        <div class="form-group">
                        		<input type="radio" name="gender" value="male">Male
                        		<input type="radio" name="gender" value="female">Female
                        </div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12 col-md-6 col-lg-5">
                    <h4>Date of Birth</h4>
                        <div class="form-group">
                        		<input type="Date" name="dob" id="dob" onkeyup="agefind()" required class="form-control">
                        </div>
				</div>
				<div class="col-sm-12 col-md col-lg-1">
					<h4>  click</h4>
					<div>
						<input type="button" onclick="agefind()" value=">>>">
					</div>
				</div>
				<div class="col-sm-12 col-md-6 col-lg-6">
                    <h4>Age</h4>
                        <div class="form-group">
                        		<input type="text" name="age" id="age" readonly class="form-control">
                        </div>
				</div>
			</div>
		 	<div class="row">
				<div class="col-sm-12 col-md-6 col-lg-6">
                    <h4>Phone Number</h4>
                        <div class="form-group">
                        		<input type="text" name="phone_no" id="phone_no" readonly class="form-control"
								  value="<?php if(!empty($login_data)) { echo $login_data[0]->phone_no; } ?>">
                        </div>
				</div>

				<div class="col-sm-12 col-md-6 col-lg-6">
                    <h4>Email ID</h4>
                        <div class="form-group">
                        		<input type="text" name="email" id="email" readonly class="form-control"
								  value="<?php if(!empty($login_data)) { echo $login_data[0]->email; } ?>">
                        </div>
				</div>
			</div>
		 	<div class="row">
				<div class="col-sm-12 col-md-6 col-lg-6">
                    <h4>Category</h4>
                        <div class="form-group">
                        		<input type="text" name="category" id="category" required class="form-control">
                        </div>
				</div>
				<div class="col-sm-12 col-md-6 col-lg-6">
                    <h4>Residence</h4>
                        <div class="form-group">
                        		<input type="radio" name="residence" value="Pondicherry">Pondicherry
                        		<input type="radio" name="residence" value="Other States">Other States
                        </div>
				</div>
				
			</div>
			<br>
		</div>
		<div class="container con mt-4">
			<h3>Subject & Mark Details</h3>
			<div class="row">

				<div class="col-sm-12 col-md-6 col-lg-5">
                    <h4>Language-1</h4>
                        <div class="form-group">
                        		<select id="language" name="language">
                        			<option value="tamil">Tamil</option>
                        			<option value="french">French</option>
                        			<option value="hindi">Hindi</option>
                        			<option value="hindi">English</option>
                        		</select>
                        </div>
				</div>

				<div class="col-sm-12 col-md-6 col-lg-4">
                    <h4>Language-1 Mark</h4>
                        <div class="form-group">
                        		<input type="number" min="0" max="100" name="language_mark" id="language_mark" placeholder="Enter Your Mark" required class="form-control">
                        </div>
				</div>
			</div>
			<div class="row">

				<div class="col-sm-12 col-md-6 col-lg-5">
                    <h4>Language-2</h4>
                    <div class="form-group">
	            		<select id="language" name="language">
                        	<option value="tamil">Tamil</option>
                        	<option value="french">French</option>
                        	<option value="hindi">Hindi</option>
                        	<option value="hindi">English</option>
                   		</select>
                    </div>
				</div>

				<div class="col-sm-12 col-md-6 col-lg-4">
                    <h4>Language-2 Mark</h4>
                        <div class="form-group">
                        		<input type="number" min="0" max="100" name="english_mark" id="english_mark" placeholder="Enter Your Mark" required class="form-control">
                        </div>
				</div>
			</div>
			<div class="row">

				<div class="col-sm-12 col-md-6 col-lg-5">
                    <h4>Subject-1</h4>
                    <?php //print_r($subjects); ?>
                        <div class="form-group">
                        		<select id="subject1" name="subject1">
                        			<option value="">--Select--</option>
                        			<?php
                        			
                        			// $subjects = array('1' => 'tamil','2' => 'English' );
                        			 foreach ($subjects as $key => $value): ?>
                        			<option value="<?php echo $value->sub_id ?>"><?php echo $value->sub_name ?></option>
                        			<?php endforeach ?>
                        			
                        		</select>
                        </div>
				</div>

				<div class="col-sm-12 col-md-6 col-lg-4">
                    <h4>Subject-1 Mark</h4>
                        <div class="form-group">
                        		<input type="number" min="0" max="100" name="subject1_mark" id="subject1_mark" placeholder="Enter Your Mark" required class="form-control">
                        </div>
				</div>
			</div>
			<div class="row">

				<div class="col-sm-12 col-md-6 col-lg-5">
                    <h4>Subject-2</h4>
                        <div class="form-group">
                        		<select id="subject2" name="subject2">
                        			<option value="">--Select--</option>
                        			<?php foreach ($subjects as $key => $value): ?>
                        			<option value="<?php echo $value->sub_id ?>"><?php echo $value->sub_name ?></option>
                        			<?php endforeach ?>
                        			
                        				<!-- <option value=""></option>	 -->



<!-- 

                        			<option value="computer_science">Computer Science</option>
                        			<option value="biology">Biology</option>
                        			<option value="maths">Mathematics</option>
                        			<option value="physics">Physics</option>
                        			<option value="chemistry">Chemistry</option>
                        			<option value="botony">Botony</option>
                        			<option value="zoology">Zoology</option>
                        			<option value="computer_applications">Computer Applications</option>
                        			<option value="accountancy">Accountancy</option>
                        			<option value="economics">Economics</option>
                        			<option value="commerce">Commerce</option>
                        			<option value="history">History</option>
                        			<option value="business_maths">Business Mathematics and Statistics</option>
                        			<option value="statistics">Statistics</option>
                        			<option value="computer_tech">Computer Technology</option>
                        			<option value="nutrition">Nutrition and Dietetics</option>
                        			<option value="geography">Geography</option>
                        			<option value="bio_chemistry">Bio Chemistry</option>
                        			<option value="micro_biology">Micro Biology</option>
                        			<option value="home_science">Home Science</option>
                        			<option value="political_science">Political Science</option>
                        			<option value="agricultural_science">Agricultural Science</option>
                        			<option value="nursing">Nursing (General) </option>
                        			<option value="nursing_vocational">Nursing Vocational</option>
                        			<option value="ethics">Ethics and Indian Culture</option>
                        			<option value=""></option> -->
                        		</select>
                        </div>
				</div>

				<div class="col-sm-12 col-md-6 col-lg-4">
                    <h4>Subject-2 Mark</h4>
                        <div class="form-group">
                        		<input type="number" min="0" max="100" name="subject2_mark" id="subject2_mark" placeholder="Enter Your Mark" required class="form-control">
                        </div>
				</div>
			</div>
			<div class="row">

				<div class="col-sm-12 col-md-6 col-lg-5">
                    <h4>Subject-3</h4>
                        <div class="form-group">
                        		<select id="subject3" name="subject3">
                        			<option value="">--Select--</option>

                        			<?php foreach ($subjects as $key => $value): ?>
                        			<option value="<?php echo $value->sub_id ?>"><?php echo $value->sub_name ?></option>
                        			<?php endforeach ?>


                        			<!-- <option value="computer_science">Computer Science</option>
                        			<option value="biology">Biology</option>
                        			<option value="maths">Mathematics</option>
                        			<option value="physics">Physics</option>
                        			<option value="chemistry">Chemistry</option>
                        			<option value="botony">Botony</option>
                        			<option value="zoology">Zoology</option>
                        			<option value="computer_applications">Computer Applications</option>
                        			<option value="accountancy">Accountancy</option>
                        			<option value="economics">Economics</option>
                        			<option value="commerce">Commerce</option>
                        			<option value="history">History</option>
                        			<option value="business_maths">Business Mathematics and Statistics</option>
                        			<option value="statistics">Statistics</option>
                        			<option value="computer_tech">Computer Technology</option>
                        			<option value="nutrition">Nutrition and Dietetics</option>
                        			<option value="geography">Geography</option>
                        			<option value="bio_chemistry">Bio Chemistry</option>
                        			<option value="micro_biology">Micro Biology</option>
                        			<option value="home_science">Home Science</option>
                        			<option value="political_science">Political Science</option>
                        			<option value="agricultural_science">Agricultural Science</option>
                        			<option value="nursing">Nursing (General) </option>
                        			<option value="nursing_vocational">Nursing Vocational</option>
                        			<option value="ethics">Ethics and Indian Culture</option>
                        			<option value=""></option> -->
                        		</select>
                        </div>
				</div>

				<div class="col-sm-12 col-md-6 col-lg-4">
                    <h4>Subject-3 Mark</h4>
                        <div class="form-group">
                        		<input type="number" min="0" max="100" name="subject3_mark" id="subject3_mark" placeholder="Enter Your Mark" required class="form-control">
                        </div>
				</div>
			</div>
			<div class="row">

				<div class="col-sm-12 col-md-6 col-lg-5">
                    <h4>Subject-4</h4>
                        <div class="form-group">
                        		<select id="subject4" name="subject4">
                        			<option value="">--Select--</option>

                        			<?php foreach ($subjects as $key => $value): ?>
                        			<option value="<?php echo $value->sub_id ?>"><?php echo $value->sub_name ?></option>
                        			<?php endforeach ?>
                        			<!-- 
                        			<option value="computer_science">Computer Science</option>
                        			<option value="biology">Biology</option>
                        			<option value="maths">Mathematics</option>
                        			<option value="physics">Physics</option>
                        			<option value="chemistry">Chemistry</option>
                        			<option value="botony">Botony</option>
                        			<option value="zoology">Zoology</option>
                        			<option value="computer_applications">Computer Applications</option>
                        			<option value="accountancy">Accountancy</option>
                        			<option value="economics">Economics</option>
                        			<option value="commerce">Commerce</option>
                        			<option value="history">History</option>
                        			<option value="business_maths">Business Mathematics and Statistics</option>
                        			<option value="statistics">Statistics</option>
                        			<option value="computer_tech">Computer Technology</option>
                        			<option value="nutrition">Nutrition and Dietetics</option>
                        			<option value="geography">Geography</option>
                        			<option value="bio_chemistry">Bio Chemistry</option>
                        			<option value="micro_biology">Micro Biology</option>
                        			<option value="home_science">Home Science</option>
                        			<option value="political_science">Political Science</option>
                        			<option value="agricultural_science">Agricultural Science</option>
                        			<option value="nursing">Nursing (General) </option>
                        			<option value="nursing_vocational">Nursing Vocational</option>
                        			<option value="ethics">Ethics and Indian Culture</option>
                        			<option value=""></option> -->
                        		</select>
                        </div>
				</div>

				<div class="col-sm-12 col-md-6 col-lg-4">
					<h4>Subject-4 Mark</h4> 
						<div class="form-group">	
							<input type="number" min="0" max="100" name="subject4_mark" id="subject4_mark" onkeyup="getaverage();" placeholder="Enter Your Mark" required class="form-control">
						</div>
				</div>
				<div class="col-sm-12 col-md-6 col-lg-5">
					<h4>Total</h4>
						<div class="form-group">
							<input type="text" name="total" id="total" readonly class="form-control">
						</div>
				</div>

				<div class="col-sm-12 col-md-6 col-lg-5"> 
					<h4>Average</h4>
						<div class="form-group"> 
							<input type="text" name="average" id="average" readonly class="form-control">
						</div>
				</div>
			</div>
			<center><br><br>
				<div> 
					<input class="btn btn-primary" type="submit" value="Submit"> 
				</div>
				<br> 
			</div>
	</form>			


		<script>
			function agefind() {
				var dob = new Date(document.getElementById("dob").value);
				var today = new Date();
				var age = Math.floor((today - dob) / (365.25*24*60*60*1000));
				document.getElementById("age").value = age;
			}

			function getaverage(){
				var sub1=document.getElementById('language_mark').value;
				var sub2=document.getElementById('english_mark').value;
				var sub3=document.getElementById('subject1_mark').value;
				var sub4=document.getElementById('subject2_mark').value;
				var sub5=document.getElementById('subject3_mark').value;
				var sub6=document.getElementById('subject4_mark').value;
				var total;
				var avg;

				total=parseInt(sub1)+parseInt(sub2)+parseInt(sub3)+parseInt(sub4)+parseInt(sub5)+parseInt(sub6);
				document.getElementById('total').value=total;

				avg=total/6;
				document.getElementById('average').value=avg;

			}
		</script>