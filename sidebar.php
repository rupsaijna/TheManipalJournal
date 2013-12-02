<div class="middle_right_side">
		
		
		<div class="middle_right_advertisement"><a href=""><img src="<?php bloginfo('stylesheet_directory')?>/images/advertisement.jpg" border="0px"/></a></div>
		
		
		<div class="middle_right_side_info">
			<div class="middle_right_side_info_heading">
				<div class="middle_right_side_info_heading_text">Engagements</div>
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
			<div class="right_side_points"><a href="" class="gen">This is a dummy text placed here.</a>
			</div>
			<div class="right_border"></div>
			
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
				<div class="middle_right_side_info_heading_text">Latest Comments</div>
			</div>
<?php $args = array(
	'status' => 'approve',
	'number' => '4',);
	$comments = get_comments($args);
foreach ($comments as $comment) {?>
<div class="right_stud"></div>
<div class="right_namedate">
<div class="right_name"><?php echo $comment->comment_author?></div>
<div class="right_date">on <?php echo substr($comment->comment_date,0,10);?></div>
</div>
<div class="right_details"><?php echo $comment->comment_content?></div>
<div class="right_border"></div>
<?php }?>
		</div>
		
		<div class="middle_right_side_info">
			<div class="middle_right_side_info_heading">
				<div class="middle_right_side_info_heading_text">Poll Box</div>
			</div>
			<div class="right_details">This is a dummy placeholder question placed here for demo purpose.</div>
			<div class="right_border"></div>
			<div class="pollbox_text"><input type="radio" name="opt" value="1" style="margin:0px" /><div class="pollbox_text_text">Yes. I agree to it.</div>
			</div>
			<div class="right_border_2"></div>
			<div class="pollbox_text"><input type="radio" name="opt" value="2" style="margin:0px" /><div class="pollbox_text_text">No. I completely disagree.</div>
			</div>
			<div class="right_border_2"></div>
			<div class="pollbox_bottom">
				<div class="all_polls"><a href="" class="gen">All polls</a></div>
				<div class="vote"><input type="image" src="<?php bloginfo('stylesheet_directory')?>/images/vote.jpg" /></div>
			</div>
		</div>
		
		<div class="middle_right_side_info">
			<div class="middle_right_side_info_heading">
				<div class="middle_right_side_info_heading_text">Currently Active Users: 2534</div>
			</div>
			<div class="right_side_points" class="pollbox">Guests:<div class="pollbox_no">1000</div></div>
			<div class="right_border"></div>
					
			<div class="right_side_points" style="padding-bottom:10px" class="pollbox">Others:<div class="pollbox_no">1534</div></div>
			
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