<?php
define("ce","<b style='color: red;'>COMPILATION ERROR....<br />");
define("tle","<b style='color: red;'>Time Limit Exceeded....<br />");
function _trim($output) {  
	$output=str_replace("\r", "", $output);
	$output=str_replace("\r\n","\n",$output);
	$output=str_replace(" \n", "\n", $output);
	return $output;
}
function codejudge($team_id,$user_code_snippet,$main_code_file,$lan,$tle,$input_file,$output_file)
{
	$dir_name="submissions/".$team_id;
	if (!is_dir($dir_name)) {
    //create the directory
    		mkdir($dir_name,0777,true);         //permission
	}   
	$final_code=file_get_contents("codes/".$main_code_file);
	$final_code.=$user_code_snippet;
	if($lan=="cpp" or $lan=="c")
	{
		$fp=fopen($dir_name."/code.cpp", "w");
		fwrite($fp,$final_code);
		fclose($fp);
		shell_exec("g++ -std=c++11 -static-libstdc++ ".$dir_name."/code.cpp -o ".$dir_name."/code.out 2>".$dir_name."/error.txt");
		$time= round(microtime(true) * 1000);
		$output=shell_exec("timeout ".($tle/1000)." ".$dir_name."/code.out<"."codes/input/".$input_file);
		$time= round(microtime(true) * 1000)-$time;		
		if(@!unlink($dir_name."/code.out")){
			return ce." ".file_get_contents($dir_name."/error.txt");
		}
		//if($time>$tle) return tle."<b>Execution Time : $time ms";
		return "<b>Execution Time : $time ms<br >".nl2br($output);
	}
}

//codejudge("null_ptr",$code,"code.cpp","cpp",100,"input.in","output.in");
if(isset($_POST['check']))
{
	echo codejudge($_POST['teamname'],$_POST['code'],$_POST['maincode'],"cpp",$_POST['tle'],$_POST['ipfile'],$_POST['opfile']);
}
?>
