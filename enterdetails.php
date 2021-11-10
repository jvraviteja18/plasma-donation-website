<html>
	<head>
		<style>
			body	{
						background-image:url('details.jpg');
						
					}
			table	{
						float:center;
						border:5px solid green;
						margin-top:200px;
						font-size:25px;
						border-radius:10px;
					}
			input	{
						font-size:25px;
						border-radius:10px;
						font-family: timesnew roman;
						text-align:center;
					}
			button	{
						font-size:30px;
						font-family: Bookman Old Style;
						color:blue;
						border-radius:15px;
						width:120px;					
					}
		</style>
	</head>
	<body>
		<form method = "POST">
		<table align="center" cellspacing="30">
			<tr>
				<td>FULL NAME</td>
				<td>:</td>
				<td><input name="fullname" ></input></td>
			</tr>
			<tr>
				<td>BLOOD TYPE</td>
				<td>:</td>
				<td><input name="bloodgroup"></input></td>
			</tr>
			<tr>
				<td>PHONE</td>
				<td>:</td>
				<td><input name="phone" type="text"></input></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><br><button name="submit" value="submit">add</button>&ensp;&ensp;&ensp;&ensp;
				<button value="reset">cancel</button></td>
			</tr>
		</table>
		</form>
	</body>
</html>




<?php
	
	if( isset($_GET["id"]))
    {
        $id = $_GET["id"];
		
		if(isset($_POST["submit"]))
		{
			$fn = $_POST["fullname"];
			$bg = $_POST["bloodgroup"];
			$ph = $_POST["phone"];
			include_once("connect.php");
			$add = "UPDATE users SET fullname='$fn', bloodgroup='$bg' , phone='$ph'  WHERE id = '$id' ";
			mysqli_query($con , $add);
			echo "<h1 align='center'>DATA ADDED OR UPDATED SUCCESSFULLY</h1>"."<br>"."<br>";
		}
		
		echo "<a href = 'Home.html' ><h1 align='center'>Go To Home</h1></a>"."<br>";
    }
?>