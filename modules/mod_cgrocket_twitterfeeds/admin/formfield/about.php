<?php/*---------------------------------------------------------------# Package - Module CGrocket Twitter Feeds by CGrocket.com # ---------------------------------------------------------------# Author - CGrocket http://www.cgrocket.com# Copyright (C) 2011 - 2012 Cgrocket.com. All Rights Reserved.# license - PHP files are licensed under  GNU/GPL V2# Websites: http://www.cgrocket.com - http://www.leweb2.com-----------------------------------------------------------------*/// no direct accessdefined('_JEXEC') or die('Restricted access');
jimport('joomla.form.formfield');
class JFormFieldAbout extends JFormField {
	protected $type = 'About';
	protected function getInput() {
		return '<div id="cgrocket-about">					<div class="cgrocket-desc"><a href="http://www.cgrocket.com" target="_blank"><img src="'.JURI::root().$this->element['path'].'/logo.png"></a>						'.JText::_("CGROCKET_ABOUT_DESC").'						<p>						<a class="social-f" href="https://www.facebook.com/cgrocket" target="_blank">facebook</a><a class="social-t" href="http://twitter.com/cgrocket" target="_blank">twitter</a> <a class="social-rss" href="#">rss</a><a class="social-g" href="http://www.cgrocket.com" target="_blank">group</a></p>					</div>					<br clear="both">					<div class="cgrocket-license">'.JText::_("CGROCKET_ABOUT_LICENSE").'</div>				</div>';
	}
}
/* eof */?>