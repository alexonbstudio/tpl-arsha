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
$users            = JFactory::getUser();
$this->language  = $docs->language;
$this->direction = $docs->direction;

// Getting params from template
$params = $apps->getTemplate(true)->params;
$sitename = $apps->get('sitename');

?>
<!DOCTYPE html>
<html lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<head>
	<meta charset="utf-8">
	<title><?php echo $this->title; ?> <?php echo htmlspecialchars($this->error->getMessage(), ENT_QUOTES, 'UTF-8'); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="robots" content="noindex,nofollow">
	<?php if ($apps->get('debug_lang', '0') == '1' || $apps->get('debug', '0') == '1') : ?>
		<link rel="stylesheet" href="<?php echo $this->baseurl; ?>/media/cms/css/debug.css" type="text/css">
	<?php endif; ?>
	<link href="<?php echo $this->baseurl; ?>/templates/arsha/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" type="text/css">
	<link rel="stylesheet" href="<?php echo $this->baseurl; ?>/templates/arsha/assets/production/arsha.min.css" type="text/css">
	<link rel="stylesheet" href="<?php echo $this->baseurl; ?>/templates/arsha/assets/production/sprites.min.css">

</head>

<body id="page-top" class="index" itemscope itemtype="http://schema.org/WebPage">
<jdoc:include type="message" />
    <a class="menu-toggle rounded" href="#">
      <i class="far fa-bars"></i>
    </a>
    <nav id="sidebar-wrapper">
      <ul class="sidebar-nav">
        <li class="sidebar-brand">
          <a class="js-scroll-trigger" href="#page-top"><?php echo $sitename; ?></a>
        </li>
      </ul>
    </nav>
    <header class="masthead d-flex">
      <div class="container text-center my-auto">
        <h1 class="mb-1"><?php echo $sitename; ?></h1>
        <h3 class="mb-5">
          <em><?php echo htmlspecialchars($this->error->getMessage(), ENT_QUOTES, 'UTF-8'); ?></em>
        </h3>
        <a class="btn btn-primary btn-xl js-scroll-trigger" href="#failed"><i class="far fa-angle-double-down fa-5x"></i></a>
      </div>
      <div class="overlay"></div>
    </header>

    <section class="content-section bg-light" id="failed">
      <div class="container text-center">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <h2><?php echo JText::_('JERROR_LAYOUT_PAGE_NOT_FOUND'); ?></h2>
          </div>
		  <div class="clearfix"></div>
		  
          <div class="col-lg-6 ml-auto">
            								<p><strong><?php echo JText::_('JERROR_LAYOUT_ERROR_HAS_OCCURRED_WHILE_PROCESSING_YOUR_REQUEST'); ?></strong></p>
								<p><?php echo JText::_('JERROR_LAYOUT_NOT_ABLE_TO_VISIT'); ?></p>
								<ul>
									<li><?php echo JText::_('JERROR_LAYOUT_AN_OUT_OF_DATE_BOOKMARK_FAVOURITE'); ?></li>
									<li><?php echo JText::_('JERROR_LAYOUT_MIS_TYPED_ADDRESS'); ?></li>
									<li><?php echo JText::_('JERROR_LAYOUT_SEARCH_ENGINE_OUT_OF_DATE_LISTING'); ?></li>
									<li><?php echo JText::_('JERROR_LAYOUT_YOU_HAVE_NO_ACCESS_TO_THIS_PAGE'); ?></li>
								</ul>
          </div>
          <div class="col-lg-6 mr-auto">
            <?php if (JModuleHelper::getModule('search')) : ?>
									<p><strong><?php echo JText::_('JERROR_LAYOUT_SEARCH'); ?></strong></p>
									<p><?php echo JText::_('JERROR_LAYOUT_SEARCH_PAGE'); ?></p>
									<?php echo $docs->getBuffer('module', 'search'); ?>
								<?php endif; ?>
								<p><?php echo JText::_('JERROR_LAYOUT_GO_TO_THE_HOME_PAGE'); ?></p>
								<p><a href="<?php echo $this->baseurl; ?>/index.php" class="btn"><span class="far fa-home fa-4x"></span> <?php echo JText::_('JERROR_LAYOUT_HOME_PAGE'); ?></a></p>
          </div>
        </div>
        <div class="row">
			<div class="col-md-12">
						<p><?php echo JText::_('JERROR_LAYOUT_PLEASE_CONTACT_THE_SYSTEM_ADMINISTRATOR'); ?></p>
						<blockquote>
							<span class="label label-inverse"><?php echo $this->error->getCode(); ?></span> <?php echo htmlspecialchars($this->error->getMessage(), ENT_QUOTES, 'UTF-8');?>
						</blockquote>
						<?php if ($this->debug) : ?>
							<?php echo $this->renderBacktrace(); ?>
						<?php endif; ?>
			</div>
        </div>
      </div>
    </section>

    <footer class="footer text-center">
        <span itemprop="copyrightHolder">&copy; <a href="<?php echo $this->baseurl; ?>"><?php echo $sitename; ?></a></span> - <span itemprop="copyrightYear"><?php echo date('Y'); ?></span> - 
					<?php echo JText::_('TPL_ARSHA_FOOTER_CONCEPT'); ?> <a href="//www.AlexonbStudio.fr" target="_top">www.AlexonbStudio.fr</a> - <?php echo JText::_('TPL_ARSHA_FOOTER_DESIGN'); ?> <a href="//www.startbootstrap.com" target="_top">www.StartBootstrap.com</a>
					<br /><?php echo JText::_('TPL_ARSHA_FOOTER_AUTHOR'); ?>
      </div>
    </footer>

    <a class="scroll-to-top rounded js-scroll-trigger" href="#page-top">
      <i class="far fa-angle-up"></i>
    </a>


		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
		<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script> 	
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script> 	
		<script src="<?php echo $this->baseurl; ?>/assets/production/arsha.min.js"></script> 	

	<?php echo $docs->getBuffer('modules', 'debug', array('style' => 'none')); ?>
</body>
</html>
