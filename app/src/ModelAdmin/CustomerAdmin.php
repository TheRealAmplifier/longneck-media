<?php

namespace ModelAdmin;

use DataObject\Customer;
use SilverStripe\Admin\ModelAdmin;
use SilverStripe\Forms\GridField\GridField;
use Symbiote\GridFieldExtensions\GridFieldOrderableRows;

class CustomerAdmin extends ModelAdmin
{
    private static $url_segment = 'customers';
    private static $menu_title = 'Klanten';
    private static $menu_icon_class = 'font-icon-address-card';

    private static $managed_models = [
        Customer::class
    ];

    public function getEditForm($id = null, $fields = null) {
        $form = parent::getEditForm($id, $fields);
        $gridField = $form->Fields()->dataFieldByName($this->sanitiseClassName($this->modelClass));

        if ($gridField instanceof GridField) {
            $gridField->getConfig()->addComponent(new GridFieldOrderableRows('SortID'));
        }
        return $form;
    }
}
