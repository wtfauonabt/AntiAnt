<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php
include_once './app/controllers/simple_html_dom.php';

$rowData = array();

$detail = array();
// --get html
$html = file_get_html('https://www.myfakeinfo.com/nationalidno/get-china-citizenidandname.php');

// --get data
foreach($html->find('tr') as $element):    
   	// foreach($html->find('td') as $element) :
	 // echo $element . '<br>';
		

    foreach($element->find('td') as $subelement):

    	array_push($detail, $subelement);

    	// echo $subelement . '<br>';

	endforeach;

	echo "<br>";
	array_push($rowData, $detail);

endforeach;