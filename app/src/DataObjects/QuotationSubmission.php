<?php

namespace DataObject;

use SilverStripe\ORM\DataObject;

class QuotationSubmission extends DataObject
{
    private static $table_name = 'QuotationSubmission';
    private static $singular_name = 'Offerte aanvraag';
    private static $plural_name = 'Offerte aanvragen';

    private static $db = [
        'SortID' => 'Int',
        'Title' => 'Varchar',
        'FirstName' => 'Varchar',
        'LastName' => 'Varchar',
        'Email' => 'Varchar',
        'Company' => 'Varchar',
        'Description' => 'Text',
        'ProjectType' => 'Varchar',
        'ServicesType' => 'Varchar',
        'CMSType' => 'Varchar',
        'PageAmount' => 'Varchar'
    ];

    private static $summary_fields = [
        'Title' => 'Titel',
        'Email' => 'E-mailadres',
        'Created' => 'Datum',
        'Company' => 'Organisatie',
        'ProjectType' => 'Type Project',
        'ServicesType' => 'Gewenste Services',
        'CMSType' => 'Gewenste CMS'
    ];
}
