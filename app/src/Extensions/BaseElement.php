<?php

namespace Extensions;

use SilverStripe\Forms\CheckboxField;
use SilverStripe\Forms\FieldList;
use SilverStripe\ORM\DataExtension;

class CustomBaseElement extends DataExtension
{
    private static $db = [
        'RemovePadding' => 'Boolean'
    ];

    public function updateCMSFields(FieldList $fields) {
        $fields->addFieldsToTab('Root.Settings', [
            CheckboxField::create('RemovePadding', 'Padding basiselement verwijderen')->setDescription('Let op: hiermee verwijder je de padding van het root element.')
        ]);

        return $fields;
    }
}
