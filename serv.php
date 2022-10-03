 <?php

$databaseHost = '127.0.0.1';
$databaseName = 'web3'; 
$databaseUsername = 'root';  
$databasePassword = '';  

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);


if(isset($_POST['sub']))
{
$username = $_POST['username'];
$password = $_POST['password'];

$res = mysqli_query($mysqli,"select* from users where username='$username'and password='$password'");
$result=mysqli_fetch_array($res);
if($result)
{

header("location:index.php"); 
	
}
else
{
	header("location:login.php"); 
}
}
?>
?>   