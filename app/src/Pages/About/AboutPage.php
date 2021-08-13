<?php

namespace Pages;

use Page;
use SilverStripe\Forms\CheckboxField;

class AboutPage extends Page
{
    private static $table_name = 'AboutPage';
    private static $singular_name = 'Over Ons pagina';
    private static $icon_class = 'font-icon-p-profile';

    private static $allowed_children = [
        AboutPage::class,
        InformationPage::class
    ];

    private static $db = [
        'RemoveElementSpacing' => 'Boolean'
    ];

    public function getCMSFields()
    {
        $fields = parent::getCMSFields();

        $fields->addFieldsToTab('Root.Elements', [
            CheckboxField::create('RemoveElementSpacing', 'Ruimte onderaan elements verwijderen')->setDescription('Deze optie is heel handig wanneer er slechts één contentblok op de pagina staat.')
        ]);

        return $fields;
    }
}
