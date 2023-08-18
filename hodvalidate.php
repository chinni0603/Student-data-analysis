<?php
include("connection.php");

if(isset($_POST['Submit']))
{
$username = $_POST['uname'];
$password = $_POST['password'];

$res = mysqli_query($mysqli,"select* from hod where username='$username'and password='$password'");
$result=mysqli_fetch_array($res);
if($result){
if($username == 'cse@gmail.com')
{
echo "You are login Successfully ";
header("location:cse.html");
}
elseif($username == 'ece@gmail.com')
{
echo "You are login Successfully ";
header("location:ece.html");
}
elseif($username == 'eee@gmail.com')
{
echo "You are login Successfully ";
header("location:eee.html");
}
elseif($username == 'it@gmail.com')
{
echo "You are login Successfully ";
header("location:it.html");
}
elseif($username == 'mech@gmail.com')
{
echo "You are login Successfully ";
header("location:mech.html");
}
elseif($username == 'chem@gmail.com')
{
echo "You are login Successfully ";
header("location:chem.html");
}
elseif($username == 'civil@gmail.com')
{
echo "You are login Successfully ";
header("location:civil.html");
}
else
{
	echo "<script language='javascript'>";
	echo "alert('WRONG INFORMATION')";
	echo "</script>";
	die();
}
}
}
?>
