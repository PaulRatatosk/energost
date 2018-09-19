<?php
return array(
	'^admin/projects-edit/([0-9]+)$' => 'adminProjectEdit/projectEdit/$1',
    '^projects/([0-9]+)$' => 'project/view/$1',
    '^projects$' => 'project/list',
    '^resolution$' => 'resolution/index',
    '^acknowledgment$' => 'acknowledgment/index',
    '^contacts$' => 'contacts/index',
    '^login$' => 'login/index',
    '^admin/logout$' => 'admin/logout',
    '^admin$' => 'admin/index',
    '^admin/project-add' => 'adminProjectAdd/projectAdd',
    '^admin/projects-edit' => 'adminProjectsEdit/projectsEdit',
    '^admin/resolution' => 'adminResolution/index',
    '^admin/acknowledgment' => 'adminAcknowledgment/index',
    '^$' => 'general/index',
);