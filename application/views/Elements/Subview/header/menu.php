<?php
		$method_name = ucwords($this->router->method);

		// echo $method_name; die;
?>

<nav class="navbar navbar-inverse navbar-fixed-top">
  	<div class="container">
    	<div class="navbar-header">
      		<?php
      				$span = tag('span', 'Toggle Navigation', array(
      					'class' => 'sr-only'
      				));
      				for($i = 0; $i < 3; $i++){
      					$span .= tag('span', false, array(
      						'class' => 'icon-bar'
      					));
      				}

      				echo tag('button', $span, array(
      					'type' => 'button',
      					'class' => 'navbar-toggle collapsed',
      					'data-toggle' => 'collapse',
      					'data-target' => '#navbar',
      					'aria-expanded' => 'false',
      					'aria-controls' => 'navbar'
      				));

      				echo tag('a', 'Oversign', array(
						'href' => $domain,
						'class' => 'navbar-brand fbold'
					));
      		?>
      	</div>
    	<div id="navbar" class="collapse navbar-collapse">
      		<ul class="nav navbar-nav">
      			<?php
      					echo tag('a', 'Home', array(
							'href' => $domain,
							'wrapTag' => 'li',
						));

						echo tag('a', 'Template', array(
							'href' => $domain.'/template/find',
							'wrapTag' => 'li',
						));

						echo tag('a', 'Our Clients', array(
							'href' => $domain.'/pages/client',
							'wrapTag' => 'li',
						));
				?>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<?php
						if( isLoggedIn() ) { 
        		?>
        		<li id="user-menu-dropdown" class="dropdown">
        			<?php
        					$userphoto = $this->session->userdata('userphoto');
							$path_image = '/assets/images/uploads/users/thumbs/'.$userphoto;
							$custom_image = $domain.$path_image;
							if( !file_exists( $webroot.$path_image ) ) {
								$custom_image = $domain.'/assets/images/placeholder/users.jpg';
							}

        					$userImage = tag('img', strtok($this->session->userdata('username'), " "), array(
        						'class' => 'pull-left _mt7 mr5 img-circle',
        						'src' => $custom_image,
        						'style' => 'width: 35px; height: 35px;',
        					));
        					$caret = tag('b', false, array(
        						'class' => 'caret',
        					));

        					echo tag('a', $userImage.$caret, array(
        						'href' => '#',
        						'class' => 'dropdown-toggle', 
        						'data-toggle' => 'dropdown',
        					));
        			?>
		          	<ul class="dropdown-menu">
		          		<?php
		          				echo tag('a', 'My Website', array(
									'href' => $domain.'/website',
									'wrapTag' => 'li',
								));

		          				echo tag('a', 'My Profile', array(
		          					'href' => $domain.'/users/profile',
		          					'wrapTag' => 'li',
		          				));

		          				echo divider();

		          				echo tag('a', 'Logout', array(
		          					'href' => $domain.'/users/logout',
		          					'wrapTag' => 'li',
		          				));
		          		?>
		          	</ul>
		        </li>
		        <?php
		        		} else {
		        			echo tag('a', 'Login', array(
		        				'href' => $domain.'/users/login',
		        				'data-title' => 'Login',
		        				'wrapTag' => 'li'
		        			));
		        		}
		        ?>
      		</ul>
    	</div>
  	</div>
</nav>