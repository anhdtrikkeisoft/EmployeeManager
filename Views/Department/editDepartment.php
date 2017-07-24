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
				<h1> Edit Employee: <?php echo $Department[0]['name']; ?> <a href="employees">
						<button class="btn btn-primary pull-right">Back</button>
					</a></h1>

				<div>
					<form action="updateDepartment" method="post">

						<input type="hidden" name="id" value="<?php echo $Department[0]['id'] ?>">

						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12">
								<div class="form-group">
									<strong>Name:</strong>
									<input value="<?php echo $Department[0]['name']; ?>" placeholder="Enter Name" class="form-control" name="name" type="text">
								</div>
							</div>

							<div class="col-xs-12 col-sm-12 col-md-12">
								<div class="form-group">
									<strong>Office number:</strong>
									<input placeholder="Enter office number" class="form-control" name="office_number" type="text"
									       value="<?php echo $Department[0]['office_number']; ?>">
								</div>
							</div>

							<div class="col-xs-12 col-sm-12 col-md-12">
								<div class="form-group">

									<input placeholder="Enter Email" class="btn btn-success form-control" type="submit"
									       value="Save">

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