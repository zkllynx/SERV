<div class="content-body">
  <div class="row page-titles mx-0">
    <div class="col p-md-0">
      <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="javascript:void(0)">Vendor</a></li>
          <li class="breadcrumb-item active"><a href="javascript:void(0)">Data Vendor</a></li>
      </ol>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">
              Data Vendor
              <a href="<?php echo base_url('/c_ms_vendor/input') ?>">
                <div class="btn btn-success btn-sm mr-1">+</i></div>
              </a>
              <hr />
            </h4>
            <div class="table-responsive">
              <table class="table table-striped table-bordered zero-configuration">
                <thead>
                  <tr>
                          <td class="text-center">No</td>
                          <td class="text-center">Nama</td>
                          <td class="text-center">Telepon</td>
                          <td class="text-center">Alamat</td>
                    <td class="text-center">Edit</td>
                    <td class="text-center">Hapus</td>
                  </tr>
                </thead>
                <tbody>
                        <?php $i=0; ?>
                        <?php foreach ($vendor as $vdr) {?>
                          <tr>
                            <td class="text-center">
                              <?php $i++; ?>
                              <?php echo $i ?>
                            </td>
                            <!--<td><?php echo $vdr->id_vendor ?></td>-->
                            <td><?php echo $vdr->nama_vendor?></td>
                            <td><?php echo $vdr->telp_vendor?></td>
                            <td><?php echo $vdr->alamat_vendor?></td>
                            <td class="text-center">
                              <?php echo anchor('c_ms_vendor/view_ubah/' .$vdr->id_vendor, 
                              '<div class="btn btn-primary btn-sm mr-1 mdi mdi-pen"> 
                              </div>') ?>
                            </td>
                            <td class="text-center" onclick="javascript: return confirm('Anda yakin untuk menghapus data?')">
                              <?php echo anchor('c_ms_vendor/hapus/' .$vdr->id_vendor,
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