<?php 
	include '../../../connect.php';
	echo json_encode($_POST);
		$query="DELETE FROM pesanan WHERE ID_PESANAN={$_GET['id_pesanan']}";
	    $result = $myPDO->prepare($query);
	    $result->execute();
	    //header("location:data-pesanan.php");
		//echo json_encode($result);
 ?>
<script>
	window.location.href = 'data-pesanan.php'
</script>