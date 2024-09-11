<div class="content-body">
  <div class="row page-titles mx-0">
    <div class="col p-md-0">
      <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="javascript:void(0)">Pelanggan</a></li>
          <li class="breadcrumb-item active"><a href="javascript:void(0)">Tambah Data Pelanggan</a></li>
      </ol>
    </div>
  </div>
  <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Tambah Data Pelanggan</h4>
                <hr />
                <div class="row">
                    <div class="col-12">
                        <form role="form" action="<?php echo site_url('c_ms_pelanggan/tambah') ?>" method="post">
                            <div class="box-body">
                                <input type="hidden" class="form-control" name="id_pelanggan" value="" required> 
                                <div class="form-group">
                                    <label for="nama">Nama Pelanggan</label>
                                    <input type="text" class="form-control" name="nama_pelanggan" required> 
                                </div>
                                <div class="form-group">
                                    <label for="telp">Telepon</label>
                                    <input type="number" class="form-control" name="telp_pelanggan" required> 
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <input type="text" class="form-control" name="alamat_pelanggan" required>
                                </div>      
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input type="text" class="form-control" name="username" required>
                                </div>            
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="pass" class="form-control" name="password" required>
                                </div>
                                <button type="reset" class="btn btn-dark pull-left"  onclick="location.href='<?=site_url('c_ms_pelanggan')?>'">Batal</button>
                                &nbsp;&nbsp;
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
