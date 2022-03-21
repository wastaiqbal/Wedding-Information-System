<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
  <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
</div>

<!-- Content Row -->
<div class="row">

  
  <?php $data = $this->db->get('products')->num_rows(); ?>
  <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Undangan</div>
            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $data; ?></div>
          </div>
          <div class="col-auto">
            <i class="fas fa-calendar fa-2x text-gray-300"></i>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php $data = $this->db->get_where('products', ['promo_price !=' => 0])->num_rows(); ?>
  <div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-info shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tamu Kehormatan</div>
            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $data; ?></div>
          </div>
          <div class="col-auto">
            <i class="fas fa-calendar fa-2x text-gray-300"></i>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php $desc = $this->db->get('settings')->row_array(); ?>
    <div class="col-md-6 mb-3">
        <div class="card shadow">
            <div class="card-header">
                Pernikahan <?= $this->Settings_model->general()["app_name"]; ?>
            </div>
            <div class="card-body">
                <?= $desc['short_desc']; ?>
            </div>
        </div>
    </div>


</div>

<?php $this->db->limit(10); $data = $this->db->get('products'); ?>
<div class="row">
    <div class="col-md-6 mb-3">
        <div class="card shadow">
            <div class="card-header">
                Undangan dibuat
            </div>
            <div class="card-body">
                <?php if($data->num_rows() > 0){ ?>
                <div class="table-responsive">
                  <table class="table table-bordered" width="100%">
                      <tr>
                          <th>Nama</th>
                          <th>Link</th>
                      </tr>
                      <?php foreach($data->result_array() as $d): ?>
                          <tr>
                              <td><?= $d['title'] ?></td>
                              <td><?= $d['slug'] ?></td>
                          </tr>
                      <?php endforeach; ?>
                  </table>
                </div>
                <?php }else{ ?>
                    <div class="alert alert-warning">Belum ada Undangan dibuat</div>
                <?php } ?>
                <div class="d-flex justify-content-end">
                  <a class="btn btn-sm btn-info" href="<?= base_url(); ?>administrator/products" >Lebih Lengkap</a>
                </div>
            </div>
        </div>
    </div>    
   
</div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

</div>
<!-- End of Content Wrapper -->