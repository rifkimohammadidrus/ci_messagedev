<div class="page-content">
		<div class="container-fluid"> 
			<div class="box-typical box-typical-padding"> 
				<h5 class="m-t-lg with-border">Kirim Pesan</h5>
                <?= $this->session->flashdata('massage') ?>
				<form action="<?= base_url() ?>kirim_pesan/sendMessage" method="POST" enctype="multipart/form-data"> 
					<div class="form-group row">
						<label class="col-sm-2 form-control-label">Nama</label>
						<div class="col-sm-10">
							<p class="form-control-static">
                            <select class="select2" data-placeholder="Select Nama Member" id="nama_member" name="nama_member" required>
                                <option></option>
                                <?php foreach ($member as $key => $val) { ?>
                                    <option value="<?= $val['no_hp']?>" ><?= $val['nama']?> - <?= $val['nama_bagian']?> - <?= $val['nama_cabang']?></option>
                                    <?php }?>
							</select>  
                            </p>
						</div>
					</div> 
					<div class="form-group row">
						<label class="col-sm-2 form-control-label">Nomor Whatsapp</label>
						<div class="col-sm-10">
							<p class="form-control-static"><input type="text" readonly class="form-control" id="no_hp" name="no_hp" placeholder="Nomor whatsapp" required></p>
						</div>
					</div>
					
					<div class="form-group row">
                        <label for="exampleSelect" class="col-sm-2 form-control-label">Pesan</label>
						<div class="col-sm-10">
                            <textarea rows="4" class="form-control" placeholder="Pesan" name="pesan" required></textarea>
						</div>
					</div>
                    <div class="form-group row">
                        <label class="col-sm-2 form-control-label">Berkas</label>
                        <div class="col-sm-10">
                            <p class="form-control-static"><input type="file" readonly class="form-control" name="file" placeholder="Text Readonly"></p>
                        </div>
                    </div>
                    <div class="form-group row"> 
                        <div class="col-sm-12">
                            <p class="form-control-static"> 
                                <button type="submit" id="kirim" name="action" value="kirim" class="btn btn-primary btn-pill " style="float:right">Kirim</button>
                            </p>
                        </div>
                    </div>
				</form>  
			</div> 
		</div> 
	</div> 
    					
	<script src="<?= base_url();?>asset/js/lib/jquery/jquery-3.2.1.min.js"></script> 
	<script src="<?= base_url();?>asset/js/init.js"></script>
	<script src="<?= base_url();?>asset/js/lib/popper/popper.min.js"></script>
	<script src="<?= base_url();?>asset/js/lib/tether/tether.min.js"></script>
	<script src="<?= base_url();?>asset/js/lib/bootstrap/bootstrap.min.js"></script>
	<script src="<?= base_url();?>asset/js/plugins.js"></script>
	

	<script src="<?= base_url();?>asset/js/lib/bootstrap-select/bootstrap-select.min.js"></script>
	<script src="<?= base_url();?>asset/js/lib/select2/select2.full.min.js"></script>
    
	<script src="<?= base_url();?>asset/js/lib/datatables-net/datatables.min.js"></script>
    <script src="<?= base_url();?>asset/js/lib/bootstrap-sweetalert/sweetalert.min.js"></script>

	<script>
		 
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
        text: "Pesan Terkirim!",
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
        text: "Pesan Gagal Terkirim!",
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