<?php

namespace Pages;

use Page;
use Elements\CallToAction;
use Elements\FeaturedServices;
use Pages\ServiceHolderPage;
use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\Assets\File;
use SilverStripe\CMS\Model\SiteTree;
use SilverStripe\Forms\CheckboxField;
use SilverStripe\Forms\HTMLEditor\HTMLEditorField;

class ServicePage extends Page
{
    private static $table_name = 'ServicePage';
    private static $singular_name = 'Dienst';
    private static $icon_class = 'font-icon-check-mark-circle';

    private static $db = [
        'Summary' => 'HTMLText',
        'ShowContact' => 'Boolean',
        'ContactTitle' => 'Varchar',
        'ContactText' => 'Text',
        'ContactLinkText' => 'Varchar',
        'IsLandingPage' => 'Boolean',
        'RemoveElementSpacing' => 'Boolean'
    ];

    private static $has_one = [
        'ContactLinkTarget' => SiteTree::class,
    ];

    private static $allowed_parent = [
        ServiceHolderPage::class
    ];

    public function getCMSFields()
    {
        $fields = parent::getCMSFields();

        $fields->addFieldsToTab('Root.Main', [
            HTMLEditorField::create('Summary', 'Samenvatting')->setDescription('Deze tekst wordt gebruikt in de overzichten')->setRows(5),
            CheckboxField::create('IsLandingPage', 'Dit is een landingspagina')
        ], 'Content');

        $fields->addFieldsToTab('Root.Elements', [
            CheckboxField::create('RemoveElementSpacing', 'Ruimte onderaan elements verwijderen')->setDescription('Deze optie is heel handig wanneer er slechts één contentblok op de pagina staat.')
        ]);

        return $fields;
    }
}
