<!-- Sidebar Start-->
      <div class="span3 category">
        <aside>
          <div class="sidewidt" style="<?php if ($this->uri->segment('1')=='login' || $this->uri->segment('1')=='register') {
            echo "display:none;";
          } ?>">
            <h1 class="heading1"><span>Categories</span></h1>
            <ul class="nav nav-list categories">
              <li>
                <a href="category.htm">Women Accessories</a>
              </li>
              <li>
                <a href="category.htm">Electronics </a>
                <ul>
                  <li><a href="product.htm">iphone 4S</a>
                  </li>
                  <li><a href="product.htm">Samsung Galaxy Next</a>
                  </li>
                  <li><a href="product.htm">Macbook Pro</a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="category.htm">Home and Furniture</a>
              </li>
              <li>
                <a href="category.htm">Jewellery </a>
              </li>
            </ul>
          </div>
          <div class="sidewidt">
            <h1 class="heading1"><span>Best Seller</span></h1>
            <ul class="bestseller">
              <li>
                <img width="50" height="50" src="<?php echo base_url('asset/img/prodcut-40x40.jpg');?>" alt="product" title="product">
                <a class="productname" href="product.htm"> Product Name</a>
                <span class="procategory">Women Accessories</span>
                <span class="price">$250</span>
              </li>
              <li>
                <img width="50" height="50" src="<?php echo base_url('asset/img/prodcut-40x40.jpg');?>" alt="product" title="product">
                <a class="productname" href="product.htm"> Product Name</a>
                <span class="procategory">Electronics</span>
                <span class="price">$250</span>
              </li>
              <li>
                <img width="50" height="50" src="<?php echo base_url('asset/img/prodcut-40x40.jpg');?>" alt="product" title="product">
                <a class="productname" href="product.htm"> Product Name</a>
                <span class="procategory">Women Accessories</span>
                <span class="price">$250</span>
              </li>
            </ul>
          </div>
          <div class="sidewidt">
            <h1 class="heading1"><span>Best Offer</span></h1>
            <a class="sidebanner" href="#"><img src="<?php echo base_url('asset/img/adbanner2.jpg');?>" alt="" /></a>
          </div>
          <div class="sidewidt">
            <h1 class="heading1"><span>Brands</span></h1>
            <div class="flexslider" id="brand">
              <ul class="slides">
                <li>
                  <img src="<?php echo base_url('asset/img/brand1.png');?>" alt="" />
                </li>
                <li>
                  <img src="<?php echo base_url('asset/img//brand2.png');?>" alt="" />
                </li>
                <li>
                  <img src="<?php echo base_url('asset/img/brand3.png');?>" alt="" />
                </li>
                <li>
                  <img src="<?php echo base_url('asset/img/brand4.png');?>" alt="" />
                </li>
              </ul>
            </div>
          </div>
        </aside>
      </div>
      <!-- Sidebar End-->
