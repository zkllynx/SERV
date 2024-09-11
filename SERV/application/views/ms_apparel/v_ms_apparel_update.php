<div class="content-body">
  <div class="row page-titles mx-0">
    <div class="col p-md-0">
      <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="javascript:void(0)">Apparel</a></li>
          <li class="breadcrumb-item active"><a href="javascript:void(0)">Edit Data Apparel</a></li>
      </ol>
    </div>
  </div>
  <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Edit Data Apparel</h4>
                <hr />
                <?php foreach($jnsapp as $aks) { ?>
                <div class="row">
                    <div class="col-12">
                        <form role="form" action="<?php echo site_url('c_ms_apparel/ubah') ?>" method="post">
                            <div class="box-body">
                                <input type="hidden" class="form-control" name="id_apparel"  value="<?php echo $aks->id_apparel ?>" required>
                                <div class="form-group">
                                    <label for="pass">Vendor</label>
                                    <select class="form-control form-control-sm" id="exampleFormControlSelect3" name="id_vendor" required>
                                     <option disabled selected>-- Pilih Vendor --</option>
                                        <?php foreach ($vendor as $v) : ?>
                                        <option <?php if ( $v->id_vendor == $aks-> id_vendor){
                                            echo 'selected="selected"';}?> value = "<?php echo $v->id_vendor; ?>">
                                            <?php echo $v->nama_vendor; ?>
                                        </option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="username">Nama Apparel</label>
                                    <input type="text" class="form-control" name="nama_apparel"  value="<?php echo $aks->nama_apparel ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="nama">Harga</label>
                                    <input type="number" class="form-control" name="harga_apparel"  value="<?php echo $aks->harga_apparel ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="pass">Stok</label>
                                    <input type="number" class="form-control" name="jumlah_apparel"  value="<?php echo $aks->jumlah_apparel ?>" required>
                                </div>
                                <button type="reset" class="btn btn-dark pull-left"  onclick="location.href='<?=site_url('c_ms_apparel')?>'">Batal</button>
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
