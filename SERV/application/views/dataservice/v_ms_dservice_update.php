<div class="main-panel">
    <div class="content-wrapper">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Edit Data Service</h4>
                <hr />
                <?php foreach($ms_dservice as $dse) { ?>
                <div class="row">
                    <div class="col-12">
                        <form role="form" action="<?php echo site_url('c_ms_dservice/ubah') ?>" method="post">
                            <div class="box-body">
                                <input type="hidden" class="form-control" name="id_dservice"  value="<?php echo $dse->id_dservice ?>" required> 
                                <div class="form-group">
                                    <label for="username">Nama Service</label>
                                    <input type="text" class="form-control" name="nama_dservice"  value="<?php echo $dse->nama_dservice ?>" required> 
                                </div>
                                <div class="form-group">
                                    <label for="nama">Harga Service</label>
                                    <input type="number" class="form-control" name="harga_dservice"  value="<?php echo $dse->harga_dservice ?>" required> 
                                </div>
                                <button type="reset" class="btn btn-dark pull-left"  onclick="location.href='<?=site_url('c_ms_dservice')?>'">Batal</button>
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
