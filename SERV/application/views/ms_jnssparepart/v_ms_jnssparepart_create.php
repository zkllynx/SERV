<div class="content-body">
  <div class="row page-titles mx-0">
    <div class="col p-md-0">
      <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="javascript:void(0)">Jenis Sparepart</a></li>
          <li class="breadcrumb-item active"><a href="javascript:void(0)">Tambah Data Jenis Sparepart</a></li>
      </ol>
    </div>
  </div>
  <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Tambah Data Jenis Sparepart</h4>
                <hr />
                <div class="row">
                    <div class="col-12">
                        <form role="form" action="<?php echo site_url('c_ms_jnssparepart/tambah') ?>" method="post">
                            <div class="box-body">
                                <input type="hidden" class="form-control" name="id_jenis_sparepart" value="" required> 
                                <div class="form-group">
                                    <label for="username">Nama Jenis Sparepart</label>
                                    <input type="text" class="form-control" name="nama_jenis_sparepart" required> 
                                </div>
                                <button type="reset" class="btn btn-dark pull-left"  onclick="location.href='<?=site_url('c_ms_jnssparepart')?>'">Batal</button>
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