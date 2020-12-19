<?php

use SilverStripe\Security\PasswordValidator;
use SilverStripe\Security\Member;
use SilverStripe\i18n\i18n;
use SilverStripe\View\Parsers\ShortcodeParser;

i18n::set_locale('nl_NL');

$validator = PasswordValidator::create();
Member::set_password_validator($validator);

ShortcodeParser::get('default')->register('Shortcode_ShortcodeButton', ['Page', 'parse_shortcode_button']);