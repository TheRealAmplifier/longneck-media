<?php

namespace Elements;

use DNADesign\Elemental\Models\BaseElement;
use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\Forms\CheckboxField;
use SilverStripe\Forms\HTMLEditor\HTMLEditorField;
use SilverStripe\Assets\Image;

class Content extends BaseElement {
	private static $table_name = 'Content';
	private static $singular_name = 'Content';
	private static $plural_name = 'Content';
	private static $description = 'Blok met content';
	private static $icon = 'font-icon-block-content';
	private static $inline_editable = false;

	private static $db = [
		'TextIntro'						=> 'HTMLText',
		'TextMain'						=> 'HTMLText',
		'HasBackgroundColor'	=> 'Boolean'
	];

	private static $has_one = [
		'Image' 		=> Image::class 
	];

	private static $owns = [
		'Image'
	];

	public function getCMSFields() {
		$fields = parent::getCMSFields();

		$fields->removeByName('LinkedPages');

		$fields->addFieldsToTab('Root.Main', [
			HTMLEditorField::create('TextIntro', 'Introducerende tekst')->setRows(5),
			HTMLEditorField::create('TextMain', 'Primaire text')->setRows(7),
			CheckboxField::create('HasBackgroundColor', 'Achtergrondkleur toepassen')->setDescription('Deze optie voegt een achtergrond kleur toe aan het blok.')
		]);

		if($this->HasBackgroundColor) {
			$fields->addFieldToTab('Root.Main', UploadField::create('Image', 'Afbeedling')->setFolderName('Content Afbeeldingen'));
		}

		return $fields;
	}

	public function getType() {
		return 'Content';
	}
}
