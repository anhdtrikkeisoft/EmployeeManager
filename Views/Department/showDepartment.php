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
print_r($Employees);
echo '</pre>';


echo '<pre>';
print_r($Department);
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
            if (session_status() == PHP_SESSION_NONE) {
//                session_start();
            }
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
			<h2>Department: <?php echo $Department[0]['name']; ?> <a href="createDepartment">
					<a href="index.php">
						<button class="btn btn-primary pull-right"> All Departments</button>
					</a>
				</a></h2>
			<div class="employee-info">

				<div>
					<span> Name: </span> <?php echo $Department[0]['name']; ?>
				</div>
				<div>
					<span> Office Number: </span> <?php echo $Department[0]['office_number']; ?>
				</div>
				<div>
					<span> Members: </span>
            <?php
            foreach ($Employees as $ep) {
                if ($ep['id_department'] == $Department[0]['id']) {
                    ?>
									<a target="_blank"
									   href="showEmployee?id=<?php echo $ep['id']; ?>"> <?php echo $ep['name'] ?> </a> <?php
                    if ($ep['position'] == "manager") {
                        echo "(manager)";
                    }
                    ?> ,
                    <?php

                }
            }
            ?>
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