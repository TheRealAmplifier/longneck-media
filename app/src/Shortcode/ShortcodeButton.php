<?php

namespace Shortcode;

use Page;
use SilverStripe\CMS\Model\SiteTree;
use SilverStripe\Core\Environment;
use SilverStripe\ORM\DataObject;
use SilverStripe\Forms\TextField;
use SilverStripe\Forms\TreeDropdownField;

class ShortcodeButton extends DataObject {
	private static $table_name = 'ShortcodeButton';
	private static $singular_name = 'Button';
	private static $default_sort = 'Title ASC';

	private static $db = [
		'Title'             	=> 'Varchar',
		'ButtonText'					=> 'Varchar'
	];

	private static $has_one = [
		'ButtonTarget'				=> SiteTree::class
	];

	private static $belongs_many_many = [
		'Page'								=> Page::class
	];

	private static $summary_fields = [
		'Title'								=> 'Naam button',
		'ButtonTargetLink'		=> 'Doeladres',
	];

	public function getCMSfields() {
		$fields = parent::getCMSFields();

		$fields->removeByName(['PageID']);

		$fields->addFieldsToTab('Root.Main', [
			TextField::create('Title', 'Title'),
			TextField::create('ButtonText', 'Button tekst'),
			TreeDropdownField::create('ButtonTargetID', 'Button doeladres', SiteTree::class),
		]);

		return $fields;
	}


	public function getButtonTargetLink() {
		$currentLink = '';
		$baseLink = Environment::getEnv('SS_BASE_URL');
		$currentLink = $this->owner->ButtonTarget->Link();

		// last part url (directory) from baseLink
		$directoryLink = basename(parse_url($baseLink, PHP_URL_PATH));

		// formatted/stripped slashes from current link
		$cleanLink = substr(strrchr(rtrim($currentLink, '/'), '/'), 1);

		if ($cleanLink != $directoryLink) {
			$currentLink = $currentLink;
		} else {
			$currentLink = 'Er is geen pagina gekoppeld';
		}

		return $currentLink;
	}

	public static function parse_shortcode($attributes, $content, $parser, $shortcode) {
		if (isset($attributes['id']) && ShortcodeButton::get()->byID($attributes['id'])) {
			$data = array();

			if (isset($attributes['Style'])) {
				$data['Style'] = $attributes['Style'];
			}
		}
	}
}
