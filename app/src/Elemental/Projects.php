<?php

namespace Elements;

use Pages\ProjectPage;

use DNADesign\Elemental\Models\BaseElement;
use SilverStripe\Forms\CheckboxField;
use SilverStripe\Forms\HTMLEditor\HTMLEditorField;
use SilverStripe\Forms\ListboxField;

class Projects extends BaseElement {
	private static $table_name = 'Projects';
	private static $singular_name = 'Projecten';
	private static $plural_name = 'Projecte ';
	private static $description = 'Blok met projecten in een slider';
	private static $icon = 'font-icon-block-globe';
	private static $inline_editable = false;

	private static $db = [
		'TextMain'								=> 'HTMLText',
		'ShowSelectedProjects'		=> 'Boolean'
	];

	private static $many_many = [
		'ProjectPages'						=> ProjectPage::class
	];

	public function getCMSFields() {
		$fields = parent::getCMSFields();

		$fields->addFieldsToTab('Root.Main', [
			HTMLEditorField::create('TextMain', 'Primaire text')->setRows(7),
			CheckboxField::create('ShowSelectedProjects', 'Geselecteerde projecten tonen')->setDescription('Let op: wijziging gaat pas van kracht na het opslaan van de pagina.')
		]);

		if( $this->ShowSelectedProjects == 1 ) {
			$fields->addFieldToTab('Root.Main', ListboxField::create('ProjectPages', 'projecten', ProjectPage::get()));
		}

		return $fields;
	}

	public function getType() {
		return 'Projecten';
	}

	public function getFeaturedProjects() {
		return ProjectPage::get()->Limit(2);
	}
}
