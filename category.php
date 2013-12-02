<?php get_header(); ?>

<div class="top_editors_note">
		<div class="editors_note">Editor's Note </div>
		<div class="top_editors_note_divider">|</div>
		<div class="top_editors_note_text">This is dummy text placed here as place holder. This will be replaced with content.</div>
	</div>
	
	<div class="search_box">
		<div class="search_button"><input type="image" src="<?php bloginfo('stylesheet_directory')?>/images/search.jpg"  /></div>
		<div class="advncd_search"><input type="image" src="<?php bloginfo('stylesheet_directory')?>/images/advncd_search.jpg"  /></div>
		<div class="text_area"><input type="text" name="search_string" class="search_text" /></div>
	</div>
	
	<?php if (have_posts()) : ?>
	<div class="inner_middle_section">
		<div class="inner_middle_main_heading">
			<div class="inner_middle_main_heading_text"><a href=""><h3><?php single_cat_title(); ?></h3></div>
		</div>
		<div class="cleardiv"></div>
			<?php while (have_posts()) : the_post(); ?>
			<?php $cur_id=get_the_ID();?>
		<div class="middle_main_content">
			<div class="middle_main_content_activities_photo"><img src="<?php $thumb = bdw_get_images($cur_id);echo $thumb;?>"></div>
			<div class="middle_main_content_activities_photo_heading2"><a href="<?php the_permalink() ?>" class="gen_middle"><?php the_title(); ?></a></div>
			<div class="middle_main_content_activities_photo_text2"><?php the_excerpt()?></div><div class="cleardiv"></div>
			<div class="middle_main_content_activities_border2"></div>
			<div class="cleardiv"></div>
		</div>
<?php endwhile; ?>
<?php endif; ?>
<div class="cleardiv"></div>
</div>

<?php get_sidebar('sbar'); ?>
		</div>
	<?php get_footer(); ?>