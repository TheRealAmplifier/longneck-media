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

    private static $owns = [
        'Icon'
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

    /**
     * Event handler called before writing to the database.
     *
     * @uses DataExtension->onAfterWrite()
     */
    public function onAfterWrite()
    {
        parent::onAfterWrite();

        $elementalArea = $this->ElementalArea();
        $elementalAreaID = $elementalArea->ID;

        // check if page has elements
        if (!$elementalArea->Elements()->exists()) {

            // Automatically add Services on page creation
            $newServices = new FeaturedServices();
            $newServices->Title = 'Onze andere diensten';
            $newServices->ShowTitle = true;
            $newServices->ShowAllServices = true;
            $newServices->ParentID = $elementalAreaID;
            $newServices->write();

            // Automatically add Call to Action on page creation
            $newCTA = new CallToAction();
            $newCTA->Title = 'Heb je vragen?';
            $newCTA->ShowTitle = true;
            $newCTA->TextMain = 'Dit kan per chat of per e-mail. Doorgaans reageren wij op werkdagen binnen 2 uur.';
            $newCTA->CTAType = 'simple';
            $newCTA->ParentID = $elementalAreaID;
            $newCTA->write();
        }

        return false;
    }
}
