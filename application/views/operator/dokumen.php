<body class="bg-forgot">
	<div class="p-4 d-flex align-items-center">
		<div class="w-100">
			<div class="row justify-content-center">
				<div class="col-md-5 mt-5">
					<div class="text-center mb-5">
						<h4 class="font-size-18 font-weight-bold text-white">DATA DOKUMEN</h4>
					</div>
				</div>
				<div class="col-md-12">
					<button class="btn btn-light mb-2" type="button" onclick='location.href="<?= base_url("operator"); ?>"'><i class="fas fa-arrow-left"></i> Kembali</button>
					<div class="card">
						<div class="card-body">
							<div class="table-responsive">
								<table class="table table-striped table-bordered dt-responsive nowrap" id="tabelsurat">
									<thead>
										<tr>
											<th>No</th>
											<th>Jenis Surat</th>
											<th>NIK</th>
											<th>File Surat</th>
											<th>Tanggal Dibuat</th>
										</tr>
									</thead>
									<tbody>
										<?php 
										
										if( !empty($surat) ) {
											$no = 1;
											foreach ($surat as $srt) { ?>
										<tr>
											<td><?= $no; ?></td>    
											<td><?= $srt['nama_surat']; ?></td>
											<td><?= $srt['nik']; ?></td>
											<td>
												<?php
												if( !empty($srt['arsip_surat']) ) {
													?>
													<a href="#" class="btn btn-primary" title="Lihat Arsip" data-toggle='modal' data-target='#modal-lihat_arsip<?= $srt['id_surat']; ?>'>
													Lihat
													</a>
													<a href="<?= base_url("public/berkas/arsip_surat/")?><?= $srt['arsip_surat']; ?>" class="btn btn-success" title="Download Arsip">
													Download
													</a>
												<?php } else { ?>
												<a href="#" class="btn btn-danger" title="Upload Arsip" data-toggle='modal' data-target='#modal-uploadarsip<?= $srt['id_surat']; ?>'>
													Upload Arsip
												</a>
												<?php } ?>
												
											</td>
											<td><?= $srt['tgl_dibuat']; ?></td>
										</tr>
										<?php $no++;
										} }
												else { echo "<div class='alert alert-danger' role='alert'>
																Belum ada data Surat
															</div>"; } ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php                 
  foreach ($surat as $srt) { ?>
	<div class="modal fade bs-example-modal-lg" id="modal-lihat_arsip<?= $srt['id_surat']; ?>" tabindex="-1" role="dialog" aria-labelledby="modal-lihat_arsip" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title mt-0">
						Lihat Surat
					</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="col-md-12">
						<iframe id="iframe" width="100%" height="700" src="<?= base_url("public/berkas/arsip_surat/")?><?= $srt['arsip_surat']; ?>"></iframe>
					</div>
				</div>
				<div class="modal-footer">
				</div>
				</form>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->

	<?php  } ?>

	<?php                 
  foreach ($surat as $srt) { ?>
	<div class="modal fade bs-example-modal-lg" id="modal-uploadarsip<?= $srt['id_surat']; ?>" tabindex="-1" role="dialog" aria-labelledby="modal-uploadarsip" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title mt-0">
						Upload Arsip Surat
					</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form action="uploadarsip" method="POST" enctype="multipart/form-data">
						<div class="col-md-12">
							<div class="form-group">
								<input type="file" name="arsip" id="arsip" class="form-control">
								<input type="hidden" name="id_surat" id="id_surat" value="<?= $srt['id_surat']; ?>" class="form-control">
								<input type="hidden" name="nik" id="nik" value="<?= $srt['nik']; ?>" class="form-control">
								<input type="hidden" name="up" id="up" value="1" class="form-control">
							</div>
							<div class="form-group">
								<button name="submit" type="submit" class="btn btn-primary">Upload</button>	
							</div>
						</div>
					</form>
				</div>
				<div class="modal-footer">
				</div>
				</form>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
	
<?php  } ?>



	<!-- <script defer src="<?= base_url(); ?>public/assets/js/script/dokumen.js?ut=<?= date('ymd'); ?>"></script> -->

	<script>
  $(function () {
    $("#tabelsurat").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#tabelsurat_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
