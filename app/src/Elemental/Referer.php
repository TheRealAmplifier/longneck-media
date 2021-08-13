<?php

namespace Elements;

use DNADesign\Elemental\Models\BaseElement;
use SilverStripe\Forms\CheckboxField;
use SilverStripe\Forms\ListboxField;

class Referer extends BaseElement
{
    private static $table_name = 'Referer';
    private static $singular_name = 'Referer';
    private static $plural_name = 'Referer';
    private static $description = 'Blok met doorverwijzing naar children of een custom set van pages';
    private static $icon = 'font-icon-block-link';
    private static $inline_editable = false;
    private static $controller_template = 'ElementHolder';

    private static $db = [
        'RemovePadding' => 'Boolean',
        'CustomSubPages' => 'Boolean'
    ];

    private static $has_many = [
        'SubPages' => SiteTree::class
    ];

    public function getCMSFields()
    {
        $fields = parent::getCMSFields();

        $fields->removeByName(['LinkedPages', 'MethodSteps']);

        $fields->addFieldsToTab('Root.Settings', [
            CheckboxField::create('RemovePadding', 'Padding basiselement verwijderen')->setDescription('Let op: hiermee verwijder je de padding van het root element.')
        ]);

        $fields->addFieldsToTab('Root.SubPages', [
            CheckboxField::create('CustomSubPages', 'Specifieke selectie pagina\'s tonen')->setDescription('Let op: standaard worden de childpages opgehaald, met deze optie worden onderstaande pagina\'s getoond op het template.'),
            ListboxField::create('SubPages', 'SubPages', SiteTree::class)
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
