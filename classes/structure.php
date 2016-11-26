<?php
/*** Generic Quiz Interface
 *** This PHP file contains all the necessary attributes 
 *** @author: Arpan Pathak 
 ***/
abstract class Contest
{
	protected $contest_name="",$isActive=false; 
	protected $duration; // duration in seconds...
	//protected $contest_db_name="techtrix"; // default database name is techtrix
	protected $db_name,$user_table,$question_table,$admin_ac_table;
	protected $encryption_scheme='md5'; // encryption schem used for passwords
	protected $prize_money;
	protected $ques_count=10; // default value is 10; 
	function __construct($contest_name,$duration,$db,$ques_table,$user_table,$admin_table,$ques,$prize)
	{
		$this->contest_name=$contest_name;
		$this->duration=$duration;
		$this->db_name=$db;
		$this->ques_table=$ques_table;
		$this->user_table=$user_table;
		$this->admin_ac_table=$admin_table;
		$this->ques_count=$ques;
		$this->prize_money=$prize;
	}
	// Provide value of other attributes on child class....
	// Please add data members for question marks for correct answer as well as
	// ...................................................for wrong answer.....
}
abstract class QuestionTable
{
	// There can be two types of question, 1)MCQ, 2)CODE
	protected $q_id,$q_type,$problem_statement,
			  $option1,$option2,$option3,$option4,
			  $correct_option;
	/** I've an Idea to use this table strcture for code type questions too..
		We can store the codejudge status code CORRECT_ANSWER in $correct option field..
		one of the option field can be used to store the main code where
		the user code snippet will be appended **/

	// If we want to shuffle options, we need to assign option id...
}

//Abstract Class for team/Participants registration....
abstract class UserTable
{
	protected $user_name,$team_id,$general_reg_id,$password,$salt;
	// Details of Individual can be fetched from general registration database...
	// assuming that general registration db contains name,year, college_name, department
	// status of participated contests... Intially 0...
	/** Different Participation status code, 0=>Inactive,1=>Registered, 2=>attempted **/
	protected $bugs_funny=0,$biztech=0;
}

//class For Team formation...
class Team
{
	public $team_id,$team_name,$p1,$p2,$password,$salt;
	function __construct($team_id,$team_name,$p1,$p2,$password,$salt){
		$this->team_id=$team_id;
		$this->$team_name=$team_name;
		$this->p1=$p1; $this->p2=$p2;
		$this->$password=$password; // depends on encryption scheme
		$this->salt=$salt;
	}
}
?>
