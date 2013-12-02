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
	<?php while (have_posts()) : the_post(); ?>
	<?php $cur_id=get_the_ID();$tags=wp_get_post_tags($cur_id);$categories = get_the_category(); ?>
				
	<div class="inner_middle_section">
		<div class="inner_middle_main_heading">
			<div class="inner_middle_main_heading_text"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></div>
		</div>
		<div class="top_details">
			<div class="top_details_left">
				<div class="left_side">
					<div class="reporter">Reporter :</div>
					<div class="reporter_name"><a href="" class="gen"><?php the_author_posts_link(); ?></a></div>
					</div>
				
				<div class="top_divider">|</div>
				<div class="right_side">
					<div class="reporter">Posted :</div>
						<div class="reporter_posted">
							<div class="reporter_home">Home</a></div>
							<div class="reporter_home1"> > </div>
							<div class="reporter_home"><a href="<?php get_category_link($categories[0]->term_id )?>" class="gen"><?php echo $categories[0]->cat_name?></a></div>
							<div class="cleardiv"></div>
						</div>
						<div class="cleardiv"></div>
						</div>
					<div class="cleardiv"></div>
			</div>
			<div class="top_details_right"><?php the_time('F j,Y'); ?></div>
			<div class="cleardiv"></div>	
		</div>
		<div class="cleardiv"></div>
		<div class="top_dotted_line" style="width:710px"></div>
		<div class="middle_text_and_photo">
		<!--div class="middle_photo"-->
				<img src="<?php  $thumb = bdw_get_images($cur_id);echo $thumb;?>"  <?php  echo $thumb->post_title;?> class="alignright size-medium" width="327px" height="218px"/>
				<!--div class="middle_photo_blackstrip"><span class="word_separator">|</span> Photo courtesy: Srija Kotagiri</div-->
			<!--/div-->
			<!--div class="cleardiv"></div-->
			<div class="text_top_section2"><?php the_content('Read the rest of this entry &raquo;'); ?></div>			
		</div>
		
		<div class="top_dotted_line" style="width:710px"></div>
			<div class="social_network_link_buttons"><strong>facebook and other link buttons</strong></div>
			<div class="top_dotted_line" style="width:710px; margin-top:12px"></div>
			<div class="fb_comments"><strong>Facebook comments section</strong></div>
			
			<!-- The comments section starts here -->
			
			<div class="comment_section">
				<div class="inner_middle_sub_heading">
				<div class="inner_middle_sub_heading_text"><?php comments_popup_link('1 Comment', '% Comments'); ?></div></div>
					<?php $args = array('status' => 'approve',);
					$comments = get_comments($args);?>
					
					<?php foreach ($comments as $comment) {?>
					<div class="single_comment">
					<div class="name_date"><a href="" class="gen"><?php echo $comment->comment_author?></a> on <?php echo $comment->comment_date;?></div>
					<div class="comment_area">
						<div class="comment_stud"></div>
						<div class="comment_area_text"><?php echo $comment->comment_content?>
							<div class="exclaim"></div>
						</div>	
					</div>
					</div>
					<?php }?>					
			</div>
		<div class="comment_section">
				<div class="inner_middle_sub_heading">
					<div class="inner_middle_sub_heading_text">Post Your Comments</div>
				</div>
				<form action="" method="post">
					
					
					<div class="textbox_and_text" style="margin-top:20px">
						<input type="text" name="name" value="" class="textbox" />
						<div class="textbox_name">Name (mandatory)</div>
					</div>
					
					<div class="textbox_and_text">
						<input type="text" name="email" value="" class="textbox" />
						<div class="textbox_name">Email (mandatory) (will not be published)</div>
					</div>
					
					<div class="textbox_and_text">
						<input type="text" name="website" value="" class="textbox" />
						<div class="textbox_name">Website</div>
					</div>
					
					<div class="textbox_and_text">
						<textarea rows="" cols="" class="mess_area"></textarea>
					</div>
					
					<!--div class="captcha">
						<!--?php
							  require_once('recaptchalib.php');
							  $publickey = ""; // you got this from the signup page
							  echo recaptcha_get_html($publickey);
						?>
					</div-->
					
					<div class="submit_button">
						<input type="image" src="<?php bloginfo('stylesheet_directory')?>/images/submit.jpg" alt="Submit Form" value="submit" border="0" /> 
					</div>
				
				
				</form>
				
		</div>
		
		
					
					
					
	</div>
	<?php endwhile; ?>
	<?php else : ?>
			<h2>Not Found</h2>
			<p>Sorry, but you are looking for something that isn't here.</p>
			<?php endif; ?>

	<?php get_sidebar('sbar'); ?>
		</div>
	<?php get_footer(); ?>
        
        