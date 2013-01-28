[removed]
$(function(){ 

 $('#form3 :radio.star').rating(); 
 
});
[removed]
   
      <form id="form3A" />
 
      <?php foreach($polls_choices as $polls_choice) { ?>
    <p> <?php echo $polls_choice->choice;  ?> 
    <div >
        <input class="<?php echo $polls_choice->id; ?>" type="radio" name="<?php echo $polls_choice->id; ?>" id="auto-submit-star" value="1"/>
        <input class="<?php echo $polls_choice->id; ?>" type="radio" name="<?php echo $polls_choice->id; ?>" id="<?php echo $polls_choice->choice; ?>" value="2" />
        <input class="<?php echo $polls_choice->id; ?>" type="radio" name="<?php echo $polls_choice->id; ?>" id="<?php echo $polls_choice->choice; ?>" value="3"/>
        <input class="<?php echo $polls_choice->id; ?>" type="radio" name="<?php echo $polls_choice->id; ?>" id="<?php echo $polls_choice->choice; ?>" value="4"/>
        <input class="<?php echo $polls_choice->id; ?>" type="radio" name="<?php echo $polls_choice->id; ?>" id="<?php echo $polls_choice->choice; ?>" value="5"/>
       </div> 
    <br/>
        <  script >
$(function(){
 $('.<?php echo $polls_choice->id; ?>').rating({

  callback: function(value, link){
  
    $.getJSON('index.php/poll/ajax_rating/' + value + '/' + <?php echo $polls_choice->id; ?> + '/' + <?php echo $this->uri->segment(3); ?> + '/' + <?php echo $account->id; ?>);
  }
 });
});


< / script > 