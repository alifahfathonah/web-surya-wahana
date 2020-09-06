<?php 
	include '../connect.php';
	echo json_encode($_POST);
		$query="DELETE FROM klien WHERE ID_KLIEN={$_GET['id_klien']}";
	    $result = $myPDO->prepare($query);
	    if ($result->execute()) {
	    }
	    else{
	    	echo '<script language="javascript">alert("Data tidak dapat dihapus karena Foreign Key!")</script>';
	    }
	    
	    //header("location:index.php");
		//echo json_encode($result);
 ?>
 <script>
 	window.location.href = 'index.php'
 </script>