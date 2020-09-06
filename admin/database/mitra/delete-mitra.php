<?php 
	include '../../../connect.php';
		$query="DELETE FROM mitra WHERE ID_MITRA={$_GET['id_mitra']}";
	    $result = $myPDO->prepare($query);
	    if($result->execute()){
		}
		else{
			echo '<script language="javascript">alert("Data tidak dapat dihapus karena Foreign Key!")</script>'
		}
 ?>
 <script>
 	window.location.href = 'data-mitra.php'
 </script>