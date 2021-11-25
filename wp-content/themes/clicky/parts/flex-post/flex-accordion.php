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
$bg_img_class = "";
if($background_image) {
	$background_image = 'background-image: url(' . $background_image['sizes']['2048x2048'] . ')';
	$bg_img_class = " background-image";
}
$title = get_sub_field('title'); 
$title_colour = get_sub_field('title_colour');
if($title_colour) {
	$title_colour = 'color: '. $title_colour .'';
}
?>

<div class="flex_accordion anim dib w-100 xptb rel mt mb <?php echo $nmt; echo $nmb; echo $bg_img_class; ?>" id="<?php echo $id; ?>" style="<?php echo $background_image ?>">
	<?php if($container) : ?>
	<div class="container">
	<?php endif; ?>

	<?php if($title) { ?>
		<h2 class="text-center in-left mb" style="<?php echo $title_colour; ?>"><?php echo $title; ?></h2>
	<?php } ?>

	<?php if(have_rows('accordion')) { ?>
		<div class="" id="accordion">
			<?php 
			$count = 0;
			while(have_rows('accordion')) { the_row();
				$accordion_title = get_sub_field('accordion_title');
				$accordion_title_colour = get_sub_field('accordion_title_colour');
				if($accordion_title_colour) {
					$accordion_title_colour = 'color: '. $accordion_title_colour .'';
				}
				$accordion_content = get_sub_field('accordion_content');
				?>
			  	<div class="card in-left">
			    	<div class="card-header" id="<?php echo "heading-$count"; ?>">
			    		<?php if($accordion_title) { ?>
				      		<h4 style="<?php echo $accordion_title_colour; ?>">
				       			<button class="text_white" data-toggle="collapse" data-target="<?php echo "#collapse-$count"; ?>" aria-expanded="false" aria-controls="<?php echo "collapse-$count"; ?>">
				          		<?php echo $accordion_title; ?>
				        		</button>
				      		</h4>
				      	<?php } ?>
			    	</div>
			   		<div id="<?php echo "collapse-$count"; ?>" class="collapse" aria-labelledby="<?php echo "heading-$count"; ?>" data-parent="#accordion">
			      		<div class="card-body text_white">
			      			<?php 
			      			if($accordion_content) {
			        			echo $accordion_content;
			        		}
			        		?>
			      		</div>
			    	</div>
			  	</div>	
			  	<?php $count++; ?>
		  	<?php } ?>	  
		</div>
	<?php } ?>

	<?php if($container) : ?>
	</div>
	<?php endif; ?>
</div>