<?php
session_start();

function get_gold($low, $high) {
	return rand($low, $high);
} 
	$this_gold_value = 0;
	date_default_timezone_set("America/Los_Angeles");
	$timestamp = date("F j, Y, g:i a");



	if(isset($_POST['building'])|| isset($_POST['killer_button'])) {
		if(isset($_POST['killer_button'])) {
			session_destroy();
			header("Location: ninja_gold.php");
			die();
		}
		if(isset($_POST['building'])) {
			$building = $_POST['building'];
			if ($building == 'farm') {
				$this_gold_value = get_gold(10,20);
			}
			if ($building == 'cave') {
				$this_gold_value = get_gold(5,10);
			}
			if ($building == 'house') {
				$this_gold_value = get_gold(2,5);
			}
			if ($building == 'casino') {
				$this_gold_value = get_gold(-50,50);
			}
		}
		$_SESSION['total_gold'] += $this_gold_value;


		if($this_gold_value < 0) {
			$this_gold_value *= -1;
			$_SESSION['activity_log'][]= "<p class='red'>You entered a $building and lost $this_gold_value golds ...OUCH! ($timestamp)</p>";

		} else {

			$_SESSION['activity_log'][]= "<p>You entered a $building and earned $this_gold_value golds! ($timestamp)</p>";
		}
	}	
	header('Location: ninja_gold.php');

?>