<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$tracking_lang = $this->lang->line('tracking');
?>
<link href="<?php base_url();?>/src/css/tracking.css" rel="stylesheet" />
<section id="tracking">
    <div class="container"style="background-color: #3366ff">
        
        <div class="row">
            <div class="col-6" >
                <form>
                  <div class="form-group">
                    <label><?php echo $tracking_lang['tracking_number']; ?></label>
                    <div >
                      <div class="form-group input_box">
                      
                           <input class="form-control" type="text" placeholder="EK12345678" aria-label="<?php echo $tracking_lang['tracking_number']; ?>">
                      </div>
                    </div>

                 </div>
                
            </div>
            <div class="col-6">
              <div class="status" >
                <label><?php echo $tracking_lang['status']; ?></label>
              </div>
              <div class="output_box">
               <p> </p>
              </div>
            </div>
            <div class="submit text-center">
               <button class="btn  submit_btn" type="submit"><?php echo $tracking_lang['submit']; ?></button>
            </div>
            </form>
        </div>
    </div>
    
    
</section>
<script src="<?php base_url();?>/src/js/tracking.js"></script>