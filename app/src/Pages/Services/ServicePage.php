<?php

namespace Pages;

use Page;
use Pages\ServiceHolderPage;

use Elements\FeaturedServices;
use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\Assets\File;
use SilverStripe\CMS\Model\SiteTree;
use SilverStripe\Forms\CheckboxField;
use SilverStripe\Forms\HTMLEditor\HTMLEditorField;
use SilverStripe\Forms\TextareaField;
use SilverStripe\Forms\TextField;
use SilverStripe\Forms\TreeDropdownField;

class ServicePage extends Page {
	private static $table_name = 'ServicePage';
	private static $singular_name = 'Dienst';
	private static $icon_class = 'font-icon-check-mark-circle';

	private static $db = [
		'Summary'							=> 'HTMLText',
		'ShowContact'					=> 'Boolean',
		'ContactTitle'	 			=> 'Varchar',
		'ContactText'	 				=> 'Text',
		'ContactLinkText'			=> 'Varchar',
	];

	private static $has_one = [
		'ContactLinkTarget'		=> SiteTree::class,
		'Icon'								=> File::class
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
