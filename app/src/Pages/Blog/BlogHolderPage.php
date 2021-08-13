<?php

namespace Pages;

use Page;
use DataObject\BlogTag;
use SilverStripe\Forms\GridField\GridField;
use SilverStripe\Forms\GridField\GridFieldConfig_RecordEditor;
use UndefinedOffset\SortableGridField\Forms\GridFieldSortableRows;

class BlogHolderPage extends Page
{
    private static $table_name = 'BlogHolderPage';
    private static $singular_name = 'Blog Overzicht';
    private static $icon_class = 'font-icon-news';

    private static $has_many = [
        'BlogTags' => BlogTag::class
    ];

    private static $allowed_children = [
        BlogPage::class
    ];

    public function getCMSFields()
    {
        $fields = parent::getCMSFields();

        $config =  GridFieldConfig_RecordEditor::create();
        $config->addComponent(new GridFieldSortableRows('SortID'));
        $fields->addFieldToTab('Root.Tags', GridField::create(
            'BlogTags',
            'Tags',
            $this->BlogTags(),
            $config
        ));

        return $fields;
    }
}
