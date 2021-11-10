<?php
	include_once('connect.php');
	$result = mysqli_query($con, "SELECT * FROM users ORDER BY id DESC");
	if (!$result) {
    printf("Error: %s\n", mysqli_error($con));
    exit();
	}
	while($user_data = mysqli_fetch_array($result))
	{   

		$na = $user_data['fullname'];
		$bg = $user_data['bloodgroup'];
		$ph = $user_data['phone'];
		
		if($na!="" && $bg!="" && $ph!="")
		{
			echo "---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------";
			echo "<h3 align='center'>Donor Name is &emsp;&emsp;&emsp;: $na </h3>";
			echo "<h3 align='center'>Donor Bloodgroup is &emsp;: $bg&emsp;&emsp;&emsp;&emsp;</h3>";
			echo "<h3 align='center'>Contact number &emsp;&emsp;&emsp;: $ph</h3>";
			echo "---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------"."<br>";
		}
		
	}
?>