<?php 
if ($act=="bidang") { $btn_bid="active";$btn_keg='';$btn_add=''; }
elseif ($act=="add") { $btn_add="active";$btn_bid='';$btn_keg=''; }
elseif ($act=="") { $btn_keg="active";$btn_bid='';$btn_add=''; } ?>
<div class="container">
<div class="row konten">
	<div class="col-lg-12 col-sm-12">
		<div class="btn-toolbar" role="toolbar">
		<div class="btn-group">
			<?php if ($_SESSION['sesi_level'] > 2) { ?><a href="<?php echo $url; ?>/kegiatan/add/" class="btn btn-primary <?php echo $btn_add;?>"><span class="glyphicon glyphicon-plus"></span></a> <?php } ?>
				<a href="<?php echo $url; ?>/kegiatan/" class="btn btn-danger <?php echo $btn_keg;?>"><i class="fa fa-tasks" aria-hidden="true"></i>&nbsp; Semua</a>
				<a href="<?php echo $url; ?>/kegiatan/bidang/" class="btn btn-success <?php echo $btn_bid;?>"><i class="fa fa-tasks" aria-hidden="true"></i>&nbsp; Bidang/Bagian</a>
			</div>
	</div>

<?php
	if ($act=="add" and $_SESSION['sesi_level'] > 2) {
		include 'page/kegiatan/keg_form.php';
	}
	elseif ($act=="addinfo" and $_SESSION['sesi_level'] > 2) {
		include 'page/kegiatan/keg_info_form.php';
	}
	elseif ($act=="saveinfo" and $_SESSION['sesi_level'] > 2) {
			include 'page/kegiatan/keg_info_save.php';
		}
	elseif ($act=="editinfo" and $_SESSION['sesi_level'] > 2) {
		include 'page/kegiatan/keg_info_form_edit.php';
	}
	elseif ($act=="deleteinfo" and $_SESSION['sesi_level'] > 2) {
		include 'page/kegiatan/keg_info_delete.php';
	}
	elseif ($act=="save" and $_SESSION['sesi_level'] > 2) {
			include 'page/kegiatan/keg_save.php';
		}
	elseif ($act=="edit" and $_SESSION['sesi_level'] > 2) {
		include 'page/kegiatan/keg_form_edit.php';
	}
	elseif ($act=="update" and $_SESSION['sesi_level'] > 2) {
			include 'page/kegiatan/keg_update.php';
		}
	elseif ($act=="view") {
			include 'page/kegiatan/keg_view.php';
	}
	elseif ($act=="bidang") {
			include 'page/kegiatan/keg_list_bidang.php';
	}
	elseif ($act=="kirim") {
			include 'page/kegiatan/keg_kirim_form.php';
	}
	elseif ($act=="savekirim") {
			include 'page/kegiatan/keg_kirim_save.php';
	}
	elseif ($act=="terima") {
			include 'page/kegiatan/keg_terima_form.php';
	}
	elseif ($act=="saveterima") {
			include 'page/kegiatan/keg_terima_save.php';
	}
	elseif ($act=="editkirim") {
			include 'page/kegiatan/keg_kirim_form_edit.php';
	}
	elseif ($act=="updatekirim") {
		include 'page/kegiatan/keg_kirim_update.php';
	}
	elseif ($act=="editterima") {
			include 'page/kegiatan/keg_terima_form_edit.php';
	}
	elseif ($act=="updateterima") {
		include 'page/kegiatan/keg_terima_update.php';
	}
	elseif ($act=="deletedetil" and $_SESSION['sesi_level'] > 1) {
		include 'page/kegiatan/keg_delete_detil.php';
	}
	elseif ($act=="delete" and $_SESSION['sesi_level'] > 2) {
		include 'page/kegiatan/keg_delete.php';
	}
	elseif ($act=="kirimspj") {
			include 'page/kegiatan/spj_kirim_form.php';
	}
	elseif ($act=="savekirimspj") {
			include 'page/kegiatan/spj_kirim_save.php';
	}
	elseif ($act=="editkirimspj") {
			include 'page/kegiatan/spj_kirim_form_edit.php';
	}
	elseif ($act=="updatekirimspj") {
		include 'page/kegiatan/spj_kirim_update.php';
	}
	elseif ($act=="terimaspj") {
			include 'page/kegiatan/spj_terima_form.php';
	}
	elseif ($act=="saveterimaspj") {
			include 'page/kegiatan/spj_terima_save.php';
	}
	elseif ($act=="editterimaspj") {
			include 'page/kegiatan/spj_terima_form_edit.php';
	}
	elseif ($act=="updateterimaspj") {
			include 'page/kegiatan/spj_terima_update.php';
	}
	elseif ($act=="deletedetilspj" and $_SESSION['sesi_level'] > 1) {
		include 'page/kegiatan/spj_delete_detil.php';
	}
	else {
		 include 'page/kegiatan/keg_list.php';
	}
?>

</div>
	</div>
</div>
