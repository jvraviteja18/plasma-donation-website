<html>
	<head> 
		<title>Signup</title>
		<style>
		body	{
					background-image:url('details.jpg');		
				}
		</style>
	</head>
	<body>
	<br><br>
	<form method="POST" >
	<table  border ="0"  align="center">
		<tr>
			<td colspan="2" align="center"><h3 style="color:red;"><font face="times new roman" size="7">SIGNUP</font></h3></td>
		</tr>
		<tr>
			<td><b><font face="times new roman" size="6">Username : </font></b></td>
			<td><input type="text"   name="username" maxlength="12" required></td>
			</br>
		</tr>	
		<tr>
			<td><b><font face="times new roman" size="6">Password :</font></td>
			<td><input type="password" name="password"   maxlength="12" required></b></td>
			</br></br>
		</tr>
		<tr><td>&nbsp;</td></tr>
		<tr>
			<td colspan="2"  align="center"><input name="submit" type="submit" value="SignUp"></td>
		</tr>
	</table>	
	</form>
	</body>
	
</html>

<?php

	if(isset($_POST['submit']))
	{
		$entry = false;
		include_once("connect.php");
		$user = $_POST['username'];
		$p1 = $_POST['password'];
		$result = mysqli_query($con, "SELECT * FROM users");
		while($user_data = @mysqli_fetch_array($result)) 
		{
			
			$u = $user_data['username'];
			$pass1 = $user_data['password'];
			
			if($u==$user)
			{
				echo "<h2 align='center'>You already have an account , please login with your details <a href='loginpage.html'>here.</a></h2>"."<br>";
				die();
			}
			else
			{
				$entry = true;
			}
		}
		if($entry == true)
		{
			$query   = "INSERT into `users` (username,password,fullname,bloodgroup,phone)
						VALUES ('$user','$p1','','','')";
			$result   = mysqli_query($con, $query);
			if($result)
			{
				echo "<h2 align='center'>Sign Up Successful!</h2>"."<br>";
				echo "<h2 align='center'>please login with your details <a href='loginpage.html'>here.</a></h2>"."<br>";
			}
			else
			{
				echo "<h2>not inserted data into database  </h2>" . mysqli_error($con)."<br>";
			}
			mysqli_close($con);
		}
		
	}
?>