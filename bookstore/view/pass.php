<?php
	include("header.php"); ?>
	<script>
	document.getElementById("5").style.background="white";
	</script>
	<?php

	if(isset($_REQUEST["ganti"])){
		if($_SESSION["admin_pass"]==$_REQUEST["pas1"]){
			if($_REQUEST["pas2"]==$_REQUEST["pas3"]){
				$query = mysql_query("UPDATE `admin` SET Password='".$_REQUEST["pas2"]."' WHERE Username='".$_SESSION["admin_user"]."'");
				echo "<script language='javascript'>alert('Sukses Ganti Password');</script>";
			}else{
				echo "<script language='javascript'>alert('Pastikan Password Baru dan Konfirmasi Password Baru Sama');</script>";
			}
		}else{
			echo "<script language='javascript'>alert('Password Lama Salah');</script>";
		}
		while($row  = mysql_fetch_array($query)){
			$passwordLama=$row[1];
			$passwordLama=$row[2];
			$telp=$row[3];
			
	}
	}
?>
	<div class="container" style="margin-left:30%">
		<div id="content">
			<form action="password.php" method="post" class="beta-form-checkout">
				<div class="col-sm-6">
					<center>
						<h4>Konfigurasi Password Baru</h4>
					<table>
					<tr>
					<td>Password Lama</td>
					<td> : <td>
					<td><?php echo "<input type='password' class'pa' placeholder='Password Lama' name='pas1' value='".$passwordLama."'/>"; ?></td>
					</tr>
					<tr>
					<td>Password Baru</td>
					<td> : <td>
					<td><?php echo "<input type='password' class='pa' placeholder='Password Baru' name='pas2' value='".$passwordBaru."'/>"; ?></td>
					</tr>
					<tr>
					<td>Konfirmasi Password Baru</td>
					<td> : <td>
					<td><?php echo "<input type='password' class='pa' placeholder='Konfirmasi Password Baru' name='pas3' value='".$konfirmasipasswordBaru."'/>";?></td>
					</tr>
					</table>
					</center>
					<div class="space20">&nbsp;</div>
					<div class="form-block">
						<label for="company">Password Lama</label>
						<input type="password" class="pa" placeholder="Password Lama" name="pas1"/>
					</div>
					<div class="form-block">
						<label for="company">Password Baru</label>
						<input type="password" class="pa" placeholder="Password Baru" name="pas2"/>
					</div>
					<div class="form-block">
						<label for="company">Konfirmasi Password Baru</label>
						<input type="password" class="pa" placeholder="Konfirmasi Password Baru" name="pas3"/>
					</div>
					<div class="form-block"></div>
					<center>
						<input type="submit" class="beta-btn primary" name="ganti" value="Simpan"/>
					</center>
					<div class="form-block"></div>
				</div>
			</form>
		</div>
	</div>
	<?php include("footer.php"); ?>