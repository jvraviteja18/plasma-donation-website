<?php
    if( isset($_GET["id"]))
    {
        $id = $_GET["id"];
		include_once("connect.php");
		$que = "UPDATE users SET username='' , password='' , fullname='', bloodgroup='' , phone=''   WHERE id = '$id' ";
		mysqli_query($con , $que);
		echo "<h2 align='center'>Deleted your data including your account</h2>"."<br>"."<br>";
		echo "<h2 align='center'>Create a new account by clicking <a href = 'signup.php'>here.</a></h2>"."<br>"."<br>";
		echo "<h2 align='center'>or <a href = 'Home.html'>Go To Home</a></h2>"."<br>";
    }
?>