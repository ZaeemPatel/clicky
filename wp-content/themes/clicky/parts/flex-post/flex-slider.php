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
?>

<div class="flex_slider dib w-100 rel mt mb <?php echo $nmt; echo $nmb; ?>" id="<?php echo $id; ?>">
	<?php if($container) : ?>
	<div class="container">
	<?php endif; ?>

	<?php if(have_rows('slides')) { ?>
		<ul class="no_style_ul slider">
			<?php while(have_rows('slides')) { the_row(); ?>
				<?php 
				$background_image = get_sub_field('background_image');
				if($background_image) {
					$background_image = 'background:linear-gradient(rgba(0,0,0,0.25),rgba(0,0,0,0.25)),url(' . $background_image['sizes']['large'] . ')';
				}
				$profile_image = get_sub_field('profile_image');
				$description = get_sub_field('description'); 
				?>
				<li class="flex background-image" style="<?php echo $background_image; ?>">
					<div class="slide-content flex flex-column">
						<?php if($profile_image) { ?>
							<img src="<?php echo $profile_image['sizes']['large'] ?>" class="mb" alt="<?php echo $profile_image['alt']; ?>">
						<?php } ?>
						<?php if($description) { ?>
							<div class="content text_white text-center">
								<?php echo $description; ?>	
							</div>
						<?php } ?>
					</div>
				</li>
			<?php } ?>
		</ul>
	<?php } ?>

	<?php if($container) : ?>
	</div>
	<?php endif; ?>
</div>