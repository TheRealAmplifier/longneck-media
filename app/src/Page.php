<?php

namespace {

	use Shortcode\ShortcodeButton;
  use Shortcode\ShortcodeQuote;
  use SilverStripe\CMS\Model\SiteTree;
	use SilverStripe\Forms\GridField\GridField;
	use SilverStripe\Forms\GridField\GridFieldConfig_RecordEditor;

	class Page extends SiteTree {
		private static $has_many = [
			'ShortcodeButtons'	=> ShortcodeButton::class,
			'ShortcodeQuotes'		=> ShortcodeQuote::class
		];

		public function getCMSFields() {
			$fields = parent::getCMSFields();

			$config = GridFieldConfig_RecordEditor::create();
			$fields->addFieldToTab('Root.Buttons', GridField::create(
				'ShortcodeButtons',
				'Shortcode Buttons',
				$this->ShortcodeButtons(),
				$config
			));

			$config = GridFieldConfig_RecordEditor::create();
			$fields->addFieldToTab('Root.Quotes', GridField::create(
				'ShortcodeQuotes',
				'Shortcode Quotes',
				$this->ShortcodeQuotes(),
				$config
			));

			return $fields;
		}

		public static function parse_shortcode_button($attributes, $content, $parser, $shortcode) {
			$buttonID = strip_tags($attributes['id']);
			$button = ShortcodeButton::get()->filter('ID', $buttonID)->first();

			if (!empty($button->ID)) {
				return $button->customise([
					'ShortcodeButton' => $button
				])->renderWith('Shortcode/Button');
			}
		}

		public static function parse_shortcode_quote($attributes, $content, $parser, $shortcode) {
			$quoteID = strip_tags($attributes['id']);
			$quote = ShortcodeQuote::get()->filter('ID', $quoteID)->first();

			if (!empty($quote->ID)) {
				return $quote->customise([
					'ShortcodeQuote' => $quote
				])->renderWith('Shortcode/Quote');
			}
		}
	}
}
