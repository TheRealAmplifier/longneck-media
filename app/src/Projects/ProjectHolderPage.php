<?php 
	
	namespace {
		class ProjectHolderPage extends Page {
			private static $singular_name = 'Projecten Overzicht';

			private static $allowed_children = [
				'ProjectPage'
			];
	
			public function getCMSFields() {
				$fields = parent::getCMSFields();
	
				$fields->addFieldsToTab('Root.Main', [
				], 'Content');
	
				return $fields;
			}
		}
	}