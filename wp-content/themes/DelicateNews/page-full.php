<?php
/*
Template Name: Full Width Page
*/
?>

<?php the_post(); ?>
<?php get_header(); ?>
	<?php if (get_option('delicatenews_integration_single_top') <> '' && get_option('delicatenews_integrate_singletop_enable') == 'on') echo(get_option('delicatenews_integration_single_top')); ?>	
	
	<div id="content" class="clearfix fullwidth">
	
		<div id="main-area">
			<?php include(TEMPLATEPATH . '/includes/breadcrumbs.php'); ?>
	
			<div class="post clearfix">
				<h1 class="title"><?php the_title(); ?></h1>
				
				<?php $width = 238;
					  $height = 238;
					  $classtext = '';
					  $titletext = get_the_title();
				
					  $thumbnail = get_thumbnail($width,$height,$classtext,$titletext,$titletext);
					  $thumb = $thumbnail["thumb"]; ?>
				
				<?php if($thumb <> '' && get_option('delicatenews_page_thumbnails') == 'on') { ?>
					<div class="post-thumbnail">							
						<?php print_thumbnail($thumb, $thumbnail["use_timthumb"], $titletext , $width, $height, $classtext); ?>
						<span class="overlay"></span>
					</div> 	<!-- end .thumbnail -->	
				<?php }; ?>

				<?php the_content(); ?>
				<?php wp_link_pages(array('before' => '<p><strong>'.__('Pages','DelicateNews').':</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
				<?php edit_post_link(__('Edit this page','DelicateNews')); ?>
				
			</div> <!-- end .post -->
			
			<?php if (get_option('delicatenews_show_pagescomments') == 'on') comments_template('', true); ?>
			
		</div> <!-- end #main-area -->
		
<?php get_footer(); ?>