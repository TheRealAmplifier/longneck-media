<?php

namespace Elements;

use DataObject\Customer;
use DNADesign\Elemental\Models\BaseElement;

use SilverStripe\Forms\ListboxField;

class SelectedCustomers extends BaseElement {
	private static $table_name = 'SelectedCustomers';
	private static $singular_name = 'Geselecteerde klanten';
	private static $description = 'Blok met geselecteerde klanten';
	private static $icon = 'font-icon-block-reports';
	private static $inline_editable = false;

	private static $many_many = [
		'Customers'				=> Customer::class
	];

	public function getCMSFields() {
		$fields = parent::getCMSFields();

		$fields->addFieldsToTab('Root.Main', [
			ListboxField::create('Customers', 'Geselecteerde partners', Customer::get())
		]);

		return $fields;
	}

	public function getType() {
		return 'Geselecteerde klanten';
	}
}
