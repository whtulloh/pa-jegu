      <div>
        <ul class="breadcrumb">
          <li>
            <a href="#">Home</a> <span class="divider">/</span>
          </li>
          <li>
            <a href="#">Barang</a>
          </li>
        </ul>
      </div>
      <?php foreach ($listKat as $kat) {  ?>
      <div class="row-fluid">
        <div class="box span12">
          <div class="box-header well" data-original-title>
            <h2><i class="icon-tags"></i> <?php echo $kat->nama; ?></h2>
            <div class="box-icon">
              <a href="#" class="btn btn-minimize btn-round"><i class="icon-chevron-up"></i></a>
            </div>
          </div>

          <div class="box-content">
            <div class="well">
            <a class="btn btn-primary" href="<?php echo base_url('mimin/barang/insert');?>"><i class="icon-white icon-plus"></i>Insert Barang Baru</a>
            <a class="btn btn-primary" href="<?php echo base_url('mimin/barang/insertkategori');?>"><i class="icon-white icon-plus"></i>Insert Kategori Baru</a>
          </div>
            <table class="table table-striped table-bordered bootstrap-datatable datatable">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Nama Barang</th>
                  <th>Harga</th>
                  <th>Diskon</th>
                  <th>Harga Jual</th>
                  <th>Stok</th>
                  <th>Terjual</th>
                  <th>Rating</th>
                  <th>Action</th>
                </tr>
              </thead>   
              <tbody>
              <?php foreach ($listByKat[$kat->id_kategori] as $brg) { ?>
              <tr>
                <td><?php echo $brg->id_barang;?></td>
                <td><?php echo $brg->nama;?></td>
                <td class="center"><?php echo "Rp ".number_format($brg->harga,0,"",".");?></td>
                <td class="center"><?php echo $brg->diskon.' %';?></td>
                <td class="center"><?php echo "Rp ".number_format($brg->total_harga,0,"",".");?></td>
                <td class="center">
                  <?php echo $brg->stok;?>
                </td>
                <td class="center">
                  <?php echo $brg->sell_count;?>
                </td>
                <td class="center">
                  <?php echo $brg->rating;?>
                </td>
                <td class="center">
                  <a class="btn btn-success" href="<?php echo base_url('mimin/barang/view/'.$brg->id_barang);?>" title="view">
                    <i class="icon-zoom-in icon-white"></i>        
                  </a>
                  <a class="btn btn-info" href="<?php echo base_url('mimin/barang/update/'.$brg->id_barang);?>" title="edit">
                    <i class="icon-edit icon-white"></i>         
                  </a>
                  <a class="btn btn-danger" href="<?php echo base_url('mimin/barang/delete/'.$brg->id_barang);?>" title="delete">
                    <i class="icon-trash icon-white"></i>
                  </a>
                </td>
              </tr>
              <?php } ?>
              </tbody>
            </table>            
          </div>
        </div><!--/span-->
      </div><!--/row-->
      <?php }?>