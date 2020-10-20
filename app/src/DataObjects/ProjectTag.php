<?php

namespace DataObject;

use Pages\ProjectHolderPage;

use SilverStripe\ORM\DataObject;

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
		'ProjectStats'     		=> ProjectStat::class,
	];

	private static $summary_fields = [
		'Title'								=> 'Naam',
	];

	public function getCMSfields() {
		$fields = parent::getCMSFields();

		$fields->removeByName(['SortID', 'ProjectStats', 'ProjectHolderPageID']);

		$fields->addFieldsToTab('Root.Main', [
			TextField::create('Title', 'Title'),
		]);

		return $fields;
	}
}
