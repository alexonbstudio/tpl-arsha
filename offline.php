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
	<?php if ($apps->get('debug_lang', '0') == '1' || $apps->get('debug', '0') == '1') : ?>
		[link rel="stylesheet" href="<?php echo $this->baseurl; ?>/media/cms/css/debug.css" type="text/css" /]
	<?php endif; ?>
	[link rel="shortcut icon" href="<?php echo $this->baseurl; ?>/templates/arsha/favicon.ico" type="image/vnd.microsoft.icon" /]
	
	<link href="<?php echo $this->baseurl; ?>/templates/arsha/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha512-MoRNloxbStBcD8z3M/2BmnT+rg4IsMxPkXaGh2zD6LGNNFE80W3onsAhRcMAMrSoyWL9xD7Ert0men7vR8LUZg==" crossorigin="anonymous" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/js/all.min.js" integrity="sha512-YSdqvJoZr83hj76AIVdOcvLWYMWzy6sJyIMic2aQz5kh2bPTd9dzY3NtdeEAzPp/PhgZqr4aJObB3ym/vsItMg==" crossorigin="anonymous"></script>
  <link href="<?php echo $this->baseurl; ?>/templates/arsha/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="<?php echo $this->baseurl; ?>/templates/arsha/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?php echo $this->baseurl; ?>/templates/arsha/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/venobox/1.9.1/venobox.min.css" integrity="sha512-e+0yqAgUQFoRrJ4pZigQXpOE0S7J9IGwmgH801h4H5ODqOCG8/GRfXHQ+9ab754NL79O7wDwdjwY3CcU8sEANg==" crossorigin="anonymous" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" integrity="sha512-1cK78a1o+ht2JcaW6g8OXYwqpev9+6GqOkz9xmBN9iUUhIndKtxwILGWYOSibOKjLsEdjyjZvYDq/cZwNeak0w==" crossorigin="anonymous" />
	
	[link rel="stylesheet" href="<?php echo $this->baseurl; ?>/templates/arsha/assets/production/arsha.min.css" type="text/css" /]
	
[/head]
	[begins tags='body' /]
<jdoc:include type="message" />


		<!-- ======= Header ======= -->
		[header id="header" class="fixed-top "]
			[div class="container d-flex align-items-center"]

				<!--[h1 class="logo mr-auto"]<a href="index.html"><?php echo $sitename; ?></a>[/h1]-->
				<!-- Uncomment below if you prefer to use an image logo -->
				 <a href="index.html" class="logo mr-auto"><img src="<?php echo $mypersonal_photo; ?>" alt="<?php echo $sitename; ?>" class="img-fluid"></a>

			[nav class="nav-menu d-none d-lg-block"]
				<jdoc:include type="modules" name="arsha_menu" style="nones" />
			[/nav]<!-- .nav-menu -->
			<a href="#about" class="get-started-btn scrollto">Get Started</a>

			[/div]
		[/header]<!-- End Header -->
  
		<!-- ======= Hero Section ======= -->
		[section id="hero" class="d-flex align-items-center"]

			[begins tags="div" class="container">
				[begins tags="div" class="row">
					[begins tags="div" class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
						<h1><?php echo $sitename; ?></h1>
						<?php if ($apps->get('display_offline_message', 1) == 1 && str_replace(' ', '', $apps->get('offline_message')) != '') : ?>
						<h2><?php echo $apps->get('offline_message'); ?></h2>
						<?php elseif ($apps->get('display_offline_message', 1) == 2 && str_replace(' ', '', JText::_('JOFFLINE_MESSAGE')) != '') : ?>
						
						<h2><?php echo JText::_('JOFFLINE_MESSAGE'); ?></h2>
						<?php endif; ?>	
						[begins tags="div" class="d-lg-flex">
							<a href="#about" class="btn-get-started scrollto">Get Started</a>
							<a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox btn-watch-video" data-vbtype="video" data-autoplay="true"> Watch Video <i class="icofont-play-alt-2"></i></a>
						[ends tags="div" /]
					[ends tags="div" /]
					[begins tags="div" class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
						<img src="<?php echo JUri::root(true).'/templates/arsha/assets/images/'; ?>hero-img.png" class="img-fluid animated" alt="">
						
					[ends tags="div" /]
				[ends tags="div" /]
			[ends tags="div" /]

		[/section]<!-- End Hero -->  

        <div class="row">


          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="<?php echo JRoute::_('index.php', true); ?>" method="post" role="form">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="username"><?php echo JText::_('JGLOBAL_USERNAME'); ?></label>
                  <input type="text" name="username" class="form-control" id="username" data-rule="minlen:4" data-msg="<?php echo JText::_('JGLOBAL_USERNAME'); ?>" />
                </div>
                <div class="form-group col-md-6">
                  <label for="secretkey"><?php echo JText::_('JGLOBAL_PASSWORD'); ?></label>
                  <input type="password" class="form-control" name="secretkey" id="secretkey" data-rule="minlen:4" data-msg="<?php echo JText::_('JGLOBAL_PASSWORD'); ?>" />
                </div>
              </div>
				[input type="submit" name="Submit" class="text-center" value="<?php echo JText::_('JLOGIN'); ?>" /]
				[input type="hidden" name="option" value="com_users" /]
				[input type="hidden" name="task" value="user.login" /]
				[input type="hidden" name="return" value="<?php echo base64_encode(JUri::base()); ?>" /]
				<?php echo JHtml::_('form.token'); ?>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->
  

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-12">          
		  <h4><?php echo JText::_('TPL_ARSHA_TITLE_NEWLETTER'); ?></h4>
            <p><?php echo JText::_('TPL_ARSHA_SHORT_NEWLETTER'); ?></p>

            <form action="https://alexonbstudio.us19.list-manage.com/subscribe/post?u=18b2219e44bdafed0e558cc71&amp;id=3d7f1b18ad" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
              <div class="form-row">
                <div class="col-md-4 form-group">
					<strong><?php echo JText::_('TPL_ARSHA_STATUS_NEWLETTER'); ?> </strong><br>
						<input type="checkbox" value="1" name="group[77865][1]" id="mce-group[77865]-77865-0"> <label for="mce-group[77865]-77865-0"><?php echo JText::_('TPL_ARSHA_CHOOSE1_NEWLETTER'); ?> </label>
						 <input type="checkbox" value="2" name="group[77865][2]" id="mce-group[77865]-77865-1"> <label for="mce-group[77865]-77865-1"><?php echo JText::_('TPL_ARSHA_CHOOSE2_NEWLETTER'); ?></label>
						 <input type="checkbox" value="4" name="group[77865][4]" id="mce-group[77865]-77865-2"> <label for="mce-group[77865]-77865-2"><?php echo JText::_('TPL_ARSHA_CHOOSE3_NEWLETTER'); ?> </label>
                </div>
                <div class="col-md-4 form-group">
					<input type="email" value="" name="EMAIL" class="form-control required email" id="mce-EMAIL" placeholder="Email" data-rule="email" data-msg="email">
				  </div>
                <div class="col-md-4 form-group">
					<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_18b2219e44bdafed0e558cc71_3d7f1b18ad" tabindex="-1" value=""></div>
					<div class="clear"><input type="submit" value="<?php echo JText::_('TPL_ARSHA_BTN_NEWLETTER'); ?>" name="subscribe" id="mc-embedded-subscribe" class="btn btn-lg btn-info"></div>
				</div>
              </div>
              <div class="mb-3">	
				<div id="mce-responses" class="clear">
					<div class="response" id="mce-error-response" style="display:none"></div>
					<div class="response" id="mce-success-response" style="display:none"></div>
				</div> 
              </div>
            </form>

          </div>
        </div>
      </div>
    </div>

    <div class="footer-top">
      <div class="container">
	  
					[begins tags='div' class='row' /]
						<?php if ($this->countModules('bs4-footer1')) : ?>
							[begins tags='div' class='col-lg-3 col-md-6 footer-contact' /]<jdoc:include type="modules" name="bs4-footer1" style="none" />[ends tags="div" /]
						<?php endif; ?>	
						<?php if ($this->countModules('bs4-footer2')) : ?>
							[begins tags='div' class='col-lg-3 col-md-6 footer-contact' /]<jdoc:include type="modules" name="bs4-footer2" style="none" />[ends tags="div" /]
						<?php endif; ?>	
						<?php if ($this->countModules('bs4-footer3')) : ?>
							[begins tags='div' class='col-lg-3 col-md-6 footer-contact' /]<jdoc:include type="modules" name="bs4-footer3" style="none" />[ends tags="div" /]
						<?php endif; ?>	
						<?php if ($this->countModules('bs4-footer4')) : ?>
							[begins tags='div' class='col-lg-3 col-md-6 footer-contact' /]<jdoc:include type="modules" name="bs4-footer4" style="none" />[ends tags="div" /]
						<?php endif; ?>	
					[ends tags="div" /]
      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <?php date('Y'); ?> <a href="<?php echo $this->baseurl; ?>"><strong><span><?php echo $sitename; ?></span></strong></a>. <?php echo JText::_('TPL_ARSHA_FOOT_DOWN2_FULL'); ?>
      </div>
      <div class="credits">
	    Powered by <a href="https://joomla.org">Joomla</a>, Developer by <a href="https://alexonbstudio.yo.fr">AlexonbStudio</a> &amp; Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
  <div id="preloader"></div>


		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.bundle.min.js" integrity="sha512-kBFfSXuTKZcABVouRYGnUo35KKa1FBrYgwG4PAx7Z2Heroknm0ca2Fm2TosdrrI356EDHMW383S3ISrwKcVPUw==" crossorigin="anonymous"></script>	
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script> 
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js" integrity="sha512-Zq2BOxyhvnRFXu0+WE6ojpZLOU2jdnqbrM1hmVdGzyeCa1DgM3X5Q4A/Is9xA1IkbUeDd7755dNNI/PzSf2Pew==" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/venobox/1.9.1/venobox.min.js" integrity="sha512-6mm1Gra+9mSztlk6Q45F1soEHmkduyd2ponCIWNo5pr0lgcr8d79GQjQ3Nw0uRR3/+y/OZGklAi38yE1QSNpCw==" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js" integrity="sha512-A7AYk1fGKX6S2SsHywmPkrnzTZHrgiVT7GcQkLGDe2ev0aWb8zejytzS8wjo7PGEXKqJOrjQ4oORtnimIRZBtw==" crossorigin="anonymous"></script>
  <script src="<?php echo $this->baseurl; ?>/templates/arsha/assets/vendor/waypoints/jquery.waypoints.min.js"></script>

		<script src="<?php echo $this->baseurl; ?>/assets/production/arsha.min.js"></script> 	
 
	[ends tags="body" /]  
</html>
