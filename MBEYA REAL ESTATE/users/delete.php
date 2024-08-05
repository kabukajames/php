<?php
include '../connection/connection.php';

$user_id =$_REQUEST['id'];
$query = "DELETE FROM users WHERE id=$user_id"; 
$result = mysqli_query($conn,$query) or die ( mysqli_error($conn));
echo"<div class='alert alert-danger'>Deletion Successfull</div>";
header("Location:./create.php"); 
exit();

?>