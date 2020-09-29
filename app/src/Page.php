<?php

namespace {

	use Elements\Links;

	use SilverStripe\CMS\Model\SiteTree;

	class Page extends SiteTree {
		private static $db = [];

		private static $has_one = [
			'Links'			=> Links::class
		];
	}
}
