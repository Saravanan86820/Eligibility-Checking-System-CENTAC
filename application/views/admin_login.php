<?php $this->load->view("header"); ?>
	
<body>
	<?php $this->load->view("navbar"); ?>
		 <div class="position-absolute top-50 start-50 translate-middle border border-dark con">
		 	<h3>Admin Login</h3>
			<div class="container my_con mt-4">
				<br>
				<div class="mb-3 row">
		   			<label for="username" class="col-sm-3 col-form-label">User Name</label>	
		   			<div class="col-sm-9">
		    			<input type="text" class="form-control" id="username">
		    		</div>
		    	</div>
				<div class="mb-3 row">
					<label for="password" class="col-sm-3 col-form-label">Password</label>
		    		<div class="col-sm-9">
		    			<input type="password" class="form-control" id="password"><br>		    			
		    		</div>
		   		</div>
		   	</div>
		    <center>
		    <div>
		    	<br>
		    	<input class="btn btn-primary" type="submit" value="Submit" onclick="admin()">
		    </div>
		    </center>
		</div>
</body>
</html>
<style type="text/css">
	.my_con
	{
		width: 475px;
		background: #59d1e3;
		color: #fff;
	}
	.con
	{
		width: 515px;
		height: 325px;
	}
</style>

<script>
	function admin()
	{
		if(document.getElementById("username").value=="ADMIN"&&document.getElementById("password").value=="1234")
		{
			 
		}
		else
		{
			alert("Check Your Username and Password");
		}
	}
</script>