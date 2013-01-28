      <div>
        <ul class="breadcrumb">
          <li>
            <a href="#">Home</a> <span class="divider">/</span>
          </li>
          <li>
            <a href="#">Barang</a> <span class="divider">/</span>
          </li>
          <li>
            <a href="#">Kategori</a>
          </li>
        </ul>
      </div>
      <div class="row-fluid">    
        <div class="box span12">
          <div class="box-header well" data-original-title>
            <h2><i class="icon-tags"></i> Kategori</h2>
            <div class="box-icon">
            </div>
          </div>
          <div class="box-content">
            <div class="well">
              <a class="btn btn-primary" href="<?php echo base_url('mimin/barang/insertkategori');?>"><i class="icon-white icon-plus"></i>Insert Kategori Baru</a>
            </div>
            <table class="table table-striped table-bordered bootstrap-datatable datatable">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Nama Kategori</th>
                  <th>Parent Kategori</th>
                  <th>Created On</th>
                  <th>Updated On</th>
                  <th>Action</th>
                </tr>
              </thead>   
              <tbody>
              <?php foreach ($kategori as $kat) { ?>
              <tr>
                <td><?php echo $kat->id_kategori;?></td>
                <td><?php echo $kat->nama;?></td>
                <td class="center"><?php echo $kat->parent_id;?></td>
                <td class="center"><?php echo $kat->created_date;?></td>
                <td class="center"><?php echo $kat->updated_date;?></td>
                
                <td class="center">
                  <a class="btn btn-success" href="<?php echo base_url('mimin/barang/view/'.$kat->id_kategori);?>" title="view">
                    <i class="icon-zoom-in icon-white"></i>        
                  </a>
                  <a class="btn btn-info" href="<?php echo base_url('mimin/barang/update/'.$kat->id_kategori);?>" title="edit">
                    <i class="icon-edit icon-white"></i>         
                  </a>
                  <a class="btn btn-danger" href="<?php echo base_url('mimin/barang/delete/'.$kat->id_kategori);?>" title="delete">
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