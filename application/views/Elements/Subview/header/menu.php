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
      		<ul class="nav navbar-nav navbar-right">
      			<?php
      					echo tag('a', 'Template', array(
							'href' => $domain.'/template/find',
							'wrapTag' => 'li',
						));

      					echo tag('a', 'Forum', array(
							'href' => $domain.'/pages/forum',
							'wrapTag' => 'li',
						));
      					
						echo tag('a', 'Widget', array(
							'href' => $domain.'/pages/widget',
							'wrapTag' => 'li',
						));

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
		          				echo tag('a', 'Logout', array(
		          					'href' => $domain.'/users/logout',
		          					'wrapTag' => 'li',
		          				));
		          		?>
		          	</ul>
		        </li>
		        <?php
		        		} else {
		        			$method_name = ucwords($this->router->method);
		        			$display_text = 'Login';

		        			if( $method_name == 'Login' || $method_name == 'Register' ) {
		        				if( $method_name == 'Login' ) {
		        					$display_text = 'Register';
		        				}
		        			}

		        			echo tag('a', $display_text, array(
		        				'href' => $domain.'/users/'.strtolower($display_text),
		        				'data-title' => 'Login',
		        				'wrapTag' => 'li'
		        			));
		        		}
		        ?>
      		</ul>
    	</div>
  	</div>
</nav>