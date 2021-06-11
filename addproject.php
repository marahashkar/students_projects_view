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
input[type=text], textarea[type=text],input[type=text],input[type=number],input[type=file],input[type=text],input[type=file],input[type=date]{
  width: 50%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus,textarea[type=text]:focus ,input[type=text]:focus,input[type=number]:focus,input[type=file]:foucs,input[type=text]:focus,input[type=file]:focus,input[type=date]:focus{
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
  <?php 
include'conn.php';

$pname=isset($_POST['pname'])?$_POST['pname']:'';
$description=isset($_POST['des'])?$_POST['des']:'';
$uname=isset($_POST['uname'])?$_POST['uname']:'';
$uid=isset($_POST['uid'])?$_POST['uid']:'';


$imgname=isset($_FILES['img']['name'])?$_FILES['img']['name']:'';
$image=isset($_FILES['img']['tmp_name'])?$_FILES['img']['tmp_name']:'';


$section=isset($_POST['section'])?$_POST['section']:'';

$proname=isset($_FILES['pro']['name'])?$_FILES['pro']['name']:'';
$pro=isset($_FILES['pro']['tmp_name'])?$_FILES['pro']['tmp_name']:'';
$dd=date("Y-m-d");
              
              $imgn=$uid.'_'.$dd.'_'.$imgname;



$date=isset($_POST['date'])?$_POST['date']:'';

  if(isset($_POST['add'])) {

    
    move_uploaded_file($image, "uploadimages/$imgn");
    move_uploaded_file($pro, "projects/$proname");

    $r=mysqli_query($con,"insert into projects (name,description,uname,uid,image,section,project,date,type)
      values ('$pname','$description','$uname','$uid','$imgn','$section','$proname','$date','free')");
    
    if (isset($r)) {
     echo' <div class="alert alert-danger"> <h3>add successfully</h3> </div>';
    }
    else {
               echo' <div class="alert alert-danger"> <h3>add faild</h3> </div>';

    }
   


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
	


<form action="addproject.php" method="post" enctype="multipart/form-data"  style="border:1px solid #ccc; width: 75% padding: 20px; text-align: center;" >

        <h2>ADD PROJECT</h2>  
      <hr>
     <label for="Name"><b>Name Project</b></label><br>
    <input type="text" name="pname" required id="name" ><br>

    <label for="description"><b>Description</b></label><br>
    <textarea type="text" name="des" required id="des"> </textarea> <br>

    <label for="Uname"><b>User Name</b></label><br>
    <input type="text" name="uname" required id uname><br>

    <label for="uid"><b>User Id</b></label><br>
    <input type="number"  name="uid" required id uid><br>
     
     <label for="img"><b>Select Project's Image</b></label><br>
    <input type="file"  name="img" required id img><br>

    <label for="sec"><b>Section</b></label><br>
    <input type="text"  name="section" required id sec ><br>

    <label for="project"><b>The Project</b></label><br>
    <input type="file"  name="pro" required id pro><br>

    <label for="date"><b>Date</b></label><br>
    <input type="date"  name="date" required id date><br>
    



    <div class="clearfix">
      <a href="admin.php">
      <button type="button" class="cancelbtn "> Cancel</a></button>

      </a>
      <button type="submit" class="addbtn" name="add" style="margin-left: 30px; ">Add Project</button>
    </div>
  </form>
</div>




<script type="text/javascript" src="js/jQuery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>

</body>
</html> 


