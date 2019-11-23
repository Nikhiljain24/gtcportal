<?php
	$fileerrors = [];
	function upload_file($controlname,$filename,$size = 1000000,$filetypes=['image/jpg'=>'.jpg','image/png'=>'.png','image/jpeg'=>'.jpg','image/pjpeg'=>'.jpg'],$upload_dir = '../gtcexecutive/uploads'){
		if($_FILES[$controlname]['error']>0) {
			//$fileerrors['file']="File uploading error";
		}else {
			if($_FILES[$controlname]['size']>$size) {
				$fileerrors['file']="File is too large, max file allowed is 1MB";
			}else{
				if(!array_key_exists($_FILES[$controlname]['type'],$filetypes)) {
					$fileerrors['file']="File type must be jpg/png";
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
	if(!empty($fileerrors)){
		$_SESSION['fileerrors']=$fileerrors;
	}
	}
	
?>