<div class="content-body">
  <div class="row page-titles mx-0">
    <div class="col p-md-0">
      <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="javascript:void(0)">Sparepart</a></li>
          <li class="breadcrumb-item active"><a href="javascript:void(0)">Tambah Data Sparepart</a></li>
      </ol>
    </div>
  </div>
  <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Tambah Data Sparepart</h4>
                <hr />
                <div class="row">
                    <div class="col-12">
                        <form role="form" action="<?php echo site_url('c_ms_sparepart/tambah') ?>" method="post" enctype="multipart/form-data">
                            <div class="box-body">
                                <input type="hidden" class="form-control" name="id_sparepart" value="" required> 
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
                                    <label for="pass">Jenis Sparepart</label>
                                    <select class="form-control form-control-sm" id="exampleFormControlSelect3" name="id_jenis_sparepart" required>
                                        <option disabled selected>-- Pilih Jenis Sparepart --</option>
                                        <?php foreach ($jenis_sparepart as $spr): ?>
                                            <option value="<?php echo $spr->id_jenis_sparepart ?>"><?php echo $spr->nama_jenis_sparepart ?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="username">Nama Sparepart</label>
                                    <input type="text" class="form-control" name="nama_sparepart" required> 
                                </div>
                                <div class="form-group">
                                    <label for="nama">Harga</label>
                                    <input type="number" class="form-control" name="harga_sparepart" required> 
                                </div>
                                <div class="form-group">
                                    <label for="pass">Stok</label>
                                    <input type="text" class="form-control" name="jumlah_sparepart" required>
                                </div>
                                <!--
                                <div class="form-group">
                                    <label>Gambar</label>
                                    <td><input type="file" class="form-control" name="input_gambar"></td>
                                </div>
                                -->
                                <button type="reset" class="btn btn-dark pull-left"  onclick="location.href='<?=site_url('c_ms_sparepart')?>'">Batal</button>
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
