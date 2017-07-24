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

<?php
echo '<pre>';
print_r($Employee);
echo '</pre>';
?>


<?php
echo '<pre>';
print_r($Departments);
echo '</pre>';
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

			<div class="row">
				<h1> Edit Employee: <?php echo $Employee[0]['name']; ?> <a href="employees">
						<button class="btn btn-primary pull-right">Back</button>
					</a></h1>

				<div>
					<form action="updateEmployee" method="post">

						<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">

						<div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12">
								<div class="form-group">
									<strong>Name:</strong>
									<input value="<?php echo $Employee[0]['name']; ?>" placeholder="Enter Name" class="form-control"
									       name="name" type="text">
								</div>
							</div>

							<div class="col-xs-12 col-sm-12 col-md-12">
								<div class="form-group">
									<strong>Email:</strong>
									<input disabled placeholder="Enter Email" class="form-control" name="email" type="email"
									       value="<?php echo $Employee[0]['email']; ?>">
								</div>
							</div>


							<div class="col-xs-12 col-sm-12 col-md-12">
								<div class="form-group">
									<strong>Job title:</strong>
									<input placeholder="Enter job title" class="form-control" name="job_title" type="text"
									       value="<?php echo $Employee[0]['job_title']; ?>">
								</div>
							</div>


							<div class="col-xs-12 col-sm-12 col-md-12">
								<div class="form-group">
									<strong>Cell phone:</strong>
									<input placeholder="Enter cell phone" class="form-control" name="cellphone" type="text"
									       value="<?php echo $Employee[0]['cellphone']; ?>">
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
                            <?php if ($dp['id'] == $Employee[0]['id_department']) {
                                echo "selected";
                            } ?>
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
										<option
                        <?php if ($Employee[0]['position'] == 'staff') echo "selected"; ?>
												value="staff"> Staff
										</option>
										<option
                        <?php if ($Employee[0]['position'] == 'manager') echo "selected"; ?>
												value="manager"> Manager
										</option>
									</select>
								</div>
							</div>


							<div class="col-xs-12 col-sm-12 col-md-12">
								<div class="form-group">
									<strong>Role:</strong>
									<select name="role" id="">
										<option
                        <?php if ($Employee[0]['role'] == 'normal') echo "selected"; ?>
												value="normal"> Normal
										</option>
										<option
                        <?php if ($Employee[0]['role'] == 'root') echo "selected"; ?>
												value="root"> Root
										</option>
									</select>
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