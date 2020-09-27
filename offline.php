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


  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <h4>Join Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Arsha</h3>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <?php date('Y'); ?> <strong><span><?php echo $sitename; ?></span></strong>. All Rights Reserved
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
