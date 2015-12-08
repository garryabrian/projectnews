<?php 
/*
Template Name: Login Page
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
				
				<div id="et-login">
					<div class='et-protected'>
						<div class='et-protected-form'>
							<form action='<?php echo get_option('home'); ?>/wp-login.php' method='post'>
								<p><label><?php _e('Username','DelicateNews'); ?>: <input type='text' name='log' id='log' value='<?php echo wp_specialchars(stripslashes($user_login), 1) ?>' size='20' /></label></p>
								<p><label><?php _e('Password','DelicateNews'); ?>: <input type='password' name='pwd' id='pwd' size='20' /></label></p>
								<input type='submit' name='submit' value='Login' class='etlogin-button' />
							</form> 
						</div> <!-- .et-protected-form -->
						<p class='et-registration'><?php _e('Not a member?','DelicateNews'); ?> <a href='<?php echo site_url('wp-login.php?action=register', 'login_post'); ?>'><?php _e('Register today!','DelicateNews'); ?></a></p>
					</div> <!-- .et-protected -->
				</div> <!-- end #et-login -->
				
				<div class="clear"></div>
				
				<?php edit_post_link(__('Edit this page','DelicateNews')); ?>
				
			</div> <!-- end .post -->
			
		</div> <!-- end #main-area -->

		<?php if (!$fullwidth) get_sidebar(); ?>
		
<?php get_footer(); ?>