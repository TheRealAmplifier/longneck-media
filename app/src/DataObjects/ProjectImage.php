<?php

namespace DataObject;

use Elements\ProjectResults;
use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\Forms\DropdownField;
use SilverStripe\ORM\DataObject;
use SilverStripe\Assets\Image;
use SilverStripe\Forms\TextField;

class ProjectImage extends DataObject {
	private static $table_name = 'ProjectImage';
	private static $singular_name = 'Project afbeelding';

	private static $db = [
		'SortID'            => 'Int',
		'Title'             => 'Varchar',
		'Column'						=> 'Enum("left, right", "left")'
	];

	private static $has_one = [
		'Image'      				=> Image::class,
		'ProjectResults'		=> ProjectResults::class
	];

	private static $owns = [
		'Image'
	];

	private static $summary_fields = [
		'ThumbnailImage'		=> 'Afbeelding',
		'Title'							=> 'Naame',
		'Column'						=> 'Kolom Positie'
	];

	public function getCMSfields() {
		$fields = parent::getCMSFields();

		$fields->removeByName(['SortID', 'ProjectResultsID']);

		$fields->addFieldsToTab('Root.Main', [
			TextField::create('Title', 'Title'),
			DropdownField::create('Column', 'Positie (kolom)', singleton('DataObject\ProjectImage')->dbObject('Column')->enumValues()),
			UploadField::create('Image', 'Image')->setFolderName('Project Images')
		]);

		return $fields;
	}

	public function ThumbnailImage() {
		return $this->Image()->ScaleHeight(125);
	}
}
