<?php

namespace Pages;

use PageController;

use SilverStripe\ORM\PaginatedList;

class BlogHolderPageController extends PageController {
	protected function init() {
		parent::init();
	}
		
	public function getAllBlogs() {
		$pages = new PaginatedList( BlogPage::get(), $this->getRequest() );
		$pages->setPageLength(9);

		return $pages;
	}
}