<?php



session_start();
if ($_SESSION['type']!=2)
 header("Location:login.php");





 ?>



<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title> Doctors</title>
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

 
      
     <a href="index.html" style="float: right;"><i class="glyphicon glyphicon-log-out"></i>LogOut </a> 



</div>

</div>
<div class="container">
	
<div style="background-color: rgba(0,0,0,0.1); width: 100%;height: 1000%; border-radius: 10px; padding: 10px; margin: 30px auto">
	<div class="container" style="width: 100%; height: 100%; " 	>
    <?php	
      include'conn.php';
      $r=mysqli_query($con,"select * from projects where type='free'");
      if (mysqli_num_rows($r)>0) {
        while($row=mysqli_fetch_array($r)){
        	echo'
            <div class="col-md-4" >
            <div class="panel-warning" style="background-color:white; border-radius:10px; border:1px soild; padding:1px; margin-bottom:10px; margin-top;">

          <div class="pannel-header"> 
           <h1 class="text-center text-info" style="margin-bottom:20px;"> '.$row['name'].'</h2>

         
           </div>
            <div class="pannel-body"> 
             <img src="uploadimages/'.$row['image'].'" style="width:200px;height:200px; margin:auto 50px;"	>
            <h2 class="text-center" > '.$row['section'].'</h2>

             </div>
          <div class="pannel-footer">  
      <a href="details.php?id='.$row['id'].'" class="btn btn-primary;"style="margin-left:60px;"
       > Read more </a>
            <a href="rt/doctorr.php?id='.$row['id'].'" class="btn btn-warning;" > Rate Project  </a>

          </div>

          </div>



            </div>



        	';
        }
               }


    ?>


		</div>
 
</div>
</div>





<script type="text/javascript" src="js/jQuery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>

</body>
</html> 


