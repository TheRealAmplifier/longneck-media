<?php

namespace Elements;

use DataObject\Customer;
use DNADesign\Elemental\Models\BaseElement;
use SilverStripe\Forms\CheckboxField;
use SilverStripe\Forms\ListboxField;

class SelectedCustomers extends BaseElement {
	private static $table_name = 'SelectedCustomers';
	private static $singular_name = 'Geselecteerde klanten';
	private static $description = 'Blok met geselecteerde klanten';
	private static $icon = 'font-icon-block-reports';
	private static $inline_editable = false;
	private static $controller_template = 'ElementHolder';

	private static $db = [
		'RemovePadding' => 'Boolean'
	];

	private static $many_many = [
		'Customers' => Customer::class
	];

	public function getCMSFields() {
		$fields = parent::getCMSFields();

		$fields->removeByName(['Customers']);

		$fields->addFieldsToTab('Root.Main', [
			ListboxField::create('Customers', 'Geselecteerde partners', Customer::get())
		]);

		$fields->addFieldsToTab('Root.Settings', [
			CheckboxField::create('RemovePadding', 'Padding basiselement verwijderen')->setDescription('Let op: hiermee verwijder je de padding van het root element.')
		]);

		return $fields;
	}

    /**
     * get name of the element
     *
     * @return void
     */
    public function getType()
    {
        return self::$singular_name;
    }
}
