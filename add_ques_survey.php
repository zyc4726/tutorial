<?php
ob_start();
require_once("dbconn.php");
//getting 25 questions using GET function
$ques1=$_GET['Q1'];
$ques2=$_GET['Q2'];
$ques3=$_GET['Q3'];
$ques15=$_GET['Q13'];
$ques16=$_GET['Q14'];
$ques17=$_GET['Q15'];
$ques18=$_GET['Q16'];
$ques15=$_GET['Q15'];
$ques17=$_GET['Q15'];
$ques18=$_GET['Q16'];
$ques15=$_GET['Q15'];
$ques16=$_GET['Q16'];
$ques17=$_GET['Q17'];
$ques18=$_GET['Q18'];
$ques19=$_GET['Q19'];
$ques20=$_GET['Q20'];
$ques21=$_GET['Q21'];
$ques22=$_GET['Q22'];
$ques23=$_GET['Q23'];
$ques24=$_GET['Q24'];
$ques25=$_GET['Q25'];
if (!isset($_SESSION))
{
	session_start();
}
$User_ID = $_SESSION['userid'];
//Insert data in Users table
$sqlquery='INSERT INTO Surveys (User_ID,Sur_Status) VALUES ('.$User_ID.',0)';
mysql_query($sqlquery) or die('Cannot insert data in Users table: '.mysql_error());

//get the Survey_ID of the row just inserted
$Survey_ID=mysql_insert_id();

//Inserting questions in SurveyQuestions
if($ques1!='')
{
	$sqlquery='INSERT INTO SurveyQuestions (Sur_ID,Ques_Statement,Ques_Type) 
			VALUES ('.$Survey_ID.',\''.$ques1.'\',0)';
	mysql_query($sqlquery) or die('Cannot insert data in SurveyQuestions table: '.mysql_error());
}
if($ques2!='')
{
	$sqlquery='INSERT INTO SurveyQuestions (Sur_ID,Ques_Statement,Ques_Type) 
			VALUES ('.$Survey_ID.',\''.$ques2.'\',0)';
	mysql_query($sqlquery) or die('Cannot insert data in SurveyQuestions table: '.mysql_error());
}
if($ques3!='')
{
	$sqlquery='INSERT INTO SurveyQuestions (Sur_ID,Ques_Statement,Ques_Type) 
			VALUES ('.$Survey_ID.',\''.$ques3.'\',0)';
	mysql_query($sqlquery) or die('Cannot insert data in SurveyQuestions table: '.mysql_error());
}
if($ques4!='')
{
	$sqlquery='INSERT INTO SurveyQuestions (Sur_ID,Ques_Statement,Ques_Type) 
			VALUES ('.$Survey_ID.',\''.$ques4.'\',0)';
	mysql_query($sqlquery) or die('Cannot insert data in SurveyQuestions table: '.mysql_error());
}
if($ques5!='')
{
	$sqlquery='INSERT INTO SurveyQuestions (Sur_ID,Ques_Statement,Ques_Type) 
			VALUES ('.$Survey_ID.',\''.$ques5.'\',0)';
	mysql_query($sqlquery) or die('Cannot insert data in SurveyQuestions table: '.mysql_error());
}
if($ques6!='')
{
	$sqlquery='INSERT INTO SurveyQuestions (Sur_ID,Ques_Statement,Ques_Type) 
			VALUES ('.$Survey_ID.',\''.$ques6.'\',0)';
	mysql_query($sqlquery) or die('Cannot insert data in SurveyQuestions table: '.mysql_error());
}
if($ques7!='')
{
	$sqlquery='INSERT INTO SurveyQuestions (Sur_ID,Ques_Statement,Ques_Type) 
			VALUES ('.$Survey_ID.',\''.$ques7.'\',0)';
	mysql_query($sqlquery) or die('Cannot insert data in SurveyQuestions table: '.mysql_error());
}
if($ques8!='')
{
	$sqlquery='INSERT INTO SurveyQuestions (Sur_ID,Ques_Statement,Ques_Type) 
			VALUES ('.$Survey_ID.',\''.$ques8.'\',0)';
	mysql_query($sqlquery) or die('Cannot insert data in SurveyQuestions table: '.mysql_error());
}
if($ques9!='')
{
	$sqlquery='INSERT INTO SurveyQuestions (Sur_ID,Ques_Statement,Ques_Type) 
			VALUES ('.$Survey_ID.',\''.$ques9.'\',0)';
	mysql_query($sqlquery) or die('Cannot insert data in SurveyQuestions table: '.mysql_error());
}
if($ques10!='')
{
	$sqlquery='INSERT INTO SurveyQuestions (Sur_ID,Ques_Statement,Ques_Type) 
			VALUES ('.$Survey_ID.',\''.$ques10.'\',0)';
	mysql_query($sqlquery) or die('Cannot insert data in Passwords table: '.mysql_error());
}
if($ques11!='')
{
	$sqlquery='INSERT INTO SurveyQuestions (Sur_ID,Ques_Statement,Ques_Type) 
			VALUES ('.$Survey_ID.',\''.$ques11.'\',0)';
	mysql_query($sqlquery) or die('Cannot insert data in Passwords table: '.mysql_error());
}
if($ques12!='')
{
	$sqlquery='INSERT INTO SurveyQuestions (Sur_ID,Ques_Statement,Ques_Type) 
			VALUES ('.$Survey_ID.',\''.$ques12.'\',0)';
	mysql_query($sqlquery) or die('Cannot insert data in Passwords table: '.mysql_error());
}
if($ques13!='')
{
	$sqlquery='INSERT INTO SurveyQuestions (Sur_ID,Ques_Statement,Ques_Type) 
			VALUES ('.$Survey_ID.',\''.$ques13.'\',0)';
	mysql_query($sqlquery) or die('Cannot insert data in Passwords table: '.mysql_error());
}
if($ques14!='')
{
	$sqlquery='INSERT INTO SurveyQuestions (Sur_ID,Ques_Statement,Ques_Type) 
			VALUES ('.$Survey_ID.',\''.$ques14.'\',0)';
	mysql_query($sqlquery) or die('Cannot insert data in Passwords table: '.mysql_error());
}
if($ques15!='')
{
	$sqlquery='INSERT INTO SurveyQuestions (Sur_ID,Ques_Statement,Ques_Type) 
			VALUES ('.$Survey_ID.',\''.$ques15.'\',0)';
	mysql_query($sqlquery) or die('Cannot insert data in Passwords table: '.mysql_error());
}
if($ques16!='')
{
	$sqlquery='INSERT INTO SurveyQuestions (Sur_ID,Ques_Statement,Ques_Type) 
			VALUES ('.$Survey_ID.',\''.$ques16.'\',0)';
	mysql_query($sqlquery) or die('Cannot insert data in Passwords table: '.mysql_error());
}
if($ques17!='')
{
	$sqlquery='INSERT INTO SurveyQuestions (Sur_ID,Ques_Statement,Ques_Type) 
			VALUES ('.$Survey_ID.',\''.$ques17.'\',0)';
	mysql_query($sqlquery) or die('Cannot insert data in Passwords table: '.mysql_error());
}
if($ques18!='')
{
	$sqlquery='INSERT INTO SurveyQuestions (Sur_ID,Ques_Statement,Ques_Type) 
			VALUES ('.$Survey_ID.',\''.$ques18.'\',0)';
	mysql_query($sqlquery) or die('Cannot insert data in Passwords table: '.mysql_error());
}
if($ques19!='')
{
	$sqlquery='INSERT INTO SurveyQuestions (Sur_ID,Ques_Statement,Ques_Type) 
			VALUES ('.$Survey_ID.',\''.$ques19.'\',0)';
	mysql_query($sqlquery) or die('Cannot insert data in Passwords table: '.mysql_error());
}
if($ques20!='')
{
	$sqlquery='INSERT INTO SurveyQuestions (Sur_ID,Ques_Statement,Ques_Type) 
			VALUES ('.$Survey_ID.',\''.$ques20.'\',0)';
	mysql_query($sqlquery) or die('Cannot insert data in Passwords table: '.mysql_error());
}
if($ques21!='')
{
	$sqlquery='INSERT INTO SurveyQuestions (Sur_ID,Ques_Statement,Ques_Type) 
			VALUES ('.$Survey_ID.',\''.$ques21.'\',0)';
	mysql_query($sqlquery) or die('Cannot insert data in Passwords table: '.mysql_error());
}
if($ques22!='')
{
	$sqlquery='INSERT INTO SurveyQuestions (Sur_ID,Ques_Statement,Ques_Type) 
			VALUES ('.$Survey_ID.',\''.$ques22.'\',0)';
	mysql_query($sqlquery) or die('Cannot insert data in Passwords table: '.mysql_error());
}
if($ques23!='')
{
	$sqlquery='INSERT INTO SurveyQuestions (Sur_ID,Ques_Statement,Ques_Type) 
			VALUES ('.$Survey_ID.',\''.$ques23.'\',0)';
	mysql_query($sqlquery) or die('Cannot insert data in Passwords table: '.mysql_error());
}
if($ques24!='')
{
	$sqlquery='INSERT INTO SurveyQuestions (Sur_ID,Ques_Statement,Ques_Type) 
			VALUES ('.$Survey_ID.',\''.$ques24.'\',0)';
	mysql_query($sqlquery) or die('Cannot insert data in Passwords table: '.mysql_error());
}
if($ques25!='')
{
	$sqlquery='INSERT INTO SurveyQuestions (Sur_ID,Ques_Statement,Ques_Type) 
			VALUES ('.$Survey_ID.',\''.$ques25.'\',0)';
	mysql_query($sqlquery) or die('Cannot insert data in Passwords table: '.mysql_error());
}
mysql_close($conn);
header("Location: userpage.php");
ob_end_flush();
?>