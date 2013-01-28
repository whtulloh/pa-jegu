<div class="span9">
          <h1 class="categorytitle">
            <span>
              <?php
              if ($this->uri->segment(2)=='beanbags') {
                echo "Bean Bag Products";   
              }elseif($this->uri->segment(2)=='carpets'){
                echo "Carpets Products";
              }else{
                echo "All Products";
              }
              ?>
            </span>
          </h1>
          <section id="latest">
            <div class="row">
              <div class="span9">
                <div class="sorting well">
                  <form class=" form-inline pull-left">
                    Sort By :
                    <select class="span2">
                      <option>Default</option>
                      <option>Name</option>
                      <option>Pirce</option>
                      <option>Rating </option>
                      <option>Color</option>
                    </select>
                    &nbsp;&nbsp;
                    Show:
                    <select class="span1">
                      <option>10</option>
                      <option>15</option>
                      <option>20</option>
                      <option>25</option>
                      <option>30</option>
                    </select>
                  </form>
                  <div class="pagination pull-right">
                    <ul>
                      <li><a href="#">Prev</a>
                      </li>
                      <li class="active">
                        <a href="#">1</a>
                      </li>
                      <li><a href="#">2</a>
                      </li>
                      <li><a href="#">3</a>
                      </li>
                      <li><a href="#">4</a>
                      </li>
                      <li><a href="#">Next</a>
                      </li>
                    </ul>
                  </div>
                </div>
                <section id="thumbnails">
                  <ul class="thumbnails grid">
                    <?php foreach ($barang as $brg) { ?>
                    <li class="span3">
                      <a class="prdocutname" href="<?php echo base_url('product/detail/'.$brg->id_barang);?>"><?php echo $brg->nama;?></a>
                      <div class="thumbnail">
                        <?php if($brg->diskon > 0){?>
                        <span class="sale tooltip-test"><b>Sale</b></span>
                        <?php }?>
                        <a href="<?php echo base_url('product/detail/'.$brg->id_barang);?>"><img alt="" src="<?php echo base_url('asset/img/barang/thumbnails/'.$brg->thumbnail.'');?>"></a>
                        <div class="caption">
                          <div class="price pull-left">
                            <?php if($brg->diskon > 0){?>
                            <span class="oldprice"><?php echo "Rp ".number_format($brg->harga,0,"",".");?></span>
                            <span class="newprice"><?php echo "Rp ".number_format($brg->total_harga,0,"",".");?></span>
                            <?php }else{ ?>
                            <span class="oldprice"></span>
                            <span class="newprice" style="margin-top:21px;"><?php echo "Rp ".number_format($brg->total_harga,0,"",".");?></span>
                            <?php } ?>
                          </div>
                          <a href="<?php echo base_url('cart/additem/'.$brg->id_barang.'');?>" class="cartadd pull-right tooltip-test" title="Quick Cart"> Add to Cart </a>
                          <div class="links pull-left">
                            <?php 
                            
                            if($brg->rating=='0'){
                              if($brg->rated_by=='0'){
                                for($i=1;$i<=20;$i++){ ?>
                                  <input class="star {split:4}" type="radio" name="rating-<?php echo $brg->id_barang;?>" value="not rated yet" disabled="disabled"/>
                                <?php } 
                              }else{ 
                              for($i=1;$i<=20;$i++){ ?>
                                <input class="star {split:4}" type="radio" name="rating-<?php echo $brg->id_barang;?>" value="0/5" disabled="disabled"/>
                        <?php } 
                              }?>
                      <?php }else{
                              $x = $brg->rating;
                              $y = floor($x*4);
                              $z = 20-$y;
                              for ($i=1; $i<$y ; $i++){ ?>
                                <input class="star {split:4}" type="radio" name="rating-<?php echo $brg->id_barang;?>" value="<?php echo $brg->rating; ?>/5" disabled="disabled"/>
                              <?php }?>
                                <input class="star {split:4}" type="radio" name="rating-<?php echo $brg->id_barang;?>" value="<?php echo $brg->rating; ?>/5" disabled="disabled" checked/>
                              <?php for ($i=1; $i<=$z ; $i++) { ?>
                                <input class="star {split:4}" type="radio" name="rating-<?php echo $brg->id_barang;?>" value="<?php echo $brg->rating; ?>/5" disabled="disabled"/>
                              <?php }?>
                      <?php }?>
                            <a class="info" href="<?php echo base_url('product/detail/'.$brg->id_barang);?>">info</a>
                            <a class="wishlist" href="<?php echo base_url('whistlist/'.$brg->id_barang);?>">wishlist</a>
                            
                          </div>
                        </div>
                      </div>
                    </li>
                    <?php }?>
                  </ul>
                  <ul class="thumbnails list">
                    <li class="span9">
                      <a class="prdocutname" href="#">First Fashion Fabrics</a>
                      <div class="thumbnail">
                        <div class="row">
                          <a class="span3" href="product.htm"><img alt="" src="<?php echo base_url('asset/img/product-l1.jpg');?>"></a>
                          <div class="details span3"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard. <br>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard. <br>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard. <br>
                          </div>
                          <div class="caption">
                            <div class="price pull-right">
                              <span class="oldprice">$2225.00</span>
                              <span class="newprice">$2225.00</span>
                            </div>
                            <a class="cartadd pull-right tooltip-test" title="Add to Cart"> Add to Cart </a>
                            <span class="links pull-right"><a class="info" href="product.htm">info</a>
                            <a class="wishlist" href="wishlist.htm">wishlist</a>
                            <a class="compare" href="compare.htm">compare</a>
                            </span>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="span9">
                      <a class="prdocutname" href="#">First Fashion Fabrics</a>
                      <div class="thumbnail">
                        <div class="row">
                          <a class="span3" href="product.htm"><img alt="" src="<?php echo base_url('asset/img/product-l1.jpg');?>"></a>
                          <div class="details span3"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard. <br>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard. <br>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard. <br>
                          </div>
                          <div class="caption">
                            <div class="price pull-right">
                              <span class="oldprice">$2225.00</span>
                              <span class="newprice">$2225.00</span>
                            </div>
                            <a class="cartadd pull-right tooltip-test" title="Add to Cart"> Add to Cart </a>
                            <span class="links pull-right"><a class="info" href="product.htm">info</a>
                            <a class="wishlist" href="wishlist.htm">wishlist</a>
                            <a class="compare" href="compare.htm">compare</a>
                            </span>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="span9">
                      <a class="prdocutname" href="#">First Fashion Fabrics</a>
                      <div class="thumbnail">
                        <span class="offer tooltip-test"><b>Sale</b></span>
                        <div class="row">
                          <a class="span3" href="product.htm"><img alt="" src="<?php echo base_url('asset/img/product-l1.jpg');?>"></a>
                          <div class="details span3"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard. <br>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard. <br>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard. <br>
                          </div>
                          <div class="caption">
                            <div class="price pull-right">
                              <span class="oldprice">$2225.00</span>
                              <span class="newprice">$2225.00</span>
                            </div>
                            <a class="cartadd pull-right tooltip-test" title="Add to Cart"> Add to Cart </a>
                            <span class="links pull-right"><a class="info" href="product.htm">info</a>
                            <a class="wishlist" href="wishlist.htm">wishlist</a>
                            <a class="compare" href="compare.htm">compare</a>
                            </span>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="span9">
                      <a class="prdocutname" href="#">First Fashion Fabrics</a>
                      <div class="thumbnail">
                        <div class="row">
                          <a class="span3" href="product.htm"><img alt="" src="<?php echo base_url('asset/img/product-l1.jpg');?>"></a>
                          <div class="details span3"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard. <br>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard. <br>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard. <br>
                          </div>
                          <div class="caption">
                            <div class="price pull-right">
                              <span class="oldprice">$2225.00</span>
                              <span class="newprice">$2225.00</span>
                            </div>
                            <a class="cartadd pull-right tooltip-test" title="Add to Cart"> Add to Cart </a>
                            <span class="links pull-right"><a class="info" href="product.htm">info</a>
                            <a class="wishlist" href="wishlist.htm">wishlist</a>
                            <a class="compare" href="compare.htm">compare</a>
                            </span>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                  <div class="pagination pull-right">
                    <ul>
                      <li><a href="#">Prev</a>
                      </li>
                      <li class="active">
                        <a href="#">1</a>
                      </li>
                      <li><a href="#">2</a>
                      </li>
                      <li><a href="#">3</a>
                      </li>
                      <li><a href="#">4</a>
                      </li>
                      <li><a href="#">Next</a>
                      </li>
                    </ul>
                  </div>
                </section>
              </div>
            </div>
          </section>
        </div>