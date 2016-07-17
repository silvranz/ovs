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

						echo tag('a', 'Login', array(
							'href' => $domain.'/users/login',
							'wrapTag' => 'li',
						));
				?>
      		</ul>
    	</div>
  	</div>
</nav>