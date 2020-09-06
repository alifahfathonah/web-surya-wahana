<?php 
	include '../../../connect.php';
	if(isset($_POST['btn-submit'])){
		$nama 	= $_POST["nama-mitra"];
		$notelp = $_POST["notelp-mitra"];
		$email 	= $_POST["email-mitra"];
		$alamat	= $_POST["alamat-mitra"];
		$query 	= "INSERT INTO mitra (ID_MITRA, NAMA_MITRA, EMAIL_MITRA, NOTELP_MITRA, ALAMAT_MITRA) VALUES (NULL, '{$nama}', '{$email}', '{$notelp}', '{$alamat}')";
	    $result = $myPDO->prepare($query);
	    $result->execute();
	    header("location:../../database/mitra/data-mitra.php");
		echo json_encode($result);
	}
	
 ?>