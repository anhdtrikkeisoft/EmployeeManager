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
			<h2>Employee: <?php echo $Employee[0]['name']; ?> <a href="createEmployee">
					<a href="employees">
						<button class="btn btn-primary pull-right"> All Employee</button>
					</a>
				</a></h2>
			<div class="employee-info">

				<div>
					<span> Name: </span> <?php echo $Employee[0]['name']; ?>
				</div>
				<div>
					<span> Email: </span> <?php echo $Employee[0]['email']; ?>
				</div>
				<div>
					<span> Job title: </span> <?php echo $Employee[0]['job_title']; ?>
				</div>
				<div>
					<span> Cellphone: </span> <?php echo $Employee[0]['cellphone']; ?>
				</div>
				<div>
					<span> Department: </span> <?php echo $Employee[0]['department_name']; ?>
				</div>
				<div>
					<span> Position: </span> <?php echo $Employee[0]['position']; ?>
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