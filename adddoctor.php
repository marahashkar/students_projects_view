<?php



session_start();
if ($_SESSION['type']!=0)
 header("Location:login.php");





 ?>

<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="conn.php">
<title> adddoctors </title>
<style>
body {font-family: Arial, Helvetica, sans-serif; background-image: url(images/9.jpg); background-repeat:no-repeat; background-size:cover;  }

.navbar {
  width: 100%;
  background-color: #555;
  overflow: auto;
}

.navbar a {
  float: left;
  padding: 12px;
  color: white;
  text-decoration: none;
  font-size: 17px;
}

.navbar a:hover {
  background-color: #000;
}

.active {
  background-color: #4CAF50;
}

@media screen and (max-width: 500px) {
  .navbar a {
    float: none;
    display: block;
  }
}
  
  <style type="text/css">
    * {box-sizing: border-box}

/* Full-width input fields */
  input[type=text], input[type=password], input[type=text],input[type=phone]{
  width: 50%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus , input[type=text]:focus, input[type=phone]:focus,input[type=text]:focus{
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for all buttons */

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
border-radius: 10px;
background-color: inherit;
  padding: 14px 28px;
  font-size: 16px;
  cursor: pointer;
  display: inline-block;
  color: green;
  margin: 5px 0 22px 0;
}

/* On mouse-over */
.cancelbtn:hover {background: #eee;}

.addbtn {
  border-radius: 10px;
  background-color: inherit;
  padding: 14px 28px;
  font-size: 16px;
  cursor: pointer;
  display: inline-block;
  color: green;
  margin: 5px 0 22px 0;
}

/* On mouse-over */
.addbtn:hover {background: #eee;}


/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
  }
}
</style>
<body>


<div class="container-fluid" >
  
<div class="navbar " >
 <a class="active" href="admin.php"><i class="fa fa-fw fa-home"></i> Home</a> 
  <a href="mangeusers.php"><i class="fa fa-fw fa-"></i> Mange Users</a> 

  <a href="mangeusers.php"><i class="fa fa-fw fa-"></i> Mange Users</a> 


  <a href="mangepro.php"><i class="fa fa-fw fa-"></i> Mange Project</a>
   <a href="addproject.php"><i class="glyphicon glyphicon-plus"></i> Add Project </a> 
  <a href="adddoctor.php"><i class="glyphicon glyphicon-plus"></i> Add Doctor </a> 

  <a href="projrating.php"><i class="glyphicon glyphicon-rate"></i> Project Rating</a> 
      <a href="projectorder.php"><i class="glyphicon glyphicon-rate"></i>Project Order </a> 
      <a href="usercon.php"><i class="glyphicon glyphicon-rate"></i> User'S Order </a> 

      
     <a href="index.html" style="float: right;"><i class="glyphicon glyphicon-log-out"></i>LogOut </a> 
</div>

</div>
  
<div style="background-color: rgba(0,0,0,0.1); width: 75%;height: 75%; border-radius: 10px; padding: 10px; margin: 30px auto">
  
<form action="adddoctor.php" method="post"  style="border:1px solid #ccc; width: 75% padding: 20px; text-align: center;" >
      <h2>ADD DOCTOR</h2>  
      <hr>
     <label for="Name"><b>Name</b></label><br>
    <input type="text"   name="name" required id="name" ><br>

    <label for="Phone"><b>Phone</b></label><br>
    <input type="text" name="phone" required id="phone"><br>

    <label for="Email"><b>Email</b></label><br>
    <input type="text" name="email" required id email><br>

    <label for="Password"><b>Password</b></label><br>
    <input type="password"  name="pass" required id pass><br>

    

    <label>
      <input type="checkbox" checked="checked" name="remember" > Remember me
    </label>


    <div class="clearfix">
      <a href="login.php">
      <button type="button" class="cancelbtn "> Cancel</a></button>

      </a>
      <button type="submit" class="addbtn" name="add" style="margin-left: 30px; ">Add Doctor</button>
    </div>
</form>
</div>




<?php 
include('conn.php');
$x=isset($_POST['name'])?$_POST['name']:'';
$y=isset($_POST['phone'])?$_POST['phone']:'';
$z=isset($_POST['email'])?$_POST['email']:'';
$w=isset($_POST['pass'])?$_POST['pass']:'';

$newpass=md5($w);
  if (isset($_POST['add'])) {

   $rr=mysqli_query($con,"insert into users(name,email,password,phone,section,type) values('$x','$z','$newpass','$y','doctor',2)") ;
   if (isset($rr)) 
   {
     echo'<script> alert ("create account suuccessfuly")</script>';}
     else{
     echo'
    <script>alert("create account faild");</script> ';}
  }


 ?>

 






<script type="text/javascript" src="js/jQuery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>

</body>
</html> 


