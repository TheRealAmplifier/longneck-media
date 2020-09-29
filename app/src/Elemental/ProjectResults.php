<?php

namespace Elements;

use DNADesign\Elemental\Models\BaseElement;

use DataObject\ProjectImage;

use SilverStripe\Forms\GridField\GridField;
use SilverStripe\Forms\GridField\GridFieldConfig_RecordEditor;
use SilverStripe\Forms\HTMLEditor\HTMLEditorField;
use UndefinedOffset\SortableGridField\Forms\GridFieldSortableRows;

class ProjectResults extends BaseElement {
	private static $table_name = 'ProjectResults';
	private static $singular_name = 'Project Intro';
	private static $description = 'Blok met project introductie';
	private static $icon = 'font-icon-block-story-carousel';
	private static $inline_editable = false;

	private static $db = [
		'TextMain'			=> 'HTMLText'
	];

	private static $has_many = [
		'ProjectImages'			=> ProjectImage::class
	];

	public function getCMSFields() {
		$fields = parent::getCMSFields();


		$fields->removeByName(['ProjectImages']);

		$fields->addFieldsToTab('Root.Main', [
			HTMLEditorField::create('TextMain', 'Primaire text')->setRows(7),
		]);

		$config = GridFieldConfig_RecordEditor::create();
		$config->addComponent(new GridFieldSortableRows('SortID'));
		$fields->addFieldToTab('Root.Afbeeldingen', GridField::create(
			'ProjectImages',
			'ProjectImages',
			$this->ProjectImages(),
			$config
		));

		return $fields;
	}

	public function getType() {
		return 'Project results';
	}


	public function getLeftImages() {
		$leftImages = $this->ProjectImages()->filter('Column', 'left');
		return $leftImages;
	}

	public function getRightImages() {
		$rightImages = $this->ProjectImages()->filter('Column', 'right');
		return $rightImages;
	}
}
