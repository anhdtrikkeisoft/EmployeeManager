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
	<script src="public/js/tuananh.js"></script>
</head>
<body>
<?php

//echo '<pre>';
//print_r($Departments);
//echo '</pre>';

?>


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
			<h2>Employees<a href="createEmployee">
					<button class="btn btn-primary pull-right btn-create"> Create Employee</button>
				</a></h2>

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
					<th>Department</th>
					<th>Job title</th>
					<th>Email</th>
					<th>Position</th>
					<th>Action</th>
				</tr>
				</thead>
				<tbody>
        <?php
        $i = 1;
        foreach ($Employees as $ep) { ?>

					<tr>
						<th> <?php echo $i; ?> </th>
						<th> <?php echo $ep['name']; ?> </th>
						<th> <?php echo $ep['department_name']; ?> </th>
						<th> <?php echo $ep['job_title']; ?> </th>
						<th> <?php echo $ep['email']; ?></th>
						<th> <?php echo $ep['position']; ?></th>
						<th>
							<a href="showEmployee?id=<?php echo $ep['id']; ?>">
								<button class="btn btn-info"> View</button>
							</a>
							<a href="editEmployee?id=<?php echo $ep['id'] ?>">
								<button class="btn btn-success"> Edit</button>
							</a>

							<form method="POST" action="deleteEmployee" accept-charset="UTF-8"
							      style="display:inline">
								<input name="_method" type="hidden" value="DELETE">
								<input type="hidden" name="id" value="<?php echo $ep['id']; ?>">
								<input class="btn btn-danger" type="submit" value="Delete">
							</form>

						</th>
					</tr>
            <?php
            $i++;
        }
        ?>


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