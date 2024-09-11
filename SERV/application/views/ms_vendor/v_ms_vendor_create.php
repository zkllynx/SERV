<div class="content-body">
  <div class="row page-titles mx-0">
    <div class="col p-md-0">
      <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="javascript:void(0)">Vendor</a></li>
          <li class="breadcrumb-item active"><a href="javascript:void(0)">Tambah Data Vendor</a></li>
      </ol>
    </div>
  </div>
  <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Tambah Data Vendor</h4>
                <hr />
                <div class="row">
                    <div class="col-12">
                        <form role="form" action="<?php echo site_url('c_ms_vendor/tambah') ?>" method="post">
                            <div class="box-body">
                                <input type="hidden" class="form-control" name="id_vendor" value="" required> 
                                <div class="form-group">
                                    <label for="username">Nama Vendor</label>
                                    <input type="text" class="form-control" name="nama_vendor" required> 
                                </div>
                                <div class="form-group">
                                    <label for="nama">Telepon Vendor</label>
                                    <input type="number" class="form-control" name="telp_vendor" required> 
                                </div>
                                <div class="form-group">
                                    <label for="pass">Alamat Vendor</label>
                                    <textarea  type="text" class="form-control" id="exampleTextarea1" rows="4" name="alamat_vendor" required></textarea>
                                </div>
                                <button type="reset" class="btn btn-dark pull-left"  onclick="location.href='<?=site_url('c_ms_vendor')?>'">Batal</button>
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
