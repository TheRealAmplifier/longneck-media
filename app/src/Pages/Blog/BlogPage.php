<?php

namespace Pages;

use Page;
use DataObject\BlogTag;
use SilverStripe\Assets\Image;
use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\Forms\DateField;
use SilverStripe\Forms\HTMLEditor\HTMLEditorField;
use SilverStripe\Forms\ListboxField;

class BlogPage extends Page {
	private static $table_name = 'BlogPage';
	private static $singular_name = 'Artikel';
	private static $icon_class = 'font-icon-p-article';

	private static $db = [
		'PublicationDate'		=> 'Date',
		'Summary'						=> 'HTMLText'
	];

	private static $has_one = [
		'ThumbnailImage'		=> Image::class
	];

	private static $many_many = [
		'BlogTags'					=> BlogTag::class
	];

	private static $allowed_parent = [
		BlogHolderPage::class
	];

	private static $owns = [
		'ThumbnailImage'
	];

	public function getCMSFields() {
		$fields = parent::getCMSFields();

		$fields->addFieldsToTab('Root.Main', [
			DateField::create('PublicationDate', 'Publicatiedatum'),
			HTMLEditorField::create('Summary', 'Samenvatting')->setDescription('Deze tekst wordt gebruikt in de overzichten')->setRows(5),
			UploadField::create('ThumbnailImage', 'Afbeelding op overzichten')->setFolderName('Blog Thumbnails'),
			ListboxField::create('BlogTags', 'Tag', BlogTag::get())
		], 'Content');

		return $fields;
	}
}
