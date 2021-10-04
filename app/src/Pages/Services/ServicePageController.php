<?php

namespace Pages;

use PageController;

class ServicePageController extends PageController
{
    protected function init()
    {
        parent::init();
    }

    /**
     * Get related services and exclude the current service.
     *
     * @return void
     */
    public function getRelatedServices() {
        return ServicePage::get()->filter([
            'IsLandingPage' => 0
        ])->exclude([
            'ID' => $this->ID
        ]);
    }
}
