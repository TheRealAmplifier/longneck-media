<?php

namespace Pages;

use Page;
use SilverStripe\CMS\Model\SiteTree;
use SilverStripe\Forms\HTMLEditor\HTMLEditorField;

class ServiceHolderPage extends Page {
	private static $table_name = 'ServiceHolderPage';
	private static $singular_name = 'Diensten overzicht';
	private static $icon_class = 'font-icon-box';
	
	private static $allowed_children = [
		ServicePage::class
	];
}
