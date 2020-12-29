<?php

namespace Pages;

use DataObject\SellingPoint;
use Page;
use SilverStripe\Forms\GridField\GridField;
use SilverStripe\Forms\GridField\GridFieldConfig_RecordEditor;
use SilverStripe\Forms\HTMLEditor\HTMLEditorField;
use SilverStripe\Forms\NumericField;
use UndefinedOffset\SortableGridField\Forms\GridFieldSortableRows;

class PricingPage extends Page {
	private static $table_name = 'PricingPage';
	private static $singular_name = 'Prijs pagina';
	private static $icon_class = 'font-icon-explore-addons';

	private static $db = [
		'Summary'						=> 'HTMLText',
		'Price'							=> 'Decimal'
	];

	private static $has_many = [
		'SellingPoints'			=> SellingPoint::class
	];

	private static $allowed_parent = [
		PricingHolderPage::class
	];

	public function getCMSFields() {
		$fields = parent::getCMSFields();

		$fields->addFieldsToTab('Root.Main', [
			HTMLEditorField::create('Summary', 'Samenvatting')->setDescription('Deze tekst wordt gebruikt in de overzichten')->setRows(5),
			NumericField::create('Price', 'Vanaf prijs')
		], 'Content');

		$config =  GridFieldConfig_RecordEditor::create();
		$config->addComponent(new GridFieldSortableRows('SortID'));
		$fields->addFieldToTab('Root.USP\'s', GridField::create(
			'SellingPoints',
			'Selling Points',
			$this->SellingPoints(),
			$config
		));

		return $fields;
	}
}
