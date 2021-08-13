<?php

namespace Elements;

use DNADesign\Elemental\Models\BaseElement;
use SilverStripe\Forms\CheckboxField;
use SilverStripe\Forms\HTMLEditor\HTMLEditorField;
use SilverStripe\Forms\DropdownField;

class Content extends BaseElement
{
    private static $table_name = 'Content';
    private static $singular_name = 'Content';
    private static $plural_name = 'Content';
    private static $description = 'Blok met content';
    private static $icon = 'font-icon-block-content';
    private static $inline_editable = false;
    private static $controller_template = 'ElementHolder';

    private static $db = [
        'TextIntro' => 'HTMLText',
        'TextMain' => 'HTMLText',
        'HasBackgroundColor' => 'Boolean',
        'SectionWidth' => 'Varchar',
        'RemovePadding' => 'Boolean'

    ];

    public function getCMSFields()
    {
        $fields = parent::getCMSFields();

        $fields->removeByName('LinkedPages');

        $fields->addFieldsToTab('Root.Main', [
            HTMLEditorField::create('TextIntro', 'Introducerende tekst')->setRows(5),
            HTMLEditorField::create('TextMain', 'Primaire text')->setRows(7)
        ]);

        $fields->addFieldsToTab('Root.Settings', [
            DropdownField::create('SectionWidth', 'Section Width', [
                'small' => 'Smal',
                'wide' => 'Breed'
            ]),
            CheckboxField::create('HasBackgroundColor', 'Achtergrondkleur toepassen')->setDescription('Deze optie voegt een achtergrond kleur toe aan het blok.'),
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
