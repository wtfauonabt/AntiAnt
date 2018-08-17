 <?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    $contact_lang = $this->lang->line('contact');
?>

 <form class="modal-content animate" action="/action_page.php">
  <div class="container">
      <label for="uname"><b><?php echo $contact_lang['username']?></b></label>
      <input type="text" placeholder="Enter Username" name="user_name" required>

      <label for="psw"><b><?php echo $contact_lang['password']?></b></label>
      <input type="password" placeholder="Enter Password" name="password" required>
        
      <button type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
  </div>

  <div class="container">
      <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
  <div class="container">
      <a href="#"><?php echo $contact_lang['register']?></a>
  </div>
</form>