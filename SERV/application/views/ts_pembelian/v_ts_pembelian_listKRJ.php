<div class="content-body">
  <div class="row page-titles mx-0">
    <div class="col p-md-0">
      <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?=base_url("javascript:void(0)");?>">Pembelian Barang</a></li>
          <li class="breadcrumb-item active"><a href="javascript:void(0)">List Pembelian</a></li>
      </ol>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">
              List Keranjang
              <hr />
            </h4>
            <div class="table-responsive">
              <table class="table table-striped table-bordered zero-configuration">
                <thead>
                  <tr>
                          <td class="text-center">No</td>
                          <td class="text-center">ID Barang</td>
                          <td class="text-center">Harga Barang</td>
                          <td class="text-center">Jumlah</td>
                          <td class="text-center">Sub Total</td>
                  </tr>
                </thead>
                <tbody>
                        <?php $i=0;$total=0; ?>
                        <?php foreach ($krj as $krj) {
                            $st=$krj->subtotal;
                            $total=$total+$st
                            ?>
                          <tr>
                            <td class="text-center">
                              <?php $i++; ?>
                              <?php echo $i ?>
                            </td>
                            <td><?php echo $krj->id_barang?></td>
                            <td><?php echo $krj->harga_barang?></td>
                            <td><?php echo $krj->jumlah?></td>
                            <td><?php echo $krj->subtotal?></td>
                          </tr>
                          <?php } ?>
                </tbody>
                          <tr>
                          <td class="text-center"></td>
                          <td class="text-center"></td>
                          <td class="text-center"></td>
                          <td class="text-center">Total</td>
                          <td class=""><?php echo $total?></td>
                         </tr>
                         <tr>
                          <td class="text-center"></td>
                          <td class="text-center"></td>
                          <td class="text-center"></td>
                          <td class="text-center"></td>
                          <td class="text-center">
                              <a href="<?php echo base_url('/c_ts_pembelian/bayar/'.$total)?>">
                                <div class="btn btn-danger btn-lg">Simpan</i></div>
                            </a>
                        </td>
                         </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>