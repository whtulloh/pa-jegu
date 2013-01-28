<div>
        <ul class="breadcrumb">
          <li>
            <a href="#">Home</a> <span class="divider">/</span>
          </li>
          <li>
            <a href="#">Barang</a> <span class="divider">/</span>
          </li>
          <li>
            <a href="#">Insert Barang Baru</a>
          </li>
        </ul>
      </div>
                  <div class="row-fluid">
                <div class="box span12">
                    <div class="box-header well" data-original-title>
                        <h2><i class="icon-edit"></i> Input Barang Baru</h2>
                        <div class="box-icon">
                            <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                        </div>
                    </div>
                    <div class="box-content">
                        <form class="form-horizontal validate" method="post" action="<?php echo base_url('mimin/barang/insert');?>" accept-charset="utf-8" enctype="multipart/form-data">
                          <fieldset>
                            <div class="control-group <?php echo isError($errorNama);?>">
                            <label class="control-label" for="namaBarang">Nama Barang</label>
                              <div class="controls">
                                <input class="required input-xlarge" type="text" name="namaBarang" placeholder="Nama Barang...." value="<?php echo set_value('namaBarang'); ?>">
                                <?php echo $errorNama; ?>
                              </div>
                            </div>
                            <div class="control-group <?php echo isError($errorKat);?>">
                            <label class="control-label" for="kategori">Kategori</label>
                                <div class="controls">
                                  <select id="selectError1" name="kategori[]" multiple data-rel="chosen">
                                  <?php foreach ($kategori as $kat) { ?>
                                    <option value="<?php echo $kat->id_kategori; ?>" ><?php echo $kat->nama;?></option>
                                  <?php }?>
                                  </select>
                                  <?php echo $errorKat; ?>
                                </div>
                            </div>
                            <div class="control-group <?php echo isError($errorStok);?>">
                            <label class="control-label" for="stok">Stok</label>
                            <div class="controls">
                                  <div class="input-append">
                                    <input id="stok" size="4" type="number" name="stok" style="width:50px" autocomplete="off" value="<?php echo set_value('stok'); ?>"><span class="add-on">Buah</span>
                                    <?php echo $errorStok; ?>
                                  </div>
                                </div>
                            </div>
                            <div class="control-group <?php echo isError($errorDiskon);?>">
                            <label class="control-label" for="diskon">Diskon</label>
                            <div class="controls">
                                  <div class="input-append">
                                    <input id="diskon" size="3" type="number" name="diskon" style="width:50px" autocomplete="off" value="<?php echo set_value('diskon'); ?>"><span class="add-on">%</span>
                                    <?php echo $errorDiskon; ?>
                                  </div>
                                </div>
                            </div>
                            <div class="control-group <?php echo isError($errorHarga);?>">
                            <label class="control-label" for="hargaBarang">Harga Barang</label>
                              <div class="controls">
                                <div class="input-prepend input-prepend">
                                    <span class="add-on">Rp</span><input id="harga" size="16" name="hargaBarang" type="text" value="<?php echo set_value('hargaBarang'); ?>"><span class="add-on">,00</span>
                                    <?php echo $errorHarga; ?>
                                </div>
                              </div>
                            </div>
                            <div class="control-group <?php echo isError($errorImage);?>">
                            <label class="control-label" for="userfile[]">Images</label>
                              <div class="controls">
                                <input type="file" name="userfile[]" size="20" multiple />
                                <?php echo $errorImage;?>
                              </div>
                            </div>
                            <div class="control-group <?php echo isError($errorDeskripsi);?>">
                              <label class="control-label" for="deskripsi">Deskripsi</label>
                              <div class="controls">
                                <textarea class="cleditor" rows="3" name="deskripsi" ><?php echo set_value('deskripsi'); ?></textarea>
                                <?php echo $errorDeskripsi; ?>
                              </div>
                            </div>
                            <div class="form-actions">
                              <input type="reset" class="btn" value="Cancel">
                              <input type="submit" class="btn btn-primary" name="submit" value="Next Step">
                            </div>
                          </fieldset>
                        </form>   

                    </div>
                </div><!--/span-->
            </div><!--/row-->
            

<script type="text/javascript">
              $(function($){
                var cfgCulture = 'id-ID';
                $.preferCulture(cfgCulture);
                $('#prependedInput').maskMoney();
              });
    </script>