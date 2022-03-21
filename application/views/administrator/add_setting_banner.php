<?php echo $this->session->flashdata('upload'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">
	<!-- Page Heading -->
	<h1 class="h3 mb-2 text-gray-800 mb-4">Pengaturan</h1>

	<div class="row">
        <div class="col-md-3">
            <div class="card shadow">
                <div class="card-body">
                <?php include('menu-setting.php') ?>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="card shadow">
                <div class="card-header">
                    <h2 class="lead text-dark mb-0">Tambah Home Wallpaper</h2>
                </div>
                <div class="card-body">
                    <?php echo $this->session->flashdata('failed'); ?>
                    <form action="<?= base_url(); ?>administrator/add_banner_setting_post" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="img">Gambar Banner</label>
                            <input type="file" name="img" id="img" class="form-control">
                            <small class="text-muted">Pastikan gambar berukuran maksimal 2mb, berformat png, jpg, jpeg. Dan berukuran 1366x911px</small>
                        </div>
                        <div class="d-none form-group">
                            <label for="url">URL (opsional)</label>
                            <input type="text" class="form-control" name="url" autocomplete="off" id="url" value="hapusaja">
                        </div>
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
