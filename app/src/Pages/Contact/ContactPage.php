<?php

namespace Pages;

use Page;

use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\Assets\Image;

use SilverStripe\Forms\HTMLEditor\HTMLEditorField;
use SilverStripe\Forms\TextField;

class ContactPage extends Page {
	private static $table_name = 'ContactPage';
	private static $singular_name = 'Contact pagina';

	private static $db = [
		'BannerText'		=> 'HTMLText',
		'FormTitle'			=> 'Varchar',
		'FormIntro'			=> 'HTMLText'
	];

	public function getCMSFields() {
		$fields = parent::getCMSFields();

		$fields->addFieldsToTab('Root.Banner', [
			HTMLEditorField::create('BannerText', 'Banner tekst')
		]);

		$fields->addFieldsToTab('Root.Form', [
			TextField::create('FormTitle', 'Form titel'),
			HTMLEditorField::create('FormIntro', 'Form introductie tekst')->setRows(4)
		]);


		return $fields;
	}
}
