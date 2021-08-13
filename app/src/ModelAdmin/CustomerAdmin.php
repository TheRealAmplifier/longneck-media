<?php

namespace ModelAdmin;

use DataObject\Customer;
use SilverStripe\Admin\ModelAdmin;

class CustomerAdmin extends ModelAdmin
{
    private static $url_segment = 'customers';
    private static $menu_title = 'Klanten';
    private static $menu_icon_class = 'font-icon-address-card';

    private static $managed_models = [
        Customer::class
    ];
}
