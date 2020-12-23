<?php

use CyberDuck\SEO\Admin\SEOAdmin;
use SilverStripe\Admin\CMSMenu;
use SilverStripe\Admin\SecurityAdmin;
use SilverStripe\CampaignAdmin\CampaignAdmin;
use SilverStripe\Security\PasswordValidator;
use SilverStripe\Security\Member;
use SilverStripe\i18n\i18n;
use SilverStripe\Reports\ReportAdmin;
use SilverStripe\VersionedAdmin\ArchiveAdmin;
use SilverStripe\View\Parsers\ShortcodeParser;

i18n::set_locale('nl_NL');

$validator = PasswordValidator::create();
Member::set_password_validator($validator);

ShortcodeParser::get('default')->register('Shortcode_ShortcodeButton', ['Page', 'parse_shortcode_button']);

CMSMenu::remove_menu_class(CampaignAdmin::class);
CMSMenu::remove_menu_class(ArchiveAdmin::class);
CMSMenu::remove_menu_class(ReportAdmin::class);
CMSMenu::remove_menu_class(SecurityAdmin::class);
CMSMenu::remove_menu_class(SEOAdmin::class);