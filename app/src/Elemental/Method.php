<?php

namespace Elements;

use DataObject\MethodStep;

use DNADesign\Elemental\Models\BaseElement;
use SilverStripe\Forms\GridField\GridField;
use SilverStripe\Forms\GridField\GridFieldConfig_RecordEditor;
use SilverStripe\Forms\HTMLEditor\HTMLEditorField;
use UndefinedOffset\SortableGridField\Forms\GridFieldSortableRows;

class Method extends BaseElement {
	private static $table_name = 'Method';
	private static $singular_name = 'Method';
	private static $plural_name = 'Methods';
	private static $description = 'Blok met beschrijving van de toegepaste methode';
	private static $icon = 'font-icon-block-numbers';
	private static $inline_editable = false;

	private static $db = [
		'TextIntro'			=> 'HTMLText',
		'TextMain'			=> 'HTMLText'
	];

	private static $has_many = [
		'MethodSteps'		=> MethodStep::class
	];

	public function getCMSFields() {
		$fields = parent::getCMSFields();

		$fields->removeByName(['LinkedPages', 'MethodSteps']);

		$fields->addFieldsToTab('Root.Main', [
			HTMLEditorField::create('TextIntro', 'Introducerende tekst')->setRows(5),
			HTMLEditorField::create('TextMain', 'Primaire text')->setRows(7),
		]);

		$config =  GridFieldConfig_RecordEditor::create();
		$config->addComponent(new GridFieldSortableRows('SortID'));
		$fields->addFieldToTab('Root.Stappen', GridField::create(
			'MethodSteps',
			'Methode stap',
			$this->MethodSteps(),
			$config
		));

		return $fields;
	}

	public function getType() {
		return 'Methode';
	}
}
