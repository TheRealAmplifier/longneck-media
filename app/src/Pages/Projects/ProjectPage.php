<?php

namespace Pages;

use Page;
use SilverStripe\Assets\Image;
use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\Forms\HTMLEditor\HTMLEditorField;

class ProjectPage extends Page {
	private static $table_name = 'ProjectPage';
	private static $singular_name = 'Project';
	private static $icon_class = 'font-icon-rocket';

	private static $db = [
		'Summary'						=> 'HTMLText'
	];

	private static $has_one = [
		'ThumbnailImage'		=> Image::class
	];

	private static $allowed_parent = [
		ServiceHolderPage::class
	];

	private static $owns = [
		'ThumbnailImage'
	];

	public function getCMSFields() {
		$fields = parent::getCMSFields();

		$fields->addFieldsToTab('Root.Main', [
			HTMLEditorField::create('Summary', 'Samenvatting')->setDescription('Deze tekst wordt gebruikt in de overzichten')->setRows(5),
			UploadField::create('ThumbnailImage', 'Afbeelding op overzichten')->setFolderName('Project Thumbnails'),
		], 'Content');

		return $fields;
	}
}
