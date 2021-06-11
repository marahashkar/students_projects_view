<?php



session_start();
ob_start();

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
<div class="container">
	
<div style="background-color: rgba(0,0,0,0.1); width: 100%;height: 100%; border-radius: 10px; padding: 10px; margin: 30px auto">
<h2 class=" text-danger text-center "> All Projects Order</h2> <hr>
  <table class="table table-striped table-bordered" id="x">
    <thead>
    <tr>
      <th> StudentName </th>
      <th>Project's Description </th>
      <th>Collage </th>

      <th> Student Phone </th>
      <th>Student's email </th>

      <th>Project's Date</th>

      <th>Delete</th>
      <th>Edit</th>





    </tr>
     </thead>


    <tbody> 
    <?php
    include'conn.php';
    $r=mysqli_query($con,"select * from orderpro");
    while($row=mysqli_fetch_array($r))
    {
      echo'
      
      <tr>
      <td>'.$row['sname'].'</td> 

      <td>'.$row['description'].'</td>      
      <td>'.$row['collage'].'</td>
      <td>'.$row['phone'].'</td> 
      <td>'.$row['email'].'</td> 
      <td>'.$row['date'].'</td> 

 


      <td> <a href="projectorder.php?m='.$row['id'].'" class="btn btn-info btn-s "> 
      <i class="glyphicon glyphicon-trash "></i> </a> </td> 


      <td> <a href="editorderproject.php? id='.$row['id'].'" class="btn btn-info btn-s"> 
     <i class ="glyphicon glyphicon-edit">  </i>
       </a> </td> 


      </tr>
      ';

    }

   if (isset($_GET['m'])) {
   $x=$_GET['m'];
   mysqli_query($con,"delete from orderpro where id='$x'");
   header("Location:projectorder.php");
   }




    ?>
    </tbody>
    </table>  
</div>
</div>






<script type="text/javascript" src="js/jQuery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>


<script type="text/javascript" src="datatables.min.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $('#x').DataTable();

  });


</script>

</body>
</html> 

<?php
ob_end_flush();
?>

