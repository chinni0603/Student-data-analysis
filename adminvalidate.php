<?php
include("connection.php");

if(isset($_POST['Submit']))
{
$username = $_POST['uname'];
$password = $_POST['password'];

$res = mysqli_query($mysqli,"select* from admin where username='$username'and password='$password'");
$result=mysqli_fetch_array($res);
if($result)
{
echo "You are login Successfully ";
header("location:https://app.powerbi.com/groups/me/list");

}
else
{
	echo "<script language='javascript'>";
	echo "alert('WRONG INFORMATION')";
	echo "</script>";
	die();
}
}
?>
