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
	<script src="css/bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/bootstrap/css/bootstrap.min.css">
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

	  <!-- icnluding codemirror files !-->
		<script src="codemirror/mode/javascript/javascript.js"></script>
		<link rel="stylesheet" type="text/css" href="codemirror/theme/blackboard.css">
		<link rel="stylesheet" href="codemirror/theme/3024-day.css">
	<link rel="stylesheet" href="codemirror/theme/3024-night.css">
	<link rel="stylesheet" href="codemirror/theme/abcdef.css">
	<link rel="stylesheet" href="codemirror/theme/ambiance.css">
	<link rel="stylesheet" href="codemirror/theme/base16-dark.css">
	<link rel="stylesheet" href="codemirror/theme/bespin.css">
	<link rel="stylesheet" href="codemirror/theme/base16-light.css">
	<link rel="stylesheet" href="codemirror/theme/blackboard.css">
	<link rel="stylesheet" href="codemirror/theme/cobalt.css">
	<link rel="stylesheet" href="codemirror/theme/colorforth.css">
	<link rel="stylesheet" href="codemirror/theme/dracula.css">
	<link rel="stylesheet" href="codemirror/theme/eclipse.css">
	<link rel="stylesheet" href="codemirror/theme/elegant.css">
	<link rel="stylesheet" href="codemirror/theme/erlang-dark.css">
	<link rel="stylesheet" href="codemirror/theme/hopscotch.css">
	<link rel="stylesheet" href="codemirror/theme/icecoder.css">
	<link rel="stylesheet" href="codemirror/theme/isotope.css">
	<link rel="stylesheet" href="codemirror/theme/lesser-dark.css">
	<link rel="stylesheet" href="codemirror/theme/liquibyte.css">
	<link rel="stylesheet" href="codemirror/theme/material.css">
	<link rel="stylesheet" href="codemirror/theme/mbo.css">
	<link rel="stylesheet" href="codemirror/theme/mdn-like.css">
	<link rel="stylesheet" href="codemirror/theme/midnight.css">
	<link rel="stylesheet" href="codemirror/theme/monokai.css">
	<link rel="stylesheet" href="codemirror/theme/neat.css">
	<link rel="stylesheet" href="codemirror/theme/neo.css">
	<link rel="stylesheet" href="codemirror/theme/night.css">
	<link rel="stylesheet" href="codemirror/theme/panda-syntax.css">
	<link rel="stylesheet" href="codemirror/theme/paraiso-dark.css">
	<link rel="stylesheet" href="codemirror/theme/paraiso-light.css">
	<link rel="stylesheet" href="codemirror/theme/pastel-on-dark.css">
	<link rel="stylesheet" href="codemirror/theme/railscasts.css">
	<link rel="stylesheet" href="codemirror/theme/rubyblue.css">
	<link rel="stylesheet" href="codemirror/theme/seti.css">
	<link rel="stylesheet" href="codemirror/theme/solarized.css">
	<link rel="stylesheet" href="codemirror/theme/the-matrix.css">
	<link rel="stylesheet" href="codemirror/theme/tomorrow-night-bright.css">
	<link rel="stylesheet" href="codemirror/theme/tomorrow-night-eighties.css">
	<link rel="stylesheet" href="codemirror/theme/ttcn.css">
	<link rel="stylesheet" href="codemirror/theme/twilight.css">
	<link rel="stylesheet" href="codemirror/theme/vibrant-ink.css">
	<link rel="stylesheet" href="codemirror/theme/xq-dark.css">
	<link rel="stylesheet" href="codemirror/theme/xq-light.css">
	<link rel="stylesheet" href="codemirror/theme/yeti.css">
	<link rel="stylesheet" href="codemirror/theme/zenburn.css">
	<script src="codemirror/addon/edit/closebrackets.js"></script>
	<!-- codemioor adons files -->
	<script src="codemirror/addon/edit/matchbrackets.js"></script>
	<link rel="stylesheet" href="codemirror/addon/hint/show-hint.css">
	<script src="codemirror/addon/hint/show-hint.js"></script>
	<script src="codemirror/mode/clike/clike.js" type="text/javascript"></script>
	<!--end of codemirror files -->


</head>
<body>
	<header style="margin:0px 0px 2px 0px">
	<h1 ><i class="fa fa-bug"   aria-hidden="true"></i> BugsFunny</h1>

	</header>
	<div id="sidebar">
		<div class="flat-btn-group" style="display: none;">
		<?php
			for($i=1;$i<=$info['question_count']; $i++)
				echo "<div id=j$i class=flat-button data-show=$i>$i</div>";
		?>
		</div>
	</div>
	<div class="timer_container">
		<!-- give contest time in data-duration --> 
		<button type="button" class="btn-green" id="start">Start </button>
		<div class="clock" style="margin:2em 0.95em 2em 0em" data-duration=<?php echo $info['duration']; ?>></div>
		<div class="message"></div>
	</div>
	<?php
		for($i=1;$i<=$info['question_count']; $i++){
			$disp=$i==1?"":"display: none;";
			echo"
			<div id=q$i class=question-view >
			<span class=ques-no>$i)</span>
			<h3 style='font-family:sans-serif'>What are the reason the this question will not run?</h3>
			<textarea  class='code' readonly>".readIt('code.cpp')."</textarea>
			<table style=' margin:auto;margin-top:5%;width:inherit'>
				<tr>
					<td class=option ><label ><input  type=radio name=q$i class=opt1>Option 1</label></td>
					<td class=option><label><input  type=radio name=q$i class=opt2>Option 2</label></td>
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
			<button type="button" class="flat-btn-move prev"><i class="fa fa-arrow-left" aria-hidden="true"></i> Previous</button>
			<button type="button" class="flat-btn-move attempt-later-button attempt-later"><i class="fa fa-clock-o" aria-hidden="true"></i> Attempt Later</button>
			<button type="button" class="flat-btn-move reset-button"><i class="fa fa-undo" aria-hidden="true"></i> Reset</button>
				<button type="button" class="flat-btn-move next"> Next <i class="fa fa-arrow-right" aria-hidden="true"></i> </button>
	</div>

</body>
</html>