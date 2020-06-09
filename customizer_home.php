Replace the categories and reviews section with a place to put paid banner ads on the home page (a slider to show the banners)
Added a plugin smart slider.
In Theme editor: DirectoryEngine: customizer_home.php (customizer/customizer_home.php)
//block_5();
$slider = get_theme_mod('title_block_4_review', '[smartslider3 slider=1]');
	echo do_shortcode($slider);
