<?php 
$container = get_sub_field('container');
$id = get_sub_field('id');
$nmb = "";
$nmt = "";
if(get_sub_field('nmb')) :
	$nmb = " nmb";
endif;
if(get_sub_field('nmt')) :
	$nmt = "nmt";
endif;
$background_image = get_sub_field('background_image');
if($background_image) {
	$background_image = 'background:linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url(' . $background_image['sizes']['2048x2048'] . ')';
}
$title = get_sub_field('title'); 
$title_colour = get_sub_field('title_colour');
if($title_colour) {
	$title_colour = 'color: '. get_sub_field('title_colour') .'';
}
$content = get_sub_field('description');
?>

<div class="top_banner dib w-100 rel anim mt mb <?php echo $nmt; echo $nmb; ?>" id="<?php echo $id; ?>">

	<?php if($container) : ?>
	<div class="container">
	<?php endif; ?>

		<div class="banner_image fade-in background-image rel" style="<?php echo $background_image; ?>">
			
			<div class="container content_area flex flex-column text-center in-left">

				<?php if($title) : ?>
					<h1 class="page-title" style="<?php echo $title_colour ?>;"><?php echo $title; ?></h1>
				<?php endif; ?>

				<?php if($content) : ?>
					<div class="content">
						<?php echo $content;?>
					</div>
				<?php endif; ?>

				<?php if(have_rows('button_repeater')) : ?>
					<ul class="no_style_ul button_wrapper smt">					
						<?php while(have_rows('button_repeater')) : the_row(); ?>
							<?php $button_label = get_sub_field('button_label'); ?>
							<?php $button_class = get_sub_field('button_class'); ?>
							<?php $button_link = ""; ?>
							<?php $target = ""; ?>
							<?php $new_tab = get_sub_field('new_tab'); ?>
							<?php if($new_tab) : ?>
								<?php $target = 'target="_blank"'; ?>
							<?php endif; ?>
							<?php while(have_rows('button_link_banner')) : the_row(); ?>
								<?php if( get_row_layout() == 'button_text_link' ) : ?>
									<?php $button_link = get_sub_field('link'); ?>
								<?php elseif(get_row_layout() == 'button_page_link') : ?>
									<?php $button_link = get_sub_field('link'); ?>
								<?php endif; ?>
							<?php endwhile; ?>
							<li class="dib">
								<a href="<?php echo $button_link; ?>" class="button_std sml smr dib <?php echo $button_class ?>" <?php echo $target; ?>><?php echo $button_label; ?></a>
							</li>
						<?php endwhile; ?>
					</ul>
				<?php endif; ?>
				
			</div>

		</div>

	<?php if($container) : ?>
	</div>
	<?php endif; ?>

</div>