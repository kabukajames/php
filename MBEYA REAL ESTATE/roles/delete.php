<?php
include ("./connection.php");

$role_id =$_REQUEST['id'];
$query = "DELETE FROM roles WHERE id=$role_id"; 
$result = mysqli_query($conn,$query) or die ( mysqli_error($conn));
echo"<div class='alert alert-danger'>Deletion Successfull</div>";
header("Location:../roles/create.php"); 
exit();

?>
