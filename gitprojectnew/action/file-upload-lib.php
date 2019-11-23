<?php
	
	function upload_file($controlname,$filename,$size = 1000000,
		$filetypes=['image/jpg'=>'.jpg','image/png'=>'.png','image/jpeg'=>'.jpg','image/pjpeg'=>'.jpg'],
		$upload_dir = '../gtcexecutive/uploads') {
		if($_FILES[$controlname]['error']>0) {
			$_SESSION['fileerror']="File Uploading Error";
		}else {
			if($_FILES[$controlname]['size']>$size) {
				$_SESSION['fileerror']='File is too large, max file allowed is 1MB';
			}else {
				if(!array_key_exists($_FILES[$controlname]['type'],$filetypes)) {
					$_SESSION['fileerror']='File type must be jpg/png';				
				}
				else {
					$filename = sha1(time().$filename).$filetypes[$_FILES[$controlname]['type']];
					if(move_uploaded_file($_FILES[$controlname]['tmp_name'],
					$upload_dir.'/'.$filename)){
						return $filename;
					}else {
						return "";
					}
				}
			}
		}
	}
?>