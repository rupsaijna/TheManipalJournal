<div class="middle_right_side">
		
		
		<div class="middle_right_advertisement"><a href=""><img src="<?php bloginfo('stylesheet_directory')?>/images/advertisement.jpg" border="0px"/></a></div>
		
		
		<div class="middle_right_side_info">
			<div class="middle_right_side_info_heading">
				<div class="middle_right_side_info_heading_text">Rate This News Article</div>
			</div>
			<div class="right_point_stud"></div>
			<div class="right_side_points" style="padding-bottom:10px"><a href="" class="gen">This is a dummy text placed here.</a>
			</div>
			
		</div>
		<div class="middle_right_side_info">
			<div class="middle_right_side_info_heading">
				<div class="middle_right_side_info_heading_text">Latest News</div>
			</div>
			
			<?php query_posts('showposts=6'); ?>
			<?php while (have_posts()) : the_post(); ?>
				<div class="right_point_stud"></div>
				<div class="right_side_points"><a href="<?php the_permalink() ?>" class="gen"><?php the_title(); ?></a></div>
				<div class="right_border"></div>
			<?php endwhile;?>
		</div>
		
		<div class="middle_right_side_info">
			<div class="middle_right_side_info_heading">
				<div class="middle_right_side_info_heading_text">Tag Cloud</div>
			</div>
			<div class="right_point_stud"></div>
			<div class="right_side_points"><a href="" class="gen">This is a dummy text placed here.</a>
			</div>
			<div class="right_border"></div>
			
			<div class="right_point_stud"></div>
			<div class="right_side_points"><a href="" class="gen">This is a dummy text placed here.</a>
			</div>
			<div class="right_border"></div>
			
			<div class="right_point_stud"></div>
			<div class="right_side_points" style="padding-bottom:10px"><a href="" class="gen">This is a dummy text placed here.</a>
			</div>
			
		</div>
		
		<div class="middle_right_side_info">
			<div class="middle_right_side_info_heading">
				<div class="middle_right_side_info_heading_text">Like Us on Facebook</div>
			</div>
			<div class="right_point_stud"></div>
			<div class="right_side_points"><a href="" class="gen">This is a dummy text placed here.</a>
			</div>
			<div class="right_border"></div>
			
			<div class="right_point_stud"></div>
			<div class="right_side_points"><a href="" class="gen">This is a dummy text placed here.</a>
			</div>
			<div class="right_border"></div>
			
			<div class="right_point_stud"></div>
			<div class="right_side_points" style="padding-bottom:10px"><a href="" class="gen">This is a dummy text placed here.</a>
			</div>
			
		</div>
	</div>