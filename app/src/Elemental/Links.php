<?php 
namespace {
	use DNADesign\Elemental\Models\BaseElement;
		
	use SilverStripe\Forms\HTMLEditor\HTMLEditorField;
	use SilverStripe\Forms\ListboxField;

	class Links extends BaseElement {
		private static $singular_name = 'Links';
		private static $plural_name = 'Links';
		private static $description = 'Blok met links naar verschillende pagina\'s';
		private static $inline_editable = false;

		private static $db = [
			'TextIntro'			=> 'HTMLText',
			'TextMain'			=> 'HTMLText'	
		];

		private static $many_many = [
			'LinkedPages'		=> Page::class
		];

		public function getCMSFields() {
			$fields = parent::getCMSFields();

			$fields->removeByName('LinkedPages');

			$fields->addFieldsToTab('Root.Main', [
				HTMLEditorField::create('TextIntro', 'Introducerende tekst')->setRows(5),
				HTMLEditorField::create('TextMain', 'Primaire text')->setRows(7),
				ListboxField::create('LinkedPages', 'Gelinkte Pagina\'s', Page::get())
			]);

			return $fields;
		}

		public function getType() {
			return 'Links';
		}
	}
}