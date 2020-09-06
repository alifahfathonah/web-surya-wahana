<?php 
	include '../../../connect.php';
	if(isset($_POST['btn-submit'])){
		$ktp 	= $_POST["ktp-pegawai"];
		$nama 	= $_POST["nama-pegawai"];
		$notelp = $_POST["notelp-pegawai"];
		$alamat	= $_POST["alamat-pegawai"];
		$query 	= "INSERT INTO pegawai (ID_PEGAWAI, KTP_PEGAWAI, NAMA_PEGAWAI, NOTELP_PEGAWAI, ALAMAT_PEGAWAI) VALUES (NULL, '{$ktp}', '{$nama}', '{$notelp}', '{$alamat}')";
	    $result = $myPDO->prepare($query);
	    $result->execute();
	    header("location:../../database/pegawai/data-pegawai.php");
		echo json_encode($result);
	}
	
 ?>