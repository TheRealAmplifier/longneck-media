<?php

namespace Pages;

use Page;
use SilverStripe\Forms\CheckboxField;
use SilverStripe\Forms\TextField;

class HomePage extends Page {
	private static $table_name = 'HomePage';
	private static $singular_name = 'Home pagina';
	private static $icon_class = 'font-icon-p-home';

	private static $db = [
		'BannerTitle'						=> 'Varchar',
		'RemoveElementSpacing'	=> 'Boolean'
	];

	public function getCMSFields() {
		$fields = parent::getCMSFields();
		
		$fields->addFieldsToTab('Root.Banner', [
			TextField::create('BannerTitle', 'Banner titel')
		], 'BannerText');

		$fields->addFieldsToTab('Root.Elements', [
			CheckboxField::create('RemoveElementSpacing', 'Ruimte onderaan elements verwijderen')->setDescription('Deze optie is heel handig wanneer er slechts één contentblok op de pagina staat.')
		]);

		return $fields;
	}

	/**
	 * Get all projects
	 *
	 * @return void
	 */
	public function getProjects() {
		return ProjectPage::get();
	}
}
