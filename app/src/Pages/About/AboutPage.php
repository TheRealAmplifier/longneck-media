<?php

namespace Pages;

use Page;
use SilverStripe\Forms\CheckboxField;
use SilverStripe\Forms\HTMLEditor\HTMLEditorField;

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
        'RemoveElementSpacing' => 'Boolean',
        'Summary' => 'HTMLText'
    ];

    public function getCMSFields()
    {
        $fields = parent::getCMSFields();

        $fields->addFieldsToTab('Root.Main', [
            HTMLEditorField::create('Summary', 'Korte samenvatting')->setRows(3)->setDescription('Deze samenvatting moet ca 3 regels lang zijn en is zichtbaar in het referer blok.')
        ], 'ElementalArea');

        $fields->addFieldsToTab('Root.Elements', [
            CheckboxField::create('RemoveElementSpacing', 'Ruimte onderaan elements verwijderen')->setDescription('Deze optie is heel handig wanneer er slechts één contentblok op de pagina staat.')
        ]);

        return $fields;
    }
}
