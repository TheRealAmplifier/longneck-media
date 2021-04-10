<?php

namespace Tools;

use SilverStripe\Assets\File;

class FileInjector {
	public static function inject($file) {
		if ($file['size'] > 0) {
			$content = file_get_contents($file['tmp_name']);
			$oFile = File::create();
			$oFile->setFromString($content, $file['name']);

			return $oFile;
		}
		return false;
	}
}
