<?php

namespace DataObject;

use Elements\Method;
use SilverStripe\ORM\DataObject;
use SilverStripe\Forms\HTMLEditor\HTMLEditorField;
use SilverStripe\Forms\TextField;

class MethodStep extends DataObject {
	private static $table_name = 'MethodStep';
	private static $singular_name = 'Methode stap';
	private static $plural_name = 'Methode stappen';

	private static $db = [
		'SortID' => 'Int',
		'Title' => 'Varchar',
		'Text' => 'HTMLText'
	];

	private static $has_one = [
		'Method' => Method::class
	];

	private static $summary_fields = [
		'Title' => 'Naam',
		'Text' => 'Tekst'
	];

	public function getCMSfields() {
		$fields = parent::getCMSFields();

		$fields->removeByName(['SortID', 'MethodID']);

		$fields->addFieldsToTab('Root.Main', [
			TextField::create('Title', 'Title'),
			HTMLEditorField::create('Text', 'Tekst')->setRows(3)
		]);

		return $fields;
	}
}
