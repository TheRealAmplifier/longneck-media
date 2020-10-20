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

	private static $db = [
		'BannerText'		=> 'HTMLText',
		'AboutTitle'		=> 'Varchar',
		'AboutText'			=> 'HTMLText',
		'TeamTitle'			=> 'Varchar',
		'TeamText'			=> 'HTMLText',
	];

	private static $has_one = [
		'AboutImage' 		=> Image::class 
	];

	private static $owns = [
		'AboutImage'
	];

	public function getCMSFields() {
		$fields = parent::getCMSFields();

		$fields->addFieldsToTab('Root.Banner', [
			HTMLEditorField::create('BannerText', 'Banner tekst')
		]);

		$fields->addFieldsToTab('Root.Over Ons', [
			TextField::create('AboutTitle', 'Over ons titel'),
			HTMLEditorField::create('AboutText', 'Over ons tekst'),
			UploadField::create('AboutImage', 'Over ons afbeelding')->setFolderName('About Image')
		]);

		$fields->addFieldsToTab('Root.Team', [
			TextField::create('TeamTitle', 'Team titel'),
			HTMLEditorField::create('TeamText', 'Team tekst'),
		]);

		return $fields;
	}

	public function getAllMembers() {
		return TeamMember::get()->sort('rand()');
	}
}
