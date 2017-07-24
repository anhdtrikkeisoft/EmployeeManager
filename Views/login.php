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

		<h2>Login</h2>

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


		<!-- Begin page content -->
		<div class="container">
			<form action="dangnhap" class="form-signin" id="UserLoginForm" method="post" accept-charset="utf-8">
				<div style="display:none;"><input type="hidden" name="_method" value="POST"/></div>
				<input name="email"
				       class="form-control email"
				       placeholder="Email" autofocus="autofocus"
				       maxlength="30" type="email"
				       id="email"/><input
						name="password" class="form-control password" placeholder="Password" type="password"
						id="UserPassword"/>
				<div class="submit"><input class="btn btn-lg btn-primary btn-block" type="submit" value="Log in"/></div>
			</form>
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