<?php $this->load->view("header"); ?>
	
<body>
	<?php $this->load->view("navbar"); ?>
	<form name="sign" method="post" action="<?php echo base_url("signup_form_sub"); ?>">
		<div class="position-absolute top-50 start-50 translate-middle border border-dark con">
		 	<h3>Signup</h3>
			<div class="container my_con mt-4">
				<br>
				<div class="mb-3 row">
		   			<label for="name" class="col-sm-2 col-form-label">User Name</label>	
		   			<div class="col-sm-10">
		    			<input type="text" class="form-control" name="name">
		    		</div>
		    	</div><div class="mb-3 row">
		   			<label for="email" class="col-sm-2 col-form-label">Email</label>	
		   			<div class="col-sm-10">
		    			<input type="text" class="form-control" name="email">
		    		</div>
		    	</div>
				<div class="mb-3 row">
		   			<label for="phno" class="col-sm-2 col-form-label">Phone Number</label>	
		   			<div class="col-sm-10">
		    			<input type="text" class="form-control" name="phno">
		    		</div>
		    	</div>
				<div class="mb-3 row">
					<label for="password" class="col-sm-2 col-form-label">Password</label>
		    		<div class="col-sm-10">
		    			<input type="password" class="form-control" name="password"><br>
		    			<!-- <a href="#" class="link-primary">Forget Password</a> -->
		    			
		    		</div>
		   		</div>
		   	</div>
		    <center>
		    <div>
		    	<input class="btn btn-primary" type="submit" value="Submit">
		    </div>
		    <div>
		    	<label>------------------------OR------------------------</label>
			</div>
		    <div>
		    	<label>Do have an Account</label><br><br>
		    	<a class="btn btn-primary" href="login_form" role="sub">Login</a>
		    </div>
		    </center>
		</div>
</body>
</html>
<style type="text/css">
	.my_con
	{
		width: 450px;
		background: #59d1e3;
		color: #fff;
	}
	.con
	{
		width: 515px;
		height: 540px;
	}
</style>