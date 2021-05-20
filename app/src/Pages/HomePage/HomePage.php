<?php

namespace Pages;

use Page;

class HomePage extends Page {
	private static $table_name = 'HomePage';
	private static $singular_name = 'Home pagina';
	private static $icon_class = 'font-icon-p-home';

	private static $db = [
		'Dummy' 			=> 'Boolean'
	];

	public function getProjects() {
		return ProjectPage::get();
	}
}
