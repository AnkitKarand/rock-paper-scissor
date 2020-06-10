<!DOCTYPE html>
<html>
<head>
	<title>Rock | Paper | Scissor</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
</head>
<body>
	<!-- ---------------- Display Play or Close Block ------------------------ -->
	<div id="modal">
	    <div id="modal-form">
	      <h2>Rock | Paper | Scissor</h2>
	      	<img src="image/rps.png"><!-- image-credit:Triceria -->
	       <input type="button" id="ply-btn" value="Play" class="btn-primary">
	      	<input type="button" id="close-btn" value="close" class="btn-primary">
	    </div>
	</div>
	<!-- ---------------- Script for play or close ------------------------ -->
<script type="text/javascript">
	$(document).ready(function(){
		$("#ply-btn").on("click",function(){
				<?php setcookie("iteration","-1");
	$src=file_get_contents("http://localhost/rock-paper-scissor/games.json");
		file_put_contents("game.json",$src);
	$srcf=file_get_contents("http://localhost/rock-paper-scissor/names.json");
		file_put_contents("name.json",$srcf);
?>
				var x = window.open("http://localhost/rock-paper-scissor/game.php","_self");
			});
		$("#close-btn").on("click",function(){	
				var win = window.open("about:blank","_self");
				win.close();
			});
		});
</script>
</body>
</html>
<!-- Developed By Ankit -->