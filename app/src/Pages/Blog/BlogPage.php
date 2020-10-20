<?php

namespace Pages;

use DataObject\BlogTag;
use Page;

use SilverStripe\Assets\Image;
use SilverStripe\AssetAdmin\Forms\UploadField;

use SilverStripe\Forms\HTMLEditor\HTMLEditorField;

class BlogPage extends Page {
	private static $table_name = 'BlogPage';
	private static $singular_name = 'Artikel';

	private static $db = [
		'Summary'						=> 'HTMLText'	
	];

	private static $has_one = [
		'ThumbnailImage'		=> Image::class
	];

	private static $many_many = [
		'BlogTags'					=> BlogTag::class
	];

	private static $allowed_parent = [
		BlogHolderPage::class
	];

	private static $owns = [
		'ThumbnailImage'
	];

	public function getCMSFields() {
		$fields = parent::getCMSFields();

		$fields->addFieldsToTab('Root.Main', [
			HTMLEditorField::create('Summary', 'Samenvatting')->setDescription('Deze tekst wordt gebruikt in de overzichten')->setRows(5),
			UploadField::create('ThumbnailImage', 'Afbeelding op overzichten')->setFolderName('Blog Thumbnails')		
		], 'Content');

		return $fields;
	}
}
