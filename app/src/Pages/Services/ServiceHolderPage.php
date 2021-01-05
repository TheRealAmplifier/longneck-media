<?php

namespace Pages;

use Page;
use SilverStripe\CMS\Model\SiteTree;
use SilverStripe\Forms\HTMLEditor\HTMLEditorField;

class ServiceHolderPage extends Page {
	private static $table_name = 'ServiceHolderPage';
	private static $singular_name = 'Diensten overzicht';
	private static $icon_class = 'font-icon-box';

	private static $db = [
		'BannerText'					=> 'HTMLText'
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
