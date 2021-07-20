<?php
// if(isset($_REQUEST["div1"])){

$text=$_REQUEST["ip"];
$con=mysqli_connect("localhost","root","","person");
$query="select * from info where first_name='$text'";
$res=mysqli_query($con,$query);
$out=mysqli_fetch_all($res, MYSQLI_ASSOC);
echo json_encode($out);

// }
?>