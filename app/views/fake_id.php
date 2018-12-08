<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>


<form class=" animate input_box" method="post" action="<?php echo site_url("/FakeIdController/getIdInfo/file_get_html");?>">
		<div class="container ">
		<div class="container-login100-form-btn">
		
		<!-- <?php
		print_r( $contents);
		?> -->
<h3>Chinese ID Card Number Obverse side Image Generate</h3>
<div class="col-md-12">
	<?php foreach ($contents as $key => $value):?>
		<form name="form1" class="form-horizontal">
			
			
			

		<div class="form-group"><label class="col-sm-2 control-label">FullName:</label><div class="col-sm-10"><input type="text" class="form-control" placeholder="please input name" id="xm" value="
			<?php echo $contents[$key]['name'];?>

		"></div></div>

		<div class="form-group"><label class="col-sm-2 control-label">Address:</label><div class="col-sm-10"><input class="form-control" placeholder="please input address" id="zhuzhi" value="
			<?php echo $contents[$key]['address'];?>
		"></div></div>

		<div class="form-group"><label class="col-sm-2 control-label">Date of Birth:</label><div class="col-sm-10"><input type="text" class="form-control"  placeholder="format:1900-11-11" id="cs" value="
			<?php echo $contents[$key]['bday'];?>
			"></div></div>

		<div class="form-group"><label class="col-sm-2 control-label">Gender:</label><div class="col-sm-10"><select id="xba" class="form-control" ><option selected value ="男">Male</option><option value="女">FeMale</option></select></div></div>

		<div class="form-group"><label class="col-sm-2 control-label">Ethnicit:</label><div class="col-sm-10"><input type="text"  class="form-control"  placeholder="Ethnicit" value="汉" id="mz"></div></div>

		<div class="form-group"><label class="col-sm-2 control-label">I.D Number:</label><div class="col-sm-10"><input type="text" class="form-control"  placeholder="Please input Chinese Id Card Number" id="hm" value="
			<?php echo $contents[$key]['id'];?>
			"></div></div>
		<div class="form-group"><label class="col-sm-2 control-label">Photo:</label><div class="col-sm-10"><input type="text" class="form-control"  placeholder="Photo of the individual url, please start with http://, size 128px*145px, backgroud transparent .png files only" id="tx" value=""></div></div>
<p>&nbsp;</p>
		

	</form>

	
		<input id="zmsubbtn" type="button" value="Generate Obverse side"  class="btn btn-success btn-lg" />


		<br><p id="log1"></p>
		<?php endforeach;?>
</div>



</div>
			
		</div> 

	
	</form>
<script type="text/javascript" src="<?php echo base_url();?>/simplehtmldom/app/js/jquery.js"></script>
	<script type="text/javascript">
$(document).ready(function(){	
	$("#zmsubbtn").click(function() {  
		var xm = $("#xm").val();
		var cs = $("#cs").val();
		var xba = $("#xba").val();
		var mz = $("#mz").val();
		var zhuzhi = $("#zhuzhi").val();
		var hm = $("#hm").val();
		var tx = $("#tx").val();
		$("#log1").html('<div style="text-align:center"><img src="<?php echo base_url();?>/src/image/male_id.jpg' +　"xm="+xm+"&cs="+cs+"&mz="+mz+"&xba="+xba+"&zhuzhi="+zhuzhi+"&hm="+hm+"&tx="+tx+"&yz=zm" +'"/></div>');
});  
});



</script>