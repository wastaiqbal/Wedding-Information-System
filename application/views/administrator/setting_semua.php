<?php echo $this->session->flashdata('upload'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">
	<!-- Page Heading -->
	<h1 class="h3 mb-2 text-gray-800 mb-4">Pengaturan</h1>

	<div class="row">

    
    <div class="col-md-7">
            <div class="card shadow">
                <div class="card-header">
                    <h2 class="lead text-dark mb-0">Deskripsi Singkat</h2>
                </div>
                <div class="card-body">
                    <form action="<?= base_url(); ?>administrator/edit_couple" method="post">


                        <div class="mb-5 card shadow">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="tglNikah">Tanggal Pernikahan (dd-mm-yy)</label>
                                    <input type="text" autocomplete="off" name="tglNikah" id="tglNikah" class="form-control" required value="<?= $couple['tgl_pernikahan'] ?>">
                                </div>
                            </div>
                        </div>


                        <div class="mb-5 card shadow">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="lakinama">Nama Mempelai</label>
                                    <input type="text" autocomplete="off" name="lakinama" id="lakinama" class="form-control" required value="<?= $couple['laki_nama'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="lakidesc">Deskripsi Mempelai</label>
                                    <textarea name="lakidesc" id="lakidesc" class="form-control" required rows="5"><?= $couple['laki_deskripsi'] ?></textarea>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <label for="perempuannama">Nama Mempelai</label>
                                    <input type="text" autocomplete="off" name="perempuannama" id="perempuannama" class="form-control" required value="<?= $couple['perempuan_nama'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="lakidesc">Deskripsi Mempelai</label>
                                    <textarea name="perempuandesc" id="perempuandesc" class="form-control" required rows="5"><?= $couple['perempuan_deskripsi'] ?></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="mb-5 card shadow">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="linkgmap">Link Google Maps (Sematkan/IFRAME)</label>
                                    <textarea name="linkgmap" id="linkgmap" class="form-control" required rows="7"><?= $couple['link_gmap'] ?></textarea>
                                </div>
                            </div>
                        </div>
                       
                        <button class="btn btn-sm btn-info">Edit Deskripsi</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-5">
            <div class="card shadow">
                <div class="card-header">
                    <h2 class="lead text-dark mb-0">Love Story</h2>
                </div>
                <div class="card-body">
                    <?php echo $this->session->flashdata('failed1'); ?>
                   
                    <form action="<?= base_url(); ?>administrator/edit_lovestory" method="post" enctype="multipart/form-data" onsubmit="var text = document.getElementById('ofmDesc').value; if(text.length < 50) { alert('Deskripsi Harus Lebih dari 50 huruf'); return false; } return true;">

                        <div class="mb-5 card shadow">
                            <div class="card-body">
                                <p class="lead font-weight-bold">OUR FIRST MET</p>
                                <hr>
                                <div class="form-row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="ofmLink">Link Gambar</label>
                                            <input type="text" autocomplete="off" name="ofmLink" id="ofmLink" class="form-control" required value="<?= $lovestory['ofm_link'] ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="ofmTgl">Tanggal </label>
                                            <input type="text" autocomplete="off" name="ofmTgl" id="ofmTgl" class="form-control" required value="<?= $lovestory['ofm_tgl'] ?>">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="ofmDesc">Deskripsi Singkat</label>
                                    <textarea name="ofmDesc" minlength="50" id="ofmDesc" class="form-control" required rows="5"><?= $lovestory['ofm_desc'] ?></textarea>
                                </div>
                            </div>
                        </div>

                        <hr>

                        <div class="mb-5 card shadow">
                            <div class="card-body">
                                <p class="lead font-weight-bold">OUR STORY</p>
                                <hr>
                                <div class="form-row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="fdLink">Link Gambar</label>
                                            <input type="text" autocomplete="off" name="fdLink" id="fdLink" class="form-control" required value="<?= $lovestory['fd_link'] ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="fdTgl">Tanggal </label>
                                            <input type="text" autocomplete="off" name="fdTgl" id="fdTgl" class="form-control" required value="<?= $lovestory['fd_tgl'] ?>">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="fdDesc">Deskripsi Singkat</label>
                                    <textarea name="fdDesc" id="fdDesc" minlength="50" class="form-control" required rows="5"><?= $lovestory['fd_desc'] ?></textarea>
                                </div>
                            </div>
                        </div>

                        <hr>


                        <div class="mb-5 card shadow">
                            <div class="card-body">
                                <p class="lead font-weight-bold">HE PROPOSED</p>
                                <hr>
                                <div class="form-row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="hpLink">Link Gambar</label>
                                            <input type="text" autocomplete="off" name="hpLink" id="hpLink" class="form-control" required value="<?= $lovestory['hp_link'] ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="hpTgl">Tanggal </label>
                                            <input type="text" autocomplete="off" name="hpTgl" id="hpTgl" class="form-control" required value="<?= $lovestory['hp_tgl'] ?>">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="hpDesc">Deskripsi Singkat</label>
                                    <textarea name="hpDesc" id="hpDesc" minlength="50" class="form-control" required rows="5"><?= $lovestory['hp_desc'] ?></textarea>
                                </div>
                            </div>
                        </div>


                        <button type="submit" style="padding: 5px 30px;" class="btn btn-sm btn-info">Ganti</button>    
                    </form>
                  
                </div>
            </div>
        </div>
        
    </div>
</div>
<div class="mt-5"></div>

<!-- /.container-fluid -->
