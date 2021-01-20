<?php

namespace Pages;

use DataObject\TeamMember;
use Page;
use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\Assets\Image;
use SilverStripe\Forms\HTMLEditor\HTMLEditorField;
use SilverStripe\Forms\TextField;

class AboutPage extends Page {
	private static $table_name = 'AboutPage';
	private static $singular_name = 'Over Ons pagina';
	private static $icon_class = 'font-icon-p-profile';
}
