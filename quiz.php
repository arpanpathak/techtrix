<!DOCTYPE html>
<?php require_once("classes/bugsfunny.php"); 
	require_once("readFile.php");
	$obj=new BugsFunny(new Team("1234","psudo_coders","Albert","Dennis","ddasd","zzhj"));
	$info=$obj->getInfo();
?>
<html>
<head>
	<title>BUG FUNNY</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="height=device-height,initial-scale=1.0">
	<!-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	!-->
	<link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/fontawesome/css/font-awesome.min.css">  
      <script type="text/javascript" src="script/jquery.js"></script>
      <link rel="stylesheet" type="text/css" href="codemirror/lib/codemirror.css">
      <script type="text/javascript" src="codemirror/lib/codemirror.js"></script>
      <script type="text/javascript" src="script/script.js"></script>
      <script type="text/javascript" src="codemirror/mode/javascript/javascript.js"></script>
      <link rel="stylesheet" href="timer/compiled/flipclock.css">
	  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	  <script src="timer/compiled/flipclock.js"></script>

</head>
<body>
	<header style="margin:0px 0px 2px 0px">
	<h1 ><i class="fa fa-bug"   aria-hidden="true"></i> BugsFunny</h1>

	</header>
	<div id="sidebar">
		<?php
			for($i=1;$i<=$info['question_count']; $i++)
				echo "<div id=j$i class=flat-button data-show=$i>$i</div>";
		?>
	</div>
	<?php
		for($i=1;$i<=$info['question_count']; $i++){
			$disp=$i==1?"":"display: none;";
			echo"
			<div id=q$i class=question-view style='".$disp."'>
			<span class=ques-no>$i)</span>
			<h3 style='font-family:sans-serif'>What are the reason the this question will not run?</h3>
			<textarea  class='code' readonly>".readIt('script/script.js')."</textarea>
			<table style=' margin:auto;margin-top:5%;width:inherit'>
				<tr>
					<td class=option ><label ><input  type=radio name=q$i class=opt1>Option 1</label></td>
					<td class=option><label><input  type=radio name=q$i class=opt1>Option 2</label></td>
				</tr>
				<tr>
					<td class=option><label><input  type=radio name=q$i class=opt3>Option 3</label></td>
					<td class=option><label ><input  type=radio name=q$i class=opt4>Option 4</label></td>
				</tr>
				<tr>
			</table>
			</div>";
		}
	?>
	<div id="general-button-group">
		<table>
			<tr>
				<td><button type="button" class="flat-btn-move prev">
					<i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</button>
				</td>
				
				<td><button type="button" class="flat-btn-move attempt-later-button attempt-later"><i class="fa fa-clock-o" aria-hidden="true"></i>Attempt Later</button></td>
				<td><button type="button" class="flat-btn-move reset-button">
					<i class="fa fa-undo" aria-hidden="true"></i>
						Reset</button>
				</td>
		
				<td><button type="button" class="flat-btn-move next">
					Next <i class="fa fa-arrow-right" aria-hidden="true"></i> </button>
				</td>
			</tr>
		</table>
	</div>
	<div class="timer_container">
		<!-- give contest time in data-duration --> 
		<div class="clock" style="margin:2em 0.95em 2em 0em" data-duration=<?php echo $info['duration']; ?>></div>
		<div class="message"></div>
	</div>
</body>
</html>