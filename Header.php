<!DOCTYPE html>
<html lang = "en">
<head>
	<title>Quest[x].com</title>
	<link rel = "stylesheet" type="text/css" href ="CSS/Quest[x].css"/>
</head>

<body>
	<div id = "container">
	
	<a href = ".">
	<canvas id="Logo" width="320" height="100" alt="Quest[x].com"></canvas>
	<script>
    var canvas = document.getElementById('Logo');
    var context = canvas.getContext('2d');
	var x = canvas.width / 2;
    var y = canvas.height / 2;
	
	context.font="2.5em Helvetica";
	context.textAlign = 'center';
	context.textBaseline = 'middle';
	context.fillStyle = "#b19b37"
	context.fillText("Quest[x].com",x,y);

  </script>
  </a>