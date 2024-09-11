<div class="content-body">
  <div class="row page-titles mx-0">
    <div class="col p-md-0">
      <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="javascript:void(0)">Sparepart</a></li>
          <li class="breadcrumb-item active"><a href="javascript:void(0)">Edit Data Sparepart</a></li>
      </ol>
    </div>
  </div>
  <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Edit Data Sparepart</h4>
                <hr />
                <?php foreach($ms_sparepart as $spr) { ?>
                <div class="row">
                    <div class="col-12">
                        <form role="form" action="<?php echo site_url('c_ms_sparepart/ubah') ?>" method="post">
                            <div class="box-body">
                                <input type="hidden" class="form-control" name="id_sparepart"  value="<?php echo $spr->id_sparepart ?>" required> 
                                <div class="form-group">
                                    <label for="pass">Vendor</label>
                                    <select class="form-control form-control-sm" id="exampleFormControlSelect3" name="id_vendor" required>
                                     <option disabled selected>-- Pilih Vendor --</option>
                                        <?php foreach ($vendor as $v) : ?>
                                        <option <?php if ( $v->id_vendor == $spr-> id_vendor){
                                            echo 'selected="selected"';}?> value = "<?php echo $v->id_vendor; ?>">
                                            <?php echo $v->nama_vendor; ?>
                                        </option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="pass">Jenis Sparepart</label>
                                    <select class="form-control form-control-sm" id="exampleFormControlSelect3" name="id_jenis_sparepart" required>
                                     <option disabled selected>-- Pilih Jenis Sparepart --</option>
                                        <?php foreach ($jenis_sparepart as $js) : ?>
                                        <option <?php if ( $js->id_jenis_sparepart == $spr-> id_jenis_sparepart){
                                            echo 'selected="selected"';}?> value = "<?php echo $js->id_jenis_sparepart; ?>">
                                            <?php echo $js->nama_jenis_sparepart; ?>
                                        </option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="username">Nama Sparepart</label>
                                    <input type="text" class="form-control" name="nama_sparepart"  value="<?php echo $spr->nama_sparepart ?>" required> 
                                </div>
                                <div class="form-group">
                                    <label for="nama">Harga</label>
                                    <input type="number" class="form-control" name="harga_sparepart"  value="<?php echo $spr->harga_sparepart ?>" required> 
                                </div>
                                <div class="form-group">
                                    <label for="pass">Stok</label>
                                    <input type="number" class="form-control" name="jumlah_sparepart"  value="<?php echo $spr->jumlah_sparepart ?>" required>
                                </div>
                                <button type="reset" class="btn btn-dark pull-left"  onclick="location.href='<?=site_url('c_ms_sparepart')?>'">Batal</button>
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
