<?php
/**
 * @copyright	Copyright (C) 2009-2012 ACYBA SARL - All rights reserved.
 * @license		http://www.gnu.org/licenses/gpl-3.0.html GNU/GPL
 */
defined('_JEXEC') or die('Restricted access');
?>
<?php
class queuemailType{
	function queuemailType(){
		$db = JFactory::getDBO();
		$db->setQuery('SELECT COUNT(*) as total, mailid FROM #__acymailing_queue GROUP BY mailid');
		$allmails = $db->loadObjectList('mailid');
		$subjects = array();
		if(!empty($allmails)){
			$db->setQuery('SELECT mailid,subject FROM #__acymailing_mail WHERE mailid IN ('.implode(',',array_keys($allmails)).') ORDER BY subject ASC');
			$subjects = $db->loadObjectList('mailid');
		}
		$this->values = array();
		$this->values[] = JHTML::_('select.option', '0', JText::_('ALL_EMAILS') );
		foreach($subjects as $mailid => $oneMail){
			$this->values[] = JHTML::_('select.option', $mailid, $oneMail->subject.' ( '.$allmails[$mailid]->total.' )' );
		}
	}
	function display($map,$value){
		return JHTML::_('select.genericlist',   $this->values, $map, 'class="inputbox" style="max-width:500px" size="1" onchange="document.adminForm.submit( );"', 'value', 'text', (int) $value );
	}
}