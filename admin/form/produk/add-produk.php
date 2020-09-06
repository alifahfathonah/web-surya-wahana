<?php 
	include '../../../connect.php';
	if(isset($_POST['btn-submit'])){
		$nama 	= $_POST["nama-produk"];
		$mitra 	= $_POST["mitra-produk"];
		$jenis = $_POST["jenis-produk"];
		$harga	= $_POST["harga-produk"];
		$query 	= "INSERT INTO produk (ID_PRODUK, ID_MITRA, NAMA_PRODUK, JENIS_PRODUK, HARGA_PRODUK) VALUES (NULL, '{$mitra}', '{$nama}', '{$jenis}', '{$harga}')";
	    $result = $myPDO->prepare($query);
	    $result->execute();
	    header("location:../../database/produk/data-produk.php");
		echo json_encode($result);
	}
	
 ?>