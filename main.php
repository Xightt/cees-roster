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
        <h3>Schedule Import</h3>
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
    <div class="well">
        <ul class="pagination pagination-sm">
            <li class="disabled"><a href="#">&laquo;</a></li>
            <li><a href="monday.php">Monday</a></li>
            <li><a href="tuesday.php">Tuesday</a></li>
            <li><a href="wednesday.php">Wednesday</a></li>
            <li><a href="Thursday.php">Thursday</a></li>
            <li><a href="friday.php">friday</a></li>
            <li><a href="Saterday.php">Saterday</a></li>
            <li><a href="Sunday.php">Sunday</a></li>
            <li><a href="#">&raquo;</a></li>
        </ul>

        <table class="table table-bordered table-dark">

            <thead>
            <tr>
                <th><b><u><i>Departure Time</i></u></b></th>
                <td><b><u><i>Blok</i></u></b></td>
                <td><b><u><i>Truck</i></u></b></td>
                <td><b><u><i>Origin</i></u></b></td>
                <td><b><u><i>City</i></u></b></td>
                <td><b><u><i>Destination</i></u></b></td>
                <td><b><u><i>City</i></u></b></td>
                <td><b><u><i>Destination</i></u></b></td>
                <td><b><u><i>City</i></u></b></td>
                <td><b><u><i>Country</i></u></b></td>
                <td><b><u><i>Deparure day</i></u></b></td>
                <td><b><u><i>Arrival day</i></u></b></td>
                <td><b><u><i>Arrival time</i></u></b></td>
            </tr>
            </thead>
            <tr>
                <td>04:30 LT</td>
                <td>2</td>
                <td>KL 8101</td>
                <td>AMS</td>
                <td>Amsterdam</td>
                <td>BRU</td>
                <td>Brussel</td>
                <td></td>
                <td></td>
                <td>Belgium</td>
                <td>Monday</td>
                <td><b>M</b>onday</td>
                <td>08:30 LT</td>
            </tr>
            <tr>
                <td>18:00 LT</td>
                <td>1</td>
                <td>KL 8643</td>
                <td>AMS</td>
                <td>Amsterdam</td>
                <td>OPO</td>
                <td>Oporto</td>
                <td>LIS</td>
                <td>Lissabon</td>
                <td>Portugal</td>
                <td>Monday</td>
                <td>Wensday</td>
                <td>08:00 LT</td>
            </tr>
            <tr>
                <td>23:00 LT</td>
                <td>3</td>
                <td>AF 6969</td>
                <td>AMS</td>
                <td>Amsterdam</td>
                <td>CDG</td>
                <td>Parijs</td>
                <td></td>
                <td></td>
                <td>Frankrijk</td>
                <td>Monday</td>
                <td>Thuesday</td>
                <td>07:00 LT</td>
            </tr>


        </table>
    </div>
</div>
</body>

<!-- Latest compiled and minified JavaScript -->
<script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</html>

