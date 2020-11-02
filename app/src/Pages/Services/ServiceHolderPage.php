<?php

namespace Pages;

use Page;
use SilverStripe\Forms\CheckboxField;
use SilverStripe\Forms\HTMLEditor\HTMLEditorField;
use SilverStripe\Forms\TextareaField;
use SilverStripe\Forms\TextField;
use SilverStripe\Forms\TreeDropdownField;

class ServiceHolderPage extends Page {
	private static $table_name = 'ServiceHolderPage';
	private static $singular_name = 'Diensten overzicht';

	private static $db = [
		'BannerText'					=> 'HTMLText',
		'ShowContact'					=> 'Boolean',
		'ContactTitle'	 			=> 'Varchar',
		'ContactText'	 				=> 'Text',
		'ContactLinkText'			=> 'Varchar',
	];

	private static $has_one = [
		'ContactLinkTarget'		=> SiteTree::class
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

		$fields->addFieldsToTab('Root.Contact', [
			CheckboxField::create('ShowContact', 'Contact sectie tonen op project pagina\'s'),
			TextField::create('ContactTitle', 'Contact titel'),
			TextareaField::create('ContactText', 'Contact tekst'),
			TextField::create('ContactLinkText', 'Contact link tekst'),
			TreeDropdownField::create('ContactLinkTargetID', 'Contact link doeladres', SiteTree::class),
		]);

		return $fields;
	}
}
