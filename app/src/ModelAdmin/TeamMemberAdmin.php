<?php

namespace ModelAdmin;

use DataObject\TeamMember;
use SilverStripe\Admin\ModelAdmin;

class TeamMemberAdmin extends ModelAdmin
{
    private static $url_segment = 'teamleden';
    private static $menu_title = 'Teamleden';
    private static $menu_icon_class = 'font-icon-torso';

    private static $managed_models = [
        TeamMember::class
    ];
}
