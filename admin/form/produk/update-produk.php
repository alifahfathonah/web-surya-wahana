<?php 
	include '../../../connect.php';
	if(isset($_POST['btn-submit'])){
		$id 	= $_POST["id-produk"];
		$nama 	= $_POST["nama-produk"];
		$mitra 	= $_POST["mitra-produk"];
		$jenis 	= $_POST["jenis-produk"];
		$harga	= $_POST["harga-produk"];
		$query 	= "UPDATE produk SET ID_MITRA='{$mitra}', NAMA_PRODUK='{$nama}', JENIS_PRODUK='{$jenis}', HARGA_PRODUK='{$harga}' WHERE ID_PRODUK='{$id}'";
	    $result = $myPDO->prepare($query);
	    $result->execute();
	    header("location:../../database/produk/data-produk.php");
		echo json_encode($result);
	}
	
 ?>