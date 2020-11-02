<?php

namespace Elements;

use DNADesign\Elemental\Models\BaseElement;
use Pages\ServicePage;
use SilverStripe\CMS\Model\SiteTree;
use SilverStripe\Forms\ListboxField;
use SilverStripe\Forms\TextField;
use SilverStripe\Forms\TreeDropdownField;

class ProjectStats extends BaseElement {
	private static $table_name = 'ProjectStats';
	private static $singular_name = 'Project statistieken';
	private static $description = 'Blok met project statistieken';
	private static $icon = 'font-icon-block-reports';
	private static $inline_editable = false;

	private static $db = [
		'Year'							=> 'Varchar',
	];

	private static $many_many = [
		'Services'				=> ServicePage::class
	];

	public function getCMSFields() {
		$fields = parent::getCMSFields();

		$fields->addFieldsToTab('Root.Main', [
			TextField::create('Year', 'Jaartal'),
			ListboxField::create('Services', 'Services', ServicePage::get())		
		]);

		return $fields;
	}

	public function getType() {
		return 'Project statistieken';
	}
}
