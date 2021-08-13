<?php

namespace Pages;

use PageController;

class ProjectPageController extends PageController
{

    /**
     * Get the related projects and exclude current page.
     *
     * @return object
     */
    public function getRelatedProjects()
    {
        return ProjectPage::get()->exclude([
            'ID' => $this->ID
        ]);
    }
}
