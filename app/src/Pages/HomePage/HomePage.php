<?php

namespace Pages;

use Page;

use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\Assets\Image;

use SilverStripe\Forms\HTMLEditor\HTMLEditorField;

class HomePage extends Page {
	private static $table_name = 'HomePage';
	private static $singular_name = 'Home pagina';
	private static $icon_class = 'font-icon-p-home';

	private static $has_one = [
		'BannerImage'		=> Image::class
	];

	private static $owns = [
		'BannerImage'
	];

	public function getProjects() {
		return ProjectPage::get();
	}
}
