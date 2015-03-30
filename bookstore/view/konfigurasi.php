<?php
	include("header.php"); ?>
	<script>
	document.getElementById("5").style.background="white";
	</script>
	
	<div class="container">
		<div id="content">
		<br>
				<center>
					<h4>Konfigurasi</h4>
				<div class="form-block">
					<label for="email">Username</label>
					<?php
					echo "<input type='email' class='company' placeholder='Username' name='username' value='".$_SESSION["admin_user"]."'/>";
					?>
				</div>
				
				<div class="form-block">
					<label for="company">Password</label>
					<?php
					echo "<input type='password' class='pa' placeholder='Password' name='Password' value='".$_SESSION["admin_pass"]."'/>";
					?>
				</div>
				<div class="form-block">
					<label for="company"><a href="password.php">Ubah Password</a></label>
					
				</div>
				</center>
				<div class="form-block"></div>
				<div class="form-block"></div>
		</div>
	</div>
<?php include("footer.php"); ?>
