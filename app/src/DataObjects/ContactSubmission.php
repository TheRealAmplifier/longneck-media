<?php

namespace DataObject;

use SilverStripe\ORM\DataObject;
use SilverStripe\Forms\EmailField;
use SilverStripe\Forms\TextareaField;
use SilverStripe\Forms\TextField;

class ContactSubmission extends DataObject
{
    private static $table_name = 'ContactSubmission';
    private static $singular_name = 'Contactformulier inzending';
    private static $plural_name = 'Contactformulier inzendingen';

    private static $db = [
        'SortID' => 'Int',
        'Title' => 'Varchar',
        'FirstName' => 'Varchar',
        'LastName' => 'Varchar',
        'Email' => 'Varchar',
        'Company' => 'Varchar',
        'Subject' => 'Varchar',
        'Message' => 'Text'
    ];

    private static $summary_fields = [
        'Title' => 'Naam',
        'Email' => 'E-mailadres',
        'Created' => 'Datum',
        'Subject' => 'Onderwerp',
        'Company' => 'Organisatie'
    ];

    public function getCMSfields()
    {
        $fields = parent::getCMSFields();

        $fields->removeByName(['SortID']);

        $fields->addFieldsToTab('Root.Main', [
            TextField::create('Title', 'Title'),
            TextField::create('FirstName', 'Voornaam'),
            TextField::create('LastName', 'Achternaam'),
            EmailField::create('Email', 'E-mailadres'),
            TextField::create('Company', 'Organisatie'),
            TextField::create('Subject', 'Onderwerp'),
            TextareaField::create('Message', 'Bericht')
        ]);

        return $fields;
    }
}
