<?php

namespace DataObject;


use SilverStripe\ORM\DataObject;

use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\Assets\Image;

use SilverStripe\Forms\TextField;

class TeamMember extends DataObject {
	private static $table_name = 'TeamMember';
	private static $singular_name = 'Teamlid';

	private static $db = [
		'SortID'            	=> 'Int',
		'Title'             	=> 'Varchar',
		'FirstName'						=> 'Varchar',
		'LastName'						=> 'Varchar',
		'Function'						=> 'Varchar'
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
		'getPreviewImage'    	=> 'Afbeelding',
		'Title' 							=> 'Naam',
		'Function'						=> 'Function'
	];

	public function getCMSFields() {
		$fields = parent::getCMSFields();

		$fields->removeByName(['SortID', 'Title']);

		$fields->addFieldsToTab('Root.Main', [
			TextField::create('FirstName', 'Voornaam'),
			TextField::create('LastName', 'Achternaam'),
			TextField::create('Function', 'Functie'),
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

	public function getPreviewImage() {
		return $this->Image->scaleMaxHeight(100);
	}
}
