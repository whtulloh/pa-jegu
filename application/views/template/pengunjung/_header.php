<!-- Header Start -->
<header>
  <div class="header-white">
    <div class="container">
      <div class="row">
        <div class="span4">
          <a class="logo" href="<?php echo base_url();?>"><img src="<?php echo base_url('asset/img/demo3.jpg');?>" alt="ShopSimple" title="ShopSimple"></a>
        </div>
        <div class="span8">
          <div class="row">
            <div class="pull-right logintext">Welcome Px,  you can <a href="<?php echo base_url('login');?>">login </a>
              or <a href="<?php echo base_url('register');?>">create an account</a>
            </div>
          </div>
          <form class="form-search marginnull topsearch pull-right">
            <input type="text" class="input-large search-query search-icon-top" value="Search here..."  onFocus="if (this.value=='Search here...') this.value='';" onblur="if (this.value=='') this.value='Search here...';">
          </form>
        </div>
      </div>
    </div>
      
        <nav class="subnav" id="categorymenu">
        <?php echo $nav; ?>
        </nav>
  </div>
</header>
<!-- Header End -->