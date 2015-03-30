<?php
	include("config.php");
	session_start();
	if(isset($_REQUEST["bt_login"])){
		$query="SELECT * FROM `admin` WHERE Username='".$_REQUEST["user"]."' and Password='".$_REQUEST["password"]."'";
		$result=mysql_query($query);
		$count=mysql_num_rows($result);
		if($count==1){
			while($baris = mysql_fetch_array($result)){
				$_SESSION["admin_user"]=$baris[0];
				$_SESSION["admin_pass"]=$baris[1];
				$_SESSION["admin_nama"]=$baris[2];
				break;
			}
		}
	}
	if(isset($_SESSION["admin_user"])){
		header("location:view/index.php");
	}
?>
<html>
	<head>
		<title>Sistem Informasi Etalase Toko Buku | 
		Administrator</title>
		<link href="css/style.css" rel="stylesheet" type="text/css">
		<script src="JS/jquery.js"></script></script>
	</head>
	<body>
		<div id="utama">
			<h1>Sistem Informasi Etalase Toko Buku | Administrator</h1>
			<div id="login">
				<img src="images/2.png" width="97" height="105" align="left">
				<form action="index.php" method='POST'>
					<div id="isi">
						<div class="text">Username : <input type="text" name="user" id="user" placeholder="Username"> </div>
						<div class="text">Password : <input type="password" name="password" id="pass" placeholder="Password"> </div>	 
					</div>
					<input type="submit" value="Login" id="bt_login" name="bt_login"> <br>	
				</form>
				<div id="view"></div>	
			</div>	
		</div>
	</body>
</html>
