<?php

namespace ModelAdmin;

use DataObject\ContactSubmission;
use SilverStripe\Admin\ModelAdmin;

class ContactSubmissionAdmin extends ModelAdmin
{
    private static $url_segment = 'contact-inzendingen';
    private static $menu_title = 'Contact Inzendingen';
    private static $menu_icon_class = 'font-icon-comment';

    private static $managed_models = [
        ContactSubmission::class
    ];
}
