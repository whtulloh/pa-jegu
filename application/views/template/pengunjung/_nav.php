<div class="container">
          <ul class="nav-pills categorymenu">
            <li><a class="active"  href="<?php echo base_url();?>">Home</a>
            </li>
            <li><a href="<?php echo base_url('product/beanbags');?>">Bean Bags</a>
              <div>
                <ul class="arrow">
                  <li><a class="bold" href="product.htm">Product Full </a>
                  </li>
                  <li><a class="bold" href="product-sidebar.htm"> Product 2 Column </a>
                  </li>
                  <li><a href="#"> Suits & shirts </a>
                  </li>
                  <li><a href="#"> Shoes <span class="label label-info">(new)</span></a>
                  </li>
                  <li><a href="#">Jackets & Coats <span class="label label-warning">(25)</span>
                    </a>
                  </li>
                  <li class="divider"></li>
                  <li><a href="#">Mice and Trackballs <span class="label label-success">Sale</span>
                    </a>
                  </li>
                  <li><a href="#">Laptops </a>
                  </li>
                </ul>
                <ul class="arrow">
                  <li><a href="#"> Dresses</a>
                  </li>
                  <li><a href="#"> Sun Glasses</a>
                  </li>
                  <li><a href="#"> Suits & shirts </a>
                  </li>
                  <li><a href="#"> Shoes </a>
                  </li>
                  <li><a href="#">Jackets & Coats <span class="label label-warning">(25)</span>
                    </a>
                  </li>
                  <li class="divider"></li>
                  <li><a href="#">Mice and Trackballs <span class="label label-important">Sale</span>
                    </a>
                  </li>
                  <li><a href="#">Laptops </a>
                  </li>
                </ul>
              </div>
            </li>
            <li><a href="<?php echo base_url('product/carpets');?>">Carpets</a>
              <div>
                <ul class="arrow">
                  <li><a class="bold" href="product.htm">Product Full </a>
                  </li>
                  <li><a class="bold" href="product-sidebar.htm"> Product 2 Column </a>
                  </li>
                  <li><a href="#"> Suits & shirts </a>
                  </li>
                  <li><a href="#"> Shoes <span class="label label-info">(new)</span></a>
                  </li>
                  <li><a href="#">Jackets & Coats <span class="label label-warning">(25)</span>
                    </a>
                  </li>
                  <li class="divider"></li>
                  <li><a href="#">Mice and Trackballs <span class="label label-success">Sale</span>
                    </a>
                  </li>
                  <li><a href="#">Laptops </a>
                  </li>
                </ul>
                <ul class="arrow">
                  <li><a href="#"> Dresses</a>
                  </li>
                  <li><a href="#"> Sun Glasses</a>
                  </li>
                  <li><a href="#"> Suits & shirts </a>
                  </li>
                  <li><a href="#"> Shoes </a>
                  </li>
                  <li><a href="#">Jackets & Coats <span class="label label-warning">(25)</span>
                    </a>
                  </li>
                  <li class="divider"></li>
                  <li><a href="#">Mice and Trackballs <span class="label label-important">Sale</span>
                    </a>
                  </li>
                  <li><a href="#">Laptops </a>
                  </li>
                </ul>
              </div>
            </li>
            <li><a  href="category-full.htm">Category</a>
              <div>
                <ul class="arrow">
                  <li><a class="bold" href="category.htm">Category - 2 Column</a>
                  </li>
                  <li><a class="bold" href="category-full.htm">Category-Full</a>
                  </li>
                  <li><a href="#"> Men Products</a>
                  </li>
                  <li><a href="#"> Women Products</a>
                  </li>
                  <li><a href="#"> Child Products</a>
                  </li>
                  <li><a href="#"> Home and Furniture</a>
                  </li>
                  <li><a href="#">Electric Accessories</a>
                  </li>
                </ul>
              </div>
            </li>
            <li><a href="checkout.htm">Checkout</a>
            </li>
            <li><a href="blog.htm">Blog</a>
              <div>
                <ul class="arrow">
                  <li><a href="blog.htm">Blog page</a>
                  </li>
                  <li><a href="bloggrid.htm">Blog Grid View</a>
                  </li>
                  <li><a href="bloglist.htm">Blog List VIew</a>
                  </li>
                </ul>
              </div>
            </li>             
            <li><a href="contact.htm">Contact</a>
            </li>
            <li id="account" class="pull-right"><a href="<?php echo base_url('login');?>"><i class="icon icon-darkgray icon-user"></i> Login<b class="caret"></b></a>
              <div class="menu-right">
                <ul>
                  <form method="post" action="<?php echo base_url('login');?>">
                    <li><label>Username/Email :</label><input type="text" name="identity" autocomplete="off" required></li>
                    <li><label>Password :</label><input type="password" name="password" required></li>
                    <li>
                        <label class="checkbox">
                            <input type="checkbox" name="remember" value="1" class="checkbox"> Remember me
                        </label>
                    </li>
                    <li class="inline"><a class="pull-left" id="forgot" href="<?php echo base_url('login/forgot');?>">Forgot Password?</a></li>
                    <li><input type="submit" value="Submit" class="btn btn-primary pull-right"></li>
                </form>
                </ul>
              </div>
            </li>
            <li class="pull-right" id="cart">
              <a href="<?php echo base_url('cart');?>">
                <i class="icon icon-darkgray icon-cart"></i> CART <span class="label label-info font14"><?php echo $this->cart->total_items();?> item(s)</span> - <?php echo "Rp ".number_format($this->cart->total(),0,"",".");?> <b class="caret"></b>
              </a>
              <?php if ($this->cart->total_items()==0) {
                # tidak ada dropdown jika itemnya 0
              }else{ ?>
              <div class="menu-right">
                <ul class="topcartopen">
                <li>
                  <table>
                    <tbody>
                      <?php $subtotal2=0; foreach ($this->cart->contents() as $items): ?>
                      <tr>
                        <td class="image"><a href="<?php echo base_url('product/detail/'.$items['id'].'');?>"><img title="product" alt="product" src="<?php echo base_url('asset/img/barang/thumbnails/1_thumb.jpg');?>" height="50" width="50"></a></td>
                        <td class="name"><a href="product.htm"><?php echo $items['name'];?></a></td>
                        <td class="quantity"><?php echo "x ".$items['qty'];?></td>
                        <td class="total"><?php echo "Rp ".number_format($items['subtotal'],0,"",".");?></td>
                        <td class="remove"><i class="icon-remove"></i></td>
                      </tr>
                      <?php $subtotal2=$subtotal2+$items['subtotal']; ?>
                    <?php endforeach ?>
                    </tbody>
                  </table>
                  <table>
                    <tbody>
                      <tr>
                        <td class="textright"><b>Sub-Total:</b></td>
                        <td class="textright"><?php echo "Rp ".number_format($subtotal2,0,"",".");?></td>
                      </tr>
                      <tr>
                        <td class="textright"><b>Total:</b></td>
                        <td class="textright"><?php echo "Rp ".number_format($this->cart->total(),0,"",".");?></td>
                      </tr>
                      <tr>
                        <td class="textright" colspan="2"><span class="red">Belum termasuk Ongkos Kirim</span></td>
                      </tr>
                    </tbody>
                  </table>
                  <div class="well pull-right">
                    <a href="<?php echo base_url('cart');?>" class="btn btn-primary">View Cart</a>
                    <button href="#" class="btn btn-primary">Checkout</button>
                  </div>
                </li>
            </ul>
          </div>
          <?php } ?>
        </li>
            
          </ul>
</div>