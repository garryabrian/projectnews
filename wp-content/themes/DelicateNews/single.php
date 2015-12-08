<?php the_post(); ?>

<?php get_header(); ?>
	<?php if (get_option('delicatenews_integration_single_top') <> '' && get_option('delicatenews_integrate_singletop_enable') == 'on') echo(get_option('delicatenews_integration_single_top')); ?>	
	
	<div id="content" class="clearfix">
	
		<div id="main-area">
			<?php include(TEMPLATEPATH . '/includes/breadcrumbs.php'); ?>
	
				<div class="post clearfix">
					<h1 class="title"><?php the_title(); ?></h1>
					<?php if (get_option('delicatenews_postinfo') <> '') { ?>
						<p class="post-meta"><?php _e('Posted','DelicateNews'); ?> <?php if (in_array('author', get_option('delicatenews_postinfo'))) { ?> <?php _e('by','DelicateNews'); ?> <?php the_author_posts_link(); ?><?php }; ?><?php if (in_array('categories', get_option('delicatenews_postinfo'))) { ?> <?php _e('in','DelicateNews'); ?> <?php the_category(', ') ?><?php }; ?><?php if (in_array('comments', get_option('delicatenews_postinfo'))) { ?> | <?php comments_popup_link(__('0 comments','DelicateNews'), __('1 comment','DelicateNews'), '% '.__('comments','DelicateNews')); ?><?php }; ?></p>
					<?php }; ?>
															
					<?php if (get_option('delicatenews_thumbnails') == 'on') { ?>
					
						<?php $width = 238;
							  $height = 238;
							  $classtext = '';
							  $titletext = get_the_title();
						
							  $thumbnail = get_thumbnail($width,$height,$classtext,$titletext,$titletext);
							  $thumb = $thumbnail["thumb"]; ?>
						
						<?php if($thumb <> '') { ?>
							<div class="post-thumbnail">
								<span class="date">
									<span><?php echo(the_time('M d, y')); ?></span>
								</span> <!-- end .date -->
								
								<?php print_thumbnail($thumb, $thumbnail["use_timthumb"], $titletext, $width, $height, $classtext); ?>
								<span class="overlay"></span>
							</div> 	<!-- end .thumbnail -->	
						<?php }; ?>
							
					<?php }; ?>
			
					<?php the_content(); ?>
					<?php wp_link_pages(array('before' => '<p><strong>'.__('Pages','DelicateNews').':</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
					<?php edit_post_link(__('Edit this page','DelicateNews')); ?>
				</div> <!-- end .post -->
                
                <?php if (get_option('delicatenews_integration_single_bottom') <> '' && get_option('delicatenews_integrate_singlebottom_enable') == 'on') echo(get_option('delicatenews_integration_single_bottom')); ?>
				
				<?php if (get_option('delicatenews_468_enable') == 'on') { ?>
					<?php if(get_option('delicatenews_468_adsense') <> '') echo(get_option('delicatenews_468_adsense'));
					else { ?>
						<a href="<?php echo(get_option('delicatenews_468_url')); ?>"><img src="<?php echo(get_option('delicatenews_468_image')); ?>" alt="468 ad" class="foursixeight" /></a>
					<?php } ?>	
				<?php } ?>
				
				<?php if (get_option('delicatenews_show_postcomments') == 'on') comments_template('', true); ?>
				
			</div> <!-- end #main-area -->

		<?php get_sidebar(); ?>
		
<?php get_footer(); ?>