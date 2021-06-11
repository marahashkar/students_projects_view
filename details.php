



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

  <a href="rateproject.php"><i class="glyphicon glyphicon-star"></i> Rate Project </a> 


  <a href="orderpro.php"><i class="fa fa-fw fa-"></i> Order Project</a>
 
      
     <a href="login.php" style="float: right;"><i class="glyphicon glyphicon-log-out"></i>LogOut </a> 



</div>

</div>
<div class="container">
  <?php
  include'conn.php';
  if (isset($_GET['id'])) {
$x=$_GET['id'];
$t=mysqli_query($con,"select * from projects where id='$x'");
$row=mysqli_fetch_array($t);  }

  ?>
  <div class="row">
    <div class="col-md-2"> </div>
    <div style="width: 150px; height: 150px; float: left; ">
      <img src="uploadimages/<?php echo $row['image'];    ?>" style="width: 100%; height: 100%; border-radius: 20px;">
    </div>
   

    <div class="col-md-6" style="width: 50%; height: 500px;" >
      <div style="width: 100%; height: 100%;" >

             <div class=" panel panel-warning" style="border-radius: 10px;">

            <div class="panel-heading" style="border-radius: 10px;">
         <h1 class="text-center text-info">   <?php echo $row['name'];    ?>  </h1>    
            </div>
            <div class="panel-body" style="border-radius: 10px;">
            <h3> <?php  echo $row['description'] ; ?> </h3>
            <h3>  <?php echo $row['uname'];    ?> </h3>
            <h3>  <?php echo $row['section'];    ?> </h3>
            <h3>  <?php echo $row['date'];    ?> </h3>
            </div>
             <div class="panel-footer" style="border-radius: 10px;">
        <a href="projects/ <?php echo $row['project'];  ?>"download="projects/ <?php echo $row['project'];  ?>" class="btn btn-warning btn-lg"> Download</a>
            </div>
             
               


             </div>


      </div>
      
    </div>
    
      
    </div>


    
  </div>
  





<script type="text/javascript" src="js/jQuery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>

</body>
</html> 


