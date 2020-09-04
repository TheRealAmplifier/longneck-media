<?php 
namespace {
	use SilverStripe\ORM\DataExtension;

	use SilverStripe\Forms\FieldList;
	use SilverStripe\Forms\TextField;

	class CustomSiteConfig extends DataExtension {
		private static $db = [
			'FooterTitle1'	=> 'Varchar',
			'FooterTitle2'	=> 'Varchar'
		];

		public function updateCMSFields(FieldList $fields) {
			$fields->addFieldsToTab('Root.Footer', [
				TextField::create('FooterTitle1', 'Menu titel links'),
				TextField::create('FooterTitle2', 'Menu titel rechts')
			]);
		}
	}
}