<?php

namespace Elements;

use DNADesign\Elemental\Models\BaseElement;
use SilverStripe\CMS\Model\SiteTree;
use SilverStripe\Forms\CheckboxField;
use SilverStripe\Forms\HTMLEditor\HTMLEditorField;
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
        'TextMain' => 'HTMLText',
        'CustomSubPages' => 'Boolean'
    ];

    private static $many_many = [
        'SubPages' => SiteTree::class
    ];

    public function getCMSFields()
    {
        $fields = parent::getCMSFields();

        $fields->removeByName(['LinkedPages', 'MethodSteps']);

        $fields->addFieldsToTab('Root.Main', [
            HTMLEditorField::create('TextMain', 'Content')->setRows(6),
            CheckboxField::create('CustomSubPages', 'Specifieke selectie pagina\'s tonen')->setDescription('Let op: standaard worden de childpages opgehaald, met deze optie worden onderstaande pagina\'s getoond op het template.'),
            ListboxField::create('SubPages', 'SubPages', SiteTree::get()->map('ID', 'Title')->toArray())
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

    /**
     * get the correct pages to link inside the block.
     *
     * @return void
     */
    public function getPages() {
        return $this->CustomSubPages == true ? $this->SubPages() : $this->getPage()->Children();
    }
}
