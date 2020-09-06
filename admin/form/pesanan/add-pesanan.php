<?php 
	include '../../../connect.php';
	if(isset($_POST['btn-submit'])){
		$nama 	= $_POST["nama-pesanan"];
		$produk = $_POST["produk-pesanan"];
		$kerja	= $_POST["kerja-pesanan"];
		$tanggal= $_POST["tanggal-pesanan"];
		$bayar	= $_POST["bayar-pesanan"];
		$kirim	= $_POST["kirim-pesanan"];
		$query 	= "INSERT INTO pesanan (ID_PESANAN, NAMA_PESANAN, PRODUK_PESANAN, KERJA_PESANAN, TANGGAL_PESANAN, BAYAR_PESANAN, KIRIM_PESANAN) VALUES (NULL, '{$nama}', '{$produk}', '{$kerja}', '{$tanggal}', '{$bayar}', '{$kirim}')";
	    $result = $myPDO->prepare($query);
	    $result->execute();
	    header("location:../../database/pesanan/data-pesanan.php");
		echo json_encode($result);
	}
	
 ?>