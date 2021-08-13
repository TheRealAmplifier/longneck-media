<?php

namespace ModelAdmin;

use DataObject\QuotationSubmission;
use SilverStripe\Admin\ModelAdmin;

class QuotationSubmissionAdmin extends ModelAdmin
{
    private static $url_segment = 'offerte-aanvragen';
    private static $menu_title = 'Offerte aanvragen';
    private static $menu_icon_class = 'font-icon-checklist';

    private static $managed_models = [
        QuotationSubmission::class
    ];
}
