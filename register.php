<?php include('login_check.php') ?>
<!DOCTYPE html>
<html>
<head>
    <?php include('style.php') ?>
</head>
<div class="container">
	<div id="img" style="background-image:url(img/klm.png)"></div>
	<div class="header">
		<h2>Register</h2>
	</div>
	
	<form method="post" action="register_check.php">

		<?php include('errors.php'); ?>

		<div class="form-group">
			<label>Username</label>
            <input class="form-control" type="text" name="username" placeholder="Username">
		</div>
		<div class="form-group">
			<label>Email</label>
            <input class="form-control" type="email" name="email" placeholder="Email">
		</div>
		<div class="form-group">
			<label>Password</label>
            <input class="form-control" type="password" name="password_1" placeholder="Password">
		</div>
		<div class="form-group">
			<label>Confirm password</label>
            <input class="form-control" type="password" name="password_2" placeholder="Password confirm">
		</div>
        <div class="form-group">
            <label for="rechten">Privileges</label>
            <select class="form-control selectpicker" id="privileges" name="privileges">
                <option value="" disabled selected hidden> Please select...</option>
                <option value="admin">Admin</option>
                <option value="moderator">Moderator</option>
                <option value="employee">Employee</option>
            </select>
        </div>
		<div class="form-group">
			<button type="submit" class="btn btn-primary" name="reg_user">Register</button>
		</div>
		<p>
			Already a member? <a href="login.php">Sign in</a>
		</p>
	</form>
</div>
</body>
</html>