<?php

namespace {

	use Elements\Links;
	use Shortcode\ShortcodeButton;
	use SilverStripe\CMS\Model\SiteTree;
	use SilverStripe\Forms\GridField\GridField;
	use SilverStripe\Forms\GridField\GridFieldConfig_RecordEditor;

	class Page extends SiteTree {
		private static $has_one = [
			'Links'							=> Links::class
		];

		private static $has_many = [
			'ShortcodeButtons'	=> ShortcodeButton::class
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
	}
}
