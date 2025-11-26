<?php $this->load->view("header"); ?>
<style type="text/css">
	h2
	{
		text-align: center;
		margin-top: 30px;
	}
	.con
	{
		margin-top:50px;
	}	
	label
	{
		width: 350px;
		display: inline-block;
		text-align: left;
		margin-bottom: 10px;
		padding: 10px;
		margin-right: 20px;
		border: 2px solid;
		background-color:#dee2e6;
	}
	.btn
    {
    	width: 100px;
    }
</style>
<body>
	<?php $this->load->view("navbar"); ?> 
	<h2>COLLEGE AND COURSE INFORMATION</h2>


	<div class="con">
	  <center>
		<div class="first">
			<label for="add">TO ADD A COLLEGE OR COURSE DETAILS</label>
			<a class="btn btn-primary" href="login_form" role="button">ADD</a><br><br><br>		
		</div>

		<div class="second">
			<label for="add">TO DELETE A COLLEGE OR COURSE DETAILS</label>
		    <a class="btn btn-primary" href="login_form" role="button">DELETE</a><br><br><br>		

		</div>

		<div class="third">
			<label for="add">TO EDIT A COLLEGE OR COURSE DETAILS</label>
			<a class="btn btn-primary" href="login_form" role="button">EDIT</a>		
		</div>
	  </center>
    </div>

</body>