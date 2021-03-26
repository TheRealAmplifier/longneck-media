<?php 

namespace Extensions;

use SilverStripe\Forms\CheckboxField;
use SilverStripe\Forms\FieldList;
use SilverStripe\ORM\DataExtension;

class CustomMenuItem extends DataExtension {
	private static $db = [
		'ButtonStyle'			=> 'Boolean',
		'ShowChildren'		=> 'Boolean'		
	];

	private static $summary_fields = [
		'MenuTitle'				=> 'Title',
		'Page.Title'			=> 'Page Title',
		'Link'						=> 'Link',
		'IsNewWindow'			=> 'Opens in new window?',
		'ButtonStyle'			=> 'Weergave als button'
	];

	public function updateCMSFields(FieldList $fields) {
		$fields->addFieldsToTab('Root.Main', [
			CheckboxField::create('ShowChildren', 'Subpagina\'s tonen'),
			CheckboxField::create('ButtonStyle', 'Als button weergeven')
		]);

		return $fields;
	}

	public function ShowChildren() {
		return $this->owner->ShowChildren ? 'Yes' : 'No';
	}
	public function ButtonStyle() {
		return $this->owner->ButtonStyle ? 'Yes' : 'No';
	}
}