<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$tracking_lang = $this->lang->line('tracking');
?>
<link href="<?php base_url();?>/src/css/tracking.css" rel="stylesheet" />
<section id="tracking">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="tracking-title">
                    <h2><?php echo $tracking_lang['title']?></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <form>
                   <div class="form-group">
                       <label><?php echo $tracking_lang['tracking_number']; ?></label>
                       <input class="form-control" type="text" placeholder="<?php echo $tracking_lang['tracking_number']; ?>" aria-label="<?php echo $tracking_lang['tracking_number']; ?>">
                   </div>
                   <div class="submit text-center">
                       <button class="btn btn-success" type="submit"><?php echo $tracking_lang['submit']; ?></button>
                   </div>
                </form>
            </div>
        </div>
    </div>
    
    
</section>
<script src="<?php base_url();?>/src/js/tracking.js"></script>