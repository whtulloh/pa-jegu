<?php $this->load->view('template/breadcrumbs'); ?>
<div class="row-fluid">
	<?php foreach ($query as $brg) { ?>
	<div class="span4">
    <img src="<?php echo base_url('asset/img/'.$brg->image_path);?>">
  </div><!--/span-->
  <div class="span8">
  	<h2><?php echo $brg->nama;?></h2>
  	<h4>Rp <?php echo $brg->harga;?></h4>
  	<p><?php echo $brg->deskripsi;?></p>
  	<p>Dimensi		: <?php echo $brg->dimensi?></p>
  	<p>Berat 			: <?php echo $brg->berat?></p>
  	<form method="post" action="<?php echo base_url('cart/addItem');?>">
  		<input type="hidden" name="id" value="<?php echo $this->uri->segment(3)?>"/>
  		<label for="number">Kuantitas		: </label><input type="number" clas="qty" name="qty" min="1" required/>
  		<br>
  		<input type="submit" class="btn btn-primary" value="Add To Cart"/>
  	</form>
  </div>
  <?php } ?>
</div>