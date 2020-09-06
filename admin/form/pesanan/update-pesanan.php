<?php 
	include '../../../connect.php';
	if(isset($_POST['btn-submit'])){
		$id 	= $_POST["id-pesanan"];
		$nama 	= $_POST["nama-pesanan"];
		$produk	= $_POST["produk-pesanan"];
		$kerja	= $_POST["kerja-pesanan"];
		$tanggal= $_POST["tanggal-pesanan"];
		$bayar	= $_POST["bayar-pesanan"];
		$kirim	= $_POST["kirim-pesanan"];
		$query 	= "UPDATE pesanan SET NAMA_PESANAN='{$nama}', PRODUK_PESANAN='{$produk}', KERJA_PESANAN='{$kerja}', TANGGAL_PESANAN='{$tanggal}', BAYAR_PESANAN='{$bayar}', KIRIM_PESANAN='{$kirim}' WHERE ID_PESANAN='{$id}'";
	    $result = $myPDO->prepare($query);
	    $result->execute();
	    header("location:../../database/pesanan/data-pesanan.php");
		echo json_encode($result);
	}
	
 ?>