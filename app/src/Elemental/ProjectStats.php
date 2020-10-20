<?php

namespace Elements;

use DataObject\ProjectTag;
use DNADesign\Elemental\Models\BaseElement;

use SilverStripe\Forms\ListboxField;
use SilverStripe\Forms\TextField;

class ProjectStats extends BaseElement {
	private static $table_name = 'ProjectStats';
	private static $singular_name = 'Project statistieken';
	private static $description = 'Blok met project statistieken';
	private static $icon = 'font-icon-block-reports';
	private static $inline_editable = false;

	private static $db = [
		'Year'							=> 'Varchar'
	];

	private static $many_many = [
		'ProjectTags'				=> ProjectTag::class
	];

	public function getCMSFields() {
		$fields = parent::getCMSFields();

		$fields->addFieldsToTab('Root.Main', [
			TextField::create('Year', 'Jaartal'),
			ListboxField::create('ProjectTags', 'Project Tags', ProjectTag::get())
		]);

		return $fields;
	}

	public function getType() {
		return 'Project statistieken';
	}
}
