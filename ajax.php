<?php
// if(isset($_REQUEST["fname"])){
$reg="^".$_REQUEST["fname"];
$con=mysqli_connect("localhost","root","","person");
$query="select first_name from info where first_name regexp '$reg'";
$res=mysqli_query($con,$query);
$out=mysqli_fetch_all($res, MYSQLI_ASSOC);
echo json_encode($out);
// }
?>