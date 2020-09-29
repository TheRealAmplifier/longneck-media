<?php

namespace Elements;

use Pages\ProjectPage;

use DNADesign\Elemental\Models\BaseElement;

use SilverStripe\Forms\HTMLEditor\HTMLEditorField;

class Projects extends BaseElement {
	private static $table_name = 'Projects';
	private static $singular_name = 'Projecten';
	private static $plural_name = 'Projecte ';
	private static $description = 'Blok met projecten in een slider';
	private static $icon = 'font-icon-block-globe';
	private static $inline_editable = false;

	private static $db = [
		'TextMain'			=> 'HTMLText',
	];

	public function getCMSFields() {
		$fields = parent::getCMSFields();

		$fields->addFieldsToTab('Root.Main', [
			HTMLEditorField::create('TextMain', 'Primaire text')->setRows(7),
		]);

		return $fields;
	}

	public function getFeatureProjects() {
		return ProjectPage::get()->Limit(2);
	}

	public function getType() {
		return 'Projecten';
	}
}
