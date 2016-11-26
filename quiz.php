<!DOCTYPE html>
<html>
<head>
	<title>BUG FUNNY</title>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/fontawesome/css/font-awesome.min.css">  
      <script type="text/javascript" src="script/jquery.js"></script>
      <script type="text/javascript" src="script/script.js"></script>

      <link rel="stylesheet" href="timer/compiled/flipclock.css">
	  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	  <script src="timer/compiled/flipclock.js"></script>

</head>
<body>
	<header style="margin:0px 0px 2px 0px">
	<h1 ><i class="fa fa-bug"   aria-hidden="true"></i> BugsFunny</h1>

	</header>
	<div id="sidebar">
		<div class="flat-button">1</div>
		<div class="flat-button">2</div>
		<div class="flat-button">3</div>
		<div class="flat-button">4</div>
		
		<div class="flat-button">5</div>
		<div class="flat-button">6</div>
		<div class="flat-button">7</div>
		<div class="flat-button">8</div>
		<div class="flat-button">9</div>
		<div class="flat-button">10</div>
		<div class="flat-button">11</div>
		<div class="flat-button">12</div>
		<div class="flat-button">13</div>
		<div class="flat-button">14</div>
	</div>
	<div id="q1" class="question-view" >
	<span class="ques-no">1)</span>
	<h3 style="font-family:sans-serif">What are the reason the this question will not run?</h3>
	<table style=" margin:auto;margin-top:5%;width:inherit">
		<tr>
			<td class="option" ><label ><input  type="radio" name="q1">Option 1</label></td>
			<td class="option"><label><input  type="radio" name="q1">Option 1</label></td>
		</tr>
		<tr>
			<td class="option"><label><input  type="radio" name="q1">Option 1</label></td>
			<td class="option"><label ><input  type="radio" name="q1">Option 1</label></td>
		</tr>
		<tr>
		<td><button type="button" class="flat-btn-move prev">
			<i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</button>
		</td>
		<td><button type="button" class="flat-btn-move next">
			Next <i class="fa fa-arrow-right" aria-hidden="true"></i> </button>
		</td>
		</tr>
	</table>
	</div>
	<div class="timer_container">
		<div class="clock" style="margin:2em;"></div>
		<div class="message"></div>
	</div>
</body>
</html>