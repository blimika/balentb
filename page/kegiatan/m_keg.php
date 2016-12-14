<div class="container">
<div class="row konten">
	<div class="col-lg-12 col-sm-12">
					<div class="btn-toolbar" role="toolbar">
					<div class="btn-group">
						<?php if ($_SESSION['sesi_level'] > 2) { ?><a href="<?php echo $url; ?>/kegiatan/add/" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Tambah</a> <?php } ?>
							<a href="<?php echo $url; ?>/kegiatan/" class="btn btn-danger"><i class="fa fa-tasks" aria-hidden="true"></i>&nbsp; Semua</a>
							<a href="<?php echo $url; ?>/kegiatan/provinsi/" class="btn btn-success"><i class="fa fa-tasks" aria-hidden="true"></i>&nbsp; Bidang/Bagian</a>
						</div>
				</div>

<?php
	if ($act=="add" and $_SESSION['sesi_level'] > 2) {
		include 'page/kegiatan/keg_form.php';
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
	else {
		 include 'page/kegiatan/keg_list.php';
	}
?>

</div>
	</div>
</div>
