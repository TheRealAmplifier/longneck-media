<?php

namespace Elements;

use Pages\ServicePage;

use DNADesign\Elemental\Models\BaseElement;

use SilverStripe\Forms\HTMLEditor\HTMLEditorField;
use SilverStripe\Forms\ListboxField;

class FeaturedServices extends BaseElement {
	private static $table_name = 'FeaturedServices';
	private static $singular_name = 'Featured Services';
	private static $plural_name = 'Featured Services';
	private static $description = 'Blok met links naar uitgelichte diensten';
	private static $icon = 'font-icon-block-rocket';
	private static $inline_editable = false;

	private static $db = [
		'TextIntro'					=> 'HTMLText',
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

		return $fields;
	}

	public function getType() {
		return 'Uitgelichte Diensten';
	}
}
