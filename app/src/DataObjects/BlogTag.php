<?php

namespace DataObject;

use Pages\BlogHolderPage;
use Pages\BlogPage;
use RyanPotter\SilverStripeColorField\Forms\ColorField;
use SilverStripe\ORM\DataObject;

use SilverStripe\Forms\TextField;

class BlogTag extends DataObject {
	private static $table_name = 'BlogTag';
	private static $singular_name = 'Blog tag';

	private static $db = [
		'SortID'            	=> 'Int',
		'Title'             	=> 'Varchar',
	];

	private static $has_one = [
		'BlogHolderPage'			=> BlogHolderPage::class
	];

	private static $belongs_many_many = [
		'BlogPages'     			=> BlogPage::class,
	];

	private static $summary_fields = [
		'Title'								=> 'Naame',
	];

	public function getCMSfields() {
		$fields = parent::getCMSFields();

		$fields->removeByName(['SortID', 'BlogTags', 'BlogHolderPageID']);

		$fields->addFieldsToTab('Root.Main', [
			TextField::create('Title', 'Title')
		]);

		return $fields;
	}

	public function ThumbnailImage() {
		return $this->Image()->ScaleHeight(125);
	}
}
