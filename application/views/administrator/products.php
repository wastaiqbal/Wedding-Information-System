<?php echo $this->session->flashdata('upload'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">
	<!-- Page Heading -->
	<h1 class="h3 mb-2 text-gray-800 mb-4">Undangan</h1>

	<!-- DataTales Example -->
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<a
				href="<?= base_url(); ?>administrator/product/add"
				class="btn btn-primary"
				>Tambah Undangan</a
			>
		</div>
		<div class="card-body">
            <?php echo $this->session->flashdata('failed'); ?> 
            <?php if($getProducts->num_rows() > 0){ ?>
				<div class="table-responsive">
					<table
						class="table table-bordered"
						id="dataTable"
						width="100%"
						cellspacing="0"
					>
						<thead>
							<tr>
								<th style="width: 40px">#</th>
								<th style="width: 80px">Foto</th>
								<th>Nama</th>
								<th>Link Undangan</th>
								<th style="width: 250px">Tanggal Input</th>
								<th>Status</th>
								<th style="width: 130px">Aksi</th>
							</tr>
						</thead>
						<tfoot></tfoot>
						<tbody class="data-content">
							<?php $no = $this->uri->segment(3) + 1; ?>
							<?php foreach($getProducts->result_array() as $data): ?>
							<tr>
								<td><?= $no ?></td>
								<td><img style="width: 50px" src="<?= base_url(); ?>assets/images/product/<?= $data['productsImg']; ?>"></td>
								<td><?= $data['productsTitle']; ?></td>
								<td> 
									<a href="<?= base_url(); ?>p/<?= $data['productsSlug']; ?>">
									<p id="text_element" ><?= base_url(); ?>p/<?= $data['productsSlug']; ?></p> 
									</a>
								</td>
								<td><?= $data['productsDate']; ?></td>
								<?php if($data['productsPublish'] == 1){ ?>
									<td>Publish</td>
								<?php }else{ ?>
									<td>Draft</td>
								<?php } ?>
								<td>
									<a href="<?= base_url() ;?>administrator/product/<?= $data['productsId']; ?>/edit" class="btn btn-sm btn-info"><i class="fa fa-pen"></i></a>
									<a href="<?= base_url() ;?>administrator/delete_product/<?= $data['productsId']; ?>" onclick="return confirm('Yakin ingin menghapus produk?')" class="btn btn-sm btn-danger"><i class="fa fa-trash-alt"></i></a>
								</td>
							</tr>
							<?php $no++ ?>
							<?php endforeach; ?>
						</tbody>
					</table>
					<?= $this->pagination->create_links(); ?>
				</div>
				<?php }else{ ?>
				<div class="alert alert-warning" role="alert">
					Opss, produk masih kosong, yuk tambah produk sekarang.
				</div>
				<?php } ?>
		</div>
	</div>
</div>
<!-- /.container-fluid -->

<script>
		function copyToClipboard(elementId) {

		// Create an auxiliary hidden input
		var aux = document.createElement("input");

		// Get the text from the element passed into the input
		aux.setAttribute("value", document.getElementById(elementId).innerHTML);

		alert("Copied the text: " + document.getElementById(elementId).innerHTML);


		// Append the aux input to the body
		document.body.appendChild(aux);

		// Highlight the content
		aux.select();

		// Execute the copy command
		document.execCommand("copy");
		
		// Remove the input from the body
		document.body.removeChild(aux);

		}

		function log(){
		console.log('---')
		}
</script>