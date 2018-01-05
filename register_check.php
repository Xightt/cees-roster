<!DOCTYPE html>
<html>
<head>
    <?php include('style.php') ?>
</head>
<div class="container">
    <div id="img" style="background-image:url(img/klm.png)"></div>
    <div class="header">
        <h2>Register Complete</h2>
    </div>

    <?php

    include 'connection.php';
    $errors = array();

    // REGISTER USER
    if (isset($_POST['reg_user'])) {
        // receive all input values from the form
        $username = mysqli_real_escape_string($db, $_POST['username']);
        $email = mysqli_real_escape_string($db, $_POST['email']);
        $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
        $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
        $privileges  = mysqli_real_escape_string($db, $_POST['privileges']);

        // form validation: ensure that the form is correctly filled
        if (empty($username)) { array_push($errors, "Username is required"); }
        if (empty($email)) { array_push($errors, "Email is required"); }
        if (empty($password_1)) { array_push($errors, "Password is required"); }
        if (empty($privileges)) { array_push($errors, "Select a privilage"); }

        if ($password_1 != $password_2) {
            array_push($errors, "The two passwords do not match");
        }

        // register user if there are no errors in the form
        if (count($errors) == 0) {
            $password = md5($password_1);//encrypt the password before saving in the database
            $query = "INSERT INTO users (username, email, password, privileges) 
                          VALUES('$username', '$email', '$password', '$privileges')";
            mysqli_query($db, $query);

            echo "<div class=\"alert alert-success alert-dismissable\">
           <h2>Account is added</h2>
        </div>";
            header( "Refresh:2; url=index.php", true, 303);

            mysqli_close($db);
        }

    }
    ?>
</div>
</body>
</html>

