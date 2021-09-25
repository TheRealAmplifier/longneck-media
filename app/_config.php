<?php

use SilverStripe\Admin\CMSMenu;
use SilverStripe\Admin\SecurityAdmin;
use SilverStripe\CampaignAdmin\CampaignAdmin;
use SilverStripe\Security\PasswordValidator;
use SilverStripe\Security\Member;
use SilverStripe\i18n\i18n;
use SilverStripe\Reports\ReportAdmin;
use SilverStripe\VersionedAdmin\ArchiveAdmin;
use SilverStripe\View\Parsers\ShortcodeParser;
use SilverStripe\Forms\HTMLEditor\HtmlEditorConfig;
use SilverStripe\Core\Manifest\ModuleResourceLoader;

i18n::set_locale('nl_NL');

$validator = PasswordValidator::create();
Member::set_password_validator($validator);

ShortcodeParser::get('default')->register('Shortcode_ShortcodeButton', ['Page', 'parseShortcodeButton']);
ShortcodeParser::get('default')->register('Shortcode_ShortcodeQuote', ['Page', 'parseShortcodeQuote']);

CMSMenu::remove_menu_class(CampaignAdmin::class);
CMSMenu::remove_menu_class(ArchiveAdmin::class);
CMSMenu::remove_menu_class(ReportAdmin::class);
CMSMenu::remove_menu_class(SecurityAdmin::class);

HtmlEditorConfig::get('cms')->enablePlugins([
	'template',
	'fullscreen',
	'hr',
	'contextmenu',
	'charmap',
	'visualblocks',
	'lists',
	'charcount' => ModuleResourceLoader::resourceURL('drmartingonzo/ss-tinymce-charcount:client/dist/js/bundle.js'),
]);
