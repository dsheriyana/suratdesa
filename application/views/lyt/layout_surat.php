<!doctype html>
<html lang="en">

<head>

	<meta charset="utf-8" />
	<title><?= $title; ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
	<meta content="Themesdesign" name="author" />

	<!-- App favicon -->

	<link rel="shortcut icon" href="<?= base_url(); ?>public/vendor/assets/images/logo-majalengka.png">

	<!-- Keyboard CSS -->
	<!-- <link rel="stylesheet" href="<?= base_url(); ?>/public/vendor/assets/plugins/kiosk/dist/index.css?v=1.4.0" /> -->
	
	<link href="<?= base_url(); ?>public/vendor/assets/plugins/datetimepicker/css/classic.css" rel="stylesheet" />
	<link href="<?= base_url(); ?>public/vendor/assets/plugins/datetimepicker/css/classic.time.css" rel="stylesheet" />
	<link href="<?= base_url(); ?>public/vendor/assets/plugins/datetimepicker/css/classic.date.css" rel="stylesheet" />
	
	<!-- ==== JS ==== -->
	<script src="<?= base_url(); ?>public/assets/libs/jquery/jquery.min.js"></script>

	
	<link rel="stylesheet" href="<?= base_url(); ?>public/vendor/assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

	<!-- Moment -->
	
	<script src="<?= base_url(); ?>public/assets/libs/moment/moment.js"></script>
	<script src="<?= base_url(); ?>public/assets/libs/moment/locale/id.js"></script>


	<script>
		let base_url = '<?= base_url(); ?>';
	</script>
	<?php $data_bg = $this->model_global->get_data('t_setting')->row(); ?>

	<style type="text/css">
		/* Kode CSS Untuk PAGE ini dibuat oleh http://jsfiddle.net/2wk6Q/1/ */
		body {
			width: 100%;
			height: 100%;
			margin: 0;
			padding: 0;
			background-image: url('<?= base_url(); ?>/public/vendor/assets/images/login-images/<?= $data_bg->image_bg; ?>');
			background-repeat: no-repeat;
			background-attachment: fixed;
			background-position: center;
			font-family: "timesnewroman";
			font-size: 12pt;
			line-height: 1.6;
		}

		* {
			box-sizing: border-box;
			-moz-box-sizing: border-box;
		}

		tr.border_bottom td {
			border-bottom: 1px solid black;
			border-bottom: double;
			padding-bottom: 10px;
		}

		.page {
			width: 210mm;
			min-height: 330mm;
			padding: 10mm;
			margin: auto;
			border: 1px #D3D3D3 solid;
			border-radius: 5px;
			background: white;
			box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
		}

		.subpage {

			height: 310mm;
		}
		table {
				line-height: 1.4;
			}

		@media print {

			html,
			body {
				width: 210mm;
				height: 330mm;
			}

			.page {
				margin: 0;
				border: initial;
				border-radius: initial;
				width: initial;
				min-height: initial;
				box-shadow: initial;
				background: initial;
				page-break-after: always;
			}
		
		}


		.center {
			text-align: center;
		}

		.tab {
			text-indent: 50px;
			margin-top: 10px;
			margin-bottom: 10px;
			text-align: justify;
		}
		.tab2 {
			margin-top: 10px;
			margin-bottom: 10px;
			text-align: justify;
		}

		.isisurat {
			width: 95%;
			margin: 0 auto;
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

		@media print {
			.no-print {
				visibility: hidden;
			}
		}
	</style>

	<script src="<?php echo base_url(); ?>public/assets/js/script/ajax.js"></script>
	
<script>
	moment.locale('id');
</script>
</head>

<?php $this->load->view($view); ?>

</script>
<script>
</script>

<script src="<?= base_url(); ?>public/assets/js/script/global_script.js?upt=<?= date('Y-m-d H:i:s'); ?>"></script>

<!-- Keyboard JS -->
<script src="<?= base_url(); ?>public/vendor/assets/plugins/kiosk/dist/833245c2e4.js"></script>
<!-- <script src="<?= base_url(); ?>public/vendor/assets/plugins/kiosk/dist/index-tooltip.js"></script>
<script src="<?= base_url(); ?>public/vendor/assets/plugins/kiosk/dist/kioskboard-aio-1.4.0.min.js"></script>
<script src="<?= base_url(); ?>public/vendor/assets/plugins/kiosk/dist/index.js?v=1.4.0"></script> -->


<script src="<?= base_url(); ?>public/vendor/assets/plugins/tinymce/tinymce.min.js"></script>

<script src="<?= base_url(); ?>public/vendor/assets/plugins/datetimepicker/js/legacy.js"></script>
<script src="<?= base_url(); ?>public/vendor/assets/plugins/datetimepicker/js/picker.js"></script>
<script src="<?= base_url(); ?>public/vendor/assets/plugins/datetimepicker/js/picker.time.js"></script>
<script src="<?= base_url(); ?>public/vendor/assets/plugins/datetimepicker/js/picker.date.js"></script>

<script src="<?= base_url(); ?>public/vendor/assets/plugins/bootstrap-material-datetimepicker/js/moment.min.js"></script>
<script src="<?= base_url(); ?>public/vendor/assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.min.js"></script>

<script type='text/javascript'> 
tinymce.init({ selector:'textarea', menubar:'', theme: 'modern'});
</script>
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
				format: 'YYYY-MM-DD HH:mm'
			});
			$('#date').bootstrapMaterialDatePicker({
				time: false
			});
			$('#time').bootstrapMaterialDatePicker({
				date: false,
				format: 'HH:mm'
			});
		});
	</script>
	</body>

</html>
