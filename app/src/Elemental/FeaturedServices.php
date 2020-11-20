<?php

namespace Elements;

use Pages\ServicePage;

use DNADesign\Elemental\Models\BaseElement;
use SilverStripe\Forms\CheckboxField;
use SilverStripe\Forms\HTMLEditor\HTMLEditorField;
use SilverStripe\Forms\ListboxField;

class FeaturedServices extends BaseElement {
	private static $table_name = 'FeaturedServices';
	private static $singular_name = 'Featured Services';
	private static $plural_name = 'Featured Services';
	private static $description = 'Blok met links naar uitgelichte diensten';
	private static $icon = 'font-icon-block-rocket';
	private static $inline_editable = false;
	private static $controller_template = 'ElementHolder';

	private static $db = [
		'TextIntro'					=> 'HTMLText',
		'RemovePadding'			=> 'Boolean'

	];

	private static $many_many = [
		'LinkedServices'		=> ServicePage::class
	];

	public function getCMSFields() {
		$fields = parent::getCMSFields();

		$fields->removeByName('LinkedServices');

		$fields->addFieldsToTab('Root.Main', [
			HTMLEditorField::create('TextIntro', 'Introducerende tekst')->setRows(5),
			ListboxField::create('LinkedServices', 'Gelinkte Services', ServicePage::get())
		]);

		$fields->addFieldsToTab('Root.Settings', [
			CheckboxField::create('RemovePadding', 'Padding basiselement verwijderen')->setDescription('Let op: hiermee verwijder je de padding van het root element.')
		]);

		return $fields;
	}

	public function getType() {
		return 'Uitgelichte Diensten';
	}
}
