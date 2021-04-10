<?php

namespace DataObject;

use SilverStripe\ORM\DataObject;

use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\Assets\File;

use SilverStripe\Forms\TextField;

class SocialAccount extends DataObject {
  private static $table_name = 'SocialAccount';
  private static $singular_name = 'Social Media account';
  
  private static $db = [
    'SortID'              => 'Int',
    'Title'               => 'Varchar',
    'AccountLink'          => 'Varchar(250)',
  ];

  private static $has_one = [
    'CustomSiteConfig'    => 'SilverStripe\SiteConfig\SiteConfig',
    'Icon'                => File::class
  ];

  private static $default_sort = [
    'SortID'
  ];

  private static $owns = [
    'Icon'
  ];

  private static $summary_fields = [
    'Title',
    'AccountLink'
  ];

  public function getCMSFields() {
    $fields = parent::getCMSFields();

    $fields->removeByName(['SortID', 'CustomSiteConfigID']);

    $fields->addFieldsToTab('Root.Main', [
      TextField::create('Title', 'Account naam'),
      TextField::create('AccountLink', 'Account link'),
      UploadField::create('Icon', 'Icoon')->setFolderName('Social')
    ]);

    return $fields;
  }
}
