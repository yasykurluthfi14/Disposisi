<?php
$cek    = $user->row();
$nama   = $cek->nama_lengkap;
$email  = $cek->email;

$level  = $cek->level;
if ($level == "s_admin") {
	$level = "Super Admin";
}

$menu 		= strtolower($this->uri->segment(1));
$sub_menu = strtolower($this->uri->segment(2));
$sub_menu3 = strtolower($this->uri->segment(3));
?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.interface.club/limitless/layout_2/LTR/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 25 Apr 2017 11:59:08 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<base href="<?php echo base_url(); ?>" />

	<title><?php echo $judul_web; ?></title>

	<!-- Global stylesheets -->
	<link href="assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
	<link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="assets/css/core.css" rel="stylesheet" type="text/css">
	<link href="assets/css/components.css" rel="stylesheet" type="text/css">
	<link href="assets/css/colors.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script type="text/javascript" src="assets/js/plugins/loaders/pace.min.js"></script>
	<script type="text/javascript" src="assets/js/core/libraries/jquery.min.js"></script>
	<script type="text/javascript" src="assets/js/core/libraries/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/loaders/blockui.min.js"></script>
	<!-- /core JS files -->

	<?php
	if ($sub_menu == "" or $sub_menu == "profile" or $sub_menu == "lap_sk" or $sub_menu == "lap_sm") { ?>
		<!-- Theme JS files -->

		<link rel="stylesheet" href="assets/calender/css/style.css">
		<link rel="stylesheet" href="assets/calender/css/pignose.calendar.css">

		<script type="text/javascript" src="assets/js/plugins/visualization/d3/d3.min.js"></script>
		<script type="text/javascript" src="assets/js/plugins/visualization/d3/d3_tooltip.js"></script>
		<script type="text/javascript" src="assets/js/plugins/forms/styling/switchery.min.js"></script>
		<script type="text/javascript" src="assets/js/plugins/forms/styling/uniform.min.js"></script>
		<script type="text/javascript" src="assets/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
		<script type="text/javascript" src="assets/js/plugins/ui/moment/moment.min.js"></script>
		<script type="text/javascript" src="assets/js/plugins/pickers/daterangepicker.js"></script>

		<script type="text/javascript" src="assets/js/core/app.js"></script>
		<!-- <script type="text/javascript" src="assets/js/pages/dashboard.js"></script> -->
		<script src="assets/calender/js/pignose.calendar.js"></script>
		<!-- /theme JS files -->
	<?php
	} ?>

	<?php
	if ($sub_menu == "pengguna" or $sub_menu == "bagian" or $sub_menu == "ns" or $sub_menu == "sm" or $sub_menu == "sk" or $sub_menu == "memo" or $sub_menu == "data_sm" or $sub_menu == "data_sk") { ?>
		<!-- Theme JS files -->
		<?php if ($sub_menu == 'sm' and $sub_menu3 != '') {
		} elseif ($sub_menu == 'sk' and $sub_menu3 != '') {
		} else { ?>
			<script type="text/javascript" src="assets/js/plugins/tables/datatables/datatables.min.js"></script>

			<script type="text/javascript" src="assets/js/core/app.js"></script>
			<script type="text/javascript" src="assets/js/pages/datatables_basic.js"></script>
		<?php } ?>

		<!-- /theme JS files -->
	<?php
	} ?>


</head>
<style>
	/* Gaya CSS untuk dropdown dan lonceng */
.notification-dropdown {
    position: relative;
    display: inline-block;
    cursor: pointer;
}

.notification-badge {
    position: absolute;
    top: -5px;
    right: -5px;
    padding: 5px;
    background-color: red;
    color: white;
    border-radius: 20%;
}

.notification-list {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 300px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
    max-height: 200px; /* Menentukan tinggi maksimal area scroll */
    overflow-y: auto; /* Tampilkan scroll jika konten lebih panjang dari tinggi maksimal */
}

.notification-list a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.notification-list a:hover {
    background-color: #f1f1f1;
}

</style>
<body>

	<!-- Main navbar -->
	<div class="navbar navbar-default header-highlight">
		<div class="navbar-header">
			<a class="navbar-brand" href=""><img src="assets/images/logo_icon_light.png" alt=""></a>

			<ul class="nav navbar-nav visible-xs-block">
				<li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
				<li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
			</ul>
		</div>

		<div class="navbar-collapse collapse" id="navbar-mobile">
			<ul class="nav navbar-nav">
				<li><a class="sidebar-control sidebar-main-toggle hidden-xs"><i class="icon-paragraph-justify3"></i></a></li>
				<li style="margin-left: 10px;">
				<div class="notification-dropdown">
					<span class="notification-badge"><?php echo $jumlah ; ?></span>
				</div>
				<?php
					if ($this->session->userdata('level') === 's_admin') {
				?>	
				<!-- Dropdown Notifikasi -->
				<div class="notification-list">
					<?php foreach ($notifications as $notification): ?>
						<b>Surat Masuk</b>
						<a href="<?php echo site_url('Users/masuk/' . $notification->id_surat_masuk); ?>">
							<?php echo $notification->nomor_surat; ?>
							<?php echo $notification->perihal; ?>
						</a>
					<?php endforeach; ?>
					<?php foreach ($surat_keluar as $notification): ?>
						<b>Surat Keluar</b>
						<a href="<?php echo site_url('Users/keluar/' . $notification->id_surat_keluar); ?>">
							<?php echo $notification->nomor_surat; ?>
							<?php echo $notification->perihal; ?>
						</a>
					<?php endforeach; ?>
					<?php foreach ($ldisposisi as $notification): ?>
						<b>Disposisi</b>
						<a href="<?php echo site_url('Users/ldisposisi/' . $notification->id_disposisi); ?>">
							<?php echo $notification->nomor_surat; ?>
							<?php echo $notification->hal; ?>
						</a>
					<?php endforeach; ?>
   				</div>
				<?php
					}elseif ($this->session->userdata('level') === 'admin') {
				?>	
				<!-- Dropdown Notifikasi -->
				<div class="notification-list">
					<?php foreach ($surat_keluar as $notification): ?>
						<b>Surat Keluar</b>
						<a href="<?php echo site_url('Users/keluar/' . $notification->id_surat_keluar); ?>">
							<?php echo $notification->nomor_surat; ?>
							<?php echo $notification->perihal; ?>
						</a>
					<?php endforeach; ?>
					<?php foreach ($ldisposisi as $notification): ?>
						<b>Disposisi</b>
						<a href="<?php echo site_url('Users/ldisposisi/' . $notification->id_disposisi); ?>">
							<?php echo $notification->nomor_surat; ?>
							<?php echo $notification->hal; ?>
						</a>
					<?php endforeach; ?>
   				</div>
				<?php
					}elseif ($this->session->userdata('level') === 'user') {
				?>	
				<!-- Dropdown Notifikasi -->
				<div class="notification-list">
					<?php foreach ($notifications as $notification): ?>
						<b>Surat Masuk</b>
						<a href="<?php echo site_url('Users/masuk/' . $notification->id_surat_masuk); ?>">
							<?php echo $notification->nomor_surat; ?>
							<?php echo $notification->perihal; ?>
						</a>
					<?php endforeach; ?>
					<?php foreach ($ldisposisi as $notification): ?>
						<b>Disposisi</b>
						<a href="<?php echo site_url('Users/ldisposisi/' . $notification->id_disposisi); ?>">
							<?php echo $notification->nomor_surat; ?>
							<?php echo $notification->hal; ?>
						</a>
					<?php endforeach; ?>
   				</div>
				<?php
					}
				?>
				</li>
			</ul>

			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown dropdown-user">
					<a class="dropdown-toggle" data-toggle="dropdown">
						<img src="foto/default.png" alt="">
						<span><?php echo ucwords($nama); ?></span>
						<i class="caret"></i>
					</a>

					<ul class="dropdown-menu dropdown-menu-right">
						<li><a href="users/profile"><i class="icon-user"></i> Profile</a></li>
						<li class="divider"></li>
						<li><a href="web/logout"><i class="icon-switch2"></i> Logout</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
	<!-- /main navbar -->


	<!-- Page container -->
	<div class="page-container" >

		<!-- Page content -->
		<div class="page-content">

			<!-- Main sidebar -->
			<div class="sidebar sidebar-main">
				<div class="sidebar-content">

					<!-- User menu -->
					<div class="sidebar-user">
						<div class="category-content">
							<div class="media">
								<a href="users/profile" class="media-left"><img src="foto/default.png" class="img-circle img-sm" alt=""></a>
								<div class="media-body">
									<span class="media-heading text-semibold"><?php echo ucwords($nama); ?></span>
									<div class="text-size-mini text-muted">
										<i class="icon-pin text-size-small"></i> &nbsp;<?php echo ucwords($level); ?>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /user menu -->

					<!-- Main navigation -->
					<!-- Main navigation -->
					<div class="sidebar-category sidebar-category-visible" style="height: 660px !important;">
						<div class="category-content no-padding">
							<ul class="navigation navigation-main navigation-accordion">

								<!-- Main -->
								<li class="navigation-header"><span>Main</span> <i class="icon-menu" title="Main pages"></i></li>
								<li class="<?php if ($sub_menu == "") {
												echo 'active';
											} ?>"><a href=""><i class="icon-home4"></i> <span>Beranda</span></a></li>

								<?php if ($cek->level != "user") { ?>
									<li class="<?php if ($sub_menu == "pengguna") {
													echo 'active';
												} ?>">
										<a href="#"><i class="icon-gear"></i> <span>Pengaturan</span></a>
										<ul class="<?php if ($sub_menu == "disposisi" || $sub_menu == "lap_ds") {
															echo 'hidden-ul';
														} ?>">
											<?php if ($user->row()->level == 's_admin') { ?>
												<li class="<?php if ($sub_menu == "pengguna") {
																echo 'active';
															} ?>"><a href="users/pengguna"><i class="icon-users"></i> Pengguna</a></li>
											<?php } ?>
											<li class="<?php if ($sub_menu == "bagian") {
															echo 'active';
														} ?>"><a href="users/bagian"><i class="icon-puzzle3"></i> Bagian</a></li>
										</ul>
									</li>
									
								<?php } ?>

								<?php if ($cek->level == "user") { ?>
									
												<li class="<?php if ($sub_menu == "sk" or $sub_menu == "sm" or $sub_menu == "ds") {
													echo 'active';
												} ?>">
												
										<a href="#"><i class="icon-file-spreadsheet"></i> <span>Pemrosesan</span></a>
										<ul>
											<li class="<?php if ($sub_menu == "sm") {
															echo 'active';
														} ?>"><a href="users/sm"><i class="icon-folder-download2"></i> Surat Masuk</a></li>
											<li class="<?php if ($sub_menu == "ds") {
															echo 'active';
														} ?>"><a href="users/disposisi"><i class="icon-folder-upload2"></i> Disposisi</a></li>
											<li class="<?php if ($sub_menu == "sk") {
															echo 'active';
														} ?>"><a href="users/sk"><i class="icon-folder-upload2"></i> Surat Keluar</a></li>
										</ul>
									</li>
									
												<li class="<?php if ($sub_menu == "ds") {
													echo 'active';
												} ?>"><a href="users/lap_ds"><i class="icon-folder-upload2"></i>Laporan Disposisi</a></li>	
								<?php } else { ?>
									<li class="<?php if ($sub_menu == "sk" or $sub_menu == "sm") {
													echo 'active';
												} ?>">
										<a href="#"><i class="icon-file-spreadsheet"></i> <span>Pemrosesan</span></a>
												<ul>
													<li class="<?php if ($sub_menu == "sm") {
															echo 'active';
														} ?>"><a href="users/sm"><i class="icon-folder-download2"></i> Surat Masuk</a></li>
											<li class="<?php if ($sub_menu == "ds") {
															echo 'active';
														} ?>"><a href="users/disposisi"><i class="icon-folder-upload2"></i> Disposisi</a></li>
											<li class="<?php if ($sub_menu == "sk") {
															echo 'active';
														} ?>"><a href="users/sk"><i class="icon-folder-upload2"></i> Surat Keluar</a></li>
										</ul>
									</li>
									<li class="<?php if ($sub_menu == "memo") {
													echo 'active';
												} ?>"><a href="users/memo"><i class="icon-file-text2"></i> <span>Memo</span></a></li>
								<?php } ?>

								<?php if ($cek->level == "admin") { ?>
								
									<li class="<?php if ($sub_menu == "lap_sk" or $sub_menu == "lap_sm") {
													echo 'active';
												} ?>">
										<a  href="#"><i class="icon-printer4"></i> <span>Laporan</span></a>
										<ul class="<?php if ($sub_menu == "disposisi" || $sub_menu == "lap_ds") {
															echo 'hidden-ul';
														} ?>">											
														<li class="<?php if ($sub_menu == "lap_sm" or $sub_menu == "data_sm") {
															echo 'active';
														} ?>"><a href="users/lap_sm"><i class="icon-file-empty2"></i> Surat Masuk</a></li>
											<li class="<?php if ($sub_menu == "lap_ds") {
													echo 'active';
												} ?>"><a href="users/lap_ds"><i class="icon-folder-upload2"></i>Disposisi</a></li>
											<li class="<?php if ($sub_menu == "lap_sk" or $sub_menu == "data_sk") {
															echo 'active';
														} ?>"><a href="users/lap_sk"><i class="icon-file-empty2"></i> Surat Keluar</a></li>
										</ul>
									</li>
								<?php } ?>
								

								<!-- /main -->

								<!-- Logout -->
								<li class="navigation-header"><span>Logout</span> <i class="icon-menu" title="Forms"></i></li>
								<li><a href="web/logout"><i class="icon-switch2"></i> <span>Logout </span></a></li>

								<!-- /logout -->

							</ul>
						</div>
					</div>
					<!-- /main navigation -->

					<!-- /main navigation -->

				</div>
			</div>
			<!-- /main sidebar -->