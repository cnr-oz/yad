<?php
/*
 * bootstrap Menu
 * 
 * since 1.0.0
 */
function bootstrap_menu( $slug = '', $mobile = true ) {

	if( has_nav_menu( $slug ) ) {
		?>
		<div id="main-menus">
			<div id="nav-container">
				<?php if( $mobile = true ) : ?>
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="sr-only"><?php _e('Toggle navigation', 'scratch'); ?></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
				<?php endif; ?>
				<?php wp_nav_menu(array(
					'theme_location'	=> $slug,
					'container'	=> false,
					'menu_class' => 'nav navbar-nav',
					'items_wrap' => '<nav class="collapse navbar-collapse"><ul id="%1$s" class="%2$s">%3$s</ul></nav>'
				));?>
			</div>
		</div>
		<?php
	}
}


function cnr_social_menu( $theme_location ) {

	$menu_list  = '<nav>' ."\n";
	$menu_list .= '<ul class="top-nav">' ."\n";

	if ( ($theme_location) && ($locations = get_nav_menu_locations()) && isset($locations[$theme_location]) ) {

		$menu = get_term( $locations[$theme_location], 'nav_menu' );
		$menu_items = wp_get_nav_menu_items($menu->term_id);

		$count = 0;
		$submenu = false;

		foreach( $menu_items as $menu_item ) {

			$link = $menu_item->url;
			$title = $menu_item->title;

			if ( !$menu_item->menu_item_parent ) {
				$parent_id = $menu_item->ID;

				$menu_list .= '<li class="item">' ."\n";
				$menu_list .= '<a href="'.$link.'" class="title">'.$title.'</a>' ."\n";
			}

			if ( $parent_id == $menu_item->menu_item_parent ) {

				if ( !$submenu ) {
					$submenu = true;
					$menu_list .= '<ul class="sub-menu">' ."\n";
				}

				$menu_list .= '<li class="item">' ."\n";
				$menu_list .= '<a href="'.$link.'" class="title">'.$title.'</a>' ."\n";
				$menu_list .= '</li>' ."\n";


				if ( $menu_items[ $count + 1 ]->menu_item_parent != $parent_id && $submenu ){
					$menu_list .= '</ul>' ."\n";
					$submenu = false;
				}

			}

			if ( $menu_items[ $count + 1 ]->menu_item_parent != $parent_id ) {
				$menu_list .= '</li>' ."\n";
				$submenu = false;
			}

			$count++;
		}

	}

	$menu_list .= '<li><a href="#">ראשי</a></li>';
	$menu_list .= '<li><a href="#">איך מגיעים?</a></li>';


	$tel = of_get_option('tel');
	if($tel){
		$menu_list .= '<li><a href="tel:' . $tel . '">' . $tel . '</a></li>';
	}


	$fb = of_get_option('facebook');
	if($fb){
		$menu_list .= '<li><a href=" ' . $fb . '"<i class="fa fa-facebook"></i></a></li>';
	}

	$twtter = of_get_option('twitter');
	if( $twtter ) {
		$menu_list .= '<li><a href="' . $twtter . '"><i class="fa fa-twitter"></i></a></li>';
	}

	$yt = of_get_option('youtube');
	if ($yt) {
		$menu_list .= '<li><a href="' . $yt . '"><i class="fa fa-youtube"></i></a></li>';
	}

	$menu_list .= '</ul>' ."\n";
	$menu_list .= '</nav>' ."\n";

	echo $menu_list;
}