<?php
/**
 * @package     Joomla.Site
 * @subpackage  Templates.coopceptor-arsha
 *
 * @copyright   Copyright (C) 2018 Alexon Balangue. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

$apps             = JFactory::getApplication();
$docs             = JFactory::getDocument();
$sitename = $apps->get('sitename');
$this->language  = $docs->language;
$this->direction = $docs->direction;

$this->_script = $this->_scripts = array();	

unset($docs->_scripts[JURI::root(true) . '/media/system/js/mootools-more.js']);
unset($docs->_scripts[JURI::root(true) . '/media/system/js/mootools-core.js']);
unset($docs->_scripts[JURI::root(true) . '/media/system/js/core.js']);
unset($docs->_scripts[JURI::root(true) . '/media/system/js/modal.js']);
unset($docs->_scripts[JURI::root(true) . '/media/system/js/caption.js']);
unset($docs->_scripts[JURI::root(true) . '/media/jui/js/jquery.min.js']);
unset($docs->_scripts[JURI::root(true) . '/media/jui/js/jquery-migrate.min.js']);
unset($docs->_scripts[JURI::root(true) . '/media/jui/js/jquery-noconflict.js']);
unset($docs->_scripts[JURI::root(true) . '/media/jui/js/bootstrap.min.js']);

require_once JPATH_ADMINISTRATOR . '/components/com_users/helpers/users.php';

$twofactormethods = UsersHelper::getTwoFactorMethods();
?>
<!DOCTYPE html>
<html lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
[head]
	[meta charset="utf-8" /]
	[title]<?php echo $sitename.' - '.JText::_('JOFFLINE_MESSAGE'); ?>[/title]
	[begins tags='meta' more='name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"' /]
	[begins tags='meta' more='name="robots" content="noindex,nofollow"' /]	
	[link rel="stylesheet" href="<?php echo $this->baseurl.'/templates/arsha/assets/production/offline.min.css'; ?>" type="text/css" /]
	<?php if ($apps->get('debug_lang', '0') == '1' || $apps->get('debug', '0') == '1') : ?>
		[link rel="stylesheet" href="<?php echo $this->baseurl; ?>/media/cms/css/debug.css" type="text/css" /]
	<?php endif; ?>
	[link rel="shortcut icon" href="<?php echo $this->baseurl; ?>/templates/arsha/favicon.ico" type="image/vnd.microsoft.icon" /]
	[link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" type="text/css" /]
	<link href="<?php echo $this->baseurl; ?>/templates/arsha/assets/production/fa.min.css" rel="stylesheet">
	<script defer src="<?php echo $this->baseurl; ?>/templates/arsha/assets/production/fa.min.js"></script>
    <link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
	[link rel="stylesheet" href="<?php echo $this->baseurl; ?>/templates/arsha/assets/production/arsha.min.css" type="text/css" /]
	<link rel="stylesheet" href="<?php echo $this->baseurl; ?>/templates/arsha/assets/production/sprites.min.css">

[/head]
	[begins tags='body' id='page-top' class='index' mdatatype='http://schema.org/WebPage' /]
<jdoc:include type="message" />

    [header class="masthead sprites sprites-bg d-flex"]
      
		[begins tags="div" class="container text-center my-auto" mdatatype"http://schema.org/CreativeWork" /]
			<?php if ($apps->get('offline_image') && file_exists($apps->get('offline_image'))) : ?>
				<img itemprop="primaryImageOfPage" src="<?php echo $this->baseurl.'/templates/arsha/assets/production/images/profile.png'; ?>" alt="demo" class="img-responsive img-circle">
				<meta itemprop="image" content="<?php echo $this->baseurl.'/templates/arsha/assets/production/images/profile.png'; ?>">
					<?php endif; ?>
			[begins tags='h1' class='mb-1' mdataprop='author']
				<?php echo $sitename; ?>
			[ends tags='h1' /]
			<meta itemprop="name" content="<?php echo $sitename; ?>">
	
			<?php if ($apps->get('display_offline_message', 1) == 1 && str_replace(' ', '', $apps->get('offline_message')) != '') : ?>
			[h3 class="mb-5"]<?php echo $apps->get('offline_message'); ?>[/h3]
			<?php elseif ($apps->get('display_offline_message', 1) == 2 && str_replace(' ', '', JText::_('JOFFLINE_MESSAGE')) != '') : ?>
			<meta itemprop="description" content="<?php echo JText::_('JOFFLINE_MESSAGE'); ?>">
			<?php endif; ?>	
		[ends tags="div" /]
    [/header]
    [section class="content-section"]
      [begins tags='div' class='container' /]
        [begins tags='div' class='row' /]
			[begins tags="div" class="col-lg-8 mx-auto" /]
           [begins tags='form' class='form-inline' id='form-login' more='action="<?php echo JRoute::_('index.php', true); ?>" method="post"' /]
			  [begins tags="div" class="control-group" /] 
                [begins tags="div" class="form-group floating-label-form-group controls mb-0 pb-2" /] 
                  <label><?php echo JText::_('JGLOBAL_USERNAME'); ?></label>
                  [input name="username" id="username" type="text" class="form-control" placeholder="<?php echo JText::_('JGLOBAL_USERNAME'); ?>" /]
                  <p class="help-block text-danger"></p>
                </div>
             [ends tags="div" /] 
			  [begins tags="div" class="control-group" /] 
                [begins tags="div" class="form-group floating-label-form-group controls mb-0 pb-2" /] 
                  <label><?php echo JText::_('JGLOBAL_PASSWORD'); ?></label>
                 [input type="password" name="password" class="form-control" placeholder="<?php echo JText::_('JGLOBAL_PASSWORD'); ?>" id="passwd" /]
                  <p class="help-block text-danger"></p>
                </div>
              [ends tags="div" /] 
			<?php if (count($twofactormethods) > 1) : ?>
			[begins tags="div" class="control-group" /] 
				[begins tags="div" class="form-group floating-label-form-group controls mb-0 pb-2" /] 
					[begins tags='label' more='for="secretkey"' /]<?php echo JText::_('JGLOBAL_SECRETKEY'); ?>[ends tags="label" /]
					[input type="text" name="secretkey" class="form-control" placeholder="<?php echo JText::_('JGLOBAL_SECRETKEY'); ?>" id="secretkey" /]
				[ends tags="div" /]  
			[ends tags="div" /]  
			<?php endif; ?>
              <br>
				[input type="submit" name="Submit" class="btn btn-primary btn-xl" value="<?php echo JText::_('JLOGIN'); ?>" /]
				[input type="hidden" name="option" value="com_users" /]
				[input type="hidden" name="task" value="user.login" /]
				[input type="hidden" name="return" value="<?php echo base64_encode(JUri::base()); ?>" /]
				<?php echo JHtml::_('form.token'); ?>
           [ends tags="form" /]
			[ends tags="div" /] 
        [ends tags="div" /]
      [ends tags="div" /]
    [/section]


    [begins tags="div" class="footer" /]
		[begins tags='div' class='container' mdatatype='http://schema.org/CreativeWork' /]
		
					<?php echo JText::_('TPL_ARSHA_FOOT_DOWN1_FULL'); ?>[br /]
							<span itemprop="copyrightHolder">&copy; <a href="<?php echo JURI::base(); ?>"><?php echo $sitename; ?></a></span> - <span itemprop="copyrightYear"><?php echo date('Y'); ?></span> - <?php echo JText::_('TPL_ARSHA_FOOT_DOWN2_FULL'); ?> [url href="//www.AlexonbStudio.fr" target="_top"]www.AlexonbStudio.fr[/url] <?php echo JText::_('TPL_ARSHA_FOOT_DOWN3_FULL'); ?>  [url href="//www.startboostrap.com" target="_top"]www.Startboostrap.com[/url]
		[ends tags="div" /]	
	[ends tags="div" /]	

		[script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" /] 
		[script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.bundle.min.js" /] 
		[script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js" /] 
		[script src="<?php echo $this->baseurl; ?>/templates/arsha/assets/production/arsha.min.js" /] 
	[ends tags="body" /]  
</html>
