<?php

namespace DataObject;

use Pages\PricingPage;
use SilverStripe\ORM\DataObject;

class SellingPoint extends DataObject {
	private static $table_name = 'SellingPoint';
	private static $singular_name = 'SellingPoint';

	private static $db = [
		'SortID'								=> 'Int',
		'Title'             		=> 'Varchar'
	];

	private static $has_one = [
		'PricingPage'						=> PricingPage::class
	];

	private static $summary_fields = [
		'Title'									=> 'Titel'
	];

	public function getCMSFields() {
		$fields = parent::getCMSFields();

		$fields->removeByName(['SortID', 'PricingPageID']);
		
		return $fields; 
	}
}
