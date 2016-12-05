<!DOCTYPE html>
<head>
	<script type="text/javascript" src="script/jquery.js"></script>
	<script src="css/bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
<?php
require_once("codejudge.php");
?>
<head>
<body>
<h1>Testing CodeJudge </h1>
<hr />
<div class="container">
        <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
        	<div class="panel panel-default" style="box-shadow: 1px 0px 5px black;">
        		<div class="panel-heading">
			    		<h3 class="panel-title">Write Code Below <small>It's free!</small></h3>
			 			</div>
			 			<div class="panel-body">
			    		<form role="form">
			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			                <input type="text" id="teamname" class="form-control input-sm" placeholder="Team Name" required>
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="text" id="maincode" class="form-control input-sm" placeholder="Main Code File Name" required>
			    					</div>
			    				</div>
			    			</div>

			    			<div class="form-group">
			    				<input type="text" id="ipfile" class="form-control input-sm" placeholder="Input File Name" required>
			    			</div>

			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="text" id="opfile" class="form-control input-sm" placeholder="Output File Name" required>
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="text" id="tle" class="form-control input-sm" placeholder="Time Limit in ms">
			    					</div>
			    				</div>
			    			</div>
			    			<div class="row">
			    				<div class="col-md-12">
			    					<div class="form-group">
			    						<textarea id="code" class="form-control input-sm code" placeholder="Write your code snippet here......" required></textarea>
			    					</div>
			    				</div>
			    			</div>
			    			
			    			<input type="button" id="check" value="EXECUTE" class="btn-green btn-block">
			    		
			    		</form>
			    	</div>
	    		</div> 

    			<div style="text-align: left; border-radius: 3px; border: 1px solid #16a085; box-shadow: 0px 0px 2px #16a085;">
    			Output : <br />
    			<span id="load"> </span>
    			<div id="output"></div>	
				</div>
    		</div>
    		
    	</div>
    </div>
    <script>
    $(function(){
    	$('#check').click(function()
    	{ 
    		$('#load').html('<img src="css/load.gif" style="margin: 0 auto; height: 50px; width: 50px;">');
    		$('#output').html("");
    		$.post("codejudge.php",{ check: 'check',
    							 teamname: $('#teamname').val(),
    							 code: $('#code').val(),
    							 maincode: $('#maincode').val(),
    							 language: "cpp",
    							 tle: $('#tle').val(),
    							 ipfile: $('#ipfile').val(),
    							 opfile: $('#opfile').val() },
    				function(data)
    				{
    					$('#load').html("");
    					$('#output').html(data);
    				}

    			);
    	});
    });
    </script>
    </body>