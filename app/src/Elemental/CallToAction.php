<?php

namespace Elements;

use DNADesign\Elemental\Models\BaseElement;
use SilverStripe\Assets\Image;
use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\CMS\Model\SiteTree;
use SilverStripe\Forms\CheckboxField;
use SilverStripe\Forms\DropdownField;
use SilverStripe\Forms\HTMLEditor\HTMLEditorField;
use SilverStripe\Forms\TextField;
use SilverStripe\Forms\TreeDropdownField;

class CallToAction extends BaseElement
{
    private static $table_name = 'CallToAction';
    private static $singular_name = 'Call To Action';
    private static $plural_name = 'Call To Action';
    private static $description = 'Blok met call to action naar een specifieke pagina';
    private static $icon = 'font-icon-block-award';
    private static $inline_editable = false;
    private static $controller_template = 'ElementHolder';


    private static $db = [
        'ButtonText' => 'Varchar',
        'CTAType' => 'Varchar'
    ];

    private static $has_one = [
        'Image' => Image::class,
        'LinkedPage' => SiteTree::class
    ];

    private static $owns = [
        'Image'
    ];

    public function getCMSFields()
    {
        $fields = parent::getCMSFields();

        $fields->addFieldsToTab('Root.Main', [
            UploadField::create('Image', 'Afbeelding')->setFolderName('CTA'),
            DropdownField::create('CTAType', 'Type', [
                'simple' => 'Eenvoudig',
                'bar' => 'Gekleurde balk (verloop)'
            ])
        ]);

        $fields->addFieldsToTab('Root.Button', [
            TextField::create('ButtonText', 'Button tekst'),
            TreeDropdownField::create('LinkedPageID', 'Gelinkte Pagina', SiteTree::class)
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
