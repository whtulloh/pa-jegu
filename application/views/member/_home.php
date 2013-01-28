      <!--  Carousel -->
      <!--  consult Bootstrap docs at 
            http://twitter.github.com/bootstrap/javascript.html#carousel -->
      <div id="this-carousel-id" class="carousel slide">
        <div class="carousel-inner">
          <div class="item active">
            <a href="#">
              <img src="<?php echo base_url('asset/img/antennae.jpg');?>" alt="Antennae Galaxies" />
            </a>
            <div class="carousel-caption">
              <p>The Antennae Galaxies</p>
              <p><a href="#">Hubblesite.org &raquo;</a></p>
            </div>
          </div>
          <div class="item">
            <a href="#">
              <img src="<?php echo base_url('asset/img/carina.jpg');?>" alt="Carina Caterpillar" />
            </a>
            <div class="carousel-caption">
              <p>Carina Nebula: The Caterpillar</p>
              <p><a href="#">Hubblesite.org &raquo;</a></p>
            </div>
          </div>
          <div class="item">
            <a href="#">
              <img src="<?php echo base_url('asset/img/echo.jpg');?>" alt="Light Echo" />
            </a>
            <div class="carousel-caption">
              <p>Light Echo From Star V838 Monocerotis</p>
              <p><a href="#">Hubblesite.org &raquo;</a></p>
            </div>
          </div>
          <div class="item">
            <a href="#">
              <img src="<?php echo base_url('asset/img/ngc5866.jpg');?>" alt="Galaxy NGC5866" />
            </a>
            <div class="carousel-caption">
              <p>Galaxy NGC 5866</p>
              <p><a href="#">Hubblesite.org &raquo;</a></p>
            </div>
          </div>
        </div><!-- .carousel-inner -->
        <!--  next and previous controls here
              href values must reference the id for this carousel -->
          <a class="carousel-control left" href="#this-carousel-id" data-slide="prev">&lsaquo;</a>
          <a class="carousel-control right" href="#this-carousel-id" data-slide="next">&rsaquo;</a>
      </div><!-- .carousel -->
      <!-- end carousel -->
    <hr>
    <h2>Best Seller Items</h2>
<div class="row-fluid">
  <div class="span3 product" href="#">
    <a href="#"><img src="<?php echo base_url('asset/img/b_sampah_biru.jpg');?>"/></a>
  </div><!--/span-->
  <div class="span3 product" href="#">
    <img src="<?php echo base_url('asset/img/b_sampah_ijo.jpg');?>"/>
  </div><!--/span-->
  <div class="span3 product" href="#">
    <img src="<?php echo base_url('asset/img/b_sampah_ijo.jpg');?>"/>
  </div><!--/span-->
  <div class="span3 product" href="#">
    <img src="<?php echo base_url('asset/img/b_sampah_merah.jpg');?>"/>
  </div><!--/span-->
</div><!--/row-->
<hr>
<h2>Hot Items</h2>
<div class="row-fluid">
  <div class="span3 product">
    <img src="<?php echo base_url('asset/img/b_sampah_biru.jpg');?>"/>
  </div><!--/span-->
  <div class="span3 product" href="#">
    <img src="<?php echo base_url('asset/img/b_sampah_ijo.jpg');?>"/>
  </div><!--/span-->
  <div class="span3 product" href="#">
    <img src="<?php echo base_url('asset/img/b_sampah_ijo.jpg');?>"/>
  </div><!--/span-->
  <div class="span3 product" href="#">
    <img src="<?php echo base_url('asset/img/b_sampah_merah.jpg');?>"/>
  </div><!--/span-->
</div><!--/row-->
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
       