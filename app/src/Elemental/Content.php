<?php

namespace Elements;

use DNADesign\Elemental\Models\BaseElement;

use SilverStripe\Forms\HTMLEditor\HTMLEditorField;
use SilverStripe\Forms\ListboxField;

class Content extends BaseElement {
	private static $table_name = 'Content';
	private static $singular_name = 'Content';
	private static $plural_name = 'Content';
	private static $description = 'Blok met content';
	private static $icon = 'font-icon-block-content';
	private static $inline_editable = false;

	private static $db = [
		'TextIntro'			=> 'HTMLText',
		'TextMain'			=> 'HTMLText'
	];

	public function getCMSFields() {
		$fields = parent::getCMSFields();

		$fields->removeByName('LinkedPages');

		$fields->addFieldsToTab('Root.Main', [
			HTMLEditorField::create('TextIntro', 'Introducerende tekst')->setRows(5),
			HTMLEditorField::create('TextMain', 'Primaire text')->setRows(7)
		]);

		return $fields;
	}

	public function getType() {
		return 'Content';
	}
}
