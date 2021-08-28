<?php

namespace Elements;

use DNADesign\Elemental\Models\BaseElement;
use SilverStripe\Assets\Image;
use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\Forms\CheckboxField;
use SilverStripe\Forms\HTMLEditor\HTMLEditorField;
use SilverStripe\Forms\TextField;

class ProjectIntro extends BaseElement
{
    private static $table_name = 'ProjectIntro';
    private static $singular_name = 'Project Intro';
    private static $description = 'Blok met project introductie';
    private static $icon = 'font-icon-block-info';
    private static $inline_editable = false;
    private static $controller_template = 'ElementHolder';

    private static $db = [
        'TextMain' => 'HTMLText',
        'Year' => 'Varchar'
    ];

    private static $has_one = [
        'IntroImage' => Image::class
    ];

    private static $owns = [
        'IntroImage'
    ];

    private static $summary_fields = [
        'TextMain' => 'Summary'
    ];

    public function getCMSFields()
    {
        $fields = parent::getCMSFields();

        $fields->addFieldsToTab('Root.Main', [
            UploadField::create('IntroImage', 'Afbeelding Introduction')->setFolderName('Project Intro'),
            HTMLEditorField::create('TextMain', 'Content')->setRows(6),
            TextField::create('Year', 'Jaartal')
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
