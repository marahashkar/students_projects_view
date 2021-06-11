<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>contact us</title>
  <style type="text/css">
  .topnav {
  background-color: #333;
  overflow: hidden;
}

/* Style the links inside the navigation bar */
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

/* Add an active class to highlight the current page */
.active {
  background-color: #4CAF50;
  color: white;
}

.dropdown .dropbtn {
  font-size: 17px;
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

/* Style the dropdown content (hidden by default) */

/* Add a dark background on topnav links and the dropdown button on hover */
.topnav a:hover, .dropdown:hover .dropbtn {
  background-color: #555;
  color: white;
}



    
input[type=text], select, textarea {
  width: 100%; /* Full width */
  padding: 12px; /* Some padding */ 
  border: 1px solid #ccc; /* Gray border */
  border-radius: 4px; /* Rounded borders */
  box-sizing: border-box; /* Make sure that padding and width stays in place */
  margin-top: 6px; /* Add a top margin */
  margin-bottom: 16px; /* Bottom margin */
  resize: vertical /* Allow the user to vertically resize the textarea (not horizontally) */
}

/* Style the submit button with a specific background color etc */
input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

/* When moving the mouse over the submit button, add a darker green color */
input[type=submit]:hover {
  background-color: #45a049;
}

/* Add a background color and some padding around the form */
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}




  </style>
</head>
<body>
<div class="header">

<div class="topnav" id="myTopnav">
  <a href="index.html" class="active">Home</a>
    
    </div>
  </div>
<div class="container" style="width: 500px; height: 800px; margin: auto;">
  <form action="contact.php" method="post">

    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

      <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">


    <label for="email"> YOUR EMAIL</label>
    <input type="text" id="email" name="email" placeholder="Your email..">

    <label for="phone">PHONE</label>
    <input type="text" id="phone" name="PHONE" placeholder="Your phone..">


    <label for="country">Country</label>
    <select id="country" name="country">
      <option value="Syria">Syria</option>
      <option value="Lattakia">Lattakia</option>
      <option value="Damascuse">Damascuse</option>
      <option value="Homs">Homs</option>

    </select>

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="send" name="sendb">

  </form>
  
</div>
<?php
  include'conn.php';

$n=isset($_POST['firstname'])?$_POST['firstname']:'';
$ln=isset($_POST['lastname'])?$_POST['lastname']:'';
$e=isset($_POST['email'])?$_POST['email']:'';
$ph=isset($_POST['PHONE'])?$_POST['PHONE']:'';
$co=isset($_POST['country'])?$_POST['country']:'';
$sub=isset($_POST['subject'])?$_POST['subject']:'';

 if (isset($_POST['sendb'])){
  $r=mysqli_query($con,"insert into usersc (name,lname,email,phone,country,subject) values ('$n','$ln','$e','$ph','$co','$sub')");
  if (isset($r)) {
     echo' <div class="alert alert-danger"> <h3>send successfully</h3> </div>';
    }
    else {
               echo' <div class="alert alert-danger"> <h3>send faild</h3> </div>';

    }
   
}

?>

</body>
</html>