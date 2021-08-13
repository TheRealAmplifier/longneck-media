<?php

namespace DataObject;

use Elements\SelectedCustomers;
use SilverStripe\Assets\File;
use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\ORM\DataObject;
use SilverStripe\Forms\TextField;

class Customer extends DataObject {
	private static $table_name = 'Customer';
	private static $singular_name = 'Klant';
	private static $plural_name = 'Klanten';

	private static $db = [
		'SortID' => 'Int',
		'Title' => 'Varchar',
		'Company' => 'Varchar'
	];

	private static $has_one = [
		'Logo' => File::class
	];

	private static $belongs_many_many = [
		'SelectedCustomers' => SelectedCustomers::class
	];

	private static $summary_fields = [
		'Title' => 'Naam',
		'Company' => 'Bedrijf'
	];

	private static $owns = [
		'Logo'
	];

	public function getCMSfields() {
		$fields = parent::getCMSFields();

		$fields->removeByName(['SortID', 'SelectedCustomers']);

		$fields->addFieldsToTab('Root.Main', [
			TextField::create('Title', 'Title'),
			TextField::create('Company', 'Bedrijf'),
			UploadField::create('Logo', 'Logo')->setFolderName('Customer Logo')
		]);

		return $fields;
	}
}
