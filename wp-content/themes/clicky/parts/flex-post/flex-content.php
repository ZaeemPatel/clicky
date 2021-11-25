<?php 
$container = get_sub_field('container');
$id = get_sub_field('id');
$nmb = "";
$nmt = "";
if(get_sub_field('nmb')) :
	$nmb = "nmb";
endif;
if(get_sub_field('nmt')) :
	$nmt = "nmt";
endif;
$background_image = get_sub_field('background_image');
$title = get_sub_field('title'); 
$title_colour = get_sub_field('title_colour');
if($title_colour) {
	$title_colour = 'color: '. get_sub_field('title_colour') .'';
}
$content = get_sub_field('description');
?>