<?php



session_start();
if ($_SESSION['type']!=1)
 header("Location:login.php");





 ?>

<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title> users</title>
<style>
body {font-family: Arial, Helvetica, sans-serif; background-image: url(images/04.jpg); background-repeat:no-repeat; background-size:cover;  }

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

</style>
<body>


<div class="container-fluid" >
	
<div class="navbar " >
   <a class="active" href="user.php"><i class="fa fa-fw fa-home"></i> Home</a> 
  <a href="addprojectuser.php"><i class="glyphicon glyphicon-plus"></i> Add Project </a> 



  <a href="orderpro.php"><i class="fa fa-fw fa-"></i> Order Project</a>
 
      
    <a href="index.html" style="float: right;"><i class="glyphicon glyphicon-log-out"></i>LogOut </a> 



</div>

</div>


<div class="container">
<form action="order.php" method="post" 
<div class="alert alert-warning text-center">

<h1> Get Your Own Project </h1>
  <label>Prject Description :</label>
  <textarea class="form-control" name="d" style="width: 500px;height: 200px;margin: auto auto;"></textarea>
  <label >Collage Name:</label>
  <input type="text" class="form-control" name="cn" style="width: 500px;margin: auto auto;"> <br>
 


  <button type="submit" class="btn btn-warning btn-lg" name="btn">order </button>
</div>
</form>
  </div>

  <?php
  include'conn.php';

   $des=isset($_POST['d'])?$_POST['d']:'';
   $collage=isset($_POST['cn'])?$_POST['cn']:'';
   $date=date("Y-m-s");
   if (isset($_POST['btn'])){
	$r=mysqli_query($con,"insert into orderpro (sname,description,date,collage,phone,email) values ('".$_SESSION['n']."','$des','$date','$collage','".$_SESSION['ph']."','".$_SESSION['em']."')");
	if (isset($r)) {
     echo' <div class="alert alert-danger"> <h3>submit successfully</h3> </div>';
    }
    else {
               echo' <div class="alert alert-danger"> <h3>submit faild</h3> </div>';

    }
   
}

  ?>
  





  


<script type="text/javascript" src="js/jQuery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>

</body>
</html> 

