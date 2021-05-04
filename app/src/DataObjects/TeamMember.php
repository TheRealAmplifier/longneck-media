<?php

namespace DataObject;

use SilverStripe\ORM\DataObject;

use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\Assets\Image;
use SilverStripe\Forms\EmailField;
use SilverStripe\Forms\TextField;

class TeamMember extends DataObject {
	private static $table_name = 'TeamMember';
	private static $singular_name = 'Teamlid';
	private static $plural_name = 'Teamleden';

	private static $db = [
		'SortID'            	=> 'Int',
		'Title'             	=> 'Varchar',
		'FirstName'						=> 'Varchar',
		'LastName'						=> 'Varchar',
		'Function'						=> 'Varchar',
		'Email'								=> 'Varchar'
	];

	private static $has_one = [
		'Image'        				=> Image::class
	];

	private static $default_sort = [
		'SortID'
	];

	private static $owns = [
		'Image'
	];

	private static $summary_fields = [
		'Thumbnail'    				=> 'Afbeelding',
		'Title' 							=> 'Naam',
		'Email' 							=> 'E-mailadres',
		'Function'						=> 'Function'
	];

	public function getCMSFields() {
		$fields = parent::getCMSFields();

		$fields->removeByName(['SortID', 'Title']);

		$fields->addFieldsToTab('Root.Main', [
			TextField::create('FirstName', 'Voornaam'),
			TextField::create('LastName', 'Achternaam'),
			TextField::create('Function', 'Functie'),
			EmailField::create('Email', 'E-mailadres'),
			UploadField::create('Image', 'Foto')->setFolderName('Profile Images'),
		]);

		return $fields;
	}

	public function onBeforeWrite() {
		parent::onBeforeWrite();

		$titleName = '';
		$firstName = $this->FirstName;
		$lastname = $this->LastName;

		$this->Title = "{$this->FirstName} {$this->LastName}";

		if($firstName && $lastname) {
			$titleName = "{$this->FirstName} {$this->LastName}";
		} else {
			$titleName = "Geen naam bekend...";
		}

		$this->Title = $titleName;
	}

	public function getThumbnail() {
		if ($this->Image()->exists()) { 
			return $this->Image()->CMSThumbnail();
		} else { 
			return 'Geen foto toegevoegd'; 
		}
	}
}
