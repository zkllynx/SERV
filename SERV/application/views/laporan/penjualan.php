<div class="content-body">
  <div class="row page-titles mx-0">
    <div class="col p-md-0">
      <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="javascript:void(0)">Laporan</a></li>
          <li class="breadcrumb-item active"><a href="javascript:void(0)">Penjualan</a></li>
      </ol>
    </div>
  </div>
  <div class="container-fluid">
      
  <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <!-- Logo & title -->
                        <div class="clearfix">
                            <div class="float-start">
                                <div class="auth-logo">
                                    <div class="logo logo-dark">
                                        <span class="logo-lg">
                                        </span>
                                    </div>
                
                                    <div class="logo logo-light">
                                        <span class="logo-lg">
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-6">
                                <div class="mt-3">
                                    <h3><b>Laporan Penjualan</b></h3>
                                </div>

                            </div><!-- end col -->
                        </div><!-- end row -->

                        <div class="row mt-1">
                            <div class="col-sm-6">
                            </div> <!-- end col -->

                            <div class="col-sm-6">
                                
                            </div> <!-- end col -->
                        </div> 
                        <!-- end row -->

                        <div class="row">
                            <div class="col-12">
                                <div class="table-responsive">
                                    <table class="table mt-4 table-centered">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Transaksi Id</th>
                                                <th style="width: 15%">Tanggal</th>
                                                <th style="width: 15%">Customer</th>
                                                <th style="width: 15%" class="text-end">Total Belanja</th>
                                            </tr>
                                        </thead>

                                        <tbody><?php $i=0; ?>
                                            <?php foreach ($lap_penjualan as $lp) {?>
                                            <tr>
                                                <td class="text-center">
                                                <?php $i++; ?>
                                                <?php echo $i ?>
                                                </td>
                                                <td><?php echo $lp->id_penjualan ?></td>
                                                <td><?php echo $lp->tgl_penjualan?></td>
                                                <td><?php echo $lp->id_pelanggan?></td>
                                                <td><?php echo $lp->total_penjualan?></td>
                                                </td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div> <!-- end table-responsive -->
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->
                        <div class="mt-4 mb-1">
                            <div class="text-end d-print-none">
                                <a href="javascript:window.print()" class="btn btn-outline-primary waves-effect waves-light"><i class="mdi mdi-printer"></i>PDF</a>
                            </div>
                        </div>

                        <?php echo form_close();?>
                    </div>
                </div> <!-- end card -->
            </div> <!-- end col -->
        </div>
  </div>
</div>