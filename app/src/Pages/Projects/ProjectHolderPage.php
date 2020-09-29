<?php

namespace Pages;

use DataObject\ProjectTag;
use Page;
use SilverStripe\Forms\GridField\GridField;
use SilverStripe\Forms\GridField\GridFieldConfig_RecordEditor;
use UndefinedOffset\SortableGridField\Forms\GridFieldSortableRows;

class ProjectHolderPage extends Page {
	private static $table_name = 'ProjectHolderPage';
	private static $singular_name = 'Projecten Overzicht';

	private static $has_many = [
		'ProjectTags'				=> ProjectTag::class
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

		return $fields;
	}
}
