<?php 
/*
Template Name: Sitemap Page
*/
?>
<?php the_post(); ?>

<?php 
$et_ptemplate_settings = array();
$et_ptemplate_settings = maybe_unserialize( get_post_meta($post->ID,'et_ptemplate_settings',true) );

$fullwidth = isset( $et_ptemplate_settings['et_fullwidthpage'] ) ? (bool) $et_ptemplate_settings['et_fullwidthpage'] : (bool) $et_ptemplate_settings['et_fullwidthpage'];
?>

<?php get_header(); ?>
	<?php if (get_option('delicatenews_integration_single_top') <> '' && get_option('delicatenews_integrate_singletop_enable') == 'on') echo(get_option('delicatenews_integration_single_top')); ?>	
	
	<div id="content" class="clearfix<?php if($fullwidth) echo(' fullwidth');?>">
	
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
				
				<div id="sitemap">
					<div class="sitemap-col">
						<h2><?php _e('Pages','DelicateNews'); ?></h2>
						<ul id="sitemap-pages"><?php wp_list_pages('title_li='); ?></ul>
					</div> <!-- end .sitemap-col -->
					
					<div class="sitemap-col">
						<h2><?php _e('Categories','DelicateNews'); ?></h2>
						<ul id="sitemap-categories"><?php wp_list_categories('title_li='); ?></ul>
					</div> <!-- end .sitemap-col -->
					
					<div class="sitemap-col">
						<h2><?php _e('Tags','DelicateNews'); ?></h2>
						<ul id="sitemap-tags">
							<?php $tags = get_tags();
							if ($tags) {
								foreach ($tags as $tag) {
									echo '<li><a href="' . get_tag_link( $tag->term_id ) . '">' . $tag->name . '</a></li> ';
								}
							} ?>
						</ul>
					</div> <!-- end .sitemap-col -->
										
					<div class="sitemap-col<?php echo ' last'; ?>">
						<h2><?php _e('Authors','DelicateNews'); ?></h2>
						<ul id="sitemap-authors" ><?php wp_list_authors('show_fullname=1&optioncount=1&exclude_admin=0'); ?></ul>
					</div> <!-- end .sitemap-col -->
				</div> <!-- end #sitemap -->
				
				<div class="clear"></div>
				
				<?php edit_post_link(__('Edit this page','DelicateNews')); ?>
				
			</div> <!-- end .post -->
			
		</div> <!-- end #main-area -->

		<?php if (!$fullwidth) get_sidebar(); ?>
		
<?php get_footer(); ?>