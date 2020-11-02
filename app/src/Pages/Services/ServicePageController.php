<?php

namespace Pages;

use PageController;

class ServicePageController extends PageController {

	/**
	 * Get the related services and exclude current page.
	 *
	 * @return object
	 */
	public function getRelatedServices() {
		return ServicePage::get()->exclude([
			'ID' => $this->ID
		]);
	}
}
