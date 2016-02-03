<?php
 header('Content-type: text/css');
?>

* {
	padding: 0;
	margin: 0 auto;
}

#wrapper {
	border: 1px solid black;
	width: 960px;
	height: 650px;
	padding: 20px;
	background-image: url("http://thumbs.dreamstime.com/z/treasure-map-18330138.jpg");
	background-size: 1000px 770px;
	background-repeat: no-repeat;
}

#chest {
	background-image: url('http://hydra-media.cursecdn.com/smite.gamepedia.com/thumb/9/93/TreasureRoll_Pirate.png/256px-TreasureRoll_Pirate.png?version=f4a1be48c391107c1a17401010ff2bc5');
	width: 250px;
	height: 200px;
	vertical-align: top;
	background-size: 200px 200px;
	background-repeat: no-repeat;
}

	#chest p {
		margin: 40px 0 0 -170px;
		padding: 10px;
		background-color: white;
	}

form {
	display: inline-block;
}
	#form_box {
	width: 900px;
}
	#form_box_bottom {
	width: 900px;
}

	#farm {
		width: 150px;
		margin: 0 0 0 230px;

	}
	#cave {
		width: 150px;
		margin: 0 0 0 150px;
		padding: 0 0 40px 0;
	}
	#house {
		width: 150px;
		margin: 0 0 0 200px;
	}
	#casino {
		width: 150px;
		margin: 0 0 0 300px;
	}

input[type=submit] {
	border: 1px solid black;
	padding: 5px;
	font-size: 12px;
	position: relative;
	top: 150px;
	left: 70px;
}


#totalAu {
	border: 5px solid gold;
	border-radius: 8px;
	display: inline-block;
	height: 20px;
	width: 150px;
	font-size: 25px;
}
	span {
		font-weight: bold;
		font-size: 21px;
	}


#act_box {
	width: 500px;
	display: block;
	height: 120px;
	overflow: scroll;
	background-color: white;
	border: 5px solid gold;
	border-radius: 8px;
	font-size: 13px
}
	#act_box p {
		padding: 0 0 0 15px;
	}

.red {
	color: red;
}
#reset {
	margin: 0 0 0 400px;
}
