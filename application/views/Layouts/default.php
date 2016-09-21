<!DOCTYPE html>
<html lang="en" xmlns:fb="http://ogp.me/ns/fb#">
	<head>
		<?php
				$site_title = isset($site_title) ? $site_title.' - ' : '';
				echo tag('title', $site_title.' Oversign');
		?>

		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="robots" content="index,follow" />
		
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta name="keywords" content="oversign, website templates" />
		<meta name="description" content="Oversign is a collection of website templates." />
		<meta name="author" content="Oversign" />
		<meta name="copyright" content="oversign.com" />
		<meta name="application-name" content="oversign" />

		<meta property="og:type" content="article" />
		<?php
				if( !empty($og_meta) ) {
					if( !empty($og_meta['title']) ) {
						echo '<meta property="og:title" content="'.htmlspecialchars($og_meta['title']).'" />';
					}
					if( !empty($og_meta['url']) ) {
						echo '<meta property="og:url" content="'.utf8_encode($og_meta['url']).'" />';
					}
					if( !empty($og_meta['image']) ) {
						echo '<meta property="og:image" content="'.$og_meta['image'].'" />';
					}
					if( !empty($og_meta['desc']) ) {
						echo '<meta property="og:description" content="'.strip_tags($og_meta['desc']).'" />';
					}
				} else {
		?>
					<meta property="og:title" content="Oversign" />
					<meta property="og:url" content="http://oversign.com" />
					<meta property="og:image" content="http://oversign.com/assets/images/logos/logo.jpg" />
					<meta property="og:description" content="Oversign is a collection of website templates." />
		<?php
				}
		?>

		<link rel="canonical" href="http://www.oversign.com/" />
		<link rel="shortcut icon" href="<?php echo $domain.'/assets/images/logos/favicon.ico'; ?>" type="image/x-icon">
		<link rel="icon" href="<?php echo $domain.'/assets/images/logos/favicon.ico'; ?>" type="image/x-icon">

		<?php
				load_css(array(
					'bootstrap/bootstrap',
					'bootstrap/docs',
					'custom',
				));

				if(isset($additional_css) && !empty($additional_css)){
	                load_css($additional_css);
	            }
		?>
	</head>
	<body>
		<?php
				loadSubview('header/menu');
		  		if( isset($content_view)  ) {
		  			echo $content_view;
		  		}
		  		loadSubview('footer/footer');

				echo tag('div', false, array(
					'id' => 'myModal',
					'class' => 'modal fade',
				));

				$imageLoading = tag('span', 'Loading...', array(
					'style' => 'width:25px; height:auto; display:block; margin: 0 12px;',
					'wrapTag' => 'div',
					'wrapAttributes' => array(
						'style' => 'position:absolute; left:47%; top:45%; color:white;',
					),
				));

				echo tag('div', $imageLoading, array(
					'class' => 'overlay'
				));

				/* Load core library first, then load additional script */
				load_script(array(
					'jquery/jquery.min',
					'bootstrap/bootstrap.min',
				));

				if(isset($additional_js) && !empty($additional_js)) {
	                load_script($additional_js);
	            }

	            load_script(array(
					'functions',
				));
		?>
	</body>
</html>