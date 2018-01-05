<?php
	session_start();
	include 'connection.php';
	$errors = array();
	$_SESSION['success'] = "";

	// LOGIN USER
	if (isset($_POST['login_user'])) {
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password = mysqli_real_escape_string($db, $_POST['password']);


        // These can't be empty
		if (empty($username)) {
			array_push($errors, "Username is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}


        // Try to login if there are no errors
		if (count($errors) == 0) {
			$password = md5($password);
			$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
			$results = mysqli_query($db, $query);
            $row = mysqli_fetch_object($result);

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['username'] = $username;

                // Login privileges check (Admin, Moderator, Employee)
                $row = mysqli_fetch_assoc($results);
                if ($row['privileges'] == 'admin') {
                    $_SESSION['success']  = "You are now logged in as admin";
                    header('location: index.php');
                }
                elseif ($row['privileges'] == 'moderator') {
                    $_SESSION['success']  = "You are now logged in as moderator";
                    header('location: index.php');
                }
                else{
                    $_SESSION['success']  = "You are now logged in as employee";

                    header('location: index.php');
                }
			}else {
				array_push($errors, "Wrong username/password combination");
			}
		}
	}

?>

	