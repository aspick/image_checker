<?php

namespace Aspick\ImageChecker;

class PngChecker {

	/**
	 * check png file is valid
	 *
	 * valid means it contains PNG header and IEND footer
	 *
	 * @param $file_path string png file path
	 * @return boolean
	 *
	 */
	public static function check($file_path) {
		$handle = fopen($file_path, 'rb');
		if($handle === false){ return false; }

		$header = "\x89PNG";
		$footer = "\x0\x0\x0\x0IEND\xAE\x42\x60\x82";

		if(fread($handle, 4) != $header){ return false; }

		fseek($handle, -12, SEEK_END);
		if(fread($handle, 12) != $footer){ return false; }

		return true;
	}
}
