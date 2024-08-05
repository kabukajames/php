<?php
include ("../connection/connection.php");




//update users
if (isset($_POST['update_data'])) {
    $user_id= $_GET['id'];
       $first_name = $_POST['first_name'];
       $last_name = $_POST['last_name'];
       $username = $_POST['username'];
       $role = $_POST['role'];
       $email = $_POST['email'];
       $password = $_POST['password'];
      
      
    $update_user = "UPDATE users SET first_name='$first_name',last_name='$last_name',username='$username' ,role='$role' ,email='$email' ,password='$password' 
    WHERE id ='$user_id'";

    if (mysqli_query($conn, $update_user)) {
        echo "<div class='alert alert-success' role='alert'><center>user Updated  Successfull</center></div>";
            header("location:./create.php");
            exit();
    } else {
        echo "Error: " . "<br>" . mysqli_error($conn);
    }
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="/styles1.css" rel="stylesheet">
    <!--ends here links------>
       <script src="https://cdn.tailwindcss.com"></script>
     <!----ends------------->

     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>
<body>
    
<!-----roles  creation form modal--->
<div class ="container-fluid" style="height:40px; background-color: black;">
  <div class="row">.</div>
</div>
<center><h4 style="color:#37bc85; font-family: Georgia, 'Times New Roman', Times, serif;margin-top:30px">ROLE FORM</h4></center><hr><br>
<div clasa="card"  style="box-shadow: rgba(0, 0, 0, 0.08) 0px 4px 12px;height:280px;">
<div clasa="card-body">

<form method="POST" action="">


<?php
                $select_user= "select * from users where id = '".$_GET['id']."'" or die(mysqli_error($conn));
                $result = mysqli_query($conn, $select_user);
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
?>

<div class="container-fluid">
<!---row  1-->
<div class="row" style="margin-top:3px; margin-left: 500px;">
<div class="col-md-6">
<div class="form-group">
<label class="form-label">first name</label>
<input class="form-control" type="text" placeholder="enter first name" name="first_name" required autocomplete="off" value="<?php echo $row['first_name']?>"  style="height:40px">
<label class="form-label">last name</label>
<input class="form-control" type="text" placeholder="enter last name" name="last_name" required autocomplete="off" value="<?php echo $row['last_name']?>"  style="height:40px">
  


</div>

<div class="form-group">
<label class="form-label">username</label>
<input class="form-control" type="text" placeholder="enter username" name="username" required autocomplete="off" value="<?php echo $row['username']?>"  style="height:40px">
</div>

<div class="form-group">
<label class="form-label">role</label>
<select class="form-select"  type="text" placeholder="" name="role" required autocomplete="off" value="<?php echo $row['role']?>"  style="height:40px">
  <option selected required autocomplete="off" ></option>
  <option value="1">superAdmin</option>
  <option value="2">admin</option>
  <option value="3">manager</option>
  <option value="4">serviceman</option>
</select>
</div>


<div class="form-group">
<label class="form-label">email</label>
<input class="form-control" type="email" placeholder="enter email" name="email" required autocomplete="off" value="<?php echo $row['email']?>"  style="height:40px">
</div>

<div class="form-group">
<label class="form-label">password</label>
<input class="form-control" type="password" placeholder="enter password" name="password" required autocomplete="off" value="<?php echo $row['password']?>"   style="height:40px">
</div>
<div class="row">
<div class="col-md-3">
<?php }}?>
<button type="submit" name="update_data" class="btn btn-success"   value="<?php echo $row['password']?>" style="margin-top:30px;margin-left:370px">
<h style="font-family:Georgia, 'Times New Roman', Times, serif">update</h></button>
</div>
</div>
</div>
</form>
</div>
</div>
<!-----ends-------->
    
</body>
</html>