<?php 
$left_top_label = get_field('left_top_label', 'options');
$left_top_link = "";
if(have_rows('left_top_link')) {
	while(have_rows('left_top_link')) { the_row(); 
		if(get_row_layout() == 'page_link') {
			$left_top_link = get_sub_field('page_link');
		} elseif(get_row_layout() == 'text_link') {
			$left_top_link = get_sub_field('text_link');
		}
	}
}
$middle_top_label = get_field('middle_top_label', 'options');
$middle_top_link = "";
if(have_rows('middle_top_link')) {
	while(have_rows('middle_top_link')) { the_row(); 
		if(get_row_layout() == 'page_link') {
			$middle_top_link = get_sub_field('page_link');
		} elseif(get_row_layout() == 'text_link') {
			$middle_top_link = get_sub_field('text_link');
		}
	}
}
$right_top_label = get_field('right_top_label', 'options');
$right_top_link = "";
if(have_rows('right_top_link')) {
	while(have_rows('right_top_link')) { the_row(); 
		if(get_row_layout() == 'page_link') {
			$right_top_link = get_sub_field('page_link');
		} elseif(get_row_layout() == 'text_link') {
			$right_top_link = get_sub_field('text_link');
		}
	}
}
$email = get_field('email', 'options');
$tel = get_field('contact_number', 'options');
$newsletter_shortcode = get_field('newsletter_shortcode', 'options');
?>

</div> <!-- #main-container -->
<footer class="background-image rel" style="background-image:url('<?php echo get_template_directory_uri(); ?>/assets/rectangle-light-dark.png');">
	<div class="container flex flex-row align-start">
		<div class="flex flex-row space-between xpt w-100">
			<div class="footer-left">
				<a href="<?php echo $left_top_link ?>" class="text-caps text_white"><?php echo $left_top_label ?></a>
				<?php if(have_rows('footer_left_links', 'options')) { ?>
					<ul>
					<?php while(have_rows('footer_left_links', 'options')) { the_row();
						$footer_left_label = get_sub_field('label', 'options');
						$footer_left_link = "";
						if(have_rows('link', 'options')) {
							while(have_rows('link', 'options')) { the_row(); 
								if(get_row_layout() == 'page_link') {
									$footer_left_link = get_sub_field('page_link', 'options');
								} elseif(get_row_layout() == 'text_link') {
									$footer_left_link = get_sub_field('text_link', 'options');
								}
							}
						} ?>
						<li>
							<a href="<?php echo $footer_left_link ?>" class="text_white"><?php echo $footer_left_label; ?></a>
						</li>
					<?php } ?>
					</ul>
				<?php } ?>
			</div>
			<div class="footer-middle">
				<a href="<?php echo $middle_top_link ?>" class="text-caps text_white"><?php echo $middle_top_label ?></a>
				<?php if(have_rows('footer_middle_links', 'options')) { ?>
					<ul>
					<?php while(have_rows('footer_middle_links', 'options')) { the_row();
						$footer_middle_label = get_sub_field('label', 'options');
						$footer_middle_link = "";
						if(have_rows('link', 'options')) {
							while(have_rows('link', 'options')) { the_row(); 
								if(get_row_layout() == 'page_link') {
									$footer_middle_link = get_sub_field('page_link', 'options');
								} elseif(get_row_layout() == 'text_link') {
									$footer_middle_link = get_sub_field('text_link', 'options');
								}
							}
						} ?>
						<li>
							<a href="<?php echo $footer_middle_link ?>" class="text_white"><?php echo $footer_middle_label; ?></a>
						</li>
					<?php } ?>
					</ul>
				<?php } ?>
			</div>
			<div class="footer-right">
				<a href="<?php echo $right_top_link ?>" class="text-caps text_white"><?php echo $right_top_label ?></a>
				<?php if(have_rows('footer_right_links', 'options')) { ?>
					<ul>
					<?php while(have_rows('footer_right_links', 'options')) { the_row();
						$footer_right_label = get_sub_field('label', 'options');
						$footer_right_link = "";
						if(have_rows('link', 'options')) {
							while(have_rows('link', 'options')) { the_row(); 
								if(get_row_layout() == 'page_link') {
									$footer_right_link = get_sub_field('page_link', 'options');
								} elseif(get_row_layout() == 'text_link') {
									$footer_right_link = get_sub_field('text_link', 'options');
								}
							}
						} ?>
						<li>
							<a href="<?php echo $footer_right_link ?>" class="text_white"><?php echo $footer_right_label; ?></a>
						</li>
					<?php } ?>
					</ul>
				<?php } ?>
			</div>		
			<div class="footer-contact">
				<?php if($newsletter_shortcode) { ?>
					<?php echo do_shortcode($newsletter_shortcode); ?>
				<?php } ?>
				<div class="flex flex-row space-between">
					<?php if($tel) { ?>
						<a href="tel: <?php echo $tel; ?>" class="text_white dib smr"><?php echo $tel; ?></a>
					<?php } ?>
					<?php if($email) { ?>
						<a href="mailto: <?php echo $email; ?>" class="text_white dib sml"><?php echo $email; ?></a>
					<?php } ?>
				</div>
			</div>
		</div>
		<div class="footer-bottom abs ptb">
			<p class="text-center text-caps text_white nmb">
				Copyright Company Name | Website Design and Development by Clicky
			</p>
		</div>
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>