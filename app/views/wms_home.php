<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php
include_once './app/controllers/WmsController.php';

// $rowData = array();

// $detail = array();
// // --get html
// $html = file_get_html('https://www.myfakeinfo.com/nationalidno/get-china-citizenidandname.php');

// // --get data
// foreach($html->find('tr') as $element):    
//    	// foreach($html->find('td') as $element) :
// 	 // echo $element . '<br>';
		

//     foreach($element->find('td') as $subelement):

//     	array_push($detail, $subelement);

//     	// echo $subelement . '<br>';

// 	endforeach;

// 	echo "<br>";
// 	array_push($rowData, $detail);

// endforeach; ?>
<form class=" animate input_box" method="post" action="<?php echo site_url("/WmsController/getIdInfo/file_get_html");?>">
		<div class="container ">


		<div class="container-login100-form-btn">
		<button class="login100-form-btn"type="submit">s</button>
</div>
			
		</div> 

	
	</form>