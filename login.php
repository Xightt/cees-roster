<?php include('login_check.php') ?>
<!DOCTYPE html>
<html>
<head>
    <?php include('style.php') ?>
</head>
<body>
    <div class="container">
        <div id="img" style="background-image:url(img/klm.png)"></div>
        <div class="header">
            <h2>Login</h2>
        </div>
        <form method="post" action="login.php">

            <?php include('errors.php'); ?>
            <div class="form-group">
                <!-- <label class="col label">Username</label>-->
                <input class="form-control" type="text" name="username" placeholder="Username" >
            </div>
            <div class="form-group">
                <!-- <label class="col label">Password</label>-->
                <input class="form-control" type="password" name="password" placeholder="Password" >
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary" name="login_user">Login</button>
            </div>

            <!--  Dit hieronder heb ik veranderd naar supervisor omdat ze niet zelf een account mogen maken dat mag natuurlijk alleen admin doen!  -->
            <p>Not yet a member? Contact your supervisor!</a></p>


        </form>

    </div>
</body>
</html>