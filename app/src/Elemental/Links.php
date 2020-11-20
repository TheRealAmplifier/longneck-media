<?php

namespace Elements;

use Page;

use DNADesign\Elemental\Models\BaseElement;
use SilverStripe\Forms\CheckboxField;
use SilverStripe\Forms\HTMLEditor\HTMLEditorField;
use SilverStripe\Forms\ListboxField;

class Links extends BaseElement {
	private static $table_name = 'Links';
	private static $singular_name = 'Links';
	private static $plural_name = 'Links';
	private static $description = 'Blok met links naar verschillende pagina\'s';
	private static $icon = 'font-icon-block-external-link';
	private static $inline_editable = false;
	private static $controller_template = 'ElementHolder';

	private static $db = [
		'TextIntro'				=> 'HTMLText',
		'TextMain'				=> 'HTMLText',
		'RemovePadding'		=> 'Boolean'

	];

	private static $many_many = [
		'LinkedPages'			=> Page::class
	];

	public function getCMSFields() {
		$fields = parent::getCMSFields();

		$fields->removeByName('LinkedPages');

		$fields->addFieldsToTab('Root.Main', [
			HTMLEditorField::create('TextIntro', 'Introducerende tekst')->setRows(5),
			HTMLEditorField::create('TextMain', 'Primaire text')->setRows(7),
			ListboxField::create('LinkedPages', 'Gelinkte Pagina\'s', Page::get())
		]);

		$fields->addFieldsToTab('Root.Settings', [
			CheckboxField::create('RemovePadding', 'Padding basiselement verwijderen')->setDescription('Let op: hiermee verwijder je de padding van het root element.')
		]);

		return $fields;
	}

	public function getType() {
		return 'Links';
	}
}
