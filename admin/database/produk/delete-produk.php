<?php 
	include '../../../connect.php';
		$query="DELETE FROM produk WHERE ID_PRODUK={$_GET['id_produk']}";
	    $result = $myPDO->prepare($query);
	    if($result->execute()){
	    }
	    else{
	    	echo '<script language="javascript">alert("Data tidak dapat dihapus karena Foreign Key!")</script>';
	    }
 ?>
 <script>
	window.location.href = 'data-produk.php';
</script>