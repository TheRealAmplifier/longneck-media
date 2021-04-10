<?php

namespace Elements;

use DNADesign\Elemental\Models\BaseElement;
use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\Forms\CheckboxField;
use SilverStripe\Forms\HTMLEditor\HTMLEditorField;
use SilverStripe\Assets\Image;
use SilverStripe\Forms\DropdownField;

class ContentImage extends BaseElement {
	private static $table_name = 'ContentImage';
	private static $singular_name = 'Content met afbeelding';
	private static $plural_name = 'Content met afbeelding';
	private static $description = 'Blok met content en links of rechts een afbeelding';
	private static $icon = 'font-icon-block-story';
	private static $inline_editable = false;
	private static $controller_template = 'ElementHolder';

	private static $db = [
		'TextIntro'						=> 'HTMLText',
		'TextMain'						=> 'HTMLText',
		'RemovePadding'				=> 'Boolean',
		'Layout'							=> 'Varchar'
	];

	private static $has_one = [
		'Image' 							=> Image::class 
	];

	private static $owns = [
		'Image'
	];

	public function getCMSFields() {
		$fields = parent::getCMSFields();

		$fields->removeByName('LinkedPages');

		$fields->addFieldsToTab('Root.Main', [
			HTMLEditorField::create('TextIntro', 'Introducerende tekst')->setRows(5),
			HTMLEditorField::create('TextMain', 'Primaire text')->setRows(10),
			DropdownField::create('Layout', 'Positie afbeelding', [
				'left' 	=> 'Links', 
				'right' => 'Rechts'	
			]),			
			UploadField::create('Image', 'Afbeelding')->setFolderName('Content Afbeeldingen')
		]);

		$fields->addFieldsToTab('Root.Settings', [
			CheckboxField::create('RemovePadding', 'Padding basiselement verwijderen')->setDescription('Let op: hiermee verwijder je de padding van het root element.')
		]);

		return $fields;
	}

	public function getType() {
		return 'Content + Afbeelding';
	}
}
