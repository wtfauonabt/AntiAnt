<?php
/**
 * Created by PhpStorm.
 * User: stanley
 * Date: 11/17/2018
 * Time: 3:11 AM
 */

$upload_path = site_url('');
$folder = "declare";

?>
<div class="card">
	<div class="card-block">
		<form method="post" action="<?php site_url("/WMS/declaration/upload");?>" role="form">
			<div class="form-group form-row">
				<div class="input-group mb-3">
					<div class="input-group-prepend">
						<span class="input-group-text"><?php echo $upload_path?>/</span>
					</div>
					<input class="form-control" type='text' name="folder" placeholder="Please enter Folder Name" value="<?php echo $folder?>" required/>
					<!--                        <div class="input-group-append">
                                            <button type="button" class="btn btn-outline-secondary" title="Upload Output EXCEL" onclick="openFtp(this)"><i class="fa fa-exchange-alt"></i></button>
                                        </div>-->
				</div>
			</div>
			<input type="hidden" name="tab" value="excel">
			<div class="card-deck">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">Upload Excel File</h5>
						<p class="card-text"><input type="file" name="excel" accept="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet" required/></p>
					</div>
				</div>
			</div>
			<div class="text-center mt-3">
				<button type="submit" class="btn btn-success btn-lg mb-1">Upload Excel</button>
			</div>
		</form>
	</div>
</div>
