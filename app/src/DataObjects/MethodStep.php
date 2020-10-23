<?php

namespace DataObject;

use Elements\Method;

use SilverStripe\ORM\DataObject;

use SilverStripe\CMS\Model\SiteTree;
use SilverStripe\Forms\TextField;
use SilverStripe\Forms\TreeDropdownField;

class MethodStep extends DataObject {
	private static $table_name = 'MethodStep';
	private static $singular_name = 'Methode stap';

	private static $db = [
		'SortID'            => 'Int',
		'Title'             => 'Varchar',
	];

	private static $has_one = [
		'Target'      			=> SiteTree::class,
		'Method'						=> Method::class
	];

	private static $summary_fields = [
		'Title'							=> 'Naame',
		// 'Target.Link'				=> 'Doeladres'
	];

	public function getCMSfields() {
		$fields = parent::getCMSFields();

		$fields->removeByName(['SortID', 'ProjectResultsID']);

		$fields->addFieldsToTab('Root.Main', [
			TextField::create('Title', 'Title'),
			TreeDropdownField::create('TargetID', 'Doeladres', SiteTree::class)
		]);

		return $fields;
	}
}
