<?php
	if(isset($_POST['submit']))
	{
		$entry = false;
		$u = $_POST['username'];
		$p = $_POST['password'];
		$id= 0;
		include_once("connect.php");
		$result = mysqli_query($con, "SELECT * FROM users");
		while($user_data = @mysqli_fetch_array($result)) 
		{
			$user = $user_data['username'];
			$pass = $user_data['password'];
			$id	  = $user_data['id'];
			if(($u==$user)&&($pass==$p))
			{
				$entry = true;
				break;
			}
		}
		if($entry==true)
		{
			echo "<h1 align='center'>Welcome $user</h1>"."<br>"."<br>"."<br>";
			echo "<a href = 'enterdetails.php?id=$id' ><h2 align='center'>Enter or Update Details</h2></a>"."<br>"."<br>"."<br>"."<br>";
			echo "<a href = 'deletedonor.php?id=$id' ><h2 align='center'>Delete Details <br>(note:THIS WILL DELETE YOUR ACCOUNT TOO!)</h2></a>";
		}
		else
		{
			echo "<h1>Invalid Credentials</h1>"."<br>";
			echo "SignUp yourself in -> "."<a href = 'signup.php'>SignUp here</>"."<br>";
		}
	}
?>