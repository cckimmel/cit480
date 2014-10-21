<?php
if (isset($_SESSION['user']))
{
	$email = $_SESSION['user'];
   	$res = mysqli_query($link, "SELECT * FROM users WHERE email = '$email' LIMIT 1 ");
	
	if($row = mysqli_fetch_assoc($res))
		{
		}
	else
	{
   		$query = "INSERT INTO users (email) VALUES ('$email')";
   		$result = mysqli_query($link,$query);
	}
}