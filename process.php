<?php 
	session_start();
	
	$won_gold = 0;

	if($_POST['building'] == 'farm'){
		$won_gold = rand(10,20);
		$_SESSION['gold'] += $won_gold;
		$_SESSION['activities'] .= "You found " . $won_gold . " gold pieces while farming!\n"; 

	}
	elseif($_POST['building'] == 'cave'){
		$won_gold = rand(5,10);
		$_SESSION['gold'] += $won_gold;
		$_SESSION['activities'] .= "You found " . $won_gold . " gold pieces while exploring a stinky cave!\n";

	}
	elseif($_POST['building'] == 'house'){
		$won_gold = rand(2,5);
		$_SESSION['gold'] += $won_gold;
		$_SESSION['activities'] .= "You found " . $won_gold . " gold pieces between the couch cushions!\n";
	}
	elseif($_POST['building'] == 'casino'){
		$won_gold = rand(-50,50);
		$_SESSION['gold'] += $won_gold;

		if($won_gold < 0) {
			$_SESSION['activities'] .= "You lost " . $won_gold . " gold pieces! Drink less at the craps table, you lush!\n";
		}

		if($won_gold > 0) {
			$_SESSION['activities'] .= "You won " . $won_gold . " gold pieces! Make sure to tip the dealer.\n";
		}

		if($won_gold == 0) {
			$_SESSION['activities'] .= "You broke even.\n";
		}

	}

	header('Location: ' . $_SERVER['HTTP_REFERER']);
 ?>