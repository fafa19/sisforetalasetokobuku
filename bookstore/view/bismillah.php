<?php
	include("header.php");
	if(isset($_REQUEST["simpan"])){
		$id=0;
		$query = mysql_query("SELECT MAX(Id_Toko) FROM toko WHERE Status=1");
		while($row  = mysql_fetch_array($query)){
			$nama=$row[1];
			$alamat=$row[2];
			$telp=$row[3];
			$jam=$row[4];
			$foto=$row[5];
			$kor=$row[6];
			$id=$row[0];
		}
		$id+=1;
		$fileName = $_FILES['gambar1']['name'];
		$fileName = $_FILES['gambar2']['name'];
		move_uploaded_file($_FILES['gambar1']['tmp_name'], "images/".$id.$_FILES['gambar1']['name']);
		move_uploaded_file($_FILES['gambar2']['tmp_name'], "images/peta".$id.$_FILES['gambar2']['name']);
		$sql=mysql_query("INSERT INTO toko(Id_Toko, Nama, Alamat, Telp, Jam, Gambar, Peta, Status) values (".$id.",'".strtoupper($_REQUEST["ntoko"])."','".strtoupper($_REQUEST["alamat"])."','".$_REQUEST["telp"]."','".strtoupper($_REQUEST["jam"])."','".$id.$_FILES['gambar1']['name']."','peta".$id.$_FILES['gambar2']['name']."', 1)");
		if($sql){
			$sql1=mysql_query("INSERT INTO rating(Id_Toko, Rating) values (".$id.", 0)");
			if($sql1){
				$sql2=mysql_query("INSERT INTO populer(Id_Toko, View) values (".$id.", 0)");
				if($sql2){
					echo"<script>alert('Data Berhasil Ditambah !');history.go(-1);</script>";
					header("location:toko.php");
				}else{echo "<script>alert('gagal2')</script>";}
			}else{echo "<script>alert('gagal1')</script>";}
		}
	}else if(isset($_REQUEST["batal"])){
		header("location:toko.php");
	} 
?>
	<div class="container">
		<div id="content">
			<form action="toko.php" method="post" class="beta-form-checkout" enctype="multipart/form-data">
				<div class="col-sm-6">
					<center>
						<h4>Form Tambah Toko Buku</h4>
					<table>
					<tr>
					<td>Nama Toko</td>
					<td> : </td>
					<td><?php echo "<input type='text' class='pa' placeholder='Nama Toko' name='ntoko' value='".$nama."' />"; ?></td>
					</tr>
					<tr>
					<td>Alamat</td>
					<td> : </td>
					<td><?php echo "<textarea class='pa' id='deskripsi' name='alamat'>".$alamat."</textarea>"; ?></td>
					</tr>
					<tr>
					<td>No Telepon</td>
					<td> : </td>
					<td><?php echo "<input type='text' id='phone' placeholder='No Telepon' name='telp' value='".$telp."' />"; ?></td>
					</tr>
					<tr>
					<td>Jam Operasional</td>
					<td> : </td>
					<td><?php echo "<input type='text' class='pa' placeholder='Jam Operasional' name='jam' value='".$jam."' />"; ?></td>
					</tr>
					<tr>
					<td>Foto</td>
					<td> : </td>
					<td><?php echo "<input type='file' name='gambar1' class='pa' value='".$foto."' required />"; ?></td>
					</tr>
					<tr>
					<td>Koordinat Google Maps</td>
					<td> : </td>
					<td><?php echo "<input type='file' name='gambar2' class='pa' value='".$kor."' required />"; ?></td>
					</tr>
					</table>
					</center>
					<div class="space20">&nbsp;</div>
					<center>
						<input type="submit" class="beta-btn primary" name="simpan" value="Simpan"/>
						<input type="submit" class="beta-btn primary" name="batal" value="Batal"/>
					</center>
					<div class="form-block"></div>
				</div>
			</form>
		</div>
	</div>
<?php include("footer.php");?>