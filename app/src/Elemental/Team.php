<?php

namespace Elements;

use DataObject\TeamMember;
use Page;

use DNADesign\Elemental\Models\BaseElement;
use SilverStripe\Forms\CheckboxField;
use SilverStripe\Forms\HTMLEditor\HTMLEditorField;
use SilverStripe\Forms\ListboxField;

class Team extends BaseElement {
	private static $table_name = 'Team';
	private static $singular_name = 'Team';
	private static $plural_name = 'Team';
	private static $description = 'Blok met teamleden';
	private static $icon = 'font-icon-block-users';
	private static $inline_editable = false;

	private static $db = [
		'TextIntro'				=> 'HTMLText',
		'TextMain'				=> 'HTMLText',
		'ShowAllMembers'	=> 'Boolean'
	];

	private static $many_many = [
		'TeamMembers'			=> TeamMember::class
	];

	public function getCMSFields() {
		$fields = parent::getCMSFields();

		$fields->removeByName('TeamMembers');

		$fields->addFieldsToTab('Root.Main', [
			HTMLEditorField::create('TextIntro', 'Introducerende tekst')->setRows(5),
			HTMLEditorField::create('TextMain', 'Primaire text')->setRows(7),	
			CheckboxField::create('ShowAllMembers', 'Alle teamleden tonen')->setDescription('Let op: wijziging gaat pas van kracht na het opslaan van de pagina.')
		]);

		if( !$this->ShowAllMembers == 1 ) {
			$fields->addFieldToTab('Root.Main', ListboxField::create('TeamMembers', 'Teamleden', TeamMember::get()));
		}

		return $fields;
	}

	public function getType() {
		return 'Team';
	}

	public function getAllMembers() {
		return TeamMember::get()->sort('rand()');
	}
}
