<?php
session_start();

?>



<!DOCTYPE html>
<html>
<head>
  <title>login</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style type="text/css">
    * {box-sizing: border-box}

/* style the container */
.container {
  position: relative;
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px 0 30px 0;
  margin: auto auto;
  width: 75%;
  height: 400px;
  margin-top: 30px;
}

/* style inputs and link buttons */
input,
.btn {
  width: 100%;
  padding: 12px;
  border: none;
  border-radius: 4px;
  margin: 5px 0;
  opacity: 0.85;
  display: inline-block;
  font-size: 17px;
  line-height: 20px;
  text-decoration: none; /* remove underline from anchors */
  margin-top: 20px;
}


input:hover,
.btn:hover {
  opacity: 1;
}

/* add appropriate colors to fb, twitter and google buttons */
.fb {
  background-color: #3B5998;
  color: white;
  margin-top: 20px;
}

.twitter {
  background-color: #55ACEE;
  color: white;
  margin-top: 20px;
}

.google {
  background-color: #dd4b39;
  color: white;
  margin-top: 20px;
}

/* style the submit button */
input[type=submit] {
  background-color: #4CAF50;
  color: white;
  cursor: pointer;
  margin-top: 20px;
}

input[type=submit]{
  background-color: #45a049;
  margin-top: 20px;
  margin-bottom: 20px;
}


/* Two-column layout */
.col {
  float: left;
  width: 50%;
  margin: auto;
  padding: 0 50px;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* vertical line */
.vl {
  position: absolute;
  left: 50%;
  transform: translate(-50%);
  border: 2px solid #ddd;
  height: 175px;
}

/* text inside the vertical line */
.inner {
  position: absolute;
  top: 50%;
  transform: translate(-50%, -50%);
  background-color: #f1f1f1;
  border: 1px solid #ccc;
  border-radius: 50%;
  padding: 8px 10px;
}

/* hide some text on medium and large screens */
.hide-md-lg {
  display: none;
}

/* bottom container */
.bottom-container {
  text-align: center;
  background-color: #666;
  border-radius: 0px 0px 4px 4px;
  margin: auto auto;
}

/* Responsive layout - when the screen is less than 650px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 650px) {
  .col {
    width: 50%;
    margin-top: 0;
  }
  /* hide the vertical line */
  .vl {
    display: none;
  }
  /* show the hidden text on small screens */
  .hide-md-lg {
    display: block;
    text-align: center;
  }
}
.forget{
  margin-top: 2px;
  cursor: pointer;
  color: gray;
  margin-left: 35%;
}


  .signin {
  background-color: #f1f1f1;
  text-align: center;
}
  </style>
}
</head>
<body  style="background-image: url(images/8.jpg);
background-repeat: no-repeat;background-size: cover;">


<div class="container">
  <form action="login.php" method="post">




    <div class="row">
      <h2 style="text-align:center">Login with Social Media or Manually</h2>
      <div class="vl">
        <span class="vl-innertext">or</span>
      </div>

      <div class="col">
        <a href="#" class="fb btn">
          <i class="fa fa-facebook fa-fw"></i> Login with Facebook
        </a>
        <a href="#" class="twitter btn">
          <i class="fa fa-twitter fa-fw"></i> Login with Twitter
        </a>
        <a href="#" class="google btn">
          <i class="fa fa-google fa-fw"></i> Login with Google+
        </a>
      </div>

      <div class="col">
        <div class="hide-md-lg">
          <p>Or sign in manually:</p>
        </div>

        <input type="text" name="username" placeholder="Username" required id="un">
        <input type="password" name="password" placeholder="Password" required id="pass">
        <input type="submit" name="btn1" value="Login" id="login">
        <a href="#" class="forget" id="fp">Forget Your Password?</a>
        
        <?php 
        include'conn.php';

$x=isset($_POST['username'])?$_POST['username']:'';
$y=isset($_POST['password'])?$_POST['password']:'';
$z=md5($y);
  if(isset($_POST['btn1'])) {

   $rr=mysqli_query($con,"select * from users where name='$x' and password='$z' ");
     if(mysqli_num_rows($rr)>0){
       $t=mysqli_fetch_array($rr);
       $_SESSION['n']=$t['name'];
       $_SESSION['ph']=$t['phone'];
       $_SESSION['em']=$t['email'];

       if ($t['type']==0){ 
             $_SESSION['type']=$t['type'];
              header("Location:admin.php");            }
              if ($t['type']==1)  {
                $_SESSION['type']=$t['type'];
          header("Location:user.php");              }
          if ($t['type']==2)  {
                $_SESSION['type']=$t['type'];
          header("Location:doctor.php");              }
              
              

     }
  else{
      echo '<h1 text-align:center> you are not memeber</h1>';
       }
 

  }
  
  














 ?>



      </div>

    </div>
   <div class="signin">
    <p>Already have an account? <a href="signin.php" target="_blank">Sign in</a>.</p>
  </div>
  </form>
  
</div>

    
  </div>
</div>





  














 



<script type="text/javascript" src="js/jQuery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>



</body>
</html>