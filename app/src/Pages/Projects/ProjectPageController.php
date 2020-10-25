<?php

namespace Pages;

use PageController;

class ProjectPageController extends PageController {

	public function getRelatedProjects() {
		return ProjectPage::get()->exclude(['ID' => $this->ID]);
	}
}

