<div class="row">
	<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<p>Data devisi <?php echo $_GET['id'] ?> | <a target="__blank" href="excel.php?devisi=<?php echo $_GET['id'] ?>" class="btn btn-danger btn-sm " title="Export to excel"><i class="fa fa-file-excel-o"></i></a> </p>
					
				</div>
				<div class="card-body">
					<div class="section">
						<div class="table">
							<table class="datatable table table bordered">
							<thead>
								<tr>
									<th>No</th>
									<th>Nama</th>
									<th>Nim</th>
									<th>Email</th>
									<th>Telp</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($use->getAnggotaDevisi($_GET['id']) as $key => $value): ?>
								<tr>
									<td><?php echo $key+1 ?></td>
									<td><?php echo $value['nama'] ?></td>
									<td><?php echo $value['nim'] ?></td>
									<td><?php echo $value['email'] ?></td>
									<td><?php echo $value['phone'] ?></td>
								</tr>
								<?php endforeach ?>
							</tbody>
						</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>