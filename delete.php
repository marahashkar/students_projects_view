<?php
include 'conn.php';

$x=$_POST['id'];




$res=mysqli_query($con,"delete from users where id='$x'");

if(isset($res)){
	$arr['f']=true;
}
else{
	$arr['f']=false;
}

echo json_encode($arr);







?>