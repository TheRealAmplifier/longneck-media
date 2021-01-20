<?php

namespace Pages;

use Page;
use SilverStripe\CMS\Model\SiteTree;
use SilverStripe\Forms\CheckboxField;
use SilverStripe\Forms\HTMLEditor\HTMLEditorField;
use SilverStripe\Forms\TextareaField;
use SilverStripe\Forms\TextField;
use SilverStripe\Forms\TreeDropdownField;

class ProjectHolderPage extends Page {
	private static $table_name = 'ProjectHolderPage';
	private static $singular_name = 'Projecten Overzicht';
	private static $icon_class = 'font-icon-p-archive';

	private static $db = [
		'ShowContact'					=> 'Boolean',
		'ContactTitle'	 			=> 'Varchar',
		'ContactText'	 				=> 'Text',
		'ContactLinkText'			=> 'Varchar'
	];

	private static $has_one = [
		'ContactLinkTarget'		=> SiteTree::class
	];

	private static $allowed_children = [
		ProjectPage::class
	];

	public function getCMSFields() {
		$fields = parent::getCMSFields();

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
