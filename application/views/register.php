<!DOCTYPE html>
<html>
<head>
	<title>RegForm</title>
	<link rel="stylesheet" href="<?php echo base_url('css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/main.css'); ?>">
    <script src=<?php  echo base_url('js/jquery-3.5.1.js'); ?>></script>
    <script src=<?php echo base_url('js/main.js'); ?> ></script>
    <script src=<?php echo base_url('js/bootstrap.js'); ?>></script>
	<style>
	        body, html{
	            height: 100%;
	        }
    </style>
</head>
<body>
	<nav class="navbar navbar-expand-md"> <a class="navbar-brand" href="#">Logo</a> 
		<button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#main-navigation">
			<span class="navbar-toggler-icon"></span>
		</button> 
		<div class="collapse navbar-collapse" id="main-navigation"> 
			<ul class="navbar-nav"> 
				<li class="nav-item"> <a class="nav-link" href="http://localhost/codeblog/">Home</a></li> 
				<li class="nav-item"> <a class="nav-link" href="http://localhost/codeblog/index.php/register/displaydata">View Joined Member</a></li> 
			</ul> 
		</div> 
	</nav>
	<div class="container h-100">
		<div class="row h-100 justify-content-center align-items-center">

			<form class="col-5 border border-secondary rounded" style="margin:auto;" action="" method="post">
				<br><br>
				<h2 class="text-center text-secondary">Add To Journey</h2>
				<br>

				<div class="form-group">
					<label>Name</label>
					<input type="text" class="form-control" name="name" id="name" placeholder="Name" value="<?php echo set_value('name') ?>" required>

					<?php if(form_error('name')){
			            echo "<span style='color:red'>".form_error('name')."</span>";
			        }
			        ?>
				</div>

				<div class="form-group">
					<label>Email</label>
					<input type="email" class="form-control" name="email" id="email" placeholder="Email" value="<?php echo set_value('email') ?>" required>
					<?php if(form_error('email')){
			            echo "<span style='color:red'>".form_error('email')."</span>";
			        }
			        ?>
				</div>

				<div class="form-group">
					<label>Mobile Number</label>
					<input type="text" class="form-control" name="mobile" id="mobile" placeholder="Mobile Number" required>
				</div>

				<div class="form-group ">
					<label>Destinations</label>
					<select class="form-control mb-3" name="destination" id="destination" required>
						<option value="">--SELECT--</option>
						<option value="Sigiriya">Sigiriya</option>
						<option value="Ella">Ella</option>
						<option value="Ruassala">Ruassala</option>
						<option value="Arugabey">Arugabey Beach</option>
					</select
				</div>

				<div class="form-group row">
					<button type="submit" class="btn btn-success col-3 m-1 ml-3" name="save" value="save">ADD</button>
					<button type="reset" class="btn btn-light border border-dark col-3 m-1" name="reset">RESET</button>
				</div>
				
				<br><br>
				
			</form>
		</div>
	</div>

</body>
</html>