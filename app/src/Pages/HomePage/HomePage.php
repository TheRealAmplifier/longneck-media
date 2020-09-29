<?php

namespace Pages;

use Page;

use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\Assets\Image;

use SilverStripe\Forms\HTMLEditor\HTMLEditorField;

class HomePage extends Page {
	private static $table_name = 'HomePage';
	private static $singular_name = 'Home pagina';

	private static $db = [
		'BannerText'		=> 'HTMLText'
	];

	private static $has_one = [
		'BannerImage'		=> Image::class
	];

	private static $owns = [
		'BannerImage'
	];

	public function getCMSFields() {
		$fields = parent::getCMSFields();

		$fields->addFieldsToTab('Root.Banner', [
			UploadField::create('BannerImage', 'Banner Image')->setFolderName('Banners'),
			HTMLEditorField::create('BannerText', 'Banner tekst')
		]);

		return $fields;
	}

	public function getProjects() {
		return ProjectPage::get();
	}
}
