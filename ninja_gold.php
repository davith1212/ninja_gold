<?php
session_start();
	if(!isset($_SESSION['total_gold'])) {
		$_SESSION['total_gold'] = 0;
	}
		if(!isset($_SESSION['activity_log'])) {
			$_SESSION['activity_log'] = array();
		}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>Make Money!!!</title>
​
	<link rel="stylesheet" type="text/css" href="ninja_gold.css.php">
</head>
<body>
	<div id="container">
	<div id="wrapper">
		<div id="chest">
			<p id="totalAu"><span id="bold">Your Gold:</span>  <?=$_SESSION['total_gold']?> </p>
		</div>

​		<div id="form_box">
			<form action="ninja_process.php" method="POST">
				<input type="hidden" name="building" value="farm" />
				<input id="farm" type="image" src="http://shipwreckedwiki.com/images/1/1e/Sw_rabbit_farm.png"/>
			</form>
			<form action="ninja_process.php" method="POST">
				<input type="hidden" name="building" value="casino" />
				<input id="casino" type="image" src="http://img1.wikia.nocookie.net/__cb20120818094632/bindingofisaac/images/1/13/Slot_machine.png">
			</form>
			
		</div>
	​	<div id="form_box_bottom">
			<form action="ninja_process.php" method="POST">
				<input type="hidden" name="building" value="house" />
				<input id="house" type="image" src="http://img3.wikia.nocookie.net/__cb20100930224135/ztreasureisle/images/2/26/Garden_Hut-icon.png">
			</form>
	​
			<form action="ninja_process.php" method="POST">
				<input type="hidden" name="building" value="cave" />
				<input id="cave" type="image" src="https://officialpetsociety.files.wordpress.com/2010/02/island-cave.png"> 
			</form>
		</div>
​
​		<div id="act_box">
		<h3>Gold Activity</h3>
		<p id="activities">
<?php
				for($i = count($_SESSION['activity_log']) -1; $i >= 0; $i--) {
					echo $_SESSION['activity_log'][$i];
				}   	
?>
		</p>
		</div>
		<div id="reset_btn">
			<form action="ninja_process.php" method="post">
				<input id="reset" type="image" src="http://opengameart.org/sites/default/files/styles/watermarked/public/button_restart.png" width="140px" height="100px" name="killer_button" value="killer_reset">
			</form>
		</div>
	</div>
​	</div>
​
</body>
</html>