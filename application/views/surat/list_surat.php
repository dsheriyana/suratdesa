<body class="bg-forgot">
	<div class="p-4 d-flex align-items-center">
		<div class="w-100">
			<div class="row justify-content-center">
				<div class="col-md-5 mt-5">
					<div class="text-center text-white mb-5">
						<h4 class="font-size-18 font-weight-bold">DAFTAR SURAT KETERANGAN</h4>
					</div>
				</div>
				<div class="col-md-12">
					<div class="row">
						<?php foreach ($jenis_surat as $value) { ?>
							<div class="col-md-3">
								<div class="card radius-15">
									<div class="card-body">

										<div class="media align-items-center">
											<img src="<?= base_url(); ?>public/vendor/assets/images/email.png" width="80" height="80" class="rounded-circle p-1 border" alt="">
											<div class="media-body ml-3">
												<h5 class="mb-0"><?= $value->nama_surat; ?></h5>
												<div class="list-inline contacts-social mt-2">
													<button type="button" onclick="location.href=`${base_url}surat/<?= $value->id_jenissurat; ?>`" id="btnBuat" class="btn btn-primary">Buat Surat</button>
													<button type="button" onclick="lihat_surat('<?= base_url() . $value->url; ?>')" id="btnLihat" class="btn btn-success">Lihat Surat</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="modal fade bs-example-modal-lg" id="modalLihat" tabindex="-1" role="dialog" aria-labelledby="modalLihat" aria-hidden="true">
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
						<iframe id="obj" width="100%" height="700" frameborder="0"></iframe>
					</div>
				</div>
				<div class="modal-footer">
				</div>

			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
	<script defer src="<?= base_url('public/assets/js/script/surat.js?ut=' . date('ymd')); ?>"></script>

	<button onclick="location.href=`${base_url}auth/logout`" class="kembali no-print" title="Kembali">
		<i class="fa fa-arrow-left"></i> Kembali
	</button>
