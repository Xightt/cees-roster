<?php 
	session_start();

	// variable declaration
	$Departure = "";
	$Truck = "";
	$Origion = "";
	$Destination = "";
	$Destination1 = "";
	$Country = "";
	$errors = array(); 
	$_SESSION['success'] = "";

	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'scedule');

	//!-- Isert all information -->
		if (isset($_POST['tr_sched'])) {
		// receive all input values from the form
		$Departure= mysqli_real_escape_string($db, $_POST['Departure']);
		$Truck = mysqli_real_escape_string($db, $_POST['Truck']);
		$Origin = mysqli_real_escape_string($db, $_POST['Origion']);
		    // $Orig_City = mysqli_real_escape_string($db, $_POST['Orig_City']);
		$Destination = mysqli_real_escape_string($db, $_POST['Destination']);
		    // $Dest_City = mysqli_real_escape_string($db, $_POST['Dest_City']);
		$Destination1 = mysqli_real_escape_string($db, $_POST['Destination1']);
		    // $Dest1_City = mysqli_real_escape_string($db, $_POST['Dest1_City']);
		$Country = mysqli_real_escape_string($db, $_POST['Country']);
		    // $Dep_Day = mysqli_real_escape_string($db, $_POST['Dep_Day']);
		    // $Arr_Day = mysqli_real_escape_string($db, $_POST['Arr_Day']);
		    // $Arr_time = mysqli_real_escape_string($db, $_POST['Arr_time']);

	}


	// register user if there are no errors in the form
		if (count($errors) == 0) {
			$query = "INSERT INTO  tr_sched ( Departure ,  Truck ,  Origion ,  Destination ,  Destination1 ,  Country ) VALUES ($Departure, $Truck, $Origion, $Destination, $Destination1, $Country)";
			mysqli_query($db, $query);

			$_SESSION['Departure'] = $Departure;
			$_SESSION['Truck'] = $Truck;
			$_SESSION['Origion'] = $Origion;
			$_SESSION['Destination'] = $Destination;
			$_SESSION['Destination1'] = $Destination1;
			$_SESSION['Country'] = $Country;

			// header('location: insert.php');
        }

        else{ echo "Something is wrong";
        }


// INSERT INTO  tr_sched ( Dep ,  Truck ,  Orig ,  Org_City ,  Dest ,  Dest_City ,  Dest1 ,  Dest1_City ,  Country ,  Dep_Day ,  Arr_Day ,  Arr_time ) VALUES ([$Dep],[$Truck],[$Orig],[$Org_City],[$Dest],[$Dest_City],[$Dest1],[$Dest1_City],[$Country],[$Dep_Day],[$Arr_Day],[$Arr_time])