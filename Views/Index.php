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
			<h1>Departments</h1>


			<div class="alert-success">
          <?php
          if (session_status() == PHP_SESSION_NONE) {
              session_start();
          }
          if (!empty($_SESSION['message'])) {
              $message = $_SESSION['message'];
              echo $message;
              $_SESSION['message'] = "";
          }
          ?>
			</div>

			<table class="table table-hover">
				<thead>
				<tr>
					<th>#</th>
					<th>Name</th>
					<th>Office Number</th>
					<th>Manager</th>
				</tr>
				</thead>
				<tbody>
				<tr>
					<td>1</td>
					<td>John</td>
					<td>Doe</td>
					<td>john@example.com</td>
				</tr>

				<tr>
					<td>2</td>
					<td>John</td>
					<td>Doe</td>
					<td>john@example.com</td>
				</tr>

				<tr>
					<td>3</td>
					<td>John</td>
					<td>Doe</td>
					<td>john@example.com</td>
				</tr>


				<tr>
					<td>4</td>
					<td>John</td>
					<td>Doe</td>
					<td>john@example.com</td>
				</tr>

				</tbody>
			</table>

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