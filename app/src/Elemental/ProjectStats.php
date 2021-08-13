<?php

namespace Elements;

use DNADesign\Elemental\Models\BaseElement;
use Pages\ServicePage;
use SilverStripe\CMS\Model\SiteTree;
use SilverStripe\Forms\CheckboxField;
use SilverStripe\Forms\ListboxField;
use SilverStripe\Forms\TextField;
use SilverStripe\Forms\TreeDropdownField;

class ProjectStats extends BaseElement
{
    private static $table_name = 'ProjectStats';
    private static $singular_name = 'Project statistieken';
    private static $description = 'Blok met project statistieken';
    private static $icon = 'font-icon-block-reports';
    private static $inline_editable = false;
    private static $controller_template = 'ElementHolder';

    private static $db = [
        'Year' => 'Varchar',
        'RemovePadding' => 'Boolean'
    ];

    private static $many_many = [
        'Services' => ServicePage::class
    ];

    public function getCMSFields()
    {
        $fields = parent::getCMSFields();

        $fields->addFieldsToTab('Root.Main', [
            TextField::create('Year', 'Jaartal'),
            ListboxField::create('Services', 'Services', ServicePage::get())
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
