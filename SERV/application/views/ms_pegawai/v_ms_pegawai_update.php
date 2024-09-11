<div class="content-body">
  <div class="row page-titles mx-0">
    <div class="col p-md-0">
      <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="javascript:void(0)">Pegawai</a></li>
          <li class="breadcrumb-item active"><a href="javascript:void(0)">Edit Data Pegawai</a></li>
      </ol>
    </div>
  </div>
  <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Edit Data Pegawai</h4>
                <hr />
                <?php foreach($ms_pegawai as $pgw) { ?>
                <div class="row">
                    <div class="col-12">
                        <form role="form" action="<?php echo site_url('c_ms_pegawai/ubah') ?>" method="post">
                            <div class="box-body">
                                <input type="hidden" class="form-control" name="id_pegawai"  value="<?php echo $pgw->id_pegawai ?>" required> 
                                <div class="form-group">
                                    <label for="nama">Nama Pegawai</label>
                                    <input type="text" class="form-control" name="nama_pegawai"  value="<?php echo $pgw->nama_pegawai ?>" required> 
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <input type="text" class="form-control" name="alamat_pegawai"  value="<?php echo $pgw->alamat_pegawai ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="telp">Telepon</label>
                                    <input type="number" class="form-control" name="telp_pegawai"  value="<?php echo $pgw->telp_pegawai ?>" required> 
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Username</label>
                                    <input type="text" class="form-control" name="username"  value="<?php echo $pgw->username ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Password</label>
                                    <input type="pass" class="form-control" name="password"  value="<?php echo $pgw->password ?>" required>
                                </div>
                                <button type="reset" class="btn btn-dark pull-left"  onclick="location.href='<?=site_url('c_ms_pegawai')?>'">Batal</button>
                                &nbsp;&nbsp;
                                <button type="submit" class="btn btn-primary">Edit</button>
                            </div>
                        </form>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
