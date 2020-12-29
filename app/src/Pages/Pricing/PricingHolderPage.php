<?php

namespace Pages;

use Page;
use SilverStripe\Forms\HTMLEditor\HTMLEditorField;

class PricingHolderPage extends Page {
	private static $table_name = 'PricingHolderPage';
	private static $singular_name = 'Prijzen Overzicht';
	private static $icon_class = 'font-icon-up-circled';

	private static $db = [
		'BannerText'					=> 'HTMLText',
		'ShowContact'					=> 'Boolean'
	];

	private static $allowed_children = [
		PricingPage::class
	];

	public function getCMSFields() {
		$fields = parent::getCMSFields();

		$fields->addFieldsToTab('Root.Banner', [
			HTMLEditorField::create('BannerText', 'Banner tekst')
		]);

		return $fields;
	}
}
