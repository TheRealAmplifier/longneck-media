<?php

namespace Pages;

use Page;
use Pages\ServiceHolderPage;

use Elements\FeaturedServices;
use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\Assets\File;
use SilverStripe\Forms\HTMLEditor\HTMLEditorField;

class ServicePage extends Page {
	private static $table_name = 'ServicePage';
	private static $singular_name = 'Dienst';

	private static $db = [
		'Summary'						=> 'HTMLText'
	];

	private static $has_one = [
		'Icon'							=> File::class
	];

	private static $allowed_parent = [
		ServiceHolderPage::class
	];

	private static $owns = [
		'Icon'
	];

	public function getCMSFields() {
		$fields = parent::getCMSFields();

		$fields->addFieldsToTab('Root.Main', [
			UploadField::create('Icon', 'Icoon')->setFolderName('Service Icons'),
			HTMLEditorField::create('Summary', 'Samenvatting')->setDescription('Deze tekst wordt gebruikt in de overzichten')->setRows(5)
		], 'Content');

		return $fields;
	}
}
