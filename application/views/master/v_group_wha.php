<div class="page-content">
		<div class="container-fluid">
			<header class="section-header">
				<div class="tbl">
					<div class="tbl-row">
						<div class="tbl-cell">
							<div>
								<H3>Whatsapp Group </H3>
								<button type="button" class="btn btn-rounded btn-inline btn-sm btn-primary" data-toggle="modal" data-target="#add" style="margin:5px 30px -10px 0px;"><i class="fa fa-plus"></i> Add Group</button>
								<!-- <button type="button" class="btn btn-rounded btn-inline btn-sm btn-primary" data-toggle="modal" data-target="#edit" style="float:right; margin:20px 30px 0px 0px;"><i class="fa fa-plus"></i> Add Group</button> -->
								</div>
							</div>
						</div>
					</div>
				</header>
				<section class="card"> 
					
				<div class="card-block">
					<table id="tb_group" class="display table table-bordered" cellspacing="0" width="100%">
						<thead>
							<tr>
								<th width="1">
									ID
								</th>
								<th>Group</th>
								<th>Auto Send</th>
								<th>Time Auto Send</th>  
								<th>Updatedate</th>
								<th>Updateby</th>
								<th>Status</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tfoot>
							<tr>
								<th width="1">
									ID
								</th>
								<th>Group</th>
								<th>Auto Send</th>
								<th>Time Auto Send</th>  
								<th>Updatedate</th>
								<th>Updateby</th>
								<th>Status</th>
								<th>Aksi</th>
							</tr>
						</tfoot>
						<tbody>
							<?php foreach ($group as $key => $val) { ?>
								<tr>
									<td><?= $val['id_group']?></td>
									<td><?= $val['nama_group']?></td> 
									<td><?= $val['is_scheduller']?></td>
									<td><?= $val['schedule_send']?></td>
									<td><?= $val['updatedate']?></td>
									<td><?= $val['updateby']?></td> 
									<td><?php if ($val['status']==1){ echo "Aktif"; }else{ echo "Non Aktif"; } ?></td>
									<td><button type="button" class="btn btn-rounded btn-inline btn-sm btn-warning" data-toggle="modal" data-target="#edit<?= $val['id_group'] ?>">Edit</button>  
									<a class="btn btn-rounded btn-inline btn-sm btn-success" href="<?= base_url('group_wha/detail/'. encrypt_url($val['id_group']) . ""); ?>">Detail</a>
									<button type="button" class="btn btn-rounded btn-inline btn-sm btn-primary" data-toggle="modal" data-target="#kirim<?= $val['id_group'] ?>">Kirim Pesan</button>
									</td> 
								</tr>
							<?php }?>
						</tbody>
					</table>
				</div>
			</section>
		</div><!--.container-fluid-->
	</div><!--.page-content-->

	<div  id="add" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLongTitle">Create Whatsapp Group</h5>
				</div>
				<form action="<?= base_url() ?>group_wha/add" method="POST" enctype="multipart/form-data">
					<div class="container mt-4" > 
						<div class="form-group row">
							<label class="col-sm-2 form-control-label">Nama Group</label>
							<div class="col-sm-10">
								<p class="form-control-static"><input type="text" class="form-control" id="groupName" name="groupName" placeholder="Nama Group" required></p>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary btn-pill btn-sm" data-dismiss="modal">Batal</button>
						<button type="submit" id="simpan" name="action" value="simpan" class="btn btn-primary btn-pill btn-sm">Simpan</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<?php foreach ($group as $key => $val) { ?>
	<div  id="edit<?= $val['id_group']?>" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLongTitle">Edit Whatsapp Group</h5>
				</div>
				<form action="<?= base_url() ?>group_wha/edit" method="POST" enctype="multipart/form-data">
					<div class="container mt-4" > 
						<div class="form-group row">
							<label class="col-sm-2 form-control-label">Nama Group</label>
							<div class="col-sm-10">
								<p class="form-control-static">
									<input type="text" class="form-control" id="groupName" name="groupName" placeholder="Nama Group" value="<?= $val['nama_group']?>" required> 
									<input type="hidden" name="groupId" placeholder="Nama Group" value="<?= $val['id_group']?>">
								</p>
							</div>
							<label class="col-sm-2 form-control-label">Status</label>
							<div class="col-sm-10">
								<p class="form-control-static">
									<select class="form-control" name="status" id="status" required>
										<?php if ($val['status']==1){ ?>
										<option value="1" selected>Aktif</option>
										<option value="0">Non Aktif</option>
										<?php }else{ ?>
											<option value="1">Aktif</option>
											<option value="0" selected>Non Aktif</option> 
										<?php } ?>
									</select>
								</p>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary btn-pill btn-sm" data-dismiss="modal">Batal</button>
						<button type="submit" id="simpan" name="action" value="simpan" class="btn btn-primary btn-pill btn-sm">Simpan</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<?php }?>
	<?php foreach ($group as $key => $val) { ?>
	<div  id="kirim<?= $val['id_group']?>" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLongTitle">Kirim Pesan Whatsapp Group</h5>
				</div>
				<form action="<?= base_url() ?>group_wha/send" method="POST" enctype="multipart/form-data">
					<div class="container mt-4" > 
						<div class="form-group row">
							<label class="col-sm-2 form-control-label">Nama Group</label>
							<div class="col-sm-10">
								<p class="form-control-static">
									<input type="text" class="form-control" id="groupName" name="groupName" placeholder="Nama Group" value="<?= $val['nama_group']?>" readonly> 
									<input type="hidden" name="groupId" placeholder="Nama Group" value="<?= $val['id_group']?>">
								</p>
							</div>
							<label class="col-sm-2 form-control-label">Pesan</label>
							<div class="col-sm-10">
								<p class="form-control-static">
								<textarea rows="3" class="form-control" placeholder="Type a message" name="pesan"></textarea> 
								</p>
							</div>
							<label class="col-sm-2 form-control-label">File</label>
							<div class="col-sm-10">
								<p class="form-control-static">
								<input type="file" class="form-control" id="file" name="file" placeholder="File">
								</p>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary btn-pill btn-sm" data-dismiss="modal">Batal</button>
						<button type="submit" id="simpan" name="action" value="simpan" class="btn btn-primary btn-pill btn-sm">Kirim</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<?php }?>
	<script src="<?= base_url();?>asset/js/lib/jquery/jquery-3.2.1.min.js"></script>
	<script src="<?= base_url();?>asset/js/lib/popper/popper.min.js"></script>
	<script src="<?= base_url();?>asset/js/lib/tether/tether.min.js"></script>
	<script src="<?= base_url();?>asset/js/lib/bootstrap/bootstrap.min.js"></script>
	<script src="<?= base_url();?>asset/js/plugins.js"></script>

	<script src="<?= base_url();?>asset/js/lib/datatables-net/datatables.min.js"></script> 
	<script src="<?= base_url();?>asset/js/lib/bootstrap-sweetalert/sweetalert.min.js"></script>

	<script>
		$(function() {
			$('#tb_group').DataTable({
				responsive: true
			});
		});
	</script>
	<?php if ($this->session->flashdata('success')){ ?>
    <script>
    swal({
        title: " ",
        text: "Berhasil!",
        type: "success", 
        timer: 2000,
        showCancelButton: false,
        showConfirmButton: false
    });
    </script>
  <?php }else if ($this->session->flashdata('error')){ ?>
    <script>
    swal({
        title: " ",
        text: "Gagal. Terjadi Kesalahan!",
        type: "error", 
        timer: 2000,
        showCancelButton: false,
        showConfirmButton: false
    });
    </script>
  <?php } ?>
<script src="<?= base_url();?>asset/js/app.js"></script>
</body>
</html>
	
