<?php

namespace Pages;

use Page;
use SilverStripe\Forms\CheckboxField;

class InformationPage extends Page {
	private static $table_name = 'InformationPage';
	private static $singular_name = 'Informatie pagina';
	private static $icon_class = 'font-icon-p-article';

	private static $db = [
		'RemoveElementSpacing'	=> 'Boolean'
	];

	public function getCMSFields() {
		$fields = parent::getCMSFields();
		
		$fields->addFieldsToTab('Root.Elements', [
			CheckboxField::create('RemoveElementSpacing', 'Ruimte onderaan elements verwijderen')->setDescription('Deze optie is heel handig wanneer er slechts één contentblok op de pagina staat.')
		]);

		return $fields;
	}
}
