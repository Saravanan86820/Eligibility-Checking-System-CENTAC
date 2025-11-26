<?php $this->load->view("header"); ?>
	
<body>
	<?php $this->load->view("navbar"); ?>
	<div class="container my_con mt-4">
		<div class="mb-3 row">
		    <label class="col-md-2 col-form-label">Name</label>
		    <div class="col-md-10">
		      <input type="text" class="form-control" name="name">
		    </div>
		</div>
		<div class="mb-3 row">
		    <label class="col-md-2 col-form-label">Email</label>
		    <div class="col-md-10">
		      <input type="text" class="form-control" name="Email">
		    </div>
		</div>
		<div class="mb-3 row">
		    <label for="inputPassword" class="col-md-2 col-form-label">Password</label>
		    <div class="col-md-10">
		      <input type="password" class="form-control" id="inputPassword">
		    </div>
		</div>
	</div>
	
<!-- 	<center>
	<h1>Registration Form</h1><br><br>
	<form name="log" method="post" action="<?php echo base_url("registration_sub"); ?>">
		<table>
		<tr><td><label>Enter your name </label></td><td><input type="text" name="name"><br></td></tr>
		<tr><td><label>Enter your Email Id </label></td><td><input type="text" name="email"><br></td></tr>
		<tr><td><label>Enter Password</label></td><td><input type="password" name="password"><br></td></tr>
		<tr><td><label>Enter Phone Number</label></td><td><input type="text" name="phone_no"><br></td></tr>
		<tr><td><input type="submit" name="save"></td></tr>
		<tr><td><input type="submit" name="save"></td></tr>

	</table>
	</form>
	</center> -->
</body>
</html>
<style type="text/css">
	.my_con{width: 400px;background: #59d1e3;color: #fff;}
</style>