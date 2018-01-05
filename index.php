<?php 
	session_start(); 

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}

	/* Username always starts with a capital first letter and the others are with lowercase letters*/
    $user = $_SESSION['username'];
	$user = ucfirst(strtolower($user));;
?>
<!DOCTYPE html>
<html>
<head>
    <?php include('style.php') ?>
</head>
<body>
<div class="container">

	<div id="img" style="background-image:url(img/klm.png)"></div>

	<div class="header">
		<h3>Home</h3>
        <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="index.php">Schiphol</a>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="import/monday.php"">Scedule</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="main.php">Truck schedule Import</a>
                    </li>
                </ul>
                <span class="navbar-text">
                  Welcome <strong><?php echo $user; ?></strong>
                </span>
            </div>
        </nav>
	</div>
	<div class="content">

        <!--
                THIS IS NOT NEEDED AT ALL
                ONLY SOME WEIRD FILLING
        -->
		<!-- notification message -->
<!--		--><?php //if (isset($_SESSION['success'])) : ?>
<!--			<div class="alert alert-success" >-->
<!--				<h3>-->
<!--					--><?php
//						echo $_SESSION['success'];
//						unset($_SESSION['success']);
//					?>
<!--				</h3>-->
<!--			</div>-->
<!--		--><?php //endif ?>

		<!-- logged in user information -->
		<?php  if (isset($_SESSION['username'])) : ?>
            <p> <?php echo $_SESSION['success']; ?></p>
			<p><a href="schedule.php">Roster</a>
			<p><a href="main.php">Truck schedule Import</a></p>
			<p> <a href="index.php?logout='1'" style="color: red;">Logout</a> </p>
		<?php endif ?>
			
	</div>
</div>
</body>
</html>