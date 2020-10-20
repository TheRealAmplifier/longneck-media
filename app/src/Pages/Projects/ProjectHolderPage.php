<?php

namespace Pages;

use DataObject\ProjectTag;
use Page;
use SilverStripe\CMS\Model\SiteTree;
use SilverStripe\Forms\CheckboxField;
use SilverStripe\Forms\GridField\GridField;
use SilverStripe\Forms\GridField\GridFieldConfig_RecordEditor;
use SilverStripe\Forms\TextareaField;
use SilverStripe\Forms\TextField;
use SilverStripe\Forms\TreeDropdownField;
use UndefinedOffset\SortableGridField\Forms\GridFieldSortableRows;

class ProjectHolderPage extends Page {
	private static $table_name = 'ProjectHolderPage';
	private static $singular_name = 'Projecten Overzicht';

	private static $db = [
		'ShowContact'					=> 'Boolean',
		'ContactTitle'	 			=> 'Varchar',
		'ContactText'	 				=> 'Text',
		'ContactLinkText'			=> 'Varchar',
	];

	private static $has_one = [
		'ContactLinkTarget'		=> SiteTree::class
	];

	private static $has_many = [
		'ProjectTags'					=> ProjectTag::class
	];

	private static $allowed_children = [
		ProjectPage::class
	];

	public function getCMSFields() {
		$fields = parent::getCMSFields();

		$config =  GridFieldConfig_RecordEditor::create();
		$config->addComponent(new GridFieldSortableRows('SortID'));
		$fields->addFieldToTab('Root.Tags', GridField::create(
			'ProjectTags',
			'Tags',
			$this->ProjectTags(),
			$config
		));


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
