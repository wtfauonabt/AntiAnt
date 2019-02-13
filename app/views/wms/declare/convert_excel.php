<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>
<style type="text/css">
.uploadFile{
    padding: 30px;
    border: 3px solid;
}
.uploadFile hr{
	border: 0;
    border-bottom: 1px dashed #ccc;
    background: #999;
}
.file {
	position: relative;
	display: inline-block;
	background: #ff6868;
	border: 1px solid #7b1d1d;
	border-radius: 4px;
	padding: 4px 12px;
    color: #7b1d1d;
    cursor: pointer;
}
.file input {
    position: absolute;
    opacity: 0;
}
.fileUploadSub input{
	background: #ff6868;
	border: 1px solid #7b1d1d;
	border-radius: 4px;
	padding: 4px 12px;
    color: #7b1d1d;
}
</style>
<form class=" animate input_box" method="post" enctype="multipart/form-data" action="<?php echo site_url("/UploadFileController/getFile");?>" >
		<div class="container ">
			<div class="uploadFile">
				<a href="javascript:;" class="file">
					<input type="file" name="file" id="file" accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel" class="chofile" >Choose a file...
				</a>
				<p class="showFileName "></p>
				<hr>
				<div class="fileUploadSub">
					<input type="submit" name="submitFile" value="Get new Excel">
				</div>
			</div>
	</div> 
</form>

<!-- <div class="card">
	<div class="card-block">
		<button onclick="window.location='<?php echo site_url("WMS/excelGetInfo");?>'">Get Excecl</button>
	</div>
</div> -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<script type="text/javascript">
$(".file").on("change","input[type='file']",function(){
    var filePath=$(this).val();
        var arr=filePath.split('\\');
        var fileName=arr[arr.length-1];
        $(".showFileName").html(fileName).show();
     
})
</script>