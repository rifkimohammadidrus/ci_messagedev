<div class="page-content">
		<div class="container-fluid">
			<!-- <header class="section-header">
				<div class="tbl">
					<div class="tbl-row">
						<div class="tbl-cell">
							<div>
								<H3>Whatsapp Group </H3>
								<button type="button" class="btn btn-rounded btn-inline btn-sm btn-primary" data-toggle="modal" data-target="#add" style="margin:5px 30px -10px 0px;"><i class="fa fa-plus"></i> Add Group</button>
							</div>
						</div>
					</div>
				</div>
			</header> -->
				<section class="card"> 
					
				<div class="card-block">
					<table id="tb_history" class="display table table-bordered" cellspacing="0" width="100%">
						<thead>
							<tr>
								<th width="1">
									ID
								</th>
								<th>Receive Number</th>
								<th>Group</th>
								<th>Text Send</th>  
								<th>File Send</th>
								<th>Date Send</th>
								<th>Response API</th>
								<th>Update User</th>
							</tr>
						</thead>
						<tfoot>
							<tr>
								<th width="1">
									ID
								</th>
								<th>Receive Number</th>
								<th>Group</th>
								<th>Text Send</th>  
								<th>File Send</th>
								<th>Date Send</th>
								<th>Response API</th>
								<th>Update User</th>
							</tr>
						</tfoot>
						<tbody>
							<?php foreach ($history as $key => $val) { ?>
								<tr>
									<td><?= $val['id']?></td>
									<td><?= $val['receiver_number']?></td> 
									<td><?= $val['nama_group']?></td>
									<td><?= $val['text_send']?></td>
									<td><?= $val['file_send']?></td>
									<td><?= $val['date_send']?></td> 
									<td><?= $val['respon_api']?></td> 
									<td><?= $val['updateuser']?></td>  
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
	<script src="<?= base_url();?>asset/js/lib/bootstrap-sweetalert/sweetalert.min.js"></script>

	<script>
		$(function() {
			$('#tb_history').DataTable({
				responsive: true
			});
		});
	</script>
	 
<script src="<?= base_url();?>asset/js/app.js"></script>
</body>
</html>
	
