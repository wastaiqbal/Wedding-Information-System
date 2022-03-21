<?php echo $this->session->flashdata('upload'); ?>

<!-- Begin Page Content -->
<div class="container-fluid mb-4">
	<!-- Page Heading -->
	<h1 class="h3 mb-2 text-gray-800 mb-4">Pengaturan</h1>

	<div class="row">
        <div class="col-lg-3">
            <div class="card shadow">
                <div class="card-body">
                <?php include('menu-setting.php') ?>
                </div>
            </div>
        </div>
        <div class="col-lg-9">
            <div class="card shadow">
                <div class="card-body">

                    
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="">
                                <div class="card-body">
                                    <?php echo $this->session->flashdata('failed2'); ?>
                                    <p class="lead">Favicon</p>
                                    <img src="<?= base_url(); ?>assets/images/logo/<?= $setting['favicon'] ?>" alt="favicon" width="70px">
                                    <form action="<?= base_url(); ?>administrator/setting_change_favicon" method="post" enctype="multipart/form-data">
                                        <div class="form-group mt-2">
                                            <input type="file" name="logo" id="logo" class="form-control" required>
                                        </div>
                                        <button type="submit" class="btn btn-sm btn-success">Ganti Favicon</button>    
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="">
                                <div class="card-body">
                                    <?php echo $this->session->flashdata('failed2'); ?>
                                    <p class="lead">Logo Website</p>
                                    <img src="<?= base_url(); ?>assets/images/logo/<?= $setting['logo3'] ?>" alt="Logo" width="70px">
                                    <form action="<?= base_url(); ?>administrator/setting_change_logo3" method="post" enctype="multipart/form-data">
                                        <div class="form-group mt-2">
                                            <input type="file" name="logo" id="logo" class="form-control" required>
                                        </div>
                                        <button type="submit" class="btn btn-sm btn-success">Ganti Favicon</button>    
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                 
                    <hr>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card shadow">
                                <div class="card-body">
                                    <?php echo $this->session->flashdata('failed1'); ?>
                                    <p class="lead">Foto Mempelai Pria</p>
                                    <img src="<?= base_url(); ?>assets/images/logo/<?= $setting['logo2'] ?>" alt="logo" width="100%">
                                    <form action="<?= base_url(); ?>administrator/setting_change_logo2" method="post" enctype="multipart/form-data">
                                        <div class="form-group mt-2">
                                            <input type="file" name="logo" id="logo" class="form-control" required>
                                        </div>
                                        <button type="submit" class="btn btn-sm btn-success">Ganti Foto</button>    
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card shadow">
                                <div class="card-body">
                                    <?php echo $this->session->flashdata('failed1'); ?>
                                    <p class="lead">Foto Mempelai Wanita</p>
                                    <img src="<?= base_url(); ?>assets/images/logo/<?= $setting['logo'] ?>" alt="logo" width="100%">
                                    <form action="<?= base_url(); ?>administrator/setting_change_logo" method="post" enctype="multipart/form-data">
                                        <div class="form-group mt-2">
                                            <input type="file" name="logo" id="logo" class="form-control" required>
                                        </div>
                                        <button type="submit" class="btn btn-sm btn-success">Ganti Foto</button>    
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    
                    <hr>
                   
                    <div class="col-md-9">
                </div>
            </div>
        </div>
        <div class="card shadow mt-3">
            <div class="card-header">
                <h2 class="lead text-dark mb-0">Umum</h2>
            </div>
                <div class="card-body">
                    <form action="<?= base_url(); ?>administrator/setting/general" method="post">
                        <div class="form-group">
                            <label for="title">Nama Website</label>
                            <input type="text" autocomplete="off" name="title" id="title" class="form-control" required value="<?= $general['app_name']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="slogan">Slogan Website</label>
                            <input type="text" autocomplete="off" name="slogan" id="slogan" class="form-control" required value="<?= $general['slogan']; ?>">
                            <small class="text-muted">Akan muncul pada title home</small>
                        </div>
                       
                        <div class="form-group">
                            <label for="whatsapp">WhatsApp</label>
                            <input type="number" autocomplete="off" name="whatsapp" id="whatsapp" class="form-control" required value="<?= $general['whatsapp']; ?>">
                            <small class="text-muted">Format angka 08xx. Contoh: 081234567890</small>
                        </div>
                       
                        <button type="submit" class="btn btn-sm btn-success">Update</button>    
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
