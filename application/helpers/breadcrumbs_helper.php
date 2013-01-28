<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function display_breadcrumbs(){
	$totalSegment = $this->uri->total_segments();
	if($totalSegment > 1){
		echo "<ul class='breadcrumb'>";
		echo 	"<li><a href=".base_url().">Home</a> <span class='divider'>/</span></li>";
		for ($i=1; $i < $totalSegment; $i++) { 
			echo "<li><a href=".base_url($this->uri->segment($i)).">".$this->uri->segment($i)."</a> <span class='divider'>/</span></li>";
		}
		echo	"<li class='active'>".$this->uri->segment($totalSegment)."</li>";
		echo "</ul>";	
	}else{
		echo "<ul class='breadcrumb'>";
		echo 	"<li><a href=".base_url().">Home</a> <span class='divider'>/</span></li>";
  		echo	"<li class='active'>".$this->uri->segment(1)."</li>";
		echo "</ul>";	
	}

}