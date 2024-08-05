<?php
include './connection.php';




//update users
if (isset($_POST['update_data'])) {
    $role_id= $_GET['id'];
       $name = $_POST['name'];
       $description = $_POST['description'];
      
      
    $update_role = "UPDATE roles SET name='$name',description='$description' 
    WHERE id ='$role_id'";

    if (mysqli_query($conn, $update_role)) {
        echo "<div class='alert alert-success' role='alert'><center>Role Updated  Successfull</center></div>";
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
<div class="container">
    <img src="../assets/ei3.jpg" style="height: 400px; width: 2000px;">
</div>
<div class ="container-fluid" style="height:40px; background-color: black;">
  <div class="row">.</div>
</div>
<center><h4 style="color:#37bc85; font-family: Georgia, 'Times New Roman', Times, serif;margin-top:30px">ROLE FORM</h4></center><hr><br>
<div clasa="card"  style="box-shadow: rgba(0, 0, 0, 0.08) 0px 4px 12px;height:280px;">
<div clasa="card-body">

<form method="POST" action="">


<?php
                $select_role= "select * from roles where id = '".$_GET['id']."'" or die(mysqli_error($conn));
                $result = mysqli_query($conn, $select_role);
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
?>

<div class="container-fluid">


<!---row  1-->
<div class="row" style="margin-top:3px; margin-left: 300px;">
<div class="col-md-4">
<div class="form-group">
<label class="form-label">Name</label>
<input class="form-control" type="text" name="name" required autocomplete="off" value="<?php echo $row['name']?>"   style="height:40px">
</div>
</div>
<div class="col-md-4">
<div class="form-group">
<label class="form-label">Description</label>
<input class="form-control" type="text"  name="description" required autocomplete="off"  value="<?php echo $row['description']?>"  style="height:40px">
</div>
</div>
<!---row  2-->
<div class="row">
<div class="col-md-3">
<?php }}?>
<button type="submit" name="update_data" class="btn btn-success" style="margin-top:30px;margin-left:370px">
<h style="font-family:Georgia, 'Times New Roman', Times, serif">addroles</h></button>
</div>
</div>
</div>
</form>
</div>
</div>
<!-----ends-------->
    
</body>
</html>