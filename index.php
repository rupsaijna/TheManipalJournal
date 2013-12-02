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
	
	
	<!-- Dotted line starts-->
	<div class="top_dotted_line"></div>
	<!-- Dotted line ends-->
	
	<!-- Middle section with the big photo starts here-->
	
	<div class="middle_main_content">
		<div class="middle_main_content_photo_section">
		
		<!--slideshow starts here-->
		<div id="slideshow" class="pics">
			<?php $i=0;if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); $i++?>
			<?php $cur_id=get_the_ID();?>
			<?php if($i<=4){?>
			<div class="slideshow_holder"><!--Image holder starts here-->
				<div class="middle_main_content_photo">
					<img src="<?php $thumb = bdw_get_images($cur_id);echo $thumb;?>" width="451" height="305" />
					<div class="middle_main_content_photo_text"><?php the_post_thumbnail_caption();?></div>
				</div><!--Image holder ends here-->
				<div class="middle_main_content_photo_heading"><a href="<?php the_permalink() ?>" class="gen_main"><?php the_title(); ?></a></div>
				<div class="middle_main_content_photo_details"><?php the_excerpt()?></div>
			</div><!--Image and image info container ends here-->
			<?php }endwhile;?>
			<?php endif?>
		</div>
			<div class="cleardiv"></div>
		<div class="middle_main_content_photo_selector"></div></div>
		
		
		
		<?php rewind_posts();$i=0; ?>
		<?php if (have_posts()) : ?>
		<?php while (have_posts()) : the_post(); $i++?>
		<?php $cur_id=get_the_ID();?>
			<?php if($i>4 && $i<=7){?>
			<div class="middle_main_content_activity">
			<div class="middle_main_content_activities_photo"><img src="<?php $thumb = bdw_get_images($cur_id);echo $thumb;?>"></div>
			<div class="middle_main_content_activities_photo_heading"><a href="<?php the_permalink() ?>" class="gen_middle"><?php the_title(); ?></a></div>
			<div class="middle_main_content_activities_photo_text"><?php the_excerpt()?></div>
			<div class="middle_main_content_activities_border"></div>
			<div class="cleardiv"></div>
			</div>
		<?php }endwhile;?>
		<?php endif?>
		<div class="cleardiv"></div>
	</div>
	<!-- Middle section with the big photo ends here-->
	<?php get_sidebar(); ?>
	
	<!-- The lower part containing other details starts here -->
	<div class="lower_about">
		
		<div class="picture_story">
		<?php rewind_posts();$topi=0; $id=get_cat_ID('Picture Story');?>
		<div class="picture_story_header">
				<div class="lower_about_single_detail_header_heading">Picture Story</div>
				<div class="lower_about_single_detail_header_view-all"><a href="<?php echo get_category_link( $id )?>" class="low_gen">View All >></a></div>
		</div>
		<ul id="mycarousel" class="jcarousel-skin-tango">
		<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post();?>
				<?php if (in_category('Picture Story')){$topi++;if($topi<=9){?>
				<?php $cur_id=get_the_ID();?>
				<li><div class="pics_section_photos" style="float:right; margin-right:10px"><img src="<?php $thumb = bdw_get_images($cur_id);echo $thumb;?>"/><div class="pics_section_photos_text"><a href="<?php the_permalink(); ?>" class="gen"><?php the_title(); ?></a></div></div></li>
				<?php }}endwhile;?>
				<?php endif?>
  </ul>
  </div>
		<!--divisions-->
		<?php rewind_posts();$topi=0; $id=get_cat_ID('Top Stories');?>
		<div class="lower_about_single_detail_left">
			<div class="lower_about_single_detail_header">
				<div class="lower_about_single_detail_header_heading">Top Stories</div>
				<div class="lower_about_single_detail_header_view-all"><a href="<?php echo get_category_link( $id )?>" class="low_gen">View All >></a></div>
			</div>
			<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post();?>
				<?php if (in_category('Top Stories')){if($topi==0){?>
				<?php $cur_id=get_the_ID();?>
					<div class="lower_about_single_detail_photo"><img src="<?php $thumb = bdw_get_images($cur_id);echo $thumb;?>" /></div>
					<div class="lower_about_single_detail_photo_heading"><a href="<?php the_permalink(); ?>" class="gen"><?php the_title(); ?></a></div>
					<div class="lower_about_single_detail_header_text"><?php the_excerpt();?></div>
					<div class="lower_about_single_detail_border"></div><?php $topi++;}elseif($topi>0 && $topi<4){?>
					<div class="lower_point_stud"></div>
					<div class="lower_about_single_detail_points"><a href="<?php the_permalink();?>" class="gen"><?php the_title(); ?></a></div>
					<div class="lower_about_single_detail_border"></div>
					<div class="cleardiv"></div>
			<?php $topi++;}else {}?>
			<?php }endwhile;?>
		<?php endif?>
		</div>
		
		<?php rewind_posts();$topi=0; ?>
		<div class="lower_about_single_detail_right">
			<div class="lower_about_single_detail_header">
				<div class="lower_about_single_detail_header_heading">Campus</div>
				<div class="lower_about_single_detail_header_view-all"><a href="" class="low_gen">View All >></a></div>
			</div>
			<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post();?>
				<?php if (in_category('Campus')){if($topi==0){?>
				<?php $cur_id=get_the_ID();?>
					<div class="lower_about_single_detail_photo"><img src="<?php $thumb = bdw_get_images($cur_id);echo $thumb;?>" /></div>
					<div class="lower_about_single_detail_photo_heading"><a href="<?php the_permalink(); ?>" class="gen"><?php the_title(); ?></a></div>
					<div class="lower_about_single_detail_header_text"><?php the_excerpt();?></div>
					<div class="lower_about_single_detail_border"></div><?php $topi++;}elseif($topi>0 && $topi<5){?>
					<div class="lower_point_stud"></div>
					<div class="lower_about_single_detail_points"><a href="<?php the_permalink();?>" class="gen"><?php the_title(); ?></a></div>
					<div class="lower_about_single_detail_border"></div>
					<div class="cleardiv"></div>
			<?php $topi++;}else {}?>
			<?php }endwhile;?>
		<?php endif?>
		</div>
		
		<?php rewind_posts();$topi=0; ?>
		<div class="lower_about_single_detail_left">
			<div class="lower_about_single_detail_header">
				<div class="lower_about_single_detail_header_heading">TMJ Special</div>
				<div class="lower_about_single_detail_header_view-all"><a href="" class="low_gen">View All >></a></div>
			</div>
			<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post();?>
				<?php if (in_category('TMJ Special')){if($topi==0){?>
				<?php $cur_id=get_the_ID();?>
					<div class="lower_about_single_detail_photo"><img src="<?php $thumb = bdw_get_images($cur_id);echo $thumb;?>" /></div>
					<div class="lower_about_single_detail_photo_heading"><a href="<?php the_permalink(); ?>" class="gen"><?php the_title(); ?></a></div>
					<div class="lower_about_single_detail_header_text"><?php the_excerpt();?></div>
					<div class="lower_about_single_detail_border"></div><?php $topi++;}elseif($topi>0 && $topi<5){?>
					<div class="lower_point_stud"></div>
					<div class="lower_about_single_detail_points"><a href="<?php the_permalink();?>" class="gen"><?php the_title(); ?></a></div>
					<div class="lower_about_single_detail_border"></div>
					<div class="cleardiv"></div>
			<?php $topi++;}else {}?>
			<?php }endwhile;?>
		<?php endif?>
		</div>
		
		<?php rewind_posts();$topi=0; ?>
		<div class="lower_about_single_detail_right">
			<div class="lower_about_single_detail_header">
				<div class="lower_about_single_detail_header_heading">Interviews</div>
				<div class="lower_about_single_detail_header_view-all"><a href="" class="low_gen">View All >></a></div>
			</div>
			<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post();?>
				<?php if (in_category('Interviews')){if($topi==0){?>
				<?php $cur_id=get_the_ID();?>
					<div class="lower_about_single_detail_photo"><img src="<?php $thumb = bdw_get_images($cur_id);echo $thumb;?>" /></div>
					<div class="lower_about_single_detail_photo_heading"><a href="<?php the_permalink(); ?>" class="gen"><?php the_title(); ?></a></div>
					<div class="lower_about_single_detail_header_text"><?php the_excerpt();?></div>
					<div class="lower_about_single_detail_border"></div><?php $topi++;}elseif($topi>0 && $topi<5){?>
					<div class="lower_point_stud"></div>
					<div class="lower_about_single_detail_points"><a href="<?php the_permalink();?>" class="gen"><?php the_title(); ?></a></div>
					<div class="lower_about_single_detail_border"></div>
					<div class="cleardiv"></div>
			<?php $topi++;}else {}?>
			<?php }endwhile;?>
		<?php endif?>
		</div>
		
		<?php rewind_posts();$topi=0; ?>
		<div class="lower_about_single_detail_left">
			<div class="lower_about_single_detail_header">
				<div class="lower_about_single_detail_header_heading">Environs</div>
				<div class="lower_about_single_detail_header_view-all"><a href="" class="low_gen">View All >></a></div>
			</div>
			<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post();?>
				<?php if (in_category('Environs')){if($topi==0){?>
				<?php $cur_id=get_the_ID();?>
					<div class="lower_about_single_detail_photo"><img src="<?php $thumb = bdw_get_images($cur_id);echo $thumb;?>" /></div>
					<div class="lower_about_single_detail_photo_heading"><a href="<?php the_permalink(); ?>" class="gen"><?php the_title(); ?></a></div>
					<div class="lower_about_single_detail_header_text"><?php the_excerpt();?></div>
					<div class="lower_about_single_detail_border"></div><?php $topi++;}elseif($topi>0 && $topi<5){?>
					<div class="lower_point_stud"></div>
					<div class="lower_about_single_detail_points"><a href="<?php the_permalink();?>" class="gen"><?php the_title(); ?></a></div>
					<div class="lower_about_single_detail_border"></div>
					<div class="cleardiv"></div>
			<?php $topi++;}else {}?>
			<?php }endwhile;?>
		<?php endif?>
		</div>
		
		<?php rewind_posts();$topi=0; ?>
		<div class="lower_about_single_detail_right">
			<div class="lower_about_single_detail_header">
				<div class="lower_about_single_detail_header_heading">Picture Story</div>
				<div class="lower_about_single_detail_header_view-all"><a href="" class="low_gen">View All >></a></div>
			</div>
			<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post();?>
				<?php if (in_category('Picture Story')){if($topi==0){?>
				<?php $cur_id=get_the_ID();?>
					<div class="lower_about_single_detail_photo"><img src="<?php $thumb = bdw_get_images($cur_id);echo $thumb;?>" /></div>
					<div class="lower_about_single_detail_photo_heading"><a href="<?php the_permalink(); ?>" class="gen"><?php the_title(); ?></a></div>
					<div class="lower_about_single_detail_header_text"><?php the_excerpt();?></div>
					<div class="lower_about_single_detail_border"></div><?php $topi++;}elseif($topi>0 && $topi<5){?>
					<div class="lower_point_stud"></div>
					<div class="lower_about_single_detail_points"><a href="<?php the_permalink();?>" class="gen"><?php the_title(); ?></a></div>
					<div class="lower_about_single_detail_border"></div>
					<div class="cleardiv"></div>
			<?php $topi++;}else {}?>
			<?php }endwhile;?>
		<?php endif?>
		</div>
			
		
	</div>
	
	<!-- The lower part containing other details ends here -->
	<div class="cleardiv"></div>


<!-- The upper container ends here -->
	</div>

<?php get_footer(); ?>
