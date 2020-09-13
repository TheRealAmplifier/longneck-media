<?php 
namespace {
	use DNADesign\Elemental\Models\BaseElement;

	use SilverStripe\Assets\Image;
	use SilverStripe\AssetAdmin\Forms\UploadField;

	use SilverStripe\CMS\Model\SiteTree;

	use SilverStripe\Forms\HTMLEditor\HTMLEditorField;
	use SilverStripe\Forms\TextField;
	use SilverStripe\Forms\TreeDropdownField;

	class Projects extends BaseElement {
		private static $singular_name = 'Projecten';
		private static $plural_name = 'Projecte ';
		private static $description = 'Blok met projecten in een slider';
		private static $inline_editable = false;

		private static $db = [
			'TextMain'			=> 'HTMLText',
		];

		public function getCMSFields() {
			$fields = parent::getCMSFields();

			$fields->addFieldsToTab('Root.Main', [
				HTMLEditorField::create('TextMain', 'Primaire text')->setRows(7),
			]);

			return $fields;
		}

		public function getFeatureProjects() {
			return ProjectPage::get()->Limit(2);
		}

		public function getType() {
			return 'Projecten';
		}
	}
}