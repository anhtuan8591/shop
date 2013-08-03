<?php
/*------------------------------------------------------------------------
# CGrocket Gallery Module by CGrocket.com
# ------------------------------------------------------------------------
# author    CGrocket http://www.cgrocket.com
# Copyright (C) 2011 - 2012 CGrocket.com. All Rights Reserved.
# @license - http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
# Websites: http://www.cgrocket.com - www.leweb2.com
-------------------------------------------------------------------------*/
defined('_JEXEC') or die('Restricted access');

jimport('joomla.form.formfield');
jimport( 'joomla.filesystem.folder' );

class JFormFieldFolderTree extends JFormField
{
	protected $type = 'FolderTree';

	protected function getInput()
	{
		$options = array();
		// path to images directory
		$path		= JPATH_ROOT.DS.$this->element['directory'];
		$filter		= $this->element['filter'];
		$folders	= JFolder::listFolderTree($path, $filter);

		foreach ($folders as $folder)
		{
			$options[] = JHtml::_('select.option', str_replace(DS,"/",$folder['relname']), str_replace(DS,"/",substr($folder['relname'], 1)));
		}

		return JHtml::_('select.genericlist', $options, $this->name, '', 'value', 'text', $this->value);
	}
}
