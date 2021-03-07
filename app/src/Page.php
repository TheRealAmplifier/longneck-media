<?php

namespace {

	use Shortcode\ShortcodeButton;
	use Shortcode\ShortcodeQuote;
	use Silverstripe\Assets\Image;
	use SilverStripe\AssetAdmin\Forms\UploadField;
	use SilverStripe\CMS\Model\SiteTree;
	use SilverStripe\Forms\DropdownField;
	use SilverStripe\Forms\GridField\GridField;
	use SilverStripe\Forms\GridField\GridFieldConfig_RecordEditor;
	use SilverStripe\Forms\HTMLEditor\HTMLEditorField;

	class Page extends SiteTree {
		private static $db = [
			'BannerFunction'		=> 'Varchar',
			'BannerText'				=> 'HTMLText'		
		];

		private static $has_one = [
			'BannerImage'				=> image::class
		];

		private static $has_many = [
			'ShortcodeButtons'	=> ShortcodeButton::class,
			'ShortcodeQuotes'		=> ShortcodeQuote::class
		];

		private static $owns = [
			'BannerImage'
		];

		public function getCMSFields() {
			$fields = parent::getCMSFields();

			$fields->addFieldsToTab('Root.Banner', [
				DropdownField::create('BannerFunction', 'Banner Type', [
					'text'	=> 'Titel (standaard)',
					'image'	=> 'Afbeelding',
				]),
				HTMLEditorField::create('BannerText', 'Banner tekst')->setRows(3)
			]);

			if ($this->BannerFunction == 'image') {
				$fields->addFieldsToTab('Root.Banner', [
					DropdownField::create('BannerType', 'Banner Type', [
						'left'	=> 'Links',
						'right'	=> 'Rechts'
					]),
					UploadField::create('BannerImage', 'Banner Image')->setFolderName('Banners'),
				]);
			}

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
