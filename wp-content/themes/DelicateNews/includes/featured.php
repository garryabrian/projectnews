<!-- Start Featured -->	
<div id="featured" class="clearfix">

	<?php global $ids;
	$ids = array();
	$arr = array();
	$i=1;
	
	$width = 249;
	$height = 158;
	$width_small = 104;
	$height_small = 104;
			
	$featured_cat = get_option('delicatenews_feat_cat'); 
	$featured_num = get_option('delicatenews_featured_num'); 
	
	if (get_option('delicatenews_use_pages') == 'false') query_posts("showposts=$featured_num&cat=".get_catId($featured_cat));
	else { 
		global $pages_number;
		
		if (get_option('delicatenews_feat_pages') <> '') $featured_num = count(get_option('delicatenews_feat_pages'));
		else $featured_num = $pages_number;
		
		if ($featured_num > 5) $featured_num = 5;
		
		query_posts(array
						('post_type' => 'page',
						'orderby' => 'menu_order',
						'order' => 'ASC',
						'post__in' => get_option('delicatenews_feat_pages'),
						'showposts' => $featured_num
					));
	};
			
	while (have_posts()) : the_post();
		global $post;	
		$arr[$i]["title"] = truncate_title(50,false);
		$arr[$i]["fulltitle"] = truncate_title(250,false);
		
		$arr[$i]["excerpt"] = truncate_post(330,false);
		
		$arr[$i]["permalink"] = get_permalink();
		
		$arr[$i]["postinfo"] = __("Posted by", "DelicateNews")." ". get_the_author_meta('display_name') . __(' on ','DelicateNews') . get_the_time(get_option('delicatenews_date_format')) . ' | ' . '<a href="'. $arr[$i]["permalink"] . '#comments' . '">' . $post->comment_count . ' ' . __('comments','DelicateNews') . '</a>';
		$arr[$i]["date"] = get_the_time('M d, y');
		
		if ($i < 3) $arr[$i]["thumbnail"] = get_thumbnail($width,$height,'',$arr[$i]["fulltitle"],$arr[$i]["fulltitle"]);
		else $arr[$i]["thumbnail"] = get_thumbnail($width_small,$height_small,'',$arr[$i]["fulltitle"],$arr[$i]["fulltitle"]);
		
		$arr[$i]["thumb"] = $arr[$i]["thumbnail"]["thumb"];
		$arr[$i]["use_timthumb"] = $arr[$i]["thumbnail"]["use_timthumb"];

		$i++;
		$ids[]= $post->ID;
	endwhile; wp_reset_query();	?>
	
	<div id="description">
		
		<?php for ($i = 1; $i <= $featured_num; $i++) { ?>
	
			<div class="slide">
				<h2 class="title"><a href="<?php echo($arr[$i]["permalink"]); ?>"><?php echo($arr[$i]["title"]); ?></a></h2>
				<p><?php echo ($arr[$i]["excerpt"]); ?></p>
				
				<a href="<?php echo($arr[$i]["permalink"]); ?>" class="readmore"><span><?php _e('read more','DelicateNews'); ?></span></a>
				<div class="clear"></div>
				
				<p class="meta"><?php echo($arr[$i]["postinfo"]); ?></p>
			</div> <!-- end .slide -->
		
		<?php }; ?>
		
	</div> <!-- end #description -->
	
	<div id="controllers">
		<div class="alignleft">
			<?php for ($i = 1; $i <= 2; $i++) { ?>
				<a href="#" <?php if ($i==1) echo('class="active"'); if ($i==2) echo('class="second"'); ?> rel="<?php echo($i); ?>">
					<?php print_thumbnail($arr[$i]["thumb"], $arr[$i]["use_timthumb"], $arr[$i]["fulltitle"] ,$width, $height); ?>
					<span class="overlay"></span>
					<span class="date"><?php echo $arr[$i]["date"]; ?></span>
				</a>
			<?php }; ?>
		</div>
		
		<div class="alignright">
			<?php for ($i = 3; $i <= 5; $i++) { ?>
				<?php if ($i <= $featured_num) { ?>
					<a href="#" rel="<?php echo($i); ?>">
						<?php print_thumbnail($arr[$i]["thumb"], $arr[$i]["use_timthumb"], $arr[$i]["fulltitle"] ,$width_small, $height_small); ?>
						<span class="overlay"></span>
						<span class="date"><?php echo $arr[$i]["date"]; ?></span>
					</a>
				<?php }; ?>
			<?php }; ?>
		</div>
	</div> <!-- end #controllers -->
		
</div> <!-- end #featured -->
<!-- End Featured -->

