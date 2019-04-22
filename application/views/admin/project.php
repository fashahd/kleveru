<section id="basic-examples">
	<div class="row">
		<div class="col-xs-12 mt-1 mb-3">
			<h4 class="">
				List Project
			</h4>
			<p>
				Admin dapat me-manage data project disini.
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
											Nama
										</th>
										<th>
											Email
										</th>
										<th>
											No Hp
										</th>
										<th>
											Judul 
										</th>
										<th>
											File Project
										</th>
										<th>
											Respon
										</th>
										<th>
											Status
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
										<td><?php echo $key->nama ?></td>
										<td><?php echo $key->email ?></td>
										<td><?php echo $key->no_hp ?></td>
										<td><?php echo $key->judul ?></td>
										<td><a href="#" data-toggle="modal" data-target="#file<?php echo $key->id ?>">Download File</a></td>
										<td>
											<?php 
											$cek = $this->db->where('id_project',$key->id)->get('respon');
											if ($cek->num_rows() > 0 ) {
												?>
												<a href="<?php echo base_url('respon/'.$cek->result()[0]->pict) ?>" download>Download Respon</a>
												<?php		
											}else{
												echo "Belum Di respon";
											}
											?>
										</td>
										<td>
											<?php 
											if ($key->status==1) {
												echo "Approved";
											}elseif($key->status==0){
												echo "Pending";
											}elseif ($key->status==2) {
												echo "Valid";
											}elseif ($key->status==3) {
												echo "Done";
											} ?>
										</td>
										<td>
											<button class="btn btn-outline-success" data-toggle="modal" data-target="#detail<?php echo $key->id ?>"><i data-toggle="tooltip" title="detail project" class="fa fa-search"></i></button>
											<?php if ($key->status==0): ?>

												<a  class="btn btn-outline-primary" data-toggle="modal" data-target="#acc<?php echo $key->id ?>" title="Terima project"><i class="fa fa-check"></i></a>
												<a href="<?php echo base_url('back/decline/'.$key->id) ?>" onclick="return confirm('Tolak project? ')" class="btn btn-outline-danger" data-toggle="tooltip" title="Tolak project"><i class="fa fa-close"></i></a>
											<?php endif ?>
											<?php if ($key->status==2): ?>
												<a  class="btn btn-outline-primary" data-toggle="modal" data-target="#conf<?php echo $key->id ?>" title="Kirim Konfirmasi"><i class="fa fa-check"></i></a>
											<?php endif ?>
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
	<div class="modal fade text-xs-left" id="detail<?php echo $key->id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
		<div class="modal-dialog " role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<h4 class="modal-title" id="myModalLabel1">Detail Project</h4>
				</div>
				<form method="post" action="<?php echo base_url('back/updproject/'.$key->id) ?>" enctype="multipart/form-data">
					<div class="modal-body">
						<div class="row">
							<div class="col-xs-12 table-responsive">
								<table cellspacing="0" class="display nowrap table table-hover table-striped table-bordered " width="100%">
									<tr>
										<td>Judul Project</td>
										<td><?php echo $key->judul ?></td>
									</tr>
									<tr>
										<td>Range Deadline Project</td>
										<td><?php echo $key->range_tgl ?></td>
									</tr>
									<tr>
										<td>Deskripsi Project</td>
										<td><?php echo $key->deskripsi ?></td>
									</tr>
									<tr>
										<td>Pengirim Project</td>
										<td><?php echo $key->nama ?></td>
									</tr>
									<tr>
										<td>Email | No handphone</td>
										<td><?php echo $key->email.' | '.$key->no_hp ?></td>
									</tr>
								</table>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	<div class="modal fade text-xs-left" id="acc<?php echo $key->id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
		<div class="modal-dialog " role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<h4 class="modal-title" id="myModalLabel1">Accept Project</h4>
				</div>
				<form method="post" action="<?php echo base_url('back/approve/'.$key->id) ?>" enctype="multipart/form-data">
					<div class="modal-body">
						<div class="row">
							<div class="col-xs-12">
								<div class="form-group">
									<label for="">Insert Response</label>
									<textarea name="respon" class="form-control" required=""></textarea>
								</div>
								<button class="btn btn-outline-primary" type="submit">Approve</button>
								<button class="btn btn-outline-danger" data-dismiss="modal">Cancel</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>

	<div class="modal fade text-xs-left" id="file<?php echo $key->id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
		<div class="modal-dialog " role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<h4 class="modal-title" id="myModalLabel1">List File Project <?php echo $key->judul ?></h4>
				</div>
				<form method="post" action="<?php echo base_url('back/approve/'.$key->id) ?>" enctype="multipart/form-data">
					<div class="modal-body">
						<div class="row">
							<div class="col-xs-12">
								<ul>
									<?php 
									$list = $this->db->get('file_project');
									$no = 0;
									foreach ($list->result() as $e ) {
										?>
										<?php if ($e->id_project==$key->id): $no++;?>

										<li><b><a href="<?php echo base_url('upload/'.$e->file) ?>" download>Download file <?php echo $no ?></a></b></li>
										<?php endif ?>
										<?php
									}
									?>
								</ul>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>

	<div class="modal fade text-xs-left" id="conf<?php echo $key->id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
		<div class="modal-dialog " role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					<h4 class="modal-title" id="myModalLabel1">Confirmation Project</h4>
				</div>
				<form method="post" action="<?php echo base_url('back/conf/'.$key->id) ?>" enctype="multipart/form-data">
					<div class="modal-body">
						<div class="row">
							<div class="col-xs-12">
								<div class="form-group">
									<label for="">Insert Response</label>
									<textarea name="respon" class="form-control" required=""></textarea>
								</div>
								<button class="btn btn-outline-primary" type="submit">Submit</button>
								<button class="btn btn-outline-danger" data-dismiss="modal">Cancel</button>
							</div>
						</div>
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
				<h4 class="modal-title" id="myModalLabel1">Tambah project</h4>
			</div>
			<form method="post" action="<?php echo base_url('back/addproject') ?>" enctype="multipart/form-data">
				<div class="modal-body">
					<div class="row">
						<div class="col-xs-12">
							<div class="form-group">
								<label>Link project</label>
								<input type="text" class="form-control" autocomplete="off" placeholder="Masukan link project" name="link" id="project">
							</div>
							<div class="form-group">
								<label for="">project</label>
								<input type="file" class="dropify" required="" name="project">
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
					<button type="submit" id="btn" class="btn btn-outline-primary">Tambah project</button>
				</div>
			</form>
		</div>
	</div>
</div>
