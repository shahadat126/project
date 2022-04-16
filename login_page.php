<?php

$conn = mysqli_connect("localhost", "root", "", "showroom");
 if(!$conn){
	echo ("Error connection:".mysqli_connect_error());
 }
 if(isset($_POST['submit']))
 {
	 $user_name=$_POST['user_name'];
	 $password=$_POST['password'];
	 
	 $sql ="select * from user_registration where user_name = '$user_name' and password='$password'";
	 $result= mysqli_query($conn,$sql);
	 $count= mysqli_num_rows($result);
	 echo $count;
	 
	 
 }




 
?>