<?php

include ("../connection/connection.php");
if (isset($_POST["post_agent"])) {
     $first_name= $_POST['first_name'];
    $last_name= $_POST['last_name'];
    $email= $_POST['email'];
    $password = $_POST['password'];
    $phone_number= $_POST['phone_number'];
  
    
  
  
  
    $insert_new_agent = "INSERT INTO agent (first_name,last_name,password,email,phone_number) VALUES('$first_name','$last_name','$email','$password','$phone_number')";

  if (mysqli_query($conn, $insert_new_agent)) {
      echo "<div class='alert alert-success d-flex align-items-centerg' aria-label='Success:'>agent added successfull  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
  </div>";
    } else{
    echo "<div class='alert alert-danger'>wrong registration please try again</div>
     <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>";
    }
  }

?>

    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>agent-PAGE</title>

    <link href="/styles1.css" rel="stylesheet">
    <!--ends here links------>
       <script src="https://cdn.tailwindcss.com"></script>
     <!----ends------------->

     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>
<body>


<!----header page-->
<div class="card shadow" style="box-shadow: rgba(17, 12, 46, 0.15) 0px 48px 100px 0px;height:10px">
    <div class="card-body">
        <div class="container mt-3" style="margin-left: 200px;">
            <ul class="nav">
                
                <li class="nav-item">
                <a class="nav-link" href="./show_agent.php" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#AGENT" style="margin-left:300px"><b>AGENT-ACCOUNT|</b></a>
              </li>
            
               <li class="nav-item" style="margin-left:160px">
                <a class="nav-link" href="../manager/dashboard.php" class= "btn btn-primary"style=""><b style="font-family:Georgia, 'Times New Roman', Times, serif;font-size:18px;">BACK-HOME|</b></a>
              </li>   
            </ul>
          </div>
    </div>
</div>
<!---------ends------>

<!---header img----->
<img src="../assets/real4.jpg" style="width:150%;height:450px">
<!-----ends-->

<!-----roles  creation form modal--->
<div class ="container-fluid" style="height:40px; background-color: black;">
  <div class="row">.</div>
</div>
<center><h4 style="color:#37bc85; font-family: Georgia, 'Times New Roman', Times, serif;margin-top:30px">AGENT FORM</h4></center><hr><br>
<div clasa="card"  style="box-shadow: rgba(0, 0, 0, 0.08) 0px 4px 12px;height:280px;">
<div clasa="card-body">

<form method="POST" action="">
<div class="container-fluid">


<!---row  1--> 
<div class="row" style="margin-top:3px; margin-left: 300px;">
<div class="col-md-4">
<div class="form-group">
<label class="form-label">first name</label>
<input class="form-control" type="text" placeholder="enter first name" name="first name" required autocomplete="off" style="height:40px">
</div>

<div class="form-group">
<label class="form-label">last Name</label>
<input class="form-control" type="text" placeholder="enter last name" name="last name" required autocomplete="off" style="height:40px">

</div>
<div class="form-group">
<label class="form-label">email</label>
<input class="form-control" type="email" placeholder="enter email" name="email" required autocomplete="off" style="height:40px">
</div>
  
<div class="form-group">
<label class="form-label">password</label>
<input class="form-control" type="password" placeholder="enter password" name="password" required autocomplete="off" style="height:40px">

</div>
<div class="form-group">
<label class="form-label">phone number</label>
<input class="form-control" type="number" placeholder="enter phone_number" name="phone_number" required autocomplete="off" style="height:40px">
</div>
</div>
</div>

<!---row  2-->
<div class="row">
<div class="col  -md-3">
<button type="submit" name="post_agent" class="btn btn-success" style="margin-top:30px;margin-left:370px">
<h style="font-family:Georgia, 'Times New Roman', Times, serif">add-customer</h></button>
</div>
</div>
</div>
</form>
</div>
</div>
<!-----ends-------->

<!-- Modal -->
<div class="modal fade" id="ROLES" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-fullscreen-xxl-down">
    <div class="modal-content">
      <div class="modal-header" style="background-color: black">
        <h5 class="modal-title" id="staticBackdropLabel" style="color:teal;margin-left:500px;font-weight:bold; font-family:Georgia, 'Times New Roman', Times, serif;"><center>AGENT FORM</center></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="container text-center" style="margin-top:30px">
        <div class="row">
        <div class="col-md-12">
       
        <br>
        
<!-- Modal for visitors account -->
<table id="brandList" class="table table datatable mdi-table-search" style="font-size: 10px;box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px; background-color: azure">
                                    <thead>
                                        <tr>
                <th><center><h style="font-family:Georgia, 'Times New Roman', Times, serif">NO</h></th>
                <th><center><h style="font-family:Georgia, 'Times New Roman', Times, serif">FIRST NAME</h></center></th>
                <th><center><h style="font-family:Georgia, 'Times New Roman', Times, serif">LAST NAME</h></center></th>
                <th><center><h style="font-family:Georgia, 'Times New Roman', Times, serif">PASSWORD</h></center></th>
                <th><center><h style="font-family:Georgia, 'Times New Roman', Times, serif">PHONE NUMBER</h></center></th>
                <th><center><h style="font-family:Georgia, 'Times New Roman', Times, serif">EMAIL</h></center></th>
                <th><center><h style="font-family:Georgia, 'Times New Roman', Times, serif">CEATED AT</h></center></th>
                <th><center><h style="font-family:Georgia, 'Times New Roman', Times, serif">ACTIONS</h></center></th>
                                        </tr>
                                    </thead>
                                        <tr>
                                          <?php 
                                          $count=1;
                 $select_agent = "select * from agent" or die(mysqli_error($conn));
                 $result = mysqli_query($conn,$select_agent);
                 $number = mysqli_num_rows($result);
                 if ($number > 0) {
                     while($row = mysqli_fetch_assoc($result)) { ?>       
                          <tr>
                            <td class="text-center"><?php echo $count ?></td>
                              <td class="text-center"><?php echo $row['first_name'];?></td>
                              <td class="text-center"><?php echo $row['last_name'];?></td>
                              <td class="text-center"><?php echo $row['password'];?></td>
                              <td class="text-center"><?php echo $row['phone_number'];?></td>
                              <td class="text-center"><?php echo $row['email'];?></td>
                              
                                       
                                  
  <span><a href="./update.php?id=<?php echo$row['id']?>"><button class="btn btn-primary"><h style="font-family:Georgia, 'Times New Roman', Times, serif;">update</h></button></span> 
  <span><a href="./delete.php?id=<?php echo $row['id']?>"><button class="btn btn-danger"> <h style="font-family:Georgia, 'Times New Roman', Times, serif">Delete</h></button></span>
</td>
                                        </tr>
                                      <?php $count++ ?>
                        <?php } }  else {
  echo "no results";
}?>
</table>
<!---ends------->
</div>
        </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="background-color:teal">
        <h style="font-family:Georgia, 'Times New Roman', Times, serif">Close</h></button>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>
</html>