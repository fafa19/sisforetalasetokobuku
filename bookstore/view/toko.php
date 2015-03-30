<?php
	include("header.php"); ?>
	<script>
	document.getElementById("2").style.background="white";
	</script>
	<?php
	if(isset($_REQUEST["simpan"])){
		$id=0;
		$query = mysql_query("SELECT MAX(Id_Toko) FROM toko WHERE Status=1");
		while($row  = mysql_fetch_array($query)){
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
	<div class="container" style="margin-left:30%">
		<div id="content">
			<form action="toko.php" method="post" class="beta-form-checkout" enctype="multipart/form-data">
				<div class="col-sm-6">
					<center>
						<h4>Form Tambah Toko Buku</h4>
					</center>
					<div class="space20">&nbsp;</div>
					
					<div class="form-block">
						<label for="company">Nama Toko</label>
						<input type="text" class="pa" placeholder="Nama Toko" name="ntoko"/>
					</div>
					
					<div class="form-block">
						<label for="adress">Alamat</label>
						<textarea class="pa" id="deskripsi" name="alamat"></textarea>
					</div>
					
					<div class="form-block">
						<label for="phone">No Telepon</label>
						<input type="text" id="phone" placeholder="No Telepon" name="telp"/>
					</div>
					
					<div class="form-block">
						<label for="company">Jam Operasional</label>
						<input type="text" class="pa" placeholder="Jam Operasional" name="jam"/>
					</div>
					
					<div class="form-block">
						<label for="phone">Foto</label>
						<input type="file" name="gambar1" class="pa" required />
					</div>
					<div class="form-block">
						<label for="phone">Koordinat Google Maps</label>
						<input type="file" name="gambar2" class="pa" required />
					</div>
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