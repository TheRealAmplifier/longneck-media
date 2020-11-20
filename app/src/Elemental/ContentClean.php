<?php

namespace Elements;

use DNADesign\Elemental\Models\BaseElement;
use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\Forms\CheckboxField;
use SilverStripe\Forms\HTMLEditor\HTMLEditorField;
use SilverStripe\Assets\Image;

class ContentClean extends BaseElement {
	private static $table_name = 'ContentClean';
	private static $singular_name = 'Content Simpel';
	private static $plural_name = 'Content Simpel';
	private static $description = 'Blok met content (simpel)';
	private static $icon = 'font-icon-block-content';
	private static $inline_editable = false;
	private static $controller_template = 'ElementHolder';

	private static $db = [
		'TextIntro'						=> 'HTMLText',
		'TextMain'						=> 'HTMLText',
		'RemovePadding'				=> 'Boolean'
	];

	public function getCMSFields() {
		$fields = parent::getCMSFields();

		$fields->removeByName('LinkedPages');

		$fields->addFieldsToTab('Root.Main', [
			HTMLEditorField::create('TextIntro', 'Introducerende tekst')->setRows(5),
			HTMLEditorField::create('TextMain', 'Primaire text')->setRows(10),
		]);

		$fields->addFieldsToTab('Root.Settings', [
			CheckboxField::create('RemovePadding', 'Padding basiselement verwijderen')->setDescription('Let op: hiermee verwijder je de padding van het root element.')
		]);

		return $fields;
	}

	public function getType() {
		return 'Content Simpel';
	}
}
