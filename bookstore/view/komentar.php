<?php
	include("header.php"); ?>
	<script>
	document.getElementById("4").style.background="white";
	</script>
	                    <div class="tab-content">
						<td>
                        Tulis Komentar
                        <div class="container">
                            <form action="php/simpan-komentar.php" method="POST">
                                <div class="form-group">
                                    <label class="control-label">Destinasi : </label>
									<br>
                                    <select class="form-control" name="Id_Toko">
                                        <option value="">-- Toko Buku --</option>
                                        <?php
                                            
                                        ?>
                                    </select>
                                </div>
                                 <div class="form-group">
                                    <label class="control-label">Komentar : </label>
									<br>
                                    <textarea class="form-control" name="isiKomentar"></textarea>
                                </div>
							
                                <div class="form-group">
								<center>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
							</div>
	</div>
 <?php include("footer.php"); ?>
