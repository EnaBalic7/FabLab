<?php if (!defined('HTMLY')) die('HTMLy'); ?>
<!doctype html>
<html lang="<?php echo str_replace('_', '-', config('language'));?>">
<head>
    <?php echo head_contents();?>
    <title><?php echo $title;?></title>
	<meta property="og:image" content="<?php echo $ogImage; ?>"/>
    <meta name="description" content="<?php echo $description; ?>"/>
    <link rel="canonical" href="<?php echo $canonical; ?>" />

	<!-- bs 
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
	 -->
	
	
	<link rel="stylesheet" id="fairy-style-css" href="<?php echo site_url();?>themes/fairy/assets/css/style.css" media="all" />
	<link rel="stylesheet" href="<?php echo site_url();?>themes/fairy/assets/css/fairyStyle.css" media="all" />
	<link rel="stylesheet" href="<?php echo site_url();?>themes/fairy/assets/css/icons.css" media="all" />
	<link rel='dns-prefetch' href='//fonts.googleapis.com' />
	<link rel="stylesheet" id="Muli-400-300italic-300-css"  href="//fonts.googleapis.com/css?family=Muli%3A400%2C300italic%2C300" media="all" />
	  <link rel="stylesheet" href="./styles/icons.css">
  <link rel="stylesheet" href="./styles/w3.css">
  <link rel="stylesheet" href="../../styles/fairyStyle.css">

  <link rel="stylesheet" href="./styles/poppins.css">
	<link rel="stylesheet" id="Poppins-400-500-600-700-css"  href="//fonts.googleapis.com/css?family=Poppins%3A400%2C500%2C600%2C700" media="all" />
	<link rel="stylesheet" id="font-awesome" href="<?php echo site_url();?>themes/fairy/framework/font-awesome/css/font-awesome.min.css" media="all" />
	<link rel="stylesheet" id="slick-css" href="<?php echo site_url();?>themes/fairy/framework/slick/slick.css" media="all" />
	<link rel="stylesheet" id="slick-theme-css" href="<?php echo site_url();?>themes/fairy/framework/slick/slick-theme.css" media="all" />
	<script src="<?php echo site_url();?>themes/fairy/assets/js/jquery.min.js" id="jquery-core-js"></script>
	<script src="<?php echo site_url();?>themes/fairy/assets/js/icons.js" ></script>
	  <script src="../../js/icons.js"></script>
  <script src="../../js/script.js"></script>
</head>
<?php     
    if (isset($_GET['search'])) {
        $search = _h($_GET['search']);
        $url = site_url() . 'search/' . remove_accent($search);
        header("Location: $url");
    }
?>

<!-- added for comments -->
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v12.0&appId=850901832287157&autoLogAppEvents=1" nonce="x2QIVNEA"></script>
	
	
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '850901832287157',
      cookie     : true,
      xfbml      : true,
      version    : ' v12.0'
    });

    FB.AppEvents.logPageView();

  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "https://connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>	
<!--end comments -->
	
<body class="home blog hfeed ct-sticky-sidebar <?php echo $bodyclass;?>">

<?php if (facebook()) { echo facebook(); } ?>
<?php if (login()) { toolbar(); } ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content">Skip to content</a>
		
	<section class="search-section">
		<div class="container">
			<button class="close-btn"><i class="fa fa-times"></i></button>
			<form class="search-form">
				<label>
				<span class="screen-reader-text">Search for:</span>
				<input type="search" class="search-field" placeholder="Search &hellip;" value="" name="search" />
				</label>
				<input type="submit" class="search-submit" value="Search" />
			</form>           
		</div>
	</section>
				
	<header id="masthead" class="site-header text-center site-header-v2">
	<div class="navbar navbarNews navPosition">
  <div class="nav-head">
      <img class="homeeNews navLogo" src="../../../slike/logo.png" >
      <div id="hamburger" onclick="toggleNav()">
          <div></div>
          <div></div>
          <div></div>
      </div>
  </div>
  <div class="nav-content" id="nav-content">
    <a href="https://fablab.ba/" class="homeeNews">Home</a>
 <p style="color:white;text-align: center; position: absolute; top: 0; bottom: 0; left: 0; right: 0; margin-top:10px;font-size:25px;font-weight:600;">Fab News</p>
  </div>
</div>
		
	<!--	<div class="dropdown">
  <button class="btn btn-secondary" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
    M
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
    <li><a class="dropdown-item" href="/htmly/category/fab">Fab</a></li>
    <li><a class="dropdown-item" href="/htmly/category/uncategorized">Uncategorized</a></li>
    <li><a class="dropdown-item" href="#">Something else here</a></li>
  </ul>
</div> -->


 <section id="site-navigation" class="site-header-top header-main-bar" >
			<div class="container">
				<div class="row">
				<!-- <a href="https://fablab.ba/">  <img src="../../../slike/logo.png" alt="notFound" class="navLogoMob"> </a> -->
					<div class="col-1-1">
						<div class="site-branding">
							<h1 class="site-title"><a href="<?php echo site_url();?>" rel="home"><?php echo blog_title();?></a></h1>
							<p class="site-description"><?php echo blog_tagline();?></p>
						</div> 
						<!-- .site-branding -->
						 

						<button id="menu-toggle-button" class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
							<span class="line"></span>
							<span class="line"></span>
							<span class="line"></span>
						</button>
					</div>
				</div>
			</div>
		</section> 

	
 <section class="site-header-bottom">
			<div class="container">
				<nav class="main-navigation">
					<?php echo menu('primary-menu nav-menu justify-content-center');?>
				</nav> 
<!-- #site-navigation -->
		</div>
		</section>  
		
	</header><!-- #masthead -->
				
				
	<div id="content" class="site-content">
		<?php if (isset($is_front)):?>
		<?php $featured = get_tag('featured', 1, 6, false);?>
		<?php if (!empty($featured)):?>
		<section class="hero hero-slider-section">
			<div class="container">

				<div class="hero-style-carousel" data-slick='[]'>
				<?php foreach ($featured as $f):?>
					<div class="card card-bg-image">
						<div class="post-thumb">
							<figure class="card_media">
								<a href="<?php echo $f->url;?>">
									<?php if (!empty($f->image)) {?>
									<img src="<?php echo $f->image;?>"/>
									<?php } else { ?>
									<img src="<?php echo get_image($f->body);?>"/>
									<?php } ?>
								</a>
							</figure>
						</div>
						<article class="card_body">
							<div class="category-label-group bg-label"><span class="cat-links"><?php echo $f->category;?> </span></div>
							<h3 class="card_title"><a href="<?php echo $f->url;?>"><?php echo $f->title;?></a></h3>

							<div class="entry-meta">
							<span class="posted-on"><i class="fa fa-calendar"></i><a href="<?php echo $f->url;?>" rel="bookmark"><time class="entry-date published"><?php echo format_date($f->date);?></time></a></span>
							<span class="byline"> <span class="author"><i class="fa fa-user"></i><a class="ur" href="<?php echo $f->authorUrl;?>"><?php echo $f->authorName;?></a></span></span>
							</div>
						</article>
					</div>
				<?php endforeach;?>
				</div>

			</div>
		</section><!-- .hero -->
		<?php endif;?>
		<?php endif;?>
	
		<main class="site-main">
			<section class="blog-list-section sec-spacing">
				<div class="container">
					<div class="row ">
						<div id="primary" class="col-12 col-md-2-3 col-lg-2-3">
							<div class="fairy-content-area ">
								<?php echo content();?>                                
							</div>
						</div>					
						<div id="secondary" class="col-12 col-md-1-3 col-lg-1-3">					
							<aside class="widget-area">

								<section id="search-widget" class="widget widget_search">
									<form class="search-form">
									<label>
										<span class="screen-reader-text">Search for:</span>
										<input type="search" class="search-field" placeholder="Search …" value="" name="search">
									</label>
									<input type="submit" class="search-submit" value="Search">
									</form>
								</section>
								
								<section id="recent-posts-widget" class="widget widget_recent_entries">
									<h2 class="widget-title"><?php echo i18n("Recent_posts");?></h2>
									<?php echo recent_posts();?>
								</section>
									
								<?php if (config('views.counter') === 'true') :?>		
								<section id="popular-widget" class="widget widget_popular_entries">
									<h2 class="widget-title"><?php echo i18n("Popular_posts");?></h2>
									<?php echo popular_posts();?>
								</section>
								<?php endif;?>
								
								<?php if (disqus()): ?>
								<section id="comments_widget" class="widget widget_comments">
									<h2 class="widget-title">Recent Comments</h2>
									<script src="//<?php echo config('disqus.shortname');?>.disqus.com/recent_comments_widget.js?num_items=5&amp;hide_avatars=0&amp;avatar_size=48&amp;excerpt_length=200&amp;hide_mods=0" type="text/javascript"></script><style>li.dsq-widget-item {padding-top:15px;} img.dsq-widget-avatar {margin-right:5px;}</style>
								</section>
								<?php endif;?>
								
								<section id="categories-widget" class="widget widget_categories">
									<h2 class="widget-title"><?php echo i18n('Category');?></h2>
									<?php echo category_list();?>
								</section>
									
								<section id="archives-widget" class="widget archives">
								<style>.widget_archives ul.archivegroup li:before {content:'';}</style>
									<h2 class="widget-title"><?php echo i18n("Archives");?></h2>
									<?php echo archive_list();?>
								</section>
									
								<section id="tags-widget" class="widget widget_tags">
									<h2 class="widget-title"><?php echo i18n("Tags");?></h2>
									<div class="tag-cloud"><?php echo tag_cloud();?></div>
								</section>
									
							</aside><!-- #secondary -->
						</div>			
					</div>
				</div>
			</section>
		</main><!-- #main -->
	</div> <!-- #content -->
	
	<!-- <footer id="colophon" class="site-footer">
		<section class="site-footer-bottom">
			<div class="container">
				<div class="fairy-menu-social"></div>
				<div class="site-reserved text-center"><?php echo copyright();?><br><span>Designed by <a href="http://www.candidthemes.com/" target="_blank">Candid Themes</a></span></div> -->
                <!-- .site-info -->
			<!-- </div>
		</section>
	</footer> -->
    <!-- #colophon -->


    <!-- moj footer -->
     <!-- W3.CSS Container -->
     <div class="w3-light-grey w3-container w3-padding-25">
        <div class="footer">
          <div class="social">
            <a href="https://www.facebook.com/FabLabSarajevo/" target="_blank" title="FaceBook"><i
                class="fab fa-facebook-square fa-2x fb iconBg"></i></a>
            <a href="https://instagram.com/fablab_sarajevo" target="_blank" title="Instagram"><i
                class="fab fa-instagram fa-2x ig iconBg"></i></a>
            <a href="https://www.linkedin.com/company/fablab-bosnia/" target="_blank" title="LinkedIn"><i
                class="fab fa-linkedin fa-2x in iconBg"></i></a>
            <a href="https://www.youtube.com/channel/UCPcQN7iMKPt97w0ktjtk7mQ" target="_blank" title="YouTube"><i
                class="fab fa-youtube fa-2x yt iconBg"></i></a>
            <a href="https://github.com/FabLab-BiH" target="_blank" title="Github"><i
                class="fab fa-github fa-2x gh iconBg"></i></a>
          </div>
          <div class="contactInfo">
            <a href="https://goo.gl/maps/RCPKMmExtiyvqkg87" target="_blank" class="textDecoration"
              title="Click here to see our location"><i class="fas fa-map-marker-alt"></i>&nbsp;&nbsp;&nbsp;Zmaja od
              Bosne 8,
              71000 Sarajevo </a><br>
            <a href="mailto: info@fablab.ba" target="_blank" class="textDecoration"
              title="Contact us for all your questions!"><i class="fas fa-envelope"></i>&nbsp; info@fablab.ba</a><br>
            <a href="tel:+387-62-601060" target="_blank" class="textDecoration" title="Click to call us!"> <i
                class="fas fa-phone-alt"></i>&nbsp;+387 62 60 10 60 </a><br>
            &copy; FabLab 2021 &nbsp;Sarajevo
          </div>
          <!-- <br> -->
          <div class="terms">
            <span class="fade"><img src="../../../slike/privacy.png" width="20px"><a href="https://fablab.ba/?page=pages/en/terms"
                class="textDecoration" target="_blank"> Terms of service</a></span><br>
            <span class="fade"><img src="../../../slike/impressum.png" width="20px"> <a href="https://fablab.ba/?page=pages/en/impressum"
                class="textDecoration" target="_blank"> Impressum</a></span> <br>
            <span class="fade"><img src="../../../slike/terms.png" width="20px"> <a href="https://fablab.ba/?page=pages/en/policy"
                class="textDecoration" target="_blank"> Privacy policy</a> </span>
            <p></p>
          </div>
        </div>

      </div>
    </div>
  
  <!-- Cookie Notice plugin v1.3.2 by FabLab Factory https://fablab.ba/ -->
  <div align="center" id="cookie-notice" role="banner"
    class="cookie-notice-hidden cookie-revoke-hidden cn-position-bottom" aria-label="Cookie Notice" style="background-color: rgba(0,0,0,1);">
    <div class="cookie-notice-container" style="color: #fff;font-size:smaller">
      <span id="cn-notice-text" class="cn-text-container">
        We do not use cookies. Your Internet Protocol Address <?php echo $_SERVER['REMOTE_ADDR']; ?> is logged in our database.
      </span><span id="cn-notice-buttons" class="cn-buttons-container"></span>
    </div>

  </div>
  <!-- / Cookie Notice plugin -->
    <!-- end of moj footer -->


</div><!-- #page -->

<a href="javascript:void(0);" class="footer-go-to-top go-to-top"><i class="fa fa-long-arrow-up"></i></a>
<script src="<?php echo site_url();?>themes/fairy/assets/js/ResizeSensor.min.js"></script>
<script src="<?php echo site_url();?>themes/fairy/assets/js/theia-sticky-sidebar.min.js"></script>
<script src="<?php echo site_url();?>themes/fairy/framework/slick/slick.js"></script>
<script src="<?php echo site_url();?>themes/fairy/assets/js/custom.js"></script>
<?php if (analytics()): ?><?php echo analytics() ?><?php endif; ?>
</body>
</html>
