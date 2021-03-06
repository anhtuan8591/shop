<?php
/**
 * @copyright	Copyright (C) 2009-2012 ACYBA SARL - All rights reserved.
 * @license		http://www.gnu.org/licenses/gpl-3.0.html GNU/GPL
 */
defined('_JEXEC') or die('Restricted access');
?>
<div id="page-security">
<br  style="font-size:1px;" />
<?php if(acymailing_level(1)) {
} ?>
	<fieldset class="adminform">
	<legend><?php echo JText::_('ADVANCED_EMAIL_VERIFICATION'); ?></legend>
		<table class="admintable" cellspacing="1">
			<tr>
				<td class="key" >
					<?php echo JText::_('CHECK_DOMAIN_EXISTS'); ?>
				</td>
				<td>
					<?php echo JHTML::_('select.booleanlist', "config[email_checkdomain]" , '',$this->config->get('email_checkdomain',0) ); ?>
				</td>
			</tr>
			<tr>
				<td class="key" >
					<?php echo JText::sprintf('X_INTEGRATION','BotScout'); ?>
				</td>
				<td>
					<?php echo JHTML::_('select.booleanlist', "config[email_botscout]" , '',$this->config->get('email_botscout',0) ); ?>
					<br/>API Key: <input class="inputbox" type="text" name="config[email_botscout_key]" size="20" value="<?php echo $this->escape($this->config->get('email_botscout_key')) ?>" />
				</td>
			</tr>
			<tr>
				<td class="key" >
					<?php echo JText::sprintf('X_INTEGRATION','StopForumSpam'); ?>
				</td>
				<td>
					<?php echo JHTML::_('select.booleanlist', "config[email_stopforumspam]" , '',$this->config->get('email_stopforumspam',0) ); ?>
				</td>
			</tr>
		</table>
	</fieldset>
	<fieldset class="adminform">
	<legend><?php echo JText::_( 'ACY_FILES' ); ?></legend>
		<table class="admintable" cellspacing="1">
			<tr>
				<td class="key" >
					<?php echo acymailing_tooltip(JText::_('ALLOWED_FILES_DESC'), JText::_('ALLOWED_FILES'), '', JText::_('ALLOWED_FILES')); ?>
				</td>
				<td>
					<input class="inputbox" type="text" name="config[allowedfiles]" size="60" value="<?php echo $this->escape(strtolower(str_replace(' ','',$this->config->get('allowedfiles')))); ?>" />
				</td>
			</tr>
			<tr>
				<td class="key">
					<?php echo acymailing_tooltip(JText::_('UPLOAD_FOLDER_DESC'), JText::_('UPLOAD_FOLDER'), '', JText::_('UPLOAD_FOLDER')); ?>
				</td>
				<td>
					<input class="inputbox" type="text" name="config[uploadfolder]" size="60" value="<?php echo $this->escape($this->config->get('uploadfolder')); ?>" />
				</td>
			</tr>
		</table>
	</fieldset>
<?php if(acymailing_level(1)) {
} ?>
</div>