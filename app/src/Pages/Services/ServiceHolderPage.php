<?php

namespace Pages;

use Page;
use SilverStripe\Forms\HTMLEditor\HTMLEditorField;
use SilverStripe\Forms\TextField;

class ServiceHolderPage extends Page {
	private static $table_name = 'ServiceHolderPage';
	private static $singular_name = 'Diensten overzicht';

	private static $db = [
		'BannerText'		=> 'HTMLText',
	];
	
	private static $allowed_children = [
		ServicePage::class
	];

	public function getCMSFields() {
		$fields = parent::getCMSFields();

		$fields->removeByName(['Content']);
		
		$fields->addFieldsToTab('Root.Banner', [
			HTMLEditorField::create('BannerText', 'Banner tekst')
		]);

		return $fields;
	}
}
