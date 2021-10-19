<!doctype html>
<html lang="en">

<head>

	<meta charset="utf-8" />
	<title><?= $title; ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
	<meta content="Themesdesign" name="author" />
	<!-- Sweet Alert-->
	<link href="<?= base_url(); ?>public/vendor/assets/plugins/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />

	<!-- App favicon -->

	<link rel="shortcut icon" href="<?= base_url(); ?>public/vendor/assets/images/logo-majalengka.png">

	<!-- loader-->
	<link href="<?= base_url(); ?>public/vendor/assets/css/pace.min.css" rel="stylesheet" />
	<script src="<?= base_url(); ?>public/vendor/assets/js/pace.min.js"></script>
	<!--Data Tables -->
	<link href="<?= base_url(); ?>public/vendor/assets/plugins/datatable/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css">
	<link href="<?= base_url(); ?>public/vendor/assets/plugins/datatable/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css">
	<!--plugins-->
	<link rel="stylesheet" href="<?= base_url(); ?>public/vendor/assets/plugins/notifications/css/lobibox.min.css" />
	<link href="<?= base_url(); ?>public/vendor/assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
	<link href="<?= base_url(); ?>public/vendor/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
	<link href="<?= base_url(); ?>public/vendor/assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />

	<!-- Bootstrap Css -->
	<link href="<?= base_url(); ?>public/vendor/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
	<!-- Icons Css -->
	<link href="<?= base_url(); ?>public/vendor/assets/css/icons.css" rel="stylesheet" type="text/css" />
	<!-- App Css-->
	<link href="<?= base_url(); ?>public/vendor/assets/css/app.css" id="app-style" rel="stylesheet" type="text/css" />
	<!-- Keyboard CSS -->
	<link rel="stylesheet" href="<?= base_url(); ?>/public/vendor/assets/plugins/kiosk/dist/index.css?v=1.4.0" />

	
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>public/assets/libs/toastr/build/toastr.min.css">

	
	<link href="<?= base_url(); ?>public/vendor/assets/plugins/datetimepicker/css/classic.css" rel="stylesheet" />
	<link href="<?= base_url(); ?>public/vendor/assets/plugins/datetimepicker/css/classic.time.css" rel="stylesheet" />
	<link href="<?= base_url(); ?>public/vendor/assets/plugins/datetimepicker/css/classic.date.css" rel="stylesheet" />

	<link href="<?= base_url(); ?>public/vendor/assets/plugins/select2/css/select2.min.css" rel="stylesheet" />
	<link href="<?= base_url(); ?>public/vendor/assets/plugins/select2/css/select2-bootstrap4.css" rel="stylesheet" />

	<style>
		<?php $data_bg = $this->model_global->get_data('t_setting')->row(); ?>
	
		.bg-forgot {

			background-image: url('<?= base_url(); ?>/public/vendor/assets/images/login-images/<?= $data_bg->image_bg; ?>');


			background-size: cover;

			background-position: center;

			background-repeat: no-repeat;

			background-attachment: fixed;

		}
		.lanjut {
			color: white;
			border: none;
			background-color: #32ab13;
			padding: 12px 16px;
			font-size: 16px;
			cursor: pointer;
			border-radius: 10px;
			position: fixed;
			top: 40px;
			right: 40px;
			box-shadow: 2px 2px 3px #D3D3D3;
		}

		.lanjut:hover {
			background-color: #07820a;
		}

		.kembali {
			color: white;
			border: none;
			background-color: red;
			padding: 12px 16px;
			font-size: 16px;
			cursor: pointer;
			border-radius: 10px;
			position: fixed;
			top: 40px;
			left: 40px;
			box-shadow: 2px 2px 3px #D3D3D3;
		}

		.kembali:hover {
			background-color: crimson;
		}

		.tutup {
			color: white;
			border: none;
			background-color: #5a7684;
			padding: 12px 16px;
			font-size: 16px;
			cursor: pointer;
			border-radius: 10px;
			position: fixed;
			bottom: 40px;
			right: 40px;
			box-shadow: 2px 2px 3px #D3D3D3;
		}

		.tutup:hover {
			background-color: #212529;
		}

		.my-float {
			margin-top: 22px;
		}
		</style>

	
	<!-- ==== JS ==== -->
	<script src="<?= base_url(); ?>public/assets/libs/jquery/jquery.min.js"></script>

	
	<link rel="stylesheet" href="<?= base_url(); ?>public/vendor/assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

	<!-- Moment -->
	
	<script src="<?= base_url(); ?>public/assets/libs/moment/moment.js"></script>
	<script src="<?= base_url(); ?>public/assets/libs/moment/locale/id.js"></script>

	
	<!-- Sweet Alerts js -->
	<script src="<?= base_url(); ?>public/vendor/assets/plugins/sweetalert2/sweetalert2.min.js"></script>

	<!-- Toastr -->
	<script src="<?= base_url(); ?>public/assets/libs/toastr/build/toastr.min.js"></script>

	

	<script>
		let base_url = '<?= base_url(); ?>';
	</script>
	<!-- ==== JS ==== -->

</head>

<?php $this->load->view($view); ?>





<?php if (isset($_SESSION['ntf_swal'])) { ?>
	<script type="text/javascript">
		Swal.fire({
			icon: "<?= $_SESSION['clr_swal']; ?>",
			title: "<?= $_SESSION['msg_swal']; ?>",
			showConfirmButton: false,
			timer: 2500
		})
	</script>
<?php  } ?>

</script>
<script>
</script>


<!-- jQuery first, then Popper.js, then Bootstrap JS -->

<script src="<?= base_url(); ?>public/vendor/assets/js/popper.min.js"></script>
<script src="<?= base_url(); ?>public/vendor/assets/js/bootstrap.min.js"></script>
<!--plugins-->
<script src="<?= base_url(); ?>public/vendor/assets/plugins/simplebar/js/simplebar.min.js"></script>
<script src="<?= base_url(); ?>public/vendor/assets/plugins/metismenu/js/metisMenu.min.js"></script>
<script src="<?= base_url(); ?>public/vendor/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
<!-- Keyboard JS -->
<script src="<?= base_url(); ?>public/vendor/assets/plugins/kiosk/dist/jquery-3.4.1.min.js"></script>
<script src="<?= base_url(); ?>public/vendor/assets/plugins/kiosk/dist/833245c2e4.js"></script>
<script src="<?= base_url(); ?>public/vendor/assets/plugins/kiosk/dist/index-tooltip.js"></script>
<script src="<?= base_url(); ?>public/vendor/assets/plugins/kiosk/dist/kioskboard-aio-1.4.0.min.js"></script>
<script src="<?= base_url(); ?>public/vendor/assets/plugins/kiosk/dist/index.js?v=1.4.0"></script>
<!--notification js -->
<script src="<?= base_url(); ?>public/vendor/assets/plugins/notifications/js/lobibox.min.js"></script>
<script src="<?= base_url(); ?>public/vendor/assets/plugins/notifications/js/notifications.min.js"></script>
<script src="<?= base_url(); ?>public/vendor/assets/plugins/notifications/js/notification-custom-script.js"></script>
<!--Data Tables js-->
<script src="<?= base_url(); ?>public/vendor/assets/plugins/datatable/js/jquery.dataTables.min.js"></script>

<script src="<?= base_url(); ?>public/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url(); ?>public/assets/libs/metismenu/metisMenu.min.js"></script>

<script src="<?= base_url(); ?>public/assets/libs/simplebar/simplebar.min.js"></script>

<script src="<?= base_url(); ?>public/assets/libs/jszip/jszip.min.js"></script>
<script src="<?= base_url(); ?>public/assets/libs/pdfmake/build/pdfmake.min.js"></script>
<script src="<?= base_url(); ?>public/assets/libs/pdfmake/build/vfs_fonts.js"></script>


<script src="<?= base_url(); ?>public/assets/js/script/global_script.js"></script>



<script src="<?= base_url(); ?>public/vendor/assets/plugins/datetimepicker/js/legacy.js"></script>
<script src="<?= base_url(); ?>public/vendor/assets/plugins/datetimepicker/js/picker.js"></script>
<script src="<?= base_url(); ?>public/vendor/assets/plugins/datetimepicker/js/picker.time.js"></script>
<script src="<?= base_url(); ?>public/vendor/assets/plugins/datetimepicker/js/picker.date.js"></script>

<script src="<?= base_url(); ?>public/vendor/assets/plugins/bootstrap-material-datetimepicker/js/moment.min.js"></script>
<script src="<?= base_url(); ?>public/vendor/assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.min.js"></script>

<script src="<?= base_url(); ?>public/vendor/assets/plugins/select2/js/select2.min.js"></script>


<script>
		$('.datepicker').pickadate({
			selectMonths: true,
			selectYears: true
		}),
		$('.timepicker').pickatime()
	</script>
	<script>
		$(function () {
			$('#date-time').bootstrapMaterialDatePicker({
				format: 'DD-MM-YYYY HH:mm'
			});
			$('#date').bootstrapMaterialDatePicker({
				format: 'DD-MM-YYYY',
				time: false
			});
			$('#tgl_lahir_ibu').bootstrapMaterialDatePicker({
				format: 'DD-MM-YYYY',
				time: false
			});
			$('#tgl_lahir_ayah').bootstrapMaterialDatePicker({
				format: 'DD-MM-YYYY',
				time: false
			});
			$('#tgl_lahir_pelapor').bootstrapMaterialDatePicker({
				format: 'DD-MM-YYYY',
				time: false
			});
			$('#tgl_lahir_jenazah').bootstrapMaterialDatePicker({
				format: 'DD-MM-YYYY',
				time: false
			});
			$('#tgl_kematian').bootstrapMaterialDatePicker({
				format: 'DD-MM-YYYY',
				time: false
			});
			$('#tgl_lahir_saksi1').bootstrapMaterialDatePicker({
				format: 'DD-MM-YYYY',
				time: false
			});
			$('#tgl_lahir_saksi2').bootstrapMaterialDatePicker({
				format: 'DD-MM-YYYY',
				time: false
			});
			$('#tanggalperkawinan_ibu').bootstrapMaterialDatePicker({
				format: 'DD-MM-YYYY',
				time: false
			});
			$('#tgl_kedatangan').bootstrapMaterialDatePicker({
				format: 'DD-MM-YYYY',
				time: false
			});
			
			$('#time').bootstrapMaterialDatePicker({
				date: false,
				format: 'HH:mm'
			});
		});
		
	</script>
	<script>
		$('.single-select').select2({
			theme: 'bootstrap4',
			width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
			placeholder: $(this).data('placeholder'),
			allowClear: Boolean($(this).data('allow-clear')),
		});
		$('.multiple-select').select2({
			theme: 'bootstrap4',
			width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
			placeholder: $(this).data('placeholder'),
			allowClear: Boolean($(this).data('allow-clear')),
		});
		function _calculateAge(birthday)
		{ // birthday is a date (dd-mm-yyyy)
			if (birthday)
			{
				var parts = birthday.split('-');
				// Ubah menjadi format ISO yyyy-mm-dd
				// please put attention to the month (parts[0]), Javascript counts months from 0:
				// Januari - 0, Februari - 1, etc
				// https://stackoverflow.com/questions/5619202/converting-string-to-date-in-js
				var birthdate = new Date(parts[2],parts[1]-1,parts[0]);
				var ageDifMs = (new Date()).getTime() - birthdate.getTime();
				var ageDate = new Date(ageDifMs); // miliseconds from epoch
				return Math.abs(ageDate.getUTCFullYear() - 1970);
			}
		}

	</script>


</body>

</html>