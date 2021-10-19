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

	<script>
		let base_url = '<?= base_url(); ?>';
	</script>

	<style type="text/css">
		/* Kode CSS Untuk PAGE ini dibuat oleh http://jsfiddle.net/2wk6Q/1/ */
		body {
			width: 100%;
			height: 100%;
			margin: 0;
			padding: 0;
			background-image: url('<?= base_url(); ?>public/vendor/assets/images/login-images/bg-forgot-password.jpg');
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
			margin-top: 20px;
			margin-bottom: 30px;
			text-align: justify;
		}

		.isisurat {
			width: 95%;
			margin: 0 auto;
		}

		.lanjut {
			display: none;
		}

		.kembali {
			display: none;
		}

		.tutup {
			display: none;
		}

		@media print {
			.no-print {
				visibility: hidden;
			}
		}
	</style>

	<script src="<?php echo base_url(); ?>public/assets/js/script/ajax.js"></script>
</head>

<?php $this->load->view($view); ?>

</script>
<script>
</script>

<script src="<?= base_url(); ?>public/assets/js/script/global_script.js"></script>

</body>

</html>
