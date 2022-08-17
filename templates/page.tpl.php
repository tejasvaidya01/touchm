<script src="/sites/all/libraries/tablesorter/jquery.tablesorter.js" type="text/javascript"></script>
<?php
drupal_add_js('jQuery(document).ready(function(){
 
      $(".contentHover").hover(
        function() {
          $(this).children(".content").fadeTo(200, 0.25).end().children(".hover-content").fadeTo(200, 1).show();
        },
        function() {
          $(this).children(".content").fadeTo(200, 1).end().children(".hover-content").fadeTo(200, 0).hide();
        });
	if($(window).width() <800){
		$(".mbmenu ul").addClass("flexnav");
		$(".mbmenu ul").attr("data-breakpoint","800");
	}
		
});', 'inline');

?>
<div class=" container region1wrap" >  

  <!-- Top Header -->
  <div class="row top_header">

    <div class="six columns">
      <?php print render($page['top_nav']); ?>
      <?php print render($page['login_box']); ?>
    </div>

    <div class="six columns">
      <?php
      $twitter_url = theme_get_setting('twitter_url', 'touchm');
      $facebook_url = theme_get_setting('facebook_url', 'touchm');
      $google_plus_url = theme_get_setting('google_plus_url', 'touchm');
      $linkedin_url = theme_get_setting('linkedin_url', 'touchm');
      $flickr_url = theme_get_setting('flickr_url', 'touchm');
      $vimeo_url = theme_get_setting('vimeo_url', 'touchm');
      $rss_url = theme_get_setting('rss_url', 'touchm');

      $theme_path = base_path() . path_to_theme();
      ?>
	    <div class="top_social"></div>
			<ul class="top_social">
        <li><a class="has-tipsy" href="<?php print $twitter_url; ?>" target="_blank" title="Twitter"><img src="<?php print $theme_path; ?>/images/social/Twitter.png" alt="Twitter"></a></li>
        <li><a class="has-tipsy" href="<?php print $facebook_url; ?>" target="_blank" title="Facebook"><img src="<?php print $theme_path; ?>/images/social/Facebook.png" alt="Facebook"></a>
        <li><a class="has-tipsy" href="<?php print $google_plus_url ?>" target="_blank" title="Google"><img src="<?php print $theme_path; ?>/images/social/Google.png" alt="Google+"></a></li>
        <li><a class="has-tipsy" href="<?php print $linkedin_url; ?>" target="_blank" title="LinkedIn"><img src="<?php print $theme_path; ?>/images/social/LinkedIn.png" alt="LinkedIn"></a></li>
        <!--li><a class="has-tipsy" href="http://www1.iitb.ac.in/hindi" target="_blank" title="Hindi Version (old)"><img src="<?php print $theme_path; ?>/images/hindi-switch.png" alt="Hindi version (old)"></a></li-->
	</ul>
	</div>

  </div>
  <!-- End Top Header -->

</div>

<!-- End Region 1 Wrap -->

<!-- Region 2 Wrap -->

<div class="container region2wrap">

  <div class="row">

    <!-- Logo -->
		  <?php if ($logo){
		 
			  if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") {
					$serverlink = 'https://' . $_SERVER['HTTP_HOST'];
				} 
				else {
					$serverlink = 'http://' . $_SERVER['HTTP_HOST'];
				}
		  ?>
	  
		   <div class="logo">
					<a class="logo" href="<?php print $serverlink; ?>"><img src="<?php print $logo; ?>" alt="<?php print t('IITB'); ?>" /></a>
		</div>
    <?php //print $serverlink; ?>
		   <!--<div class="fst">
<a  href=""><h5> Indian Institute of Technology Bombay</h5></a>
			</div>-->
    <!-- End Logo -->
			<div class="snd">
				 <?php if ($site_name || $site_slogan): ?>
            <h2><a href="<?php print $serverlink; ?>" id="slogan-site-name">भारतीय प्रौद्योगिकी संस्थान मुंबई</a></h2>
  					<h1><a href="<?php print $serverlink; ?>" id="slogan-site-name"><?php print $site_name; ?></a></h1>
				  <?php endif; ?>
			</div>

    <div class="djlogo">
        <a href="<?php print $serverlink; ?>/en/azadi-ka-amrit-mahotsav">
        <img src="<?php print $serverlink;?>/sites/www.iitb.ac.in/themes/touchm/logo_75.png" alt="Azadi Ka Amrit Mahotsav" /></a>
    </div>
      <?php } ?>
    </div>



    <!-- Main Navigation -->

  <div class="row">
    <div class="twelve columns">
		<div class="mbmenu">
			<div class="menu-button">Menu</div>

			<?php print $navigation; ?> <!--after-->
		</div>
	

		<nav class="top-bar">



        <!--<ul>-->
          <!-- Toggle Button Mobile  -->
           <!--<li class="name">
            <h1><a href="#"> <?php //print t('Navigation Menu'); ?></a></h1>
          </li>
          <li class="toggle-topbar"><a href="#"></a></li> -->
          <!-- End Toggle Button Mobile -->
        <!--</ul>-->


        <?php if (!empty($navigation)): ?>
          <section><!-- Nav Section -->

            <?php print $navigation; ?><!--after nav section-->
          </section><!-- End Nav Section -->

        </nav>            
      <?php endif; ?>
    </div>
	
    <!-- End Main Navigation -->         

  </div>

</div>

<!-- End Region 2 Wrap -->


<?php if ($page['highlighted']): ?>
  <!-- Region 3 Wrap -->

  <div class="container region3wrap">  

    <?php print render($page['highlighted']); ?>

    <?php if (drupal_is_front_page()): ?>
      <!-- Content Top -->  
      <div class="row content_top">
        <div class="twelve columns">
          <h2><?php print theme_get_setting('home_tagline', 'touchm'); ?></h2>
        </div>
      </div>
      <!-- End Content Top -->
    <?php endif; ?>

  </div>

  <!-- End Region 3 Wrap -->

<?php endif; ?>

<?php if (!drupal_is_front_page()): ?>
  <!-- Region 3 Wrap -->

  <div class="container region3wrap">  


    <!-- Content Top -->  
    <div class="row content_top">

      <div class="nine columns">
        <?php if ($breadcrumb): ?>
          <?php print  $breadcrumb; ?>
        <?php endif; ?>

      </div>

      <?php if (!empty($seach_block_form)): ?>
        <div class="three columns">

          <div class="row">
            <div class="twelve columns">
              <div class="row collapse top_search">
                <?php print $seach_block_form; ?>
              </div>
            </div>
          </div>

        </div>
      <?php endif; ?>
    </div>
    <!-- End Content Top -->


  </div>

  <!-- End Region 3 Wrap -->
<?php endif; ?>


<!-- Region 4 Wrap -->

<div class="container region4wrap">

  <div class="row maincontent">
    <?php if ($title): ?>
      <div class="twelve columns">

        <div class="page_title">
          <div class="row">
            <div class="twelve columns">
              <h1><?php print $title; ?></h1>
            </div>
          </div>
        </div>
      </div>
    <?php endif; ?>

    <?php if ($page['contact_map']): ?>
      <div class="twelve columns">
        <div class="map_location">
          <div class="map_canvas">
            <?php print render($page['contact_map']); ?>
          </div>
        </div>
      </div>
    <?php endif; ?>


    <!-- Main Content ( Middle Content) -->
    <?php
    $content_class = 'main-content';
    if ($page['sidebar_second'] || $page['sidebar_first']) {
      if ($page['sidebar_first']) {
        $content_class = 'eight columns push-four';
      } else {
        $content_class = 'eight columns';
      }
    }
    ?>
    <div class="clearfix"></div>
    <div id="content" class="<?php print $content_class; ?>">
      <?php print $messages; ?>
      <?php if (!empty($tabs['#primary']) || !empty($tabs['#secondary'])): ?>
        <div class="tabs">
          <?php print render($tabs); ?>
        </div>
      <?php endif; ?>
      <?php print render($page['help']); ?>
      <?php if ($action_links): ?>
        <ul class="action-links">
          <?php print render($action_links); ?>
        </ul>
      <?php endif; ?>
      <?php print render($page['content']); ?>
		
	 
      <?php print $feed_icons; ?>
    </div>

    <?php if ($page['sidebar_second']): ?>
      <div class="four columns sidebar-right">
        <?php print render($page['sidebar_second']); ?>
      </div>
    <?php endif; ?>

    <?php if ($page['sidebar_first']): ?>
      <div class="four columns pull-eight sidebar-left">
        <?php print render($page['sidebar_first']); ?>
      </div>
    <?php endif; ?>

    <!-- End Main Content ( Middle Content) -->
	
  </div>
  
  
   <?php if ($page['carousel-works']): ?>
		<!-- Bottom Content -->
		<div class="row">
		  <?php print render($page['carousel-works']); ?> 
		</div>
		<!-- End Bottom Content -->
		
	 <?php endif; ?>
</div>

<!-- End Region 4 Wrap -->

<!-- Region 9 Wrap    drupal_is_front_page()  -->

<div class="container region9wrap">


    <?php if (drupal_is_front_page()): ?>
		<!-- Bottom Content -->
		<div class="row content_bottom ">
			<div class="eight columns" id="search-caption">
				<h2 class="search-text">Search this website by keywords or browse from sections below</h2>
			</div>
			
		  <?php //if (!empty($seach_block_form)): ?>
			<div class="three columns home-search">

			  <div class="row">
				<div class="twelve columns">
				  <div class="row collapse top_search gaboli-test">
					<?php print $seach_block_form; ?>
				  </div>
				</div>
			  </div>

			</div>
		  <?php //endif; ?>
		</div>
		<!-- End Bottom Content -->
		
	 <?php endif; ?>
	 
	 

  <?php if ($page['footer_firstcolumn'] || $page['footer_secondcolumn'] || $page['footer_thirdcolumn'] || $page['footer_fourthcolumn']): ?>
    <!-- Footer -->  
    <div class="row footer">

      <!-- // // // // // // // // // // -->

      <div class="four columns">
        <?php print render($page['footer_firstcolumn']); ?>
      </div>

      <!-- // // // // // // // // // // -->

      <div class="four columns">
        <?php print render($page['footer_secondcolumn']); ?>

      </div>

      <!-- // // // // // // // // // // -->

      <div class="four columns">
        <?php print render($page['footer_thirdcolumn']); ?>

      </div>

      <!-- // // // // // // // // // // -->

	  <div class="four columns">
        <?php print render($page['footer_fourthcolumn']); ?>

      </div>

      <!-- // // // // // // // // // // -->

    </div>
    <!-- End Footer -->
  <?php endif; ?>

</div>

<!-- End Region 9 Wrap -->

<!-- Region 10 Wrap -->

<div class="container region10wrap">

  <div class="row footer_bottom">

    <!-- Bottom -->

    <!-- // // // // // // // // // // -->

    <div class="six columns footer_left">

      <p class="copyright"><?php print theme_get_setting('footer_copyright_message', 'touchm'); ?></p>

    </div>

    <!-- // // // // // // // // // // -->

    <div class="six columns footer_right">

      <?php print render($page['footer']); ?>

    </div>

    <!-- // // // // // // // // // // -->

    <!-- Bottom -->

  </div>
</div>

<!-- End Region 10 Wrap -->
	<script>
			
			$(function() {
				$(".flexnav").flexNav();
			});
			
	</script>

<!-- Back To Top -->
<a href="#" class="scrollup"><?php print t('Scroll up'); ?></a>
<!-- End Back To Top -->
