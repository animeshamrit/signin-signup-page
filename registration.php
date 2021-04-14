<?php
session_start();
$user = $_POST['user'];
$password = $_POST['password'];
$name = $_POST['name'];
$server="sql212.epizy.com";
$usernameser="epiz_27494773";
$passwordser="VCWOlhKgzRgq9";
$dbname="epiz_27494773_relylabs";
$con=mysqli_connect($server,$usernameser,$passwordser,$dbname);
//$con=mysqli_connect('localhost','root');
//mysqli_select_db($con,'chatbook');
$r="select * from user where username='$user'";
//$p="select * from user where password='$password'";
$result=mysqli_query($con,$r);
//$result1=mysqli_query($con,$p);
$n=mysqli_num_rows($result);
//$n1=mysqli_num_rows($result1);
$_SESSION['exist']=0;
//$_SESSION['existpass']=0;
if($n==0)
{	
    $len=strlen($password);
    if($len<8)
    {
       $_SESSION['length']=1;
       header('location:signup1.php');
    }
    else{
	$qu=" INSERT INTO user(username, password,name) VALUES ('$user','$password','$name')";
	mysqli_query($con,$qu);
	$_SESSION['exist']=0;
	header('location:login.php');
    }
}
else
{
	$_SESSION['exist']=1;
	header('location:signup1.php');
}
	
?>