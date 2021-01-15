<?php

namespace {

	use DataObject\SocialAccount;
	use SilverStripe\ORM\DataExtension;

	use SilverStripe\Forms\FieldList;
	use SilverStripe\Forms\TextField;

	use SilverStripe\Forms\GridField\GridField;
	use SilverStripe\Forms\GridField\GridFieldConfig_RelationEditor;
	use SilverStripe\Forms\GridField\GridFieldDetailForm;
	use UndefinedOffset\SortableGridField\Forms\GridFieldSortableRows;

	class CustomSiteConfig extends DataExtension {
		private static $db = [
			'FooterTitle1'	=> 'Varchar',
			'FooterTitle2'	=> 'Varchar',
			'FooterTitle3'	=> 'Varchar'
		];

		private static $has_many = [
			'SocialAccounts' 			=> SocialAccount::class,
		];

		public function updateCMSFields(FieldList $fields) {
			$gridfieldConfig = GridFieldConfig_RelationEditor::create();
			$gridfieldConfig->addComponent(new GridFieldSortableRows('SortID'));
			$fields->addFieldsToTab('Root.SocialKanalen', [
				GridField::create(
					'SocialAccounts',
					'Social Media kanalen',
					$this->owner->SocialAccounts(),
					$gridfieldConfig
				)
			]);

			$fields->addFieldsToTab('Root.Footer', [
				TextField::create('FooterTitle1', 'Menu titel links'),
				TextField::create('FooterTitle2', 'Menu titel midden'),
				TextField::create('FooterTitle3', 'Menu titel rechts')
			]);
		}
	}
}
