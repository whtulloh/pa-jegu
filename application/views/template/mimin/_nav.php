                        <li><a class="ajax-link" href="<?php echo base_url('mimin/dashboard');?>"><i class="icon-home"></i><span class="hidden-tablet"> Dashboard</span></a></li>                        
                        <li><a class="ajax-link" href="<?php echo base_url('mimin/laporan'); ?>"><i class="icon-signal"></i><span class="hidden-tablet"> Laporan</span></a></li>
                        <li><a href="#barang-menu" data-toggle="collapse" class="ajax-link"><i class="icon-gift"></i><span class="hidden-tablet"> Barang</span></a></li>
                        <ul id="barang-menu" class="nav nav-list nav-stacked collapse <?php echo isIn($pageName,'barang');?>">
                                <li><a class="ajax-link" href="<?php echo base_url('mimin/barang'); ?>"><i class="icon-list-alt"></i><span class="hidden-tablet"> View All</span></a></li>
                                <li><a class="ajax-link" href="<?php echo base_url('mimin/barang/bycategory'); ?>"><i class="icon-align-justify"></i><span class="hidden-tablet"> View By Category</span></a></li>
                                <li><a class="ajax-link" href="<?php echo base_url('mimin/barang/kategori'); ?>"><i class="icon-tags"></i><span class="hidden-tablet"> Kategori</span></a></li>
                                <li><a class="ajax-link" href="<?php echo base_url('mimin/barang/insert'); ?>"><i class="icon-plus"></i><span class="hidden-tablet"> Insert Barang Baru</span></a></li>
                                <li><a class="ajax-link" href="<?php echo base_url('mimin/barang/insertkategori'); ?>"><i class="icon-plus"></i><span class="hidden-tablet"> Insert Kategori Baru</span></a></li>
                        </ul>
                        <li><a href="#transaksi-menu" data-toggle="collapse" class="ajax-link"><i class="icon-shopping-cart"></i><span class="hidden-tablet"> Transaksi</span></a></li>
                        <ul id="transaksi-menu" class="nav nav-list collapse <?php echo isIn($pageName,'transaksi');?>"> <!--ada in disini-->
                                <li><a class="ajax-link" href="<?php echo base_url('mimin/transaksi'); ?>"><i class="icon-list-alt"></i><span class="hidden-tablet"> View All</span></a></li>
                                <li><a class="ajax-link" href="<?php echo base_url('mimin/transaksi/update'); ?>"><i class="icon-plus"></i><span class="hidden-tablet"> Update</span></a></li>
                                <li><a class="ajax-link" href="<?php echo base_url('mimin/transaksi/konfirmasi'); ?>"><i class="icon-tags"></i><span class="hidden-tablet"> Konfirmasi</span></a></li>
                        </ul>
                        <li><a class="ajax-link" href="<?php echo base_url('mimin/member'); ?>"><i class="icon-user"></i><span class="hidden-tablet"> Member</span></a></li>
                        <li><a class="ajax-link" href="gallery.html"><i class="icon-picture"></i><span class="hidden-tablet"> Gallery</span></a></li>
                        <li class="nav-header hidden-tablet">Sample Section</li>
                        <li><a class="ajax-link" href="table.html"><i class="icon-align-justify"></i><span class="hidden-tablet"> Tables</span></a></li>
                        <li><a class="ajax-link" href="calendar.html"><i class="icon-calendar"></i><span class="hidden-tablet"> Calendar</span></a></li>
                        <li><a class="ajax-link" href="grid.html"><i class="icon-th"></i><span class="hidden-tablet"> Grid</span></a></li>
                        <li><a class="ajax-link" href="file-manager.html"><i class="icon-folder-open"></i><span class="hidden-tablet"> File Manager</span></a></li>
                        <li><a href="tour.html"><i class="icon-globe"></i><span class="hidden-tablet"> Tour</span></a></li>
                        <li><a class="ajax-link" href="icon.html"><i class="icon-star"></i><span class="hidden-tablet"> Icons</span></a></li>
                        <li><a href="error.html"><i class="icon-ban-circle"></i><span class="hidden-tablet"> Error Page</span></a></li>
                        <li><a href="login.html"><i class="icon-lock"></i><span class="hidden-tablet"> Login Page</span></a></li>