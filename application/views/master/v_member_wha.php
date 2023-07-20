<div class="page-content">
		<div class="container-fluid">
			<section class="card">
				<div class="card-block"> 
					<table id="example" class="display table table-bordered" cellspacing="0" width="100%">
						<thead>
							<tr>
								<th width="1">#</th>
								<th>No Hp</th>
								<th>NIK</th>
								<th>Nama</th>
								<th>Bagian</th>
								<th>Cabang</th> 
								<th>Updatedate</th>
								<th>Updateby</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tfoot>
							<tr>
								<th width="1">
									#
								</th>
								<th>No Hp</th>
								<th>NIK</th>
								<th>Nama</th>
								<th>Bagian</th>
								<th>Cabang</th> 
								<th>Updatedate</th>
								<th>Updateby</th>
								<th>Aksi</th>
							</tr>
						</tfoot>
						<tbody>
							<?php $no=1; foreach ($member as $key => $val) { ?>
								<tr>
									<td><?= $no++ ?></td>
									<td><?= $val['no_hp']?></td>
									<td><?= $val['nik']?></td>
									<td><?= $val['nama']?></td>
									<!-- <td><?= $val['kode_bagian']?></td> -->
									<td><?= $val['nama_bagian']?></td>
									<!-- <td><?= $val['cabang']?></td> -->
									<td><?= $val['nama_cabang']?></td>
									<td><?= $val['updatedate']?></td>
									<td><?= $val['updateby']?></td> 
									<td><button type="button" class="btn btn-rounded btn-inline btn-sm btn-warning">Edit</button></td> 
								</tr>
							<?php }?>
						</tbody>
					</table>
				</div>
			</section>
		</div><!--.container-fluid-->
	</div><!--.page-content-->

	<script src="<?= base_url();?>asset/js/lib/jquery/jquery-3.2.1.min.js"></script>
	<script src="<?= base_url();?>asset/js/lib/popper/popper.min.js"></script>
	<script src="<?= base_url();?>asset/js/lib/tether/tether.min.js"></script>
	<script src="<?= base_url();?>asset/js/lib/bootstrap/bootstrap.min.js"></script>
	<script src="<?= base_url();?>asset/js/plugins.js"></script>

	<script src="<?= base_url();?>asset/js/lib/datatables-net/datatables.min.js"></script>

	<script>
		$(function() {
			$('#example').DataTable({
				responsive: true
			});
		});
	</script>

<script src="<?= base_url();?>asset/js/app.js"></script>
</body>
</html>
	
