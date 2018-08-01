<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$tracking_lang = $this->lang->line('tracking');
?>
<link href="<?php base_url();?>/src/css/tracking.css" rel="stylesheet" />
<section id="tracking">
    <div class="container bg">
        
        <div class="row">
            <div class="col-6 bg_left" >
                <form>
                  <div class="form-group in_out_put">
                    <div class="label_hig_mob">
                      <label><?php echo $tracking_lang['tracking_number']; ?></label>
                    </div>
                      <div class="form-group input_box">
                      
                           <input class="form-control" type="text" placeholder="EK12345678" aria-label="<?php echo $tracking_lang['tracking_number']; ?>">
                      </div>
                    

                 </div>
               </form> 
            </div>
            <div class="col-6 bg_right ">
              <form>
                <div class="form-group in_out_put" >
                  <div>
                    <label><?php echo $tracking_lang['status']; ?></label>
                  </div>
                    <div class="form-group input_box output_box">
                      <input class="form-control" type="text" placeholder="" aria-label="<?php echo $tracking_lang['tracking_number']; ?>">
                    </div>
                
            </div>
                  </form>
        </div>
        </div>
        <div class="sub_btn" >
                  <button class="" type="submit"><?php echo $tracking_lang['submit']; ?></button>
                </div>
    </div>  
</section>
<script src="<?php base_url();?>/src/js/tracking.js"></script>