<!DOCTYPE html>
<html lang="en">
<head>
	<title>Bootstrap Example</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="public/bootstrap/css/bootstrap.min.css">

	<link rel="stylesheet" href="public/css/tuananh.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="public/bootstrap/js/bootstrap.js"></script>
</head>
<body>

<div class="container">
	<header>
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" href="#">Employees Manager</a>
				</div>
				<ul class="nav navbar-nav">

					<li><a href="employees"> Employees </a></li>
					<li><a href="index.php"> Departments </a></li>
            <?php
            session_start();
            if (isset($_SESSION['employee_name'])) {
                ?>
							<li><a class="loginstatus" href="logout"> Logout </a></li>
                <?php
            } else {
                ?>
							<li><a class="loginstatus" href="login"> Login </a></li>
                <?php

            }
            ?>
				</ul>
			</div>
		</nav>

	</header>


	<div class="body">

		<!-- Begin page content -->
		<div class="container">

			<div class="row">
				<h1> Create Employee <a href="employees">
						<button class="btn btn-primary pull-right">Back</button>
					</a></h1>

				<div>
					<form action="storeEmployee" method="post">

						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12">
								<div class="form-group">
									<strong>Name:</strong>
									<input placeholder="Enter Name" class="form-control" name="name" type="text">
								</div>
							</div>

							<div class="col-xs-12 col-sm-12 col-md-12">
								<div class="form-group">
									<strong>Email:</strong>
									<input placeholder="Enter Email" class="form-control" name="email" type="email"
									       value="">
								</div>
							</div>


							<div class="col-xs-12 col-sm-12 col-md-12">
								<div class="form-group">
									<strong>Job title:</strong>
									<input placeholder="Enter job title" class="form-control" name="job_title" type="text"
									       value="">
								</div>
							</div>


							<div class="col-xs-12 col-sm-12 col-md-12">
								<div class="form-group">
									<strong>Cell phone:</strong>
									<input placeholder="Enter cell phone" class="form-control" name="cellphone" type="text"
									       value="">
								</div>
							</div>

							<div class="col-xs-12 col-sm-12 col-md-12">
								<div class="form-group">
									<strong>Department:</strong>
									<select required name="id_department" id="">
										<option value=""></option>
                      <?php
                      foreach ($Departments as $dp) { ?>
												<option
														value="<?php echo $dp['id']; ?>"> <?php echo $dp['name']; ?></option>
                          <?php

                      }
                      ?>

									</select>
								</div>
							</div>


							<div class="col-xs-12 col-sm-12 col-md-12">
								<div class="form-group">
									<strong>Position:</strong>
									<select required name="position" id="">
										<option selected value="staff"> Staff</option>
										<option value="manager"> Manager</option>
									</select>
								</div>
							</div>


							<div class="col-xs-12 col-sm-12 col-md-12">
								<div class="form-group">
									<strong>Role:</strong>
									<select name="role" id="">
										<option selected value="normal"> Normal</option>
										<option value="root"> Root</option>
									</select>
								</div>
							</div>

							<div class="col-xs-12 col-sm-12 col-md-12">
								<div class="form-group">

									<input placeholder="Enter Email" class="btn btn-success form-control" type="submit"
									       value="Create">

								</div>
							</div>


						</div>

					</form>
				</div>
			</div>

		</div>

	</div>

</div>
<footer id="footer" class="footer">
	<div class="container">
		<div class="pull-left">
			<a href="http://rikkeisoft.com/" target="_blank"><img src="/ed/img/rikkei.png?1443606215"
			                                                      alt="Rikkeisoft Co.,Ltd" border="0"
			                                                      height="40"/></a></div>
		<div class="pull-right">By AnhDT</div>
	</div>
</footer>


</body>
</html>