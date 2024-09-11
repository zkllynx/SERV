<div class="content-body">
  <div class="row page-titles mx-0">
    <div class="col p-md-0">
      <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="javascript:void(0)">Pegawai</a></li>
          <li class="breadcrumb-item active"><a href="javascript:void(0)">Data Pegawai</a></li>
      </ol>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">
              Data Pegawai
              <a href="<?php echo base_url('/c_ms_pegawai/input') ?>">
                <div class="btn btn-success btn-sm mr-1">+</i></div>
              </a>
              <hr />
            </h4>
            <div class="table-responsive">
              <table class="table table-striped table-bordered zero-configuration">
                <thead>
                  <tr>
                          <td class="text-center">No</td>
                          <td class="text-center">Nama Pegawai</td>
                          <td class="text-center">Alamat</td>
                          <td class="text-center">Telepon</td>
                    <td class="text-center">Edit</td>
                    <td class="text-center">Hapus</td>
                  </tr>
                </thead>
                <tbody>
                        <?php $i=0; ?>
                        <?php foreach ($pegawai as $pgw) {?>
                          <tr>
                             <td class="text-center">
                              <?php $i++; ?>
                              <?php echo $i ?>
                            </td>
                            <!--<td><?php echo $pgw->id_pegawai ?></td>-->
                            <td><?php echo $pgw->nama_pegawai?></td>
                            <td><?php echo $pgw->alamat_pegawai?></td>
                            <td><?php echo $pgw->telp_pegawai?></td>
                            <td class="text-center">
                              <?php echo anchor('c_ms_pegawai/view_ubah/' .$pgw->id_pegawai, 
                              '<div class="btn btn-primary btn-sm mr-1 mdi mdi-pen"> 
                              </div>') ?>
                            </td>
                            <td class="text-center" onclick="javascript: return confirm('Anda yakin untuk menghapus data?')">
                              <?php echo anchor('c_ms_pegawai/hapus/' .$pgw->id_pegawai,
                              '<div class="btn btn-danger btn-sm ml--5 mdi mdi-delete" >
                              </div>') ?>
                            </td>
                          </tr>
                          <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>