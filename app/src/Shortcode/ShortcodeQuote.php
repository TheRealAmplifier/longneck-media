<?php

namespace Shortcode;

use Page;
use SilverStripe\Forms\TextareaField;
use SilverStripe\ORM\DataObject;
use SilverStripe\Forms\TextField;

class ShortcodeQuote extends DataObject {
	private static $table_name = 'ShortcodeQuote';
	private static $singular_name = 'Quote';
	private static $default_sort = 'Title ASC';

	private static $db = [
		'Title'             	=> 'Varchar',
		'Text'								=> 'Text'
	];

	private static $has_one = [
		'Page'								=> Page::class
	];

	private static $summary_fields = [
		'Title'								=> 'Naam quote',
		'Text'								=> 'Tekst',
	];

	public function getCMSfields() {
		$fields = parent::getCMSFields();

		$fields->removeByName(['PageID']);

		$fields->addFieldsToTab('Root.Main', [
			TextField::create('Title', 'Title'),
			TextareaField::create('Text', 'Tekst')		
		]);

		return $fields;
	}

	public static function parse_shortcode($attributes, $content, $parser, $shortcode) {
		if (isset($attributes['id']) && ShortcodeQuote::get()->byID($attributes['id'])) {
			$data = array();

			if (isset($attributes['Style'])) {
				$data['Style'] = $attributes['Style'];
			}
		}
	}
}
