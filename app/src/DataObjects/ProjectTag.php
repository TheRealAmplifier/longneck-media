<?php

namespace DataObject;

use Elements\ProjectResults;
use Elements\ProjectStats;
use Pages\ProjectHolderPage;
use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\Forms\DropdownField;
use SilverStripe\ORM\DataObject;

use SilverStripe\Assets\Image;
use SilverStripe\Forms\TextField;

class ProjectTag extends DataObject {
	private static $table_name = 'ProjecTag';
	private static $singular_name = 'Project tag';

	private static $db = [
		'SortID'            	=> 'Int',
		'Title'             	=> 'Varchar',
	];

	private static $has_one = [
		'ProjectHolderPage'		=> ProjectHolderPage::class
	];

	private static $belongs_many_many = [
		'ProjectStats'     		=> ProjectStats::class,
	];

	private static $summary_fields = [
		'Title'								=> 'Naame',
	];

	public function getCMSfields() {
		$fields = parent::getCMSFields();

		$fields->removeByName(['SortID', 'ProjectStats', 'ProjectHolderPageID']);

		$fields->addFieldsToTab('Root.Main', [
			TextField::create('Title', 'Title'),
		]);

		return $fields;
	}

	public function ThumbnailImage() {
		return $this->Image()->ScaleHeight(125);
	}
}
