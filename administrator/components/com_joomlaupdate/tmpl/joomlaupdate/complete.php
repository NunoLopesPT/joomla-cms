<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_joomlaupdate
 *
 * @copyright   Copyright (C) 2005 - 2018 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
?>

<fieldset>
	<legend>
		<?php echo JText::_('COM_JOOMLAUPDATE_VIEW_COMPLETE_HEADING'); ?>
	</legend>
	<joomla-alert type="success"><?php echo JText::sprintf('COM_JOOMLAUPDATE_VIEW_COMPLETE_MESSAGE', JVERSION); ?></joomla-alert>
</fieldset>
<form action="<?php echo JRoute::_('index.php?option=com_joomlaupdate'); ?>" method="post" id="adminForm">
	<input type="hidden" name="task" value="">
	<?php echo JHtml::_('form.token'); ?>
</form>
