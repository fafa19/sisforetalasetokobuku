<?php
	include("header.php"); ?>
	<script>
	document.getElementById("2").style.background="white";
	</script>
	<?php
	$query = mysql_query("SELECT * FROM TOKO WHERE Status=1");
		echo "<div class='container'>";
			echo "<div id='content'>";
				echo "<center>";
					echo "<a href='toko.php' style='text-align:right;'><h6>Buat Baru</h6></a>";
					echo "<table>";
						echo "<tr align='center'>";
							echo "<td width='200'><h8>Nama Toko Buku</h8></td>";
							echo "<td width='200'><h8>Alamat</h8></td>";
							echo "<td width='200'><h8>No Telepon</h8></td>";
							echo "<td width='200'><h8>Jam Operasional</h8></td>";
							echo "<td width='100'><h8>Operasi</h8></td>";
						echo "</tr>";
						while($row  = mysql_fetch_array($query)){
							echo "<tr>";
								echo "<td><h10>".$row[1]."</h10></td>";
								echo "<td><h10>".$row[2]."</h10></td>";
								echo "<td><h10>".$row[3]."</h10></td>";
								echo "<td><h10>".$row[4]."</h10></td>";
								echo "<td><div id='".$row[0]."' onclick='up(this.id)' style='width:20px; height:20px; background-image:url(../images/edit.png); background-repeat:no-repeat; background-size:cover; float:left;'></div><div id='".$row[0]."' onclick='del(this.id)' style='width:20px; height:20px; background-image:url(../images/del.png); background-repeat:no-repeat; background-size:cover; margin-left:50px;'></div></td>";
							echo "</tr>";
						}
					echo "</table>";
				echo "</center>";
				echo "<div class='space20'>&nbsp;</div>";
			echo "</div>";
		echo "</div>";
 include("footer.php"); ?>
 
 <script type="text/javascript">
		function up(id){
			window.location="gantoko.php?id="+id;
		}
		function del(id){
			confirmed = window.confirm('Apakah Anda Yakin Akan Menghapus Informasi Toko Buku?');
			if (confirmed){
				$.get("up.php", {del:id}, function (data){
					if(data=="Sukses"){
						alert('Data berhasil di hapus');
						window.location.assign("daftar.php");
					}else{
						alert('Data gagal di hapus');
						window.location.assign("daftar.php");
					}
				});
			}
		}
	</script>
