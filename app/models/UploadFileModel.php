<?php

defined('BASEPATH') OR exit('No direct script access allowed');

Class UploadFileModel extends CI_Model {
	public function __construct(){
		parent::__construct();

	}

	public function saveFile($file){
	// echo "<br>" . exec('whoami')	;
// 	vagrant@antiant:/var/www/html/src$ sudo chown www-data /var/www/html/src/image/
// vagrant@antiant:/var/www/html/src$ sudo chmod 755 /var/www/html/src/image/

		$tmp_name = $file["tmp_name"];
		// new path
		$destination = '/tmp/testtest/' . $file['name'];
		//destination and name
		$new_file =  $_SERVER['Vagrant'] . $destination;
		$new_tmp_name = move_uploaded_file($tmp_name, $new_file);
		// Checking whether the file exists in the folder
		if (file_exists($destination)) {
			$file["tmp_name"] = $destination;
			echo "Upload successed <br>";
		}
		else{
			echo "upload failed<br>";
		}
		
		
		return $file;
		
	}
}