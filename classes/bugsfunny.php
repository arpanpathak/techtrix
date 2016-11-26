<?php
/*** Template for Bugs Funny
 *** This PHP file contains all the necessary attributes 
 *** @author: Arpan Pathak 
 ***/
require_once("structure.php");
/** Instead of doing the following, we can also create a contest table for all kind of contest 
	related info,..... 
**/

class BugsFunny extends Contest
{
	private $team; // object of Team ....
	function __construct($team)
	{
		// in order to start the contest ... set isActive to true....
		//if(!$this->isActive) die("<h2>Contest is not yet started.. Please Wait ..");
		// duration will be given in seconds..
		parent::__construct("Bugs Funny",3600,"techtrix","question","users","admin",15,2000);
		$this->team=$team;
	}
	function getInfo()
	{
		return array("contest_name"=>$this->contest_name,
					  "active"=>$this->isActive,
					  "duration"=>$this->duration,
					  "contest_db"=>$this->db_name,
					  "question_table"=>$this->ques_table,
					  "user_table"=>$this->user_table,
					  "admn_table"=>$this->admin_ac_table,
					  "question_count"=>$this->ques_count,
					  "encryption_scheme"=>$this->encryption_scheme,
					  "prize_money"=>$this->prize_money,
					  // "team_info"=>$this->team // reference to instance of Team
					); 
	}
}
// Testing ...
$obj=new BugsFunny(new Team("1234","psudo_coders","Albert","Dennis","ddasd","zzhj"));
$arr=$obj->getInfo();


foreach ($arr as $key => $value) {
    echo "[ $key ] ----> $value<br />";
}



?>