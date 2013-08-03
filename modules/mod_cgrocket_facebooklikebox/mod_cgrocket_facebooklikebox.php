<?php
/*---------------------------------------------------------------
# Package - Module CGrocket Facebook Fanpage by CGrocket.com 
# ---------------------------------------------------------------
# Author - CGrocket http://www.cgrocket.com
# Copyright (C) 2011 - 2012 CGrocket.com. All Rights Reserved.
# license - PHP files are licensed under  GNU/GPL V2
# Websites: http://www.cgrocket.com - http://www.leweb2.com
-----------------------------------------------------------------*/
// no direct access
defined('_JEXEC') or die('Restricted access');
$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));
require JModuleHelper::getLayoutPath('mod_cgrocket_facebooklikebox', $params->get('layout', 'default'));
