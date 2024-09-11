<div class="content-body">
  <div class="row page-titles mx-0">
    <div class="col p-md-0">
      <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="javascript:void(0)">Vendor</a></li>
          <li class="breadcrumb-item active"><a href="javascript:void(0)">Edit Data Vendor</a></li>
      </ol>
    </div>
  </div>
  <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Edit Data Vendor</h4>
                <hr />
                <?php foreach($ms_vendor as $vdr) { ?>
                <div class="row">
                    <div class="col-12">
                        <form role="form" action="<?php echo site_url('c_ms_vendor/ubah') ?>" method="post">
                            <div class="box-body">
                                <input type="hidden" class="form-control" name="id_vendor"  value="<?php echo $vdr->id_vendor ?>" required> 
                                <div class="form-group">
                                    <label for="username">Nama Vendor</label>
                                    <input type="text" class="form-control" name="nama_vendor"  value="<?php echo $vdr->nama_vendor ?>" required> 
                                </div>
                                <div class="form-group">
                                    <label for="nama">Telepon Vendor</label>
                                    <input type="number" class="form-control" name="telp_vendor"  value="<?php echo $vdr->telp_vendor ?>" required> 
                                </div>
                                <div class="form-group">
                                    <label for="pass">Alamat Vendor</label>
                                    <input type="text" class="form-control" name="alamat_vendor"  value="<?php echo $vdr->alamat_vendor ?>" required>
                                </div>
                                <button type="reset" class="btn btn-dark pull-left"  onclick="location.href='<?=site_url('c_ms_vendor')?>'">Batal</button>
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
