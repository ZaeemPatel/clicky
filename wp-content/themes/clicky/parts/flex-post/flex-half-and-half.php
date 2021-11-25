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
$title = get_sub_field('title'); 
$title_colour = get_sub_field('title_colour');
if($title_colour) {
	$title_colour = 'color: '. $title_colour .'';
}
$content = get_sub_field('content_block');
$image = get_sub_field('image');
?>

<div class="half_and_half dib w-100 rel anim mt mb <?php echo $nmt; echo $nmb; ?>" id="<?php echo $id; ?>">

	<?php if($container) : ?>
	<div class="container">
	<?php endif; ?>

		<div class="left col-sm-6 in-left">
			<div class="content">
				<?php if($title) { ?>
					<h2 style="<?php echo $title_colour; ?>"><?php echo $title ?></h2>
				<?php } ?>
				<?php if($content) { ?>				
					<?php echo $content; ?>				
				<?php } ?>
			</div>
		</div>

		<div class="right col-sm-6 in-right flex">
			<?php if($image) { ?>	
				<img src="<?php echo $image['sizes']['2048x2048']; ?>" class="w-100" alt="<?php echo $image['alt']; ?>">
			<?php } ?>
		</div>
		

	<?php if($container) : ?>
	</div>
	<?php endif; ?>

</div>