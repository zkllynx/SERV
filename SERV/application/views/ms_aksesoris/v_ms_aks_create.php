<div class="content-body">
  <div class="row page-titles mx-0">
    <div class="col p-md-0">
      <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="javascript:void(0)">Aksesoris</a></li>
          <li class="breadcrumb-item active"><a href="javascript:void(0)">Tambah Data Aksesoris</a></li>
      </ol>
    </div>
  </div>
  <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Tambah Data Aksesoris</h4>
                <hr />
                <div class="row">
                    <div class="col-12">
                        <form role="form" action="<?php echo site_url('c_ms_aksesoris/tambah') ?>" method="post">
                            <div class="box-body">
                                <input type="hidden" class="form-control" name="id_aksesoris" value="" required>
                                <div class="form-group">
                                    <label for="pass">Vendor</label>
                                    <select class="form-control form-control-sm" id="exampleFormControlSelect3" name="id_vendor" required>
                                        <option disabled selected>-- Pilih Vendor --</option>
                                        <?php foreach ($vendor as $v): ?>
                                            <option value="<?php echo $v->id_vendor ?>"><?php echo $v->nama_vendor ?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div> 
                                <div class="form-group">
                                    <label for="username">Nama Aksesoris</label>
                                    <input type="text" class="form-control" name="nama_aksesoris" required> 
                                </div>
                                <div class="form-group">
                                    <label for="nama">Harga</label>
                                    <input type="number" class="form-control" name="harga_aksesoris" required> 
                                </div>
                                <div class="form-group">
                                    <label for="pass">Stok</label>
                                    <input type="number" class="form-control" name="jumlah_aksesoris" required>
                                </div>
                                <button type="reset" class="btn btn-dark pull-left"  onclick="location.href='<?=site_url('c_ms_aksesoris')?>'">Batal</button>
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
