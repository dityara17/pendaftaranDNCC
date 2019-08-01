<div class="row">
	<?php 
	$check = $use->checkAnggota($_SESSION['anggota']['id']);
	if ($check == 0) {
		?>
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					Form Pendaftaran 
				</div>
				<div class="card-body">
					<form class="form form-horizontal" method="post">
						<div class="section">
							<div class="section-title">Information</div>
							<div class="section-body">
								<div class="form-group">
									<label class="col-md-3 control-label">Nama</label>
									<div class="col-md-9">
										<input type="text" class="form-control" name="nama" placeholder="" required="">
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-3 control-label">Nim</label>
									<div class="col-md-9">
										<input type="text" class="form-control" name="nim" placeholder="" required="">
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-3 control-label">Email</label>
									<div class="col-md-9">
										<input type="email" class="form-control" name="email" placeholder="" required="">
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-3 control-label">Telp</label>
									<div class="col-md-9">
										<input type="text" class="form-control" name="hp" placeholder="" required="">
									</div>
								</div>
								<div class="form-group">
									<div class="col-md-3">
										<label class="control-label">Alamat</label>
										<p class="control-label-help"></p>
									</div>
									<div class="col-md-9">
										<textarea class="form-control" required="" name="alamat"></textarea>
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-3 control-label">Devisi</label>
									<div class="col-md-4">
										<div class="input-group">
											<select class="select2" name="devisi">
												<option value="no">Silahkan pilih devisi</option>
												<option value="Mobile">Mobile</option>
												<option value="Web">Web</option>
												<option value="Jaringan">Jaringan</option>
												<option value="Multimedia">Multimedia</option>
												<option value="Dekstop">Dekstop</option>
												<option value="Broadcast">Broadcast</option>
											</select>
										</div>
									</div>
								</div>

							</div>
						</div>

						<div class="form-footer">
							<div class="form-group">
								<div class="col-md-9 col-md-offset-3">
									<button name="save" type="submit" class="btn btn-primary">Save</button>
									<button type="button" class="btn btn-default">Cancel</button>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	<?php } else { ?>
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					Form Pendaftaran 
				</div>
				<div class="card-body">
					<form class="form form-horizontal" method="post">
						<div class="section">
							<div class="section-title">Information</div>
							<div class="section-body">
								<div class="form-group">
									<label class="col-md-3 control-label">Nama</label>
									<div class="col-md-9">
										<input type="text" class="form-control" name="nama" placeholder="" value="<?php echo $check['nama'] ?>" required="">
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-3 control-label">Nim</label>
									<div class="col-md-9">
										<input type="text" class="form-control" name="nim" placeholder="" required="" value="<?php echo $check['nim'] ?>">
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-3 control-label">Email</label>
									<div class="col-md-9">
										<input type="email" class="form-control" name="email" placeholder="" value="<?php echo $check['email'] ?>">
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-3 control-label">Telp</label>
									<div class="col-md-9">
										<input type="text" class="form-control" name="hp" placeholder="" required="" value="<?php echo $check['phone'] ?>">
									</div>
								</div>
								<div class="form-group">
									<div class="col-md-3">
										<label class="control-label">Alamat</label>
										<p class="control-label-help"></p>
									</div>
									<div class="col-md-9">
										<textarea class="form-control" name="alamat"><?php echo $check['alamat'] ?></textarea>
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-3 control-label">Devisi</label>
									<div class="col-md-4">
										<div class="input-group">
											<select class="select2" name="devisi">
												<option <?php if($check['devisi'] == 'Web') echo "selected"; ?> value="Web">Web</option>
												<option <?php if($check['devisi'] == 'Mobile') echo "selected"; ?> value="Mobile">Mobile</option>
												<option <?php if($check['devisi'] == 'Jaringan') echo "selected"; ?> value="Jaringan">Jaringan</option>
												<option <?php if($check['devisi'] == 'Multimedia') echo "selected"; ?> value="Multimedia">Multimedia</option>
												<option <?php if($check['devisi'] == 'Dekstop') echo "selected"; ?> value="Dekstop">Dekstop</option>
												<option <?php if($check['devisi'] == 'Broadcast') echo "selected"; ?> value="Broadcast">Broadcast</option>
											</select>
										</div>
									</div>
								</div>

							</div>
						</div>

						<div class="form-footer">
							<div class="form-group">
								<div class="col-md-9 col-md-offset-3">
									<button name="update" type="submit" class="btn btn-primary">Update</button>
									<button type="button" class="btn btn-default">Cancel</button>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	<?php } ?>
</div>

<?php  
if (isset($_POST['save'])) {
	if ($_POST['devisi'] == 'no') {
		echo "<script>alert('Silahkan pilih devisi kamu');</script>";
	} else{
		$use->storeAnggota($_SESSION['anggota']['id'],$_POST['nama'],$_POST['nim'],$_POST['email'],$_POST['hp'],$_POST['alamat'],$_POST['devisi']);
			echo "<script>alert('Data telah disimpan');location='./?page=register';</script>";
	}
}
if (isset($_POST['update'])) {
	$use->updateAnggota($_SESSION['anggota']['id'],$_POST['nama'],$_POST['nim'],$_POST['email'],$_POST['hp'],$_POST['alamat'],$_POST['devisi']);
			echo "<script>alert('Data telah di update');location='./?page=register';</script>";
}
?>