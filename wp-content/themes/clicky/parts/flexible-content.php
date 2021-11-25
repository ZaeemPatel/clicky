<?php 
if( !post_password_required( $post )):

	while ( have_rows('content') ) : the_row();

		if( get_row_layout() == 'banner' ){
			include(locate_template('parts/flex-post/flex-banner.php'));
			continue;
		}

		elseif( get_row_layout() == 'half_and_half' ){
			include(locate_template('parts/flex-post/flex-half-and-half.php'));
			continue;
		}

		elseif( get_row_layout() == 'slider' ){
			include(locate_template('parts/flex-post/flex-slider.php'));
			continue;
		}

		elseif( get_row_layout() == 'accordion' ){
			include(locate_template('parts/flex-post/flex-accordion.php'));
			continue;
		}

		elseif( get_row_layout() == 'card_row' ){
			include(locate_template('parts/flex-post/flex-card-row.php'));
			continue;
		}

		elseif( get_row_layout() == 'content_block' ){
			include(locate_template('parts/flex-post/flex-content.php'));
			continue; 
		}

		elseif( get_row_layout() == 'contact_form' ){
			include(locate_template('parts/flex-post/flex-contact-form.php'));
			continue;
		}

	endwhile;

endif;