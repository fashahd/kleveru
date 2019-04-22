<section id="basic-examples">
	<div class="row">
		<div class="col-xs-12 mt-1 mb-3">
			<button class="btn btn-outline-primary pull-right" data-toggle="modal" data-target="#add">Tambah Client</button>
			<h4 class="">
				List Client
			</h4>
			<p>
				Admin dapat me-manage data client disini.
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
											Gambar
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
										<td><a href="#" data-toggle="modal" data-target="#preview<?php echo $key->id ?>">Lihat Gambar</a></td>
										<td>
											<a  class="btn btn-outline-primary" data-toggle="modal" data-target="#upd<?php echo $key->id ?>" title="Update Client"><i class="fa fa-edit"></i></a>
											<a href="<?php echo base_url('back/dellClient/'.$key->id) ?>" onclick="return confirm('Hapus Client? ')" class="btn btn-outline-danger" data-toggle="tooltip" title="Hapus Client"><i class="fa fa-trash"></i></a>
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
	<div class="modal fade text-xs-left" id="upd<?php echo $key->id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
		<div class="modal-dialog " role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<h4 class="modal-title" id="myModalLabel1">Detail Client</h4>
				</div>
				<form method="post" action="<?php echo base_url('back/updClient/'.$key->id) ?>" enctype="multipart/form-data">
					<div class="modal-body">
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label>Link Client</label>
									<input type="text" value="<?php echo $key->link ?>" class="form-control" autocomplete="off" placeholder="Masukan link client" name="link">
								</div>
								<div class="form-group">
									<label for="">Client's Image</label>
									<input type="file" class="dropify" data-default-file="<?php echo base_url('cient/'.$key->image) ?>" name="image">
								</div>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button class="btn btn-outline-primary" type="submit">Update Data</button>
						<button class="btn btn-outline-danger" data-dismiss="modal">Cancel</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	<div class="modal fade text-xs-left" id="preview<?php echo $key->id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
		<div class="modal-dialog " role="document">
			<div class="modal-content">
				<form method="post" action="<?php echo base_url('back/updproject/'.$key->id) ?>" enctype="multipart/form-data">
					<div class="modal-body" style="background: url('<?php echo base_url('cient/'.$key->image) ?>'); background-size: cover; border-radius: 5px; width: 100%; height: 450px">
					</div>
				</form>
			</div>
		</div>
	</div>
	
<?php endforeach ?>
<div class="modal fade text-xs-left" id="add" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
	<div class="modal-dialog " role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title" id="myModalLabel1">Tambah Client</h4>
			</div>
			<form method="post" action="<?php echo base_url('back/addClient') ?>" enctype="multipart/form-data">
				<div class="modal-body">
					<div class="row">
						<div class="col-xs-12">
							<div class="form-group">
								<label>Link Client</label>
								<input type="text" class="form-control" autocomplete="off" placeholder="Masukan link client" name="link">
							</div>
							<div class="form-group">
								<label for="">Client's Image</label>
								<input type="file" class="dropify" required="" name="image">
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
					<button type="submit" id="btn" class="btn btn-outline-primary">Tambah Client</button>
				</div>
			</form>
		</div>
	</div>
</div>
