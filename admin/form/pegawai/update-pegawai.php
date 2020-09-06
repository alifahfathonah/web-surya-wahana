<?php 
	include '../../../connect.php';
	//include '../../database/pegawai/data-pegawai.php';
	if(isset($_POST['btn-submit'])){
		$id 	= $_POST["id-pegawai"];
		$ktp 	= $_POST["ktp-pegawai"];
		$nama 	= $_POST["nama-pegawai"];
		$notelp = $_POST["notelp-pegawai"];
		$alamat	= $_POST["alamat-pegawai"];
		$query 	= "UPDATE pegawai SET KTP_PEGAWAI='{$ktp}', NAMA_PEGAWAI='{$nama}', NOTELP_PEGAWAI='{$notelp}', ALAMAT_PEGAWAI='{$alamat}' WHERE ID_PEGAWAI='{$id}'";
	    $result = $myPDO->prepare($query);
	    $result->execute();
	    header("location:../../database/pegawai/data-pegawai.php");
		echo json_encode($result);
	}
	
 ?>