<?php
/*------------------------------------------------------------------------
# CGrocket Gallery Module by CGrocket.com
# ------------------------------------------------------------------------
# author    CGrocket http://www.cgrocket.com
# Copyright (C) 2011 - 2012 CGrocket.com. All Rights Reserved.
# @license - http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
# Websites: http://www.cgrocket.com - www.leweb2.com
-------------------------------------------------------------------------*/
// no direct access
defined('_JEXEC') or die('Restricted access');
JHtml::_('behavior.framework',true);
$document 			= JFactory::getDocument();
$uniqid				= $module->id;
$usefade			= $params->get('usefade');
$normal_opacity		= $params->get('normal_opacity');
$hover_opacity		= $params->get('hover_opacity');
$style				= $params->get('style', "border:1px solid #DDD; margin:0 5px 10px 5px; padding:5px; background:#fff;");
$styles 			= 'img.cgrocket_simple_gallery {' . $style . '}'; 

$document->addStyleSheet(JURI::base(true) . '/modules/mod_cgrocket_simple_gallery/scripts/slimbox.css');
$document->addScript(JURI::base(true) . '/modules/mod_cgrocket_simple_gallery/scripts/slimbox.js');
$document->addStyleDeclaration( $styles );

require_once (dirname(__FILE__).DS.'helper.php');
$list = modCGGalleryHelper::getimgList($params);
require(JModuleHelper::getLayoutPath('mod_cgrocket_simple_gallery'));
?>
