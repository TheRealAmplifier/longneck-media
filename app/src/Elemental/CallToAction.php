<?php

namespace Elements;

use DNADesign\Elemental\Models\BaseElement;

use SilverStripe\Assets\Image;
use SilverStripe\AssetAdmin\Forms\UploadField;

use SilverStripe\CMS\Model\SiteTree;
use SilverStripe\Forms\CheckboxField;
use SilverStripe\Forms\DropdownField;
use SilverStripe\Forms\HTMLEditor\HTMLEditorField;
use SilverStripe\Forms\TextField;
use SilverStripe\Forms\TreeDropdownField;

class CallToAction extends BaseElement {
	private static $table_name = 'CallToAction';
	private static $singular_name = 'Call To Action';
	private static $plural_name = 'Call To Action';
	private static $description = 'Blok met call to action naar een specifieke pagina';
	private static $icon = 'font-icon-block-award';
	private static $inline_editable = false;
	private static $controller_template = 'ElementHolder';


	private static $db = [
		'TextIntro'				=> 'HTMLText',
		'TextMain'				=> 'HTMLText',
		'ButtonText'			=> 'Varchar',
		'CTAType'					=> 'Varchar',
		'RemovePadding'		=> 'Boolean'
	];

	private static $has_one = [
		'Image'						=> Image::class,
		'LinkedPage'			=> SiteTree::class
	];

	private static $owns = [
		'Image'
	];

	public function getCMSFields() {
		$fields = parent::getCMSFields();

		$fields->addFieldsToTab('Root.Main', [
			HTMLEditorField::create('TextIntro', 'Introducerende tekst')->setRows(5),
			HTMLEditorField::create('TextMain', 'Primaire text')->setRows(7),
			UploadField::create('Image', 'Afbeelding')->setFolderName('CTA'),
			DropdownField::create('CTAType', 'Type', [
				'simple' 		=> 'Eenvoudig', 
				'image' 		=> 'Afbeelding',
				'colored'		=> 'Gekleurde achtergrond',
				'bar'				=> 'Gekleurde balk (verloop)',
			])
		]);

		$fields->addFieldsToTab('Root.Button', [
			TextField::create('ButtonText', 'Button tekst'),
			TreeDropdownField::create('LinkedPageID', 'Gelinkte Pagina', SiteTree::class)
		]);

		$fields->addFieldsToTab('Root.Settings', [
			CheckboxField::create('RemovePadding', 'Padding basiselement verwijderen')->setDescription('Let op: hiermee verwijder je de padding van het root element.')
		]);

		return $fields;
	}

	public function getType() {
		return 'Call To Action';
	}
}
