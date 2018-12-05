<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php
// include_once './app/controllers/WmsController.php';

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
<form class=" animate input_box" method="post" action="<?php echo site_url("/FakeIdController/getIdInfo/file_get_html");?>">
		<div class="container ">
		<div class="container-login100-form-btn">
		<button class="login100-form-btn"type="submit">Get IDs</button>
<h3>Chinese ID Card Number Obverse side Image Generate</h3>
<div class="col-md-12">
		<form name="form1" class="form-horizontal">
		<div class="form-group"><label class="col-sm-2 control-label">FullName:</label><div class="col-sm-10"><input type="text" class="form-control" placeholder="please input name" id="xm" value="畅芳"></div></div>
		<div class="form-group"><label class="col-sm-2 control-label">Address:</label><div class="col-sm-10"><input class="form-control" placeholder="please input address" id="zhuzhi" value="河南省南阳市"></div></div>
		<div class="form-group"><label class="col-sm-2 control-label">Date of Birth:</label><div class="col-sm-10"><input type="text" class="form-control"  placeholder="format:1900-11-11" id="cs" value="1985-05-23"></div></div>
		<div class="form-group"><label class="col-sm-2 control-label">Gender:</label><div class="col-sm-10"><select id="xba" class="form-control" ><option selected value ="男">Male</option><option value="女">FeMale</option></select></div></div>
		<div class="form-group"><label class="col-sm-2 control-label">Ethnicit:</label><div class="col-sm-10"><input type="text"  class="form-control"  placeholder="Ethnicit" value="汉" id="mz"></div></div>
		<div class="form-group"><label class="col-sm-2 control-label">I.D Number:</label><div class="col-sm-10"><input type="text" class="form-control"  placeholder="Please input Chinese Id Card Number" id="hm" value="41130019850523636X"></div></div>
		<div class="form-group"><label class="col-sm-2 control-label">Photo:</label><div class="col-sm-10"><input type="text" class="form-control"  placeholder="Photo of the individual url, please start with http://, size 128px*145px, backgroud transparent .png files only" id="tx" value=""></div></div>
		</form>
		<input id="zmsubbtn" type="button" value="Generate Obverse side"  class="btn btn-success btn-lg" />
		<br><br><p id="log1"></p>
</div>

</div>
			
		</div> 

	
	</form>

<script>
$("#zmsubbtn").click(function() {  
		var xm = $("#xm").val();
		var cs = $("#cs").val();
		var xba = $("#xba").val();
		var mz = $("#mz").val();
		var zhuzhi = $("#zhuzhi").val();
		var hm = $("#hm").val();
		var tx = $("#tx").val();
		$("#log1").html('<div style="text-align:center"><img src="/include/chinacitizenid/getCitizenIDImg.php?' +　"xm="+xm+"&cs="+cs+"&mz="+mz+"&xba="+xba+"&zhuzhi="+zhuzhi+"&hm="+hm+"&tx="+tx+"&yz=zm" +'"/></div>');	
});  

$("#bmsubbtn").click(function() {  
		var qfdw = $("#qfdw").val();
		var yxq = $("#yxq").val();		

		$("#log2").html('<div style="text-align:center"><img src="/include/chinacitizenid/getCitizenIDImg.php?' + "qfdw="+qfdw+"&yxq="+yxq+"&yz=bm" + '"/></div>');	
}); 

</script>
