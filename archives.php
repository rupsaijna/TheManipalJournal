<?php
/*
Template Name: Archives
*/
get_header(); ?>

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
	
	
	<!-- Dotted line starts-->
	<div class="top_dotted_line"></div>
	<!-- Dotted line ends-->
	<div class="middle_main_content">
	
		<?php the_post(); ?>
		<h1 class="entry-title"><?php the_title(); ?></h1>
		
		<?php get_search_form(); ?>
		
		<h2>Archives by Month:</h2>
		<ul>
			<?php wp_get_archives('type=monthly'); ?>
		</ul>
		
		<h2>Archives by Subject:</h2>
		<ul>
			 <?php wp_list_categories(); ?>
		</ul>

	</div><!-- #content -->
	<?php get_sidebar(); ?>

</div><!-- #container -->

<?php get_footer(); ?>