
<div class="page-content">
		<div class="container-fluid">
      <table id="table-edit" class="table table-bordered table-hover">
				<thead>
				<tr>
					<th width="1">
						#
					</th>
					<th>Username</th>
					<th>Password</th>
					<th>Nama</th>
					<th>Keycodestaff</th>
					<th>Secret</th>
					<th>Status</th> 
					<th>Updatedate</th>
					<th>Updateby</th>
					<th>Aksi</th>
				</tr>
				</thead>
				<tbody>
					<tr>
						<td>1</td>
						<td><?= $username ?></td>
						<td><?= $password ?></td>
						<td>admin wha 1</td>
						<td><?= $keycodestaff; ?></td>
						<td><?= $secret; ?></td>
            <td>1</td>
						<td>10/17/2022</td> 
						<td>iwan-it</td>
            <td><button type="button" class="btn btn-rounded btn-inline btn-sm btn-warning" data-toggle="modal" data-target="#edit">Edit</button></td>
					</tr> 
				</tbody>
			</table>
  </div>
</div> 

<div  id="edit" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
			<div class="modal-header">
			<h5 class="modal-title" id="exampleModalLongTitle">Edit Data</h5>
			</div>
			<form action="<?= base_url() ?>user_account/edit" method="POST" enctype="multipart/form-data">
				<div class="container mt-4" > 
					<div class="form-group row">
						<label class="col-sm-2 form-control-label">Text</label>
						<div class="col-sm-10">
							<p class="form-control-static"><input type="text" class="form-control" id="inputPassword" placeholder="Text"></p>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-2 form-control-label">Text Disabled</label>
						<div class="col-sm-10">
							<p class="form-control-static"><input type="text" disabled class="form-control" id="inputPassword" placeholder="Text Disabled"></p>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-sm-2 form-control-label">Text Readonly</label>
						<div class="col-sm-10">
							<p class="form-control-static"><input type="text" readonly class="form-control" id="inputPassword" placeholder="Text Readonly"></p>
						</div>
					</div>

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary btn-pill btn-sm" data-dismiss="modal">Batal</button>
					<button type="submit" id="teruskanWadek" name="action" value="LanjutSurat" class="btn btn-primary btn-pill btn-sm">Simpan</button>
				</div>
			</form>
    </div>
  </div>
</div>
