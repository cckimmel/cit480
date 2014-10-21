<?php
if (isset($_SESSION['user']))
{
	$email = $_SESSION['user'];
	$householdId = mysqli_query($link, "SELECT household FROM users WHERE email = '$email' LIMIT 1 ");
	$_SESSION['householdId']=$row['household'];
	if(is_int($_SESSION['householdId']))
		{
		echo $row['household'];
		}
	else
	{
     echo "error";
	}
}