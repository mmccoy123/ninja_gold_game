<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="ninja_gold_game.css">
	<title>Ninja Gold Game</title>
</head>
<body>
	<?php 
		session_start();
		
		if (isset($_SESSION['gold'])) {}

		else {
			$_SESSION['gold'] = 0;
		}


		if (isset($_SESSION['activities'])) {}

		else {
			$_SESSION['activities'] = '';
		}

		// var_dump($_POST);
		
		// var_dump($_SESSION);
	 ?>
	<div id="container">

		<?php echo "<h2>Your Gold: " . $_SESSION['gold'] . "</h2>"; ?>
		<div class="building">
			<h3>Farm</h3>
			<p>(earns 10 to 20 gold pieces)</p>
			<form action="process.php" method="post">
				<input type="hidden" name="building" value="farm" />
				<input type="submit" value="Find Gold!"></input>
			</form>
		</div>
		<div class="building">
			<h3>Cave</h3>
			<p>(earns 5 to 10 gold pieces)</p>
			<form action="process.php" method="post">
				<input type="hidden" name="building" value="cave" />
				<input type="submit" value="Find Gold!"></input>
			</form>
		</div>
		<div class="building">
			<h3>House</h3>
			<p>(earns 2 to 5 gold pieces)</p>
			<form action="process.php" method="post">
				<input type="hidden" name="building" value="house" />
				<input type="submit" value="Find Gold!"></input>
			</form>
		</div>
		<div class="building">
			<h3>Casino!</h3>
			<p>(earns/takes 0 to 50 gold pieces)</p>
			<form action="process.php" method="post">
				<input type="hidden" name="building" value="casino" />
				<input type="submit" value="Find Gold!"></input>
			</form>
		</div>
		<br>
		<label>Activities:<br><textarea name="activities" id="activities"><?php echo $_SESSION['activities'] ?></textarea></label>
	</div>
	
</body>
</html>