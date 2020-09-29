<?php

namespace Pages;

use Page;
use Pages\ServiceHolderPage;

use Elements\FeaturedServices;

use SilverStripe\Forms\HTMLEditor\HTMLEditorField;

class ServicePage extends Page {
	private static $table_name = 'ServicePage';
	private static $singular_name = 'Dienst';

	private static $db = [
		'Summary'						=> 'HTMLText'
	];

	private static $has_one = [
		'FeaturedServices'	=>	FeaturedServices::class
	];

	private static $allowed_parent = [
		ServiceHolderPage::class
	];

	public function getCMSFields() {
		$fields = parent::getCMSFields();

		$fields->addFieldsToTab('Root.Main', [
			HTMLEditorField::create('Summary', 'Samenvatting')->setDescription('Deze tekst wordt gebruikt in de overzichten')->setRows(5)
		], 'Content');

		return $fields;
	}
}
