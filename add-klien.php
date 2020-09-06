<?php 
	include 'connect.php';
	if(isset($_POST['btn-submit'])){
		$nama 	= $_POST["nama-klien"];
		$notelp = $_POST["notelp-klien"];
		$email 	= $_POST["email-klien"];
		$pesan	= $_POST["pesan-klien"];
		$query 	= "INSERT INTO klien (ID_KLIEN, NAMA_KLIEN, EMAIL_KLIEN, NOTELP_KLIEN, PESAN_KLIEN) VALUES (NULL, '{$nama}', '{$email}', '{$notelp}', '{$pesan}')";
	    $result = $myPDO->prepare($query);
	    $result->execute();
	    //header("location:index.html");
		//echo json_encode($result);
	}
	
 ?>