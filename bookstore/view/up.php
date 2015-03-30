<?php
	include("config.php");
	if(isset($_REQUEST["up"])){
		$query = "UPDATE toko SET Status=0 WHERE Id_Toko=".$_REQUEST["del"];
		$input=mysql_query($query);
		if($input){
			echo "Sukses";
		}else{
			echo "Gagal";
		}
	}else if(isset($_REQUEST["del"])){
		$query = "UPDATE toko SET Status=0 WHERE Id_Toko=".$_REQUEST["del"];
		$input=mysql_query($query);
		if($input){
			echo "Sukses";
		}else{
			echo "Gagal";
		}
	}
?>