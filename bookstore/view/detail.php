<?php
	include("header.php"); ?>
	<script>
	document.getElementById("2").style.background="white";
	</script>
	<?php
	echo "<div class='container'>";
			echo "<div id='content'>";
				echo "<center>";
				if(isset($_REQUEST["id"])){
					$query = mysql_query("SELECT * FROM toko WHERE Id_Toko=".$_REQUEST["id"]." AND Status=1");
					echo "<table border=1 align='center' cellpadding='1px'>";
						while($row  = mysql_fetch_array($query)){
							echo "<tr>";
								echo "<td><h5>".$row[1]."</h5><br><img src='images/".$row[5]."' title='".$row[1]."' width=250 heigth=300/>&nbsp;&nbsp;&nbsp;&nbsp;</td>";
								echo "<td><br><br><br>";
									echo "Nama Toko : ".$row[1]."<br>";
									echo "Alamat : ".$row[2]."<br>";
									echo "Nomer Telefon : ".$row[3]."<br>";
									echo "Jam Oprasional : ".$row[4]."<br>";
									echo "Rating ";
								echo "</td>";
								echo "<td><br><br>&nbsp;&nbsp;&nbsp;&nbsp;<img src='images/".$row[6]."' title='".$row[1]."' width=300 heigth=350/></td>";
							echo "</tr>";
						}
						echo "<tr>";
								echo "<td>Komentar</td>";
								echo "<td>Tulis Komentar</td>";
						echo "</tr>";
					echo "</table><br><br>";
				}else{
					header("location:index.php");
				}
				echo "</center>";
				echo "<div class='space20'>&nbsp;</div>";
			echo "</div>";
		echo "</div>";
 include("footer.php"); ?>
