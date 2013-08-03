<?php
/*---------------------------------------------------------------
# Package - Module CGrocket Twitter Feeds by CGrocket.com 
# ---------------------------------------------------------------
# Author - CGrocket http://www.cgrocket.com
# Copyright (C) 2011 - 2012 Cgrocket.com. All Rights Reserved.
# license - PHP files are licensed under  GNU/GPL V2
# Websites: http://www.cgrocket.com - http://www.leweb2.com
-----------------------------------------------------------------*/
// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );
// Include the latest functions only once
require_once dirname(__FILE__).'/helper.php';
$NewsFeed	= modcgrocketTwitterHelper::getNewsFeed($params);
$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));
require JModuleHelper::getLayoutPath('mod_cgrocket_twitterfeeds', $params->get('layout', 'default'));
