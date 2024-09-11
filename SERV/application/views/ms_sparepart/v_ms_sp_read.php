<div class="content-body">
  <div class="row page-titles mx-0">
    <div class="col p-md-0">
      <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="javascript:void(0)">Sparepart</a></li>
          <li class="breadcrumb-item active"><a href="javascript:void(0)">Data Sparepart</a></li>
      </ol>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">
              Data Sparepart
              <a href="<?php echo base_url('/c_ms_sparepart/input') ?>">
                <div class="btn btn-success btn-sm mr-1">+</i></div>
              </a>
              <hr />
            </h4>
            <div class="table-responsive">
              <table class="table table-striped table-bordered zero-configuration">
                <thead>
                  <tr>
                    <td class="text-center">No</td>
                    <td class="text-center">Nama Sparepart</td>
                    <td class="text-center">Harga</td>
                    <td class="text-center">Stok</td>
                    <td class="text-center">Edit</td>
                    <td class="text-center">Hapus</td>
                  </tr>
                </thead>
                <tbody>
                        <?php $i=0; 
                        function rupiah($angka){
	
                          $hasil_rupiah = "Rp " . number_format($angka,2,',','.');
                          return $hasil_rupiah;
                         
                        }
                        ?>
                        <?php foreach ($sparepart as $spr) {?>
                          <tr>
                            <td class="text-center">
                              <?php $i++; ?>
                              <?php echo $i ?>
                            </td>
                            <!--<td><?php echo $spr->id_sparepart ?></td>-->
                            <td><?php echo $spr->nama_sparepart?></td>
                            <td align="right"><?php echo rupiah($spr->harga_sparepart)?></td>
                            <td align="right"><?php echo $spr->jumlah_sparepart?></td>
                            <td class="text-center">
                              <?php echo anchor('c_ms_sparepart/view_ubah/' .$spr->id_sparepart, 
                              '<div class="btn btn-primary btn-sm mr-1 mdi mdi-pen"> 
                              </div>') ?>
                            </td>
                            <td class="text-center" onclick="javascript: return confirm('Anda yakin untuk menghapus data?')">
                              <?php echo anchor('c_ms_sparepart/hapus/' .$spr->id_sparepart,
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
