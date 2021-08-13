<?php

namespace Extensions;

use SilverStripe\Forms\CheckboxField;
use SilverStripe\Forms\FieldList;
use SilverStripe\ORM\DataExtension;

class CustomMenuItem extends DataExtension
{
    private static $db = [
        'ButtonStyle' => 'Boolean'
    ];

    private static $summary_fields = [
        'MenuTitle' => 'Title',
        'Page.Title' => 'Page Title',
        'Link' => 'Link',
        'IsNewWindow' => 'Opens in new window?',
        'ButtonStyle' => 'Weergave als button'
    ];

    public function updateCMSFields(FieldList $fields)
    {
        $fields->addFieldsToTab('Root.Instellingen', [
            CheckboxField::create('ButtonStyle', 'Als button weergeven')
        ]);

        return $fields;
    }

    /**
     * textual indicator if the link looks like a button
     *
     * @return void
     */
    public function ButtonStyle()
    {
        return $this->owner->ButtonStyle ? 'Yes' : 'No';
    }
}
