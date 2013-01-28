<div>
        <ul class="breadcrumb">
          <li>
            <a href="#">Home</a> <span class="divider">/</span>
          </li>
          <li>
            <a href="#">Barang</a> <span class="divider">/</span>
          </li>
          <li>
            <a href="#">Insert Kategori Baru</a>
          </li>
        </ul>
      </div>
                  <div class="row-fluid">
                <div class="box span12">
                    <div class="box-header well" data-original-title>
                        <h2><i class="icon-edit"></i> Input Kategori Baru</h2>
                        <div class="box-icon">
                            <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
                        </div>
                    </div>
                    <div class="box-content">
                        <form class="form-horizontal validate" method="post" action="<?php echo base_url('mimin/barang/insertkategori');?>" accept-charset="utf-8" enctype="multipart/form-data">
                          <fieldset>
                            <div class="control-group <?php echo isError($errorNama);?>">
                              <label class="control-label" for="nama">Nama Kategori</label>
                              <div class="controls">
                                <input class="required input-xlarge" type="text" name="nama" placeholder="Nama Kategori...." value="<?php echo set_value('namaBarang'); ?>">
                                <?php echo $errorNama; ?>
                              </div>
                            </div>
                            <div class="control-group <?php echo isError($errorParent);?>">
                              <label class="control-label" for="parent">Parent</label>
                              <div class="controls">
                                <select data-placeholder="As Parent Category" id="kategori" name="parent" data-rel="chosen">
                                  <option value=""></option>
                                  <optgroup label="Tipe (level 0)">
                                <?php foreach ($kategori as $kat):
                                      if ($kat->level=='0') : ?>
                                        <option value="<?php echo $kat->id_kategori?>"><?php echo $kat->nama;?></option>
                                <?php endif ?>
                                <?php endforeach ?>
                                  </optgroup>
                                  <optgroup label="Kategori (level 1)">
                                <?php foreach ($kategori as $kat):
                                      if ($kat->level=='1') : ?>
                                        <option value="<?php echo $kat->id_kategori?>"><?php echo $kat->nama;?></option>
                                <?php endif ?>
                                <?php endforeach ?>
                                  </optgroup>
                                </select>
                                <?php echo $errorParent; ?>
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