<?php
	include("header.php");
	if(isset($_REQUEST["id"])){
		$query = mysql_query("SELECT * FROM toko WHERE Id_Toko=".$_REQUEST["id"]." AND Status=1");
		while($row  = mysql_fetch_array($query)){
			$nama=$row[1];
			$alamat=$row[2];
			$telp=$row[3];
			$jam=$row[4];
			$foto=$row[5];
			$kor=$row[6];
		}
	}
?>
	<div class="container">
		<div id="content">
			<form action="toko.php" method="post" class="beta-form-checkout" enctype="multipart/form-data">
				<div class="col-sm-6">
					<center>
						<h4>Form Update Toko Buku</h4>
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