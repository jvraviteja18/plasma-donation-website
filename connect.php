<?php
	$con = mysqli_connect("localhost:3308" , "root" , "" );
	$db = mysqli_query($con , "CREATE DATABASE  IF NOT EXISTS  login ");
	mysqli_query($con , "USE login");
	//echo "using login"."<br>";
	mysqli_select_db($con, "login");
	$tbstr =  "CREATE TABLE IF NOT EXISTS users ( 
					`id` INT(5) NOT NULL AUTO_INCREMENT,
					`username` VARCHAR(30) NOT NULL ,
					`password` VARCHAR(30) NOT NULL ,
					`fullname` VARCHAR(30)  ,
					`bloodgroup` VARCHAR(5)  ,
					`phone` VARCHAR(15)  ,
					PRIMARY KEY (`id`)
					)";
	if(mysqli_query($con , $tbstr))
	{
		//echo "successful created table and databse " . "<br>" ;
	}
	else
	{
		echo "not created table and databse " . mysqli_error($con);
	}
	
?>
