<?php $this->load->view('template/breadcrumbs'); ?>
<ul class="thumbnails">
  <?php foreach ($query as $brg) { ?>
  <li class="span3">
    <a href="<?php echo base_url('shop/'.$brg->id_barang);?>" class="thumbnail" style="height:300px;">
      <img src="<?php echo base_url('asset/img/barang/thumbnails/'.$brg->thumbnail);?>" alt="">
    </a>
  </li>
  <?php } ?>
</ul>
       <hr>
       <div class="row-fluid">
         <div class="span3">
           <h4>Footer</h4>
            <ul>
                <li><a href="#">Contact</a></li>
                <li><a href="#">Delivery</a></li>
                <li><a href="#">FAQ</a></li>
                <li><a href="#">Terms and condition</a></li>
            </ul>
         </div><!--/span-->
         <div class="span3">
           <h4>Heading</h4>
           <ul>
                <li><a href="#">Facebook</a></li>
                <li><a href="#">Twitter</a></li><br />
                <li>
                    <div class="control-group">
                        <div class="controls">
                          <div class="input-prepend input-append">
                            <span class="add-on"><i class="icon-envelope"></i></span><input type="text" size="16" id="appendedPrependedInput" class="span6" placeholder="Enter your email"><input type="submit" name="submit" value="Subscribe" class="btn"/>
                          </div>
                        </div>
                    </div>
                </li>
                
            </ul>
         </div><!--/span-->
         <div class="span3">
           <h4>Heading</h4>
           <ul>
                <li><a href="#">Lorem ipsum</a></li>
                <li><a href="#">Lorem ipsum dolor sit amet</a></li>
                <li><a href="#">Lorem ipsum</a></li>
                <li><a href="#">Lorem ipsum dolor sit amet</a></li>
            </ul>
         </div><!--/span-->
         <div class="span3">
           <h4>Heading</h4>
           <ul>
                <li><a href="#">Lorem ipsum</a></li>
                <li><a href="#">Lorem ipsum dolor sit amet</a></li>
                <li><a href="#">Lorem ipsum</a></li>
                <li><a href="#">Lorem ipsum dolor sit amet</a></li>
            </ul>
         </div><!--/span-->
       </div><!--/row-->
       