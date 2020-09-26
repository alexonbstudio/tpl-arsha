<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_tags
 *
 * @copyright   Copyright (C) 2005 - 2016 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

JHtml::addIncludePath(JPATH_COMPONENT . '/helpers');
$n = count($this->items);
?>
<div class="<?php echo $this->pageclass_sfx; ?>">
	<?php if ($this->params->get('show_page_heading')) : ?>
		<h1>
			<?php echo $this->escape($this->params->get('page_heading')); ?>
		</h1>
	<?php endif; ?>
	<?php if ($this->params->get('show_tag_title', 1)) : ?>
		<h2>
			<?php echo JHtml::_('content.prepare', $this->tags_title, '', 'com_tag.tag'); ?>
		</h2>
	<?php endif; ?>
	
	<?php if (count($this->item) == 1 && (($this->params->get('tag_list_show_tag_image', 1)) || $this->params->get('tag_list_show_tag_description', 1))) : ?>
		<div>
			<?php $images = json_decode($this->item[0]->images); ?>
			<?php if ($this->params->get('tag_list_show_tag_image', 1) == 1 && !empty($images->image_fulltext)) : ?>
				<img alt="<?php echo $this->tags_title; ?>" width="90" height="90" src="<?php echo htmlspecialchars($images->image_fulltext, ENT_COMPAT, 'UTF-8'); ?>">
			<?php endif; ?>
			<?php if ($this->params->get('tag_list_show_tag_description') == 1 && $this->item[0]->description) : ?>
				<?php echo JHtml::_('content.prepare', $this->item[0]->description, '', 'com_tags.tag'); ?>
			<?php endif; ?>
			<div class="clearfix"></div>
		</div>
	<?php endif; ?>
	<?php if ($this->params->get('tag_list_show_tag_description', 1) || $this->params->get('show_description_image', 1)): ?>
		<?php if ($this->params->get('show_description_image', 1) == 1 && $this->params->get('tag_list_image')) : ?>
			<img alt="<?php echo $this->tags_title; ?>" src="<?php echo $this->params->get('tag_list_image'); ?>" width="90" height="90">
		<?php endif; ?>
		<?php if ($this->params->get('tag_list_description', '') > '') : ?>
			<?php echo JHtml::_('content.prepare', $this->params->get('tag_list_description'), '', 'com_tags.tag'); ?>
		<?php endif; ?>

	<?php endif; ?>

	<?php echo $this->loadTemplate('items'); ?>
</div>
