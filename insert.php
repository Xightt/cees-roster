<?php include_once ('trck.php') ?>
<!DOCTYPE html>
<html>
<head>
    <?php include('style.php') ?>
</head>
<body>
	<div id="img" style="background-image:url(img/klm.png)">
</div>
	<div class="header">
		<h2>Insert</h2>
	</div>
	
	<form method="post" action="trck.php">

		<?php include('errors.php'); ?>
		<div class="form-group">
			<label>Departure</label>
			<input class="form-control" type="Departure" name="Departure" placeholder="Departure" value="<?php echo $Departure; ?>">
		</div>
		<div class="form-group">
			<label>Truck</label>
			<input class="form-control" type="Truck" name="Truck" placeholder="Truck" value="<?php echo $Truck; ?>">
		</div>
		<div class="form-group">
			<label>Origion</label>
			<input class="form-control" type="Origion" name="Origion" placeholder="Origion" value="<?php echo $Origion; ?>">
		</div>
		<div class="form-group">
		
		<div class="form-group">
			<label>Destination</label>
			<input class="form-control" type="Destination" name="Destination" placeholder="Destination" value="<?php echo $Destination; ?>">
		</div>
		
		<div class="form-group">
			<label>Destination</label>
			<input class="form-control" type="Destination1" name="Destination1" placeholder="Destination" value="<?php echo $Destination1; ?>">
		</div>
		
		<div class="form-group">
			<label>Country</label>
			<input class="form-control" type="Country" name="Country" placeholder="Country" value="<?php echo $Country; ?>">
		</div>
		
		<div class="form-group">
			<button type="submit" class="btn" name="tr_sched">Insert</button>
		</div>
		<p>
			<a href="main.php">Overzicht</a>
		</p>
	</form>
</body>
</html>