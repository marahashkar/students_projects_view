   <!DOCTYPE html>
<html>
<head>
  <title>signin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" type="text/css" href="conn.php">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
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

input[type=text]:focus, input[type=password]:focus , input[type=text]:focus, input[type=phone]:focus{
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

.signupbtn {
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
.signupbtn:hover {background: #eee;}


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
</head>
<body style="background-image: url(images/9.jpg);
background-repeat: no-repeat;background-size: cover;">

<div style="background-color: rgba(0,0,0,0.1); width: 75%;height: 75%; border-radius: 10px; padding: 10px; margin: 30px auto">

<form action="signin.php" method="post"  style="border:1px solid #ccc; width: 50% padding: 20px; text-align: center;" >
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
     <label for="name"><b>Name</b></label><br>
    <input type="text"  placeholder="Enter Your Name" name="name" required id="name" ><br>

    <label for="phone"><b>Phone</b></label><br>
    <input type="text" placeholder="Enter Your Phone" name="phone" required id="phone"><br>

    <label for="email"><b>Email</b></label><br>
    <input type="text" placeholder="Enter Email" name="email" required id email><br>

    <label for="psw"><b>Password</b></label><br>
    <input type="password" placeholder="Enter Password" name="pass" required id pass><br>

    

    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label>

    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

    <div class="clearfix">
      <a href="login.php">
      <button type="button" class="cancelbtn" > Cancel</a></button>

      </a>
      <button type="submit" class="signupbtn" name="signup">Sign Up</button>
    </div>

</form>
</div>
<?php 
session_start();
include'conn.php';
$x=isset($_POST['name'])?$_POST['name']:'';
$y=isset($_POST['phone'])?$_POST['phone']:'';
$z=isset($_POST['email'])?$_POST['email']:'';
$w=isset($_POST['pass'])?$_POST['pass']:'';

$newpass=md5($w);

  if (isset($_POST['signup'])) {


   $rr=mysqli_query($con,"insert into users(name,email,password,phone,section,type) values('$x','$z','$newpass','$y','student',1)") ;
   if (isset($rr)) 
   {
     echo'<script> alert ("creaye account suuccessfuly")</script>';}
     else{
     echo'
    <script>alert("create account faild");</script> ';}
   
   

  
  }






 ?>



<script type="text/javascript" src="js/jQuery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>


</body>
</html>
