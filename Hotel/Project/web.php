<?php

$con=mysqli_connect('localhost','root');

if($con){
   echo "We Will Reach You Soon";
}else{
 echo "Sorry! something went Wrong";
}

mysqli_select_db($con, 'msg');

$Name=$_POST['Name'];
$Email=$_POST['email'];
$Message=$_POST['message'];

$query = " insert website(Name,Email,Message)
values ('$Name','$Email', '$Message') ";

echo "$query";

mysqli_query($con, $query);

?>