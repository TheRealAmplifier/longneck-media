<?php

namespace Elements;

use DataObject\MethodStep;

use DNADesign\Elemental\Models\BaseElement;
use SilverStripe\Forms\CheckboxField;
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
	private static $controller_template = 'ElementHolder';

	private static $db = [
		'RemovePadding'		=> 'Boolean'
	];

	private static $has_many = [
		'MethodSteps'			=> MethodStep::class
	];

	public function getCMSFields() {
		$fields = parent::getCMSFields();

		$fields->removeByName(['LinkedPages', 'MethodSteps']);

		$fields->addFieldsToTab('Root.Settings', [
			CheckboxField::create('RemovePadding', 'Padding basiselement verwijderen')->setDescription('Let op: hiermee verwijder je de padding van het root element.')
		]);

		$config =  GridFieldConfig_RecordEditor::create();
		$config->addComponent(new GridFieldSortableRows('SortID'));
		$fields->addFieldToTab('Root.Main', GridField::create(
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
