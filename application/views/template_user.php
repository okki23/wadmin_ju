<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<!-- Mirrored from seantheme.com/color-admin-v1.7/admin/html/table_manage.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Apr 2015 10:58:22 GMT -->
<head>
	<meta charset="utf-8" />
	<title><?php echo $judul; ?></title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />

	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
	<link href="<?php echo base_url('/assets/plugins/jquery-ui/themes/base/minified/jquery-ui.min.css'); ?>" rel="stylesheet" />
	<link href="<?php echo base_url('/assets/plugins/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet" />
	<link href="<?php echo base_url('/assets/plugins/font-awesome/css/font-awesome.min.css'); ?>" rel="stylesheet" />
	<link href="<?php echo base_url('/assets/css/animate.min.css'); ?>" rel="stylesheet" />
	<link href="<?php echo base_url('/assets/css/style.min.css'); ?>" rel="stylesheet" />
	<link href="<?php echo base_url('/assets/css/style-responsive.min.css'); ?>" rel="stylesheet" />
	<link href="<?php echo base_url('/assets/css/theme/default.css'); ?>" rel="stylesheet" id="theme" />
	<!-- ================== END BASE CSS STYLE ================== -->


		<link href="<?php echo base_url('/assets/plugins/bootstrap-datepicker/css/datepicker.css'); ?>" rel="stylesheet" />
		<link href="<?php echo base_url('/assets/plugins/bootstrap-datepicker/css/datepicker3.css'); ?>" rel="stylesheet" />
		<link href="<?php echo base_url('/assets/plugins/ionRangeSlider/css/ion.rangeSlider.css'); ?>" rel="stylesheet" />
		<link href="<?php echo base_url('/assets/plugins/ionRangeSlider/css/ion.rangeSlider.skinNice.css'); ?>" rel="stylesheet" />
		<link href="<?php echo base_url(''); ?>/assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css" rel="stylesheet" />
		<link href="<?php echo base_url(''); ?>/assets/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css" rel="stylesheet" />
		<link href="<?php echo base_url(''); ?>/assets/plugins/password-indicator/css/password-indicator.css" rel="stylesheet" />
		<link href="<?php echo base_url(''); ?>/assets/plugins/bootstrap-combobox/css/bootstrap-combobox.css" rel="stylesheet" />
		<link href="<?php echo base_url(''); ?>/assets/plugins/bootstrap-select/bootstrap-select.min.css" rel="stylesheet" />
		<link href="<?php echo base_url(''); ?>/assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet" />
		<link href="<?php echo base_url(''); ?>/assets/plugins/jquery-tag-it/css/jquery.tagit.css" rel="stylesheet" />
	  <link href="<?php echo base_url(''); ?>/assets/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css" rel="stylesheet" />
	  <link href="<?php echo base_url(''); ?>/assets/plugins/select2/dist/css/select2.min.css" rel="stylesheet" />

	<!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
	<link href="<?php echo base_url(''); ?>/assets/plugins/DataTables/css/data-table.css" rel="stylesheet" />
	<!-- ================== END PAGE LEVEL STYLE ================== -->

	<!-- ================== BEGIN BASE JS ================== -->
	<script src="<?php echo base_url(''); ?>/assets/plugins/pace/pace.min.js"></script>
	<!-- ================== END BASE JS ================== -->
</head>
<body>
	<!-- begin #page-loader -->
	<div id="page-loader" class="fade in"><span class="spinner"></span></div>
	<!-- end #page-loader -->

	<!-- begin #page-container -->
	<div id="page-container" class="fade page-sidebar-fixed page-header-fixed">
		<!-- begin #header -->
		<div id="header" class="header navbar navbar-default navbar-fixed-top">
			<!-- begin container-fluid -->
			<div class="container-fluid">
				<!-- begin mobile sidebar expand / collapse button -->
				<div class="navbar-header">
					<!-- C:\xampp\htdocs\s_arnold\assets\img -->
	<img src="<?php echo base_url('uploads/kepasar.png');?>" style="width:50px; height:50px;">

					<button type="button" class="navbar-toggle" data-click="sidebar-toggled">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<!-- end mobile sidebar expand / collapse button -->

				<!-- begin header navigation right -->
				<ul class="nav navbar-nav navbar-right">


					<li class="dropdown navbar-user">

						<ul class="dropdown-menu animated fadeInLeft"
							<li><a href="<?php echo base_url('login'); ?>">Login</a></li>
						</ul>
					</li>
				</ul>
				<!-- end header navigation right -->
			</div>
			<!-- end container-fluid -->
		</div>
		<!-- end #header -->

		<!-- begin #sidebar -->
		<div id="sidebar" class="sidebar">
			<!-- begin sidebar scrollbar -->
			<div data-scrollbar="true" data-height="100%">
				<!-- begin sidebar user -->

				<ul class="nav">
					<div style="margin-top:10px;"> &nbsp; </div>
					<!-- <li><a href="<?php echo base_url('dashboard_user'); ?>"><i class="fa fa-institution alias"></i> <span>Dashboard</span></a></li>
					<li><a href="<?php echo base_url('service_center_user'); ?>"><i class="fa fa-building-o" aria-hidden="true"></i>
 <span>Daftar LG Service Center</span></a></li>
					<li><a href="<?php echo base_url('form_claim_user'); ?>"><i class="fa fa-newspaper-o" aria-hidden="true"></i>
 <span>Form Keluhan Konsumen</span></a></li> -->
 <li><a href="<?php echo base_url('login'); ?>"><i class="fa fa-user" aria-hidden="true"></i>
<span>Login</span></a></li>


					<li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left"></i></a></li>

				</ul>





			</div>

		</div>
		<div class="sidebar-bg"></div>

		<div id="content" class="content">

			<div class="row">

			    <div class="col-md-12">
						<?php $this->load->view($parse_view); ?>
					</div>
					<!-- end #content -->

       

		<!-- begin scroll to top btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
		<!-- end scroll to top btn -->
	</div>
	<!-- end page container -->
	</div>
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="<?php echo base_url(''); ?>/assets/plugins/jquery/jquery-1.9.1.min.js"></script>
	<script src="<?php echo base_url(''); ?>/assets/plugins/jquery/jquery-migrate-1.1.0.min.js"></script>
	<script src="<?php echo base_url(''); ?>/assets/plugins/jquery-ui/ui/minified/jquery-ui.min.js"></script>
	<script src="<?php echo base_url(''); ?>/assets/plugins/bootstrap/js/bootstrap.min.js"></script>

	<script src="<?php echo base_url(''); ?>/assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="<?php echo base_url(''); ?>/assets/plugins/jquery-cookie/jquery.cookie.js"></script>
	<!-- ================== END BASE JS ================== -->

	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="<?php echo base_url(''); ?>/assets/plugins/DataTables/js/jquery.dataTables.js"></script>
	<script src="<?php echo base_url(''); ?>/assets/js/table-manage-default.demo.min.js"></script>
	<script src="<?php echo base_url(''); ?>/assets/js/apps.min.js"></script>

	<script src="<?php echo base_url(''); ?>/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
	<script src="<?php echo base_url(''); ?>/assets/js/bootstrap3-typeahead.min.js"></script>
	<script src="<?php echo base_url(''); ?>/assets/plugins/ionRangeSlider/js/ion-rangeSlider/ion.rangeSlider.min.js"></script>
	<script src="<?php echo base_url(''); ?>/assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
	<script src="<?php echo base_url(''); ?>/assets/plugins/masked-input/masked-input.min.js"></script>
	<script src="<?php echo base_url(''); ?>/assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
	<script src="<?php echo base_url(''); ?>/assets/plugins/password-indicator/js/password-indicator.js"></script>
	<script src="<?php echo base_url(''); ?>/assets/plugins/bootstrap-combobox/js/bootstrap-combobox.js"></script>
	<script src="<?php echo base_url(''); ?>/assets/plugins/bootstrap-select/bootstrap-select.min.js"></script>
	<script src="<?php echo base_url(''); ?>/assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>
	<script src="<?php echo base_url(''); ?>/assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput-typeahead.js"></script>
	<script src="<?php echo base_url(''); ?>/assets/plugins/jquery-tag-it/js/tag-it.min.js"></script>
  <script src="<?php echo base_url(''); ?>/assets/plugins/bootstrap-daterangepicker/moment.js"></script>
  <script src="<?php echo base_url(''); ?>/assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
  <script src="<?php echo base_url(''); ?>/assets/plugins/select2/dist/js/select2.min.js"></script>
	<script src="<?php echo base_url(''); ?>/assets/js/form-plugins.demo.min.js"></script>
	<script src="<?php echo base_url(''); ?>/assets/js/apps.min.js"></script>


	<!-- ================== END PAGE LEVEL JS ================== -->

	<script>
	 	$('#datepicker-default').datepicker({
	    "format": 'yyyy-mm-dd',
			"setDate": new Date(),
			"autoclose": true
	  });

		$(document).ready(function() {

			$("#foto_keluhan").on("change",function(){


				var filename = $('#foto_keluhan').val().replace(/C:\\fakepath\\/i, '');

				$("#foto_keluhanx").val(filename);
			});

			App.init();
			TableManageDefault.init();
			FormPlugins.init();

			$('#datepicker_start').datepicker({
				format: 'yyyy-mm-dd'
			});
			$('#datepicker_end').datepicker({
				format: 'yyyy-mm-dd'
			});

			$("#select_id_barang").on("change",function(){
				var isi = $(this).val();

				$.getJSON("<?php echo base_url('using_goods/get_content_form/')?>"+isi,function(data){

					var konten = JSON.parse(JSON.stringify(data));
					$("#informasi_stok").val(konten.qty);

				});


			});

			$("#no_po").on("change",function(){
				var isi = $(this).val();
				$.getJSON("<?php echo base_url('rec_goods/get_content_form/')?>"+isi,function(data){

					var konten = JSON.parse(JSON.stringify(data));
					$("#no_po").val(konten.no_po);
					$("#id_barang").val(konten.id_barang);
					$("#nama_barang").val(konten.nama_barang);
					$("#qty").val(konten.qty);
					$("#satuan").val(konten.satuan);
					$("#harga").val(konten.harga);
				});

			});

			$("#kode_produksi").on("change",function(){
				var isi = $(this).val();
				$.getJSON("<?php echo base_url('res_goods/get_content_form/')?>"+isi,function(data){

					var konten = JSON.parse(JSON.stringify(data));
					$("#no_po").val(konten.no_po);
					$("#id_barang").val(konten.id_barang);
					$("#nama_barang").val(konten.nama_barang);
					$("#qty").val(konten.qty);
					$("#satuan").val(konten.satuan);
					$("#tgl_produksi").val(konten.tgl_produksi);
				});

			});

		});
	</script>


	<script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','../../../../www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-53034621-1', 'auto');
      ga('send', 'pageview');
    </script>
</body>

<!-- Mirrored from seantheme.com/color-admin-v1.7/admin/html/table_manage.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Apr 2015 10:58:26 GMT -->
</html>
