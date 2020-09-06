<?php 
	include '../../../connect.php';
	if(isset($_POST['btn-submit'])){
		$id 	= $_POST["id-mitra"];
		$nama 	= $_POST["nama-mitra"];
		$notelp = $_POST["notelp-mitra"];
		$email 	= $_POST["email-mitra"];
		$alamat	= $_POST["alamat-mitra"];
		$query 	= "UPDATE mitra SET NAMA_MITRA='{$nama}', NOTELP_MITRA='{$notelp}', EMAIL_MITRA='{$email}', ALAMAT_MITRA='{$alamat}' WHERE ID_MITRA='{$id}'";
	    $result = $myPDO->prepare($query);
	    $result->execute();
	    header("location:../../database/mitra/data-mitra.php");
		echo json_encode($result);
	}
	
 ?>