<?php
include('connect.php');
//include('akses.php'); 
session_start();
//if(!isset($_SESSION['username'] )== 0){
//	header('Location:admin/index.php');
//}

if(isset($_POST['login'])){

	$username=$_POST['username'];
	$password=$_POST['password'];

	try{
		$sql = "SELECT * FROM users WHERE user_username = :user AND user_password = :pass";
		$result = $myPDO->prepare($sql);
		$result->bindParam(':user', $username);
		$result->bindParam(':pass', $password);
		$result->execute();

		$count = $result->rowCount();
		if($count == 0){
			echo '<script language="javascript">alert("Username atau Password salah, Silahkan coba kembali");document.location="login.html"</script>';
		}else{
			$_SESSION['admin']=$username;
			header('Location:admin/index.php');
		}
		//echo json_encode($row);
	}
	catch(PDOException $e) {
		echo $e->getMessage();
	}
	
}
?>
