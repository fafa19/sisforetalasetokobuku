<?php
	include("header.php"); ?>
	<script>
	document.getElementById("1").style.background="white";
	</script>
	<?php
	echo "<div class='container'>";
			echo "<div id='content'>";
				echo "<center>";
					$query = mysql_query("SELECT T.Id_Toko, T.Nama, T.Gambar FROM POPULER P, TOKO T WHERE P.Id_Toko=T.Id_Toko AND T.Status=1 ORDER BY P.View DESC");
				echo "<table align='center' cellpadding='1px'>";
				echo "<tr>";
				echo "<td>";
				echo "<h4>Toko Buku Paling Sering Di Lihat</h4>";
				echo "<table align='center' cellpadding='1px'>";
						$temp=0;
						echo "<tr>";
						while($row  = mysql_fetch_array($query)){
							if($temp<=3){
							echo	 "<td><img src='images/".$row[2]."' title='".$row[1]."' width=150 heigth=200/><h10><br><a href='detail.php?id=$row[0]'><center>".$row[1]."</center></a></h10></td>";
							}else{
								break;
							}
						}
						echo "</tr>";
					echo "</table><br><br>";
					echo "</td>";
					echo "</tr>";
					echo "<tr>";
					echo "<td>";
					$query = mysql_query("SELECT T.Id_Toko, T.Nama, T.Gambar FROM RATING R, TOKO T WHERE R.Id_Toko=T.Id_Toko AND T.Status=1 ORDER BY R.RATING DESC");
					echo "<h4>Toko Buku Dengan Rating Tertinggi</h4>";
					echo "<table margin-left='100px' align='center' cellpadding='1px'>";
						$temp=0;
					echo	 "<tr>";
						while($row  = mysql_fetch_array($query)){
							if($temp<=3){
							echo	 "<td><img src='images/".$row[2]."' title='".$row[1]."' width=150 heigth=200/><br><a href='detail.php?id=$row[0]'><center>".$row[1]."</center></a></h10></td>";
							}else{
								break;
							}
						}
					echo	 "</tr>";
					echo "</table><br><br>";
					echo "</td>";
					echo "</tr>";
					echo "</table><br><br>";
				echo "</center>";
				echo "<div class='space20'>&nbsp;</div>";
			echo "</div>";
		echo "</div>";
 include("footer.php"); ?>
