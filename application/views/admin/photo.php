<section id="basic-examples">
	<div class="row">
		<div class="col-xs-12 mt-1 mb-3">
			<h4 class="">
				Photo Project
			</h4>
			<p>
				Admin dapat me-manage data photo disini.
			</p>
			<hr>
		</div>
		<div class="col-xs-12">
			<?php 
			if ($this->session->flashdata('error')!==null) {
				?>
				<div class="alert alert-danger">
					<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					<?php echo $this->session->flashdata('error') ?>
				</div>
				<?php
			}

			if ($this->session->flashdata('success')!==null) {
				?>
				<div class="alert alert-success">
					<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					<?php echo $this->session->flashdata('success') ?>
				</div>
				<?php
			}
			?>
		</div>
	</div>
	<br>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('backassets/assets/style.css') ?>">
	<div class="row" style="margin-top: -30px;">
		<div class="col-12">
			<div class="card">
				<div class="container">
					<div class="card-body">
						<button class="btn btn-outline-primary pull-right" data-toggle="modal" data-target="#tambah">Tambah photo</button>
						<div class="table-responsive m-t-40" style="margin-bottom: 15px;">
							<table cellspacing="0" class="display nowrap table table-hover table-striped table-bordered tableku" width="100%">
								<thead>
									<tr>
										<th>
											#
										</th>
										<th>
											Link
										</th>
										<th>
											Photo
										</th>
										<th class="text-center">
											Aksi
										</th>
									</tr>
								</thead>
								<tbody id="isi">
									<?php $no = 0; foreach ($list->result() as $key): $no++;?>
									<tr>
										<td><?php echo $no ?></td>
										<td><?php echo $key->link ?></td>
										<td><img src="<?php echo base_url('upload/photo/'.$key->photo) ?>" style="width: 200px; height: auto;" alt=""></td>
										<td>
											<button class="btn btn-outline-success" data-toggle="modal" data-target="#update<?php echo $key->id ?>"><i data-toggle="tooltip" title="Update photo" class="fa fa-edit"></i></button>
											<a href="<?php echo base_url('back/delphoto/'.$key->id) ?>" onclick="return confirm('Hapus photo? ')" class="btn btn-outline-danger" data-toggle="tooltip" title="Hapus photo"><i class="fa fa-trash"></i></a>
										</td>
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
</section>
<?php foreach ($list->result() as $key): ?>
	<div class="modal fade text-xs-left" id="update<?php echo $key->id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
		<div class="modal-dialog " role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<h4 class="modal-title" id="myModalLabel1">Update photo</h4>
				</div>
				<form method="post" action="<?php echo base_url('back/updphoto/'.$key->id) ?>" enctype="multipart/form-data">
					<div class="modal-body">
						<div class="row">
						<div class="col-xs-12">
							<div class="form-group">
								<label>Link photo</label>
								<input type="text" value="<?php echo $key->link ?>" class="form-control" autocomplete="off" placeholder="Masukan link photo" name="link" id="photo">
							</div>
							<div class="form-group">
								<label for="">Photo</label>
								<input type="file" class="dropify" data-default-file="<?php echo base_url('upload/photo/'.$key->photo) ?>" name="photo">
							</div>
						</div>
					</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
						<button type="submit" id="btn<?php echo $key->id ?>" class="btn btn-outline-primary">Update photo</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	
<?php endforeach ?>
<div class="modal fade text-xs-left" id="tambah" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
	<div class="modal-dialog " role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title" id="myModalLabel1">Tambah photo</h4>
			</div>
			<form method="post" action="<?php echo base_url('back/addphoto') ?>" enctype="multipart/form-data">
				<div class="modal-body">
					<div class="row">
						<div class="col-xs-12">
							<div class="form-group">
								<label>Link photo</label>
								<input type="text" class="form-control" autocomplete="off" placeholder="Masukan link photo" name="link" id="photo">
							</div>
							<div class="form-group">
								<label for="">Photo</label>
								<input type="file" class="dropify" required="" name="photo">
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
					<button type="submit" id="btn" class="btn btn-outline-primary">Tambah photo</button>
				</div>
			</form>
		</div>
	</div>
</div>
