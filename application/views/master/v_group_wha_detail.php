 	<div class="page-content">
		<div class="container-fluid">
			<header class="section-header">
				<div class="tbl">
					<div class="tbl-row">
						<div class="tbl-cell">
							<div>
								<?php 
								$uriSegments = explode("/", parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
								$lastUriSegment = array_pop($uriSegments);
								$group_id = decrypt_url($lastUriSegment);
								?>
								<h4>Detail Whatsapp Group </h4>
								<button type="button" class="btn btn-rounded btn-inline btn-sm btn-primary" data-toggle="modal" data-target="#add<?= $group_id ?>" style="margin:5px 30px -10px 0px;"><i class="fa fa-plus"></i> Add Member</button>
							</div>
						</div>
					</div>
				</div>
			</header>
			<section class="card">
				<div class="card-block">
					<table id="datatable" class="display table table-bordered" cellspacing="0" width="100%">
						<thead>
							<tr>
								<th width="1">No</th>
								<th>Group</th>
								<th>Member</th>
								<th>No Hp</th>  
								<th>Bagian</th>
								<th>Cabang</th>
								<th>Status</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tfoot>
							<tr>
              <th width="1">No</th>
								<th>Group</th>
								<th>Member</th>
								<th>No Hp</th>  
								<th>Bagian</th>
								<th>Cabang</th>
								<th>Status</th>
								<th>Aksi</th>
							</tr>
						</tfoot>
						<tbody>
							<?php $no=1; foreach ($group as $key => $val) { ?>
								<tr>
									<td><?= $no++ ?></td>
                  <td><?= $val['id_group']?></td>
									<td><?= $val['nama']?></td>
									<td><?= $val['no_hp']?></td>
									<td><?= $val['nama_bagian']?></td>
									<td><?= $val['nama_cabang']?></td>
									<td><?= $val['status']?></td>
									<td><button type="button" class="btn btn-rounded btn-inline btn-sm btn-danger" data-toggle="modal" data-target="#delete<?= $val['no_hp'] ?>">Delete</button></td>  
								</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</section>
		</div><!--.container-fluid-->
	</div><!--.page-content-->
	<?php foreach ($group as $key => $val) { ?>
	<div  id="delete<?= $val['no_hp']?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
				<h5 class="text-center modal-title" >Delete Member Whatsapp Group</h5>
				</div>
				<form action="<?= base_url() ?>group_wha/deleteMember" method="POST" enctype="multipart/form-data">
					<div class="container mt-4" > 
						<div class="form-group row">
							
							<div class="col-sm-12">
								<p class="form-control-static">
								<p> Apakah anda yakin menghapus <b><?= $val['nama'] ?></b>? </p> 
								
									<input type="hidden" name="groupId" value="<?= $val['id_group']?>">
									<input type="hidden" name="no_hp" value="<?= $val['no_hp']?>">
								</p>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary btn-pill btn-sm" data-dismiss="modal">Batal</button>
						<button type="submit" id="Delete" name="action" value="Delete" class="btn btn-primary btn-pill btn-sm">Delete</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<?php }?>
	<div  id="add<?= $group_id ?>" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLongTitle">Add Member Group</h5>
				</div>
				<form action="<?= base_url() ?>group_wha/addMemberGroup" method="POST" enctype="multipart/form-data"> 
					<div class="container mt-4" > 
						<div class="form-group row">
						<input type="hidden" name="groupId"  value="<?= $group_id ?>"> 
							<label class="col-sm-3 form-control-label">Nama</label>
							<div class="col-sm-9">
								<p class="form-control-static">
									<select class="form-control chosen-select" data-placeholder="Select Nama Member" id="nama_member" name="nama_member" required>					    
										<option value=""></option>
										<?php foreach ($member as $key => $val) { ?>
										<option value="<?= $val['no_hp']?>" ><?= $val['nama']?> - <?= $val['nama_bagian']?> - <?= $val['nama_cabang']?></option>
										<?php }?>
									</select>
								</p> 
							</div>   
							<label class="col-sm-3 form-control-label">Nomor whatsapp</label>
							<div class="col-sm-9">
								<p class="form-control-static"><input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="Nomor whatsapp" required readonly>
								</p>  
							</div>
							<div style="height: 80px"> </div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary btn-pill btn-sm" data-dismiss="modal">Batal</button>
						<button type="submit" id="simpan" name="action" value="simpan" class="btn btn-primary btn-pill btn-sm">Simpan</button>
					</div>
				</form>
			</div>
		</div>
	</div>	
	 
	<script src="<?= base_url();?>asset/js/lib/jquery/jquery-3.2.1.min.js"></script>
	<script src="<?= base_url();?>asset/js/chosen.jquery.js"></script>
	<script src="<?= base_url();?>asset/js/init.js"></script>
	<script src="<?= base_url();?>asset/js/lib/popper/popper.min.js"></script>
	<script src="<?= base_url();?>asset/js/lib/tether/tether.min.js"></script>
	<script src="<?= base_url();?>asset/js/lib/bootstrap/bootstrap.min.js"></script>
	<script src="<?= base_url();?>asset/js/plugins.js"></script> 
	<script src="<?= base_url();?>asset/js/lib/datatables-net/datatables.min.js"></script>
  <script src="<?= base_url();?>asset/js/lib/bootstrap-sweetalert/sweetalert.min.js"></script>

	<script>
		$(function() {
			$('#datatable').DataTable({
				responsive: true
			});
		});
		$(document).ready(function() {
			$("#nama_member").change(function() { 
				var selectedVal = $("#nama_member option:selected").val(); 
				$("#no_hp").val(selectedVal); 
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