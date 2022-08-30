<?php
include "koneksi.php";

$uname = $_POST['uname'];
$passw = $_POST['psw'];
$queries=sprintf("SELECT role FROM skd where username='%s' and password='%s'", mysqli_real_escape_string($con, $uname), mysqli_real_escape_string($con, $passw));
$ceklogin=mysqli_query($con,$queries);
$result=mysqli_fetch_array($ceklogin);

if(mysqli_num_rows($ceklogin) == null) {
	include 'index.php';

} else {
	printf("Select returned %d rows.\n", mysqli_num_rows($ceklogin)); echo '<br>';
	echo "role = ", $result[0];
}
?>