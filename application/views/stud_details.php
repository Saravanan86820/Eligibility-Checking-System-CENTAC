<?php $this->load->view("header"); ?>
<style type="text/css">
	
	.con
	{
		width: 50%;
		margin: auto;
		padding: 20px;
	}
	#left,#right
	{
		/*width:50%;*/
		padding: 10px;
		background-color: #aeedf3;
	}
	.reg h4
	{
		width: 300px;
		display: inline-block;
		text-align: left;
	}
	.reg input
	{
		width: 260px;
	}
	h3
	{
		text-align: center;
		text-transform: uppercase;
		text-decoration: underline;
	}
	
	h1
	{
		text-align: center;
		color:#512424;
		text-transform: uppercase;
		margin: 10px;
	}
	h4
	{
		width: 300px;
		display: inline-block;
		text-align: left;
		margin-bottom: 10px;
		padding: 10px;
	}
	input
	{
		padding: 0 10px 0 10px;
        margin-bottom: 10px;
    }
    .btn
    {
    	width: 100px;
    }

</style>
<body>
	<?php $this->load->view("navbar"); ?> 
	<?php //print_r($login_data); ?>
	<div class="con">
	<form name="stud" method="post" action="<?php echo base_url("stud_info_sub"); ?>">

		<h1>Student Details Form</h1>


			<div id="left">
		 	<h3>Student Personal Details</h3>

		 				
                        <h4>Student Name</h4>
                        <input type="text" name="name" id="name" readonly 
                        value="<?php if(!empty($login_data)) { echo $login_data[0]->name; } ?>">
                

		                <h4>Gender</h4>
                        <input type="radio" name="gender" value="male" required><b>Male</b> 

 	   					<input type="radio" name="gender" value="female" required><b>Female</b>

			            <h4>Date of Birth</h4>
                        <input type="Date" name="dob" id="dob" onkeyup="agefind()" required>
                       
                        <h4>Age</h4>
                        <input type="text" name="age" id="age" readonly>

                        <h4>Phone Number</h4>
                        <input type="text" name="phone_no" id="phone_no" readonly 
					     value="<?php if(!empty($login_data)) { echo $login_data[0]->phone_no; } ?>">

                        <h4>Email ID</h4>
                        <input type="text" name="email" id="email" readonly 
						value="<?php if(!empty($login_data)) { echo $login_data[0]->email; } ?>">

                        <h4>Category</h4>
                        <select id="category" name="category" required>
                        	<option value="">--Select--</option>
                        	<option value="bc">BC</option>
                        	<option value="mbc">MBC</option>
                        	<option value="sc">SC/ST</option>
                        	<option value="oc">OC</option>
                        	<option value="bcm">BCM</option>
                        	<option value="gen">General</option>
                        </select>

                        <h4>Residence</h4>
                        <input type="radio" name="residence" value="Pondicherry" required><b>Pondicherry</b>
                        <input type="radio" name="residence" value="Other States" required><b>Other States</b>

                        <h4>Special Category</h4>
                        <select id="spe_category" name="spe_category" required>
                        	<option value="">--Select--</option>
                        	<option value="ff">Freedom Fighter</option>
                        	<option value="exm">Ex-Serviceman</option>
                        	<option value="msp">Merit-Sports Person</option>
                        	<option value="pwd">Person with Disability</option>
                        </select>

           </div>
                        

			<div id="right">

			<h3> Subject & Mark Details</h3>
						<div class="reg">
						<h4>Register Number</h4>
						<input type="text" name="reg_no" id="reg_no" placeholder="Enter Your Mark Register number" required>
					    </div>

			            <h4>Language-1</h4>
                        		<select id="lang1" name="lang1">
                        			<option value="">--Select--</option>
                        			<option value="tamil">Tamil</option>
                        			<option value="french">French</option>
                        			<option value="hindi">Hindi</option>
                        			<option value="hindi">English</option>
                        		</select>

                        <h4>Language-1 Mark</h4>
                        <input type="number" min="0" max="100" name="lang1_mark" id="lang1_mark" required>

                        <h4>Language-2</h4>
	            		<select id="lang2" name="lang2" required>
	            			<option value="">--Select--</option>
                        	<option value="tamil">Tamil</option>
                        	<option value="french">French</option>
                        	<option value="hindi">Hindi</option>
                        	<option value="hindi">English</option>
                   		</select>
                    
                        <h4>Language-2 Mark</h4>
                        <input type="number" min="0" max="100" name="lang2_mark" id="lang2_mark"  required>

                        <h4>Subject-1</h4>
                            <?php //print_r($subjects); ?>
                        		<select id="subject1" name="subject1" required>
                        			<option value="">--Select--</option>
                        			<?php
                        			
                        			// $subjects = array('1' => 'tamil','2' => 'English' );
                        			 foreach ($subjects as $key => $value): ?>
                        			<option value="<?php echo $value->sub_id ?>"><?php echo $value->sub_name ?></option>
                        			<?php endforeach ?>	
                        		</select>

                        <h4>Subject-1 Mark</h4>
                        		<input type="number" min="0" max="100" name="subject1_mark" id="subject1_mark" required>

                        <h4>Subject-2</h4>
                        
                        		<select id="subject2" name="subject2" required>
                        			<option value="">--Select--</option>
                        			<?php foreach ($subjects as $key => $value): ?>
                        			<option value="<?php echo $value->sub_id ?>"><?php echo $value->sub_name ?></option>
                        			<?php endforeach ?>
                        		</select>

                        <h4>Subject-2 Mark</h4>
                        		<input type="number" min="0" max="100" name="subject2_mark" id="subject2_mark"  required>

                        <h4>Subject-3</h4>
                        
                        		<select id="subject3" name="subject3" required>
                        			<option value="">--Select--</option>
                        			<?php foreach ($subjects as $key => $value): ?>
                        			<option value="<?php echo $value->sub_id ?>"><?php echo $value->sub_name ?></option>
                        			<?php endforeach ?>
                        		</select>

                        <h4>Subject-3 Mark</h4> 
                        		<input type="number" min="0" max="100" name="subject3_mark" id="subject3_mark" required >

                        <h4>Subject-4</h4>
                        		<select id="subject4" name="subject4" required>
                        			<option value="">--Select--</option>

                        			<?php foreach ($subjects as $key => $value): ?>
                        			<option value="<?php echo $value->sub_id ?>"><?php echo $value->sub_name ?></option>
                        			<?php endforeach ?>
                        		</select>

                        <h4>Subject-4 Mark</h4> 
							<input type="number" min="0" max="100" name="subject4_mark" id="subject4_mark" required onkeyup="getaverage()">

						<h4>Total</h4>
							<input type="text" name="total" id="total" readonly>
						<h4>Average</h4>
							<input type="text" name="average" id="average" readonly>
							<br><br>
							
							<center><input class="btn btn-primary" type="submit" value="Submit"></center>

			     </div>
						
	    </div>

			
				 
					 
				
				 
	</form>			


		<script>
			function agefind() 
			{
				var dob = new Date(document.getElementById("dob").value);
				var today = new Date();
				var age = Math.floor((today - dob) / (365.25*24*60*60*1000));
				document.getElementById("age").value = age;
			}

			function getaverage()
			{
				var sub1=document.getElementById('lang1_mark').value;
				var sub2=document.getElementById('lang2_mark').value;
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