<?php echo $this->session->flashdata('upload'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">
	<!-- Page Heading -->
	<h1 class="h3 mb-2 text-gray-800 mb-4">Gallery</h1>

	<!-- DataTales Example -->
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<a
				href="<?= base_url(); ?>administrator/package/add"
				class="btn btn-primary"
				>Tambah Foto</a
			>
		</div>
		<div class="card-body">


					<?php echo $this->session->flashdata('failed'); ?> 
           			<?php if($package->num_rows() > 0){ ?>
                    <div class="row">

						<?php $no = 1 ?>
						<?php foreach($package->result_array() as $data): ?>
                        <div class="mt-3 col-lg-3">
                            <div class="card shadow">
                                <div class="card-body">
									<img src="<?= base_url(); ?>assets/images/banner/<?= $data['banner']; ?>" width="100%">
									<hr>
									<h5 class="kuy-text text-center" ><?= $data['title']; ?></h5>
									<div class="kuy-edit d-flex justify-content-end">
										<a href="<?= base_url(); ?>administrator/delete_package/<?= $data['id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus foto ini?')"><i class="fa fa-trash"></i></a>
									</div>
                                </div>
                            </div>
                        </div>
						
						<?php $no++ ?>
                        <?php endforeach; ?>
                       
					<?php }else{ ?>
						<div class="alert alert-warning" role="alert">
							Opss, halaman masih kosong, yuk tambah sekarang.
						</div>
					<?php } ?>

					

                    </div>
		
		</div>
	</div>
</div>
<!-- /.container-fluid -->