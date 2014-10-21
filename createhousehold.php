<?php 
    include 'private.php'; 

    if(!empty($_POST)) 
    {     
    	$householdName = $_POST['name'];
   		$query = "INSERT INTO households (householdowner,householdName) VALUES ('$email','$householdName')";
   		$result = mysqli_query($link,$query);

   		$householdId2 = mysqli_query($link, "SELECT id FROM households WHERE householdowner = '$email' LIMIT 1 ");
   		$id = $row['id'];
   		echo $id;
   		// $householdId = $_SESSION['householdId'];
   		echo $householdId;
   		echo $userId;
   		// $query2 = mysqli_query($link,"UPDATE users SET household=$householdId WHERE email=$userId");
   		// $result2 = mysqli_query($link,$query2);
    } 
?>

<h1>Add a book to your library</h1> 
<form action="index.php?page=createhousehold.php" method="post"> 
    Household Name:<br /> 
    <input type="text" name="name" value="" /> 
    <br /><br /> 
    <input type="submit" value="Create New Household" /> 
</form>