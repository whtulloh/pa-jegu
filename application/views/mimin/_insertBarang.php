
            <div>
                <?php echo $error;?>
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
                        <form class="form-horizontal validate" method="post" action="<?php echo base_url('mimin/barang/insert');?>">
                          <fieldset>
                            <div class="control-group">
                            <label class="control-label" for="namaBarang">Nama Barang</label>
                              <div class="controls">
                                <input class="required input-xlarge" type="text" name="namaBarang" placeholder="Nama Barang....">
                              </div>
                            </div>
                            <div class="control-group">
                            <label class="control-label" for="kategori">Kategori</label>
                                <div class="controls">
                                  <select id="selectError1" name="kategori[]" multiple data-rel="chosen">
                                  <?php foreach ($kategori as $kat) { ?>
                                    <option value="<?php echo $kat->id_kategori; ?>"><?php echo $kat->nama;?></option>
                                  <?php }?>
                                  </select>
                                </div>
                            </div>
                            <div class="control-group">
                            <label class="control-label" for="diskon">Diskon</label>
                            <div class="controls">
                                  <div class="input-append">
                                    <input id="appendedInput" size="16" type="number" name="diskon"><span class="add-on">%</span>
                                  </div>
                                </div>
                            </div>
                            <div class="control-group">
                            <label class="control-label" for="hargaBarang">Harga Barang</label>
                              <div class="controls">
                                <div class="input-prepend input-prepend">
                                    <span class="add-on">Rp</span><input id="prependedInput" size="16" name="hargaBarang" type="number" placeholder="540000"><span class="add-on">,00</span>
                                </div>
                              </div>
                            </div>
                            <div class="control-group">
                              <label class="control-label" for="deskripsi">Deskripsi</label>
                              <div class="controls">
                                <textarea class="cleditor" id="textarea2" rows="3" name="deskripsi"></textarea>
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

