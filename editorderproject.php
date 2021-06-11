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
<title> admin dashboard</title>
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
input[type=text], textarea[type=text],input[type=text],input[type=text],input[type=number],input[type=date]{
  width: 50%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus,textarea[type=text]:focus ,input[type=text]:focus,input[type=text]:focus,input[type=nunber]:focus,input[type=date]:focus{
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

.editbtn {
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
.editbtn:hover {background: #eee;}


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
  <?php
   include'conn.php';
  if (isset($_GET['id'])) {
  $x=$_GET['id'];
  $result=mysqli_query($con,"select * from orderpro where id='$x'");
  $row=mysqli_fetch_array($result);

  }

  ?>
  <?php 
include'conn.php';


$sname=isset($_POST['sname'])?$_POST['sname']:'';
$description=isset($_POST['description'])?$_POST['description']:'';
$dd=date("Y-m-d");

$date=isset($_POST['date'])?$_POST['date']:'';

$collage=isset($_POST['collage'])?$_POST['collage']:'';
$phone=isset($_POST['phone'])?$_POST['phone']:'';
$email=isset($_POST['email'])?$_POST['email']:'';



     

  if(isset($_POST['edit'])) {


        $r=mysqli_query($con,"update orderpro set sname='$sname', description='$description', date='$date',collage='$collage',phone='$phone',email='$email' where id='$x' ");   

      
  
    if (isset($r)) {
     echo' <div class="alert alert-danger"> <h3>update successfully</h3> </div>';}
    else {
               echo' <div class="alert alert-danger"> <h3>update faild</h3> </div>';}
   
}
   
 

 


 ?>


	
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
	
<div style="background-color: rgba(0,0,0,0.1); width: 50%;height: 50%; border-radius: 10px; padding: 10px; margin: 30px auto">
	


<form action="editorderproject.php?id=<?php echo $x;  ?>" method="post" enctype="multipart/form-data"  style="border:1px solid #ccc; width: 75% padding: 20px; text-align: center;" >

        <h2>EDIT PROJECT</h2>  
      <hr>
     <label for="Name"><b>Student Name </b></label><br>
    <input type="text" name="pname" required id="name" value="<?php echo $row['sname'];   ?>"><br>

    <label for="description"><b>Description</b></label><br>
    <textarea type="text" name="des" required id="des">   <?php echo $row['description']  ?>; </textarea> <br>

    <label for="Uname"><b> Collage</b></label><br>
    <input type="text" name="uname" required id=" uname"  value="<?php echo $row['collage']; ?>"><br>

    <label for="uid"><b>User Phone</b></label><br>
    <input type="number"  name="uid" required id=" uid"   value="<?php echo $row['phone']; ?>" ><br>

<label for="uid"><b>User email</b></label><br>
    <input type="text"  name="uid" required id=" uid"   value="<?php echo $row['email']; ?>" ><br>

     
    
    
    <label >Old Date: <?php echo $row['date'];  ?> </label><br>
    <label>Enter New Date:</label> <br>
    <input type="date"  name="date" required id ="date"  ><br>







    <div class="clearfix">
      <a href="admin.php">
      <button type="button" class="cancelbtn "> Cancel</a></button>

      </a>
      <button type="submit" class="editbtn" name="edit" style="margin-left: 30px;  " >Save Info</button>
    </div>
  </form>
</div>




<script type="text/javascript" src="js/jQuery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>

</body>
</html> 


