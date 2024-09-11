<div class="content-body">
  <div class="row page-titles mx-0">
    <div class="col p-md-0">
      <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="javascript:void(0)">Transaksi</a></li>
          <li class="breadcrumb-item active"><a href="javascript:void(0)">List Servis</a></li>
      </ol>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">
              List Servis
              <hr />
            </h4>
            <div class="table-responsive">
              <table class="table table-striped table-bordered zero-configuration">
                <thead>
                  <tr>
                    <td class="text-center">No</td>
                    <td class="text-center">Nama Servis</td>
                    <td class="text-center">Harga</td>
                    <td class="text-center">Tambah</td>
                  </tr>
                </thead>
                <tbody>
                        <?php $i=0; 
                        function rupiah($angka){
	
                          $hasil_rupiah = "Rp " . number_format($angka,2,',','.');
                          return $hasil_rupiah;
                         
                        }
                        ?>
                        <?php foreach ($servis as $ser) {?>
                          <tr>
                            <td class="text-center">
                              <?php $i++; ?>
                              <?php echo $i ?>
                            </td>
                            <!--<td><?php echo $ser->id_dservice ?></td>-->
                            <td><?php echo $ser->nama_dservice?></td>
                            <td align="right"><?php echo rupiah($ser->harga_dservice)?></td>
                            <td class="text-center">
                            <a href="<?php echo base_url('/c_ts_servis/tambahKRJ/'.$ser->id_dservice.'/'.$ser->harga_dservice.'/servis')?>">
                                <div class="btn btn-success btn-sm mr-1">+</i></div>
                            </a>
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
