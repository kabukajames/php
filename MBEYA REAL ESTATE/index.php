<?php
session_start();
include ("./connection/connection.php");

if(isset($_POST['login_data'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
    $_SERVER['variable'];
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
   $result = mysqli_query($conn,$sql);
   $number = mysqli_num_rows($result);
    if($number > 0){
       
         $row = mysqli_fetch_assoc($result);
        $_SESSION['id'] = $row['id'];
        $_SESSION['username'] = $row['username'];
        $_SESSION['role'] = $row['role'];

        if($row['role']== 1){
          $_SESSION['username'].' has loggged in successfull with role superAdministrator';
         
            header("location: ./superAdmin/dashboard.php");
        }else if($row['role']==  2){

          header("location:./admin/dashboard.php");
           
        } else  if($row['role']== 3){

             header("location:./manager/dashboard.php");
             }else  if($row['role']== 4){

              header("location:./agent/create.php");
              }else  if($row['role']== 5){

             header("location:./builder/create.php");
             
              }
 
            }
            
    else
        ?>
        <script language="JavaScript">
            alert('Wrong username or password please try again');
            document.location='index.php';
        </script>
        <?php
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USERS-HOME-PAGE</title>  	


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  
    <!---- Ends Here----->
</head>
<body>

<!----header page-->
<div class="card shadow" style="box-shadow: rgba(17, 12, 46, 0.15) 0px 48px 100px 0px;">
    <div class="card-body">
        <div class="container mt-3" style="margin-left: 500px;">
            <ul class="nav">
              <li class="nav-item">
             
<!-- Button trigger modal -->
<a href="" class="text-center" data-bs-toggle="modal" data-bs-target="#staticBackdrop" style="font-size:30px;text-decoration:none;color:green">
  <h style="font-family:Georgia, 'Times New Roman', Times, serif; font-size:20px; margin-left:150px">LOG IN</h>
</a>
</li>
            </ul>
          </div>
    </div>
</div>
<!---------ends------>

<!-----img header here---------->
<img src="./assets/hey.jpg" style="height:500px;width:120%;box-shadow: rgba(50, 50, 93, 0.25) 0px 30px 60px -12px, rgba(0, 0, 0, 0.3) 0px 18px 36px -18px;">
<!------ends here---------->
<center><h4 style="margin-top:70px;color:#0d4f2e;font-size:25px;
 font-family:Georgia, 'Times New Roman', Times, serif">
 REAL ESTATE MANAGEMENT  SYSTEM
</h4></center>



<!--footer------>
<center>
<footer class="footer">
        <div class="container">
            <h2 style="font-family: Georgia, 'Times New Roman', Times, serif;"></h2>
            <p>Your trusted partner in real estate solutions.</p>
            <div class="social-icons">
               <p>Cantona co LTD</p>
            </div>
            <p>&copy; 2024 Cantona Real Estate. All rights reserved.</p>
        </div>
    </footer>
    </center>
<!------ends-------->



<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel" style="font-family:Georgia, 'Times New Roman', Times, serif; margin-left: 180px">LOGIN</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
    
 <form method="POST" action="">
                <div class="form-group">
                    <label class="form-label"> 
                      <h style="font-family:Georgia, 'Times New Roman', Times, serif">Username</h></label>
                    <input type="text" class="form-control" name="username" placeholder="enter username" required autocomplete="off"></input>
                </div>
                <div class="form-group">
                    <label class="form-label">
                    <h  style="font-family:Georgia,'Times New Roman', Times, serif">Password</h>
                    </label>
                    <input type="text" class="form-control" name="password" placeholder="enter password" required autocomplete="off"></input>
                </div>
                <br>
                <button type="submit" name="login_data" class="btn btn-success">
                <h class="modal-title" style="font-family:Georgia,'Times New Roman', Times, serif">Login</h>
                </button>
            </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
    
      </div>
    </div>
  </div>
</div>




<!-------script cdn here below-------->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<!-------Pre Loader------------------>
</body>
</html>