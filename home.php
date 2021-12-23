<?php

/*

Template Name: Home Page

*/

?>

<?php get_header(); ?>



<!--VIDEO-->

<div class="video-container">
    <video preload="none" poster="<?php bloginfo('template_url'); ?>/video/poster/gp-partners-poster.jpg" autoplay loop muted playsinline>

	<source src="<?php bloginfo('template_url'); ?>/video/gp-partners-video-rev-2.mp4" type="video/mp4">

	<source src="<?php bloginfo('template_url'); ?>/video/gp-partners-video-rev-2.webm" type="video/webm">

	<source src="<?php bloginfo('template_url'); ?>/video/gp-partners-video-rev-2.ogv" type="video/ogv">

</video>
</div>

<!--VIDEO-->



<!--IE POSTER-->

<div class="ie-poster">

	<img src="<?php bloginfo('template_url'); ?>/images/home-page-poster.jpg" />

</div>



<!-- LOGO

<div id="logo">

	<img src="<?php bloginfo('template_url'); ?>/images/branding/general-public-partners-white.svg" />

</div>

LOGO-->



<!--ABOUT US-->

<section id="about" class="dzsparallaxer auto-init height-is-based-on-content" data-options="{ direction: 'reverse'}">
    
	<?php if ( get_field('about_us_bg_img') ): ?>
	
    <div class="dzsparallaxer--target" style="background-image: url(<?php the_field('about_us_bg_img'); ?>);height: 130%;background-repeat:no-repeat;background-size: cover;background-position:center;"></div>
	
	<?php else : ?>
	
	<div class="dzsparallaxer--target" style="background-image: url(<?php echo get_template_directory_uri() ?>/images/blurred-crowd.jpg);height: 130%;background-repeat:no-repeat;background-size: cover;background-position:center;"></div>
	
	<?php endif;
	
	if ( get_field('about_text_colour') == 'dark' ): ?>
	<div class="content-container clearfix">
		
		<?php 
		if( have_rows('about_left_col') ):
		while( have_rows('about_left_col') ): the_row(); ?>
		
		<div class="one-third light-overlay">
		
			<div class="inner black-text">
			
				<h4><?php the_sub_field('col_title'); ?></h4>
				<h1 class="header"><?php the_sub_field('col_sub_title'); ?></h1>
				<?php the_sub_field('col_blurb'); ?>
			
			</div>
		
		</div>
		
		<?php endwhile;
		endif;
		
		if ( get_field('about_right_col') ): ?>

		<div class="two-third light-overlay">

			<div class="inner black-text">

				<?php the_field('about_right_col'); ?>

			</div>

		</div>
		
		<?php endif; ?>

	</div>
	
	<?php elseif ( get_field('about_text_colour') == 'light' ): ?>
	
	<div class="content-container clearfix">
			
		<?php 
		if( have_rows('about_left_col') ):
		while( have_rows('about_left_col') ): the_row(); ?>
			
		<div class="one-third">
			
			<div class="inner white-text">
				
				<h4><?php the_sub_field('col_title'); ?></h4>
				<h1 class="header"><?php the_sub_field('col_sub_title'); ?></h1>
				<?php the_sub_field('col_blurb'); ?>
				
			</div>
			
		</div>
			
		<?php endwhile;
		endif;
		
		if ( get_field('about_right_col') ): ?>
	
		<div class="two-third">
	
			<div class="inner white-text">
	
				<?php the_field('about_right_col'); ?>
	
			</div>
	
		</div>
			
		<?php endif; ?>
	
	</div>
		
	<?php else : ?>
	
	<div class="content-container clearfix">
			
		<?php 
		if( have_rows('about_left_col') ):
		while( have_rows('about_left_col') ): the_row(); ?>
			
		<div class="one-third">
			
			<div class="inner white-text">
				
				<h4><?php the_sub_field('col_title'); ?></h4>
				<h1 class="header"><?php the_sub_field('col_sub_title'); ?></h1>
				<?php the_sub_field('col_blurb'); ?>
				
			</div>
			
		</div>
			
		<?php endwhile;
		endif;
		
		if ( get_field('about_right_col') ): ?>
	
		<div class="two-third">
	
			<div class="inner white-text">
	
				<?php the_field('about_right_col'); ?>
	
			</div>
	
		</div>
			
		<?php endif; ?>
	
	</div>
	
	<?php endif; ?>

</section>

<!--ABOUT US-->



<!--FEATURED WORK-->

<section id="featured">

	<article class="clearfix">

		<div class="dark-text twentyfive">

			<div class="black-text" style="margin-bottom: 50px;">

				<h1 class="header">Featured Work</h1>

			</div>

		</div>

		<div class="dark-text sixtyfive">

			<?php echo do_shortcode('[portfolio]'); ?>

		</div>

	</article>

</section>

<!--FEATURED WORK-->



<!--WHAT WE DO-->

<?php if ( get_field('what_we_do_bg_img') ): ?>
<section id="what" style="background-image: url(<?php the_field('what_we_do_bg_img'); ?>);">

<?php else : ?>

<section id="what" style="background-image: url(<?php echo get_template_directory_uri() ?>/images/subway-wall.jpg);">

<?php endif;

	if ( get_field('what_text_colour') == 'dark' ): ?>
	<article class="clearfix">
		
		<?php 
		if( have_rows('left_col') ):
		while( have_rows('left_col') ): the_row(); ?>

		<div class="one-third light-overlay">

			<div class="inner black-text">

				<h4><?php the_sub_field('col_title'); ?></h4>

				<h1 class="header"><?php the_sub_field('col_sub_title'); ?></h1>

				<?php the_sub_field('col_blurb'); ?>

			</div>

		</div>
		
		<?php endwhile;
		endif; ?>
		
		<?php 
		if( have_rows('what_right_col') ):
		while( have_rows('what_right_col') ): the_row(); ?>
		
		<div class="two-third light-overlay">

			<div class="inner black-text">

				<?php the_sub_field('right_col_first_row'); ?>

			</div>
			
			<?php
			$firstcol = get_sub_field('what_right_col_second_row_1');
			$secondcol = get_sub_field('what_right_col_second_row_2');
			
			if ( $firstcol == true && $secondcol == true ): ?>
			
			<div class="two-col clearfix black-text inner" style="margin: 0;padding-top: 0;">

				<div class="l-col">
				    
				    <?php echo $firstcol; ?>

				</div>

				<div class="r-col">
				    
				    <?php echo $secondcol; ?>

				</div>

			</div>
			
			<?php endif; ?>

		</div>
		
		<?php
	    endwhile;
		endif;
		?>

	</article>
	
	<?php elseif ( get_field('what_text_colour') == 'light' ): ?>
	<article class="clearfix">
			
		<?php 
		if( have_rows('left_col') ):
		while( have_rows('left_col') ): the_row(); ?>
	
		<div class="one-third lighter">
	
			<div class="inner white-text">
	
				<h4><?php the_sub_field('col_title'); ?></h4>
				<h1 class="header"><?php the_sub_field('col_sub_title'); ?></h1>
				<?php the_sub_field('col_blurb'); ?>
	
			</div>
	
		</div>
			
		<?php endwhile;
		endif; ?>
			
		<?php 
		if( have_rows('what_right_col') ):
		while( have_rows('what_right_col') ): the_row(); ?>
			
		<div class="two-third lighter">
	
			<div class="inner white-text">
	
				<?php the_sub_field('right_col_first_row'); ?>
	
			</div>
				
			<?php
			$firstcol = get_sub_field('what_right_col_second_row_1');
			$secondcol = get_sub_field('what_right_col_second_row_2');
				
			if ( $firstcol == true && $secondcol == true ): ?>
				
			<div class="two-col clearfix white-text inner" style="margin: 0;padding-top: 0;">
	
				<div class="l-col">
					    
					<?php echo $firstcol; ?>
	
				</div>
	
				<div class="r-col">
					    
					<?php echo $secondcol; ?>
	
				</div>
	
			</div>
				
			<?php endif; ?>
	
		</div>
			
		<?php
		endwhile;
		endif; ?>
	
	</article>
	
	<?php else : ?>
	<article class="clearfix">
			
		<?php 
		if( have_rows('left_col') ):
		while( have_rows('left_col') ): the_row(); ?>
	
		<div class="one-third light-overlay">
	
			<div class="inner black-text">
	
				<h4><?php the_sub_field('col_title'); ?></h4>
	
				<h1 class="header"><?php the_sub_field('col_sub_title'); ?></h1>
	
				<?php the_sub_field('col_blurb'); ?>
	
			</div>
	
		</div>
			
		<?php endwhile;
		endif; ?>
			
		<?php 
		if( have_rows('what_right_col') ):
		while( have_rows('what_right_col') ): the_row(); ?>
			
		<div class="two-third light-overlay">
	
			<div class="inner black-text">
	
				<?php the_sub_field('right_col_first_row'); ?>
	
			</div>
				
			<?php
			$firstcol = get_sub_field('what_right_col_second_row_1');
			$secondcol = get_sub_field('what_right_col_second_row_2');
				
			if ( $firstcol == true && $secondcol == true ): ?>
				
			<div class="two-col clearfix black-text inner" style="margin: 0;padding-top: 0;">
	
				<div class="l-col">
					    
					<?php echo $firstcol; ?>
	
				</div>
	
				<div class="r-col">
					    
					<?php echo $secondcol; ?>
	
				</div>
	
			</div>
				
			<?php endif; ?>
	
		</div>
			
		<?php
		endwhile;
		endif; ?>
	
	</article>
	
	<?php endif; ?>

</section>

<!--WHAT WE DO-->



<!--HOW-->

<section id="how" class="dzsparallaxer auto-init height-is-based-on-content">
	
	<?php if ( get_field('how_bg_img') ): ?>
	
	<div class="dzsparallaxer--target" style="background-image: url(<?php the_field('how_bg_img'); ?>);height: 130%;background-repeat:no-repeat;background-size: cover;background-position:center;"></div>
	
	<?php else : ?>
	
	<div class="dzsparallaxer--target" style="background-image: url(<?php echo get_template_directory_uri() ?>/images/turntables.jpg);height: 130%;background-repeat:no-repeat;background-size: cover;background-position:center;"></div>
	
	<?php endif;
	
	if ( get_field('how_text_colour') == 'dark' ): ?>
	<div class="content-container clearfix">
		    
		<?php 
		if( have_rows('how_left_col') ):
		while( have_rows('how_left_col') ): the_row(); ?>
	
		<div class="one-third light-overlay">
	
			<div class="inner black-text">
	
				<h4><?php the_sub_field('col_title'); ?></h4>
				<h1 class="header"><?php the_sub_field('col_sub_title'); ?></h1>
				<?php the_sub_field('col_blurb'); ?>
	
			</div>
	
		</div>
			
		<?php 
		endwhile;
		endif; ?>
			
		<?php if ( get_field('how_right_col') ): ?>
	
		<div class="two-third light-overlay">
	
			<div class="inner black-text">
	
				<?php the_field('how_right_col'); ?>
	
			</div>
	
		</div>
			
		<?php endif; ?>
	
	</div>
	
	<?php elseif ( get_field('how_text_colour') == 'light' ): ?>
	<div class="content-container clearfix">
	    
	    <?php 
		if( have_rows('how_left_col') ):
		while( have_rows('how_left_col') ): the_row(); ?>

		<div class="one-third">

			<div class="inner white-text">

				<h4><?php the_sub_field('col_title'); ?></h4>

				<h1 class="header"><?php the_sub_field('col_sub_title'); ?></h1>

				<?php the_sub_field('col_blurb'); ?>

			</div>

		</div>
		
		<?php 
		endwhile;
		endif; ?>
		
		<?php if ( get_field('how_right_col') ): ?>

		<div class="two-third">

			<div class="inner white-text">

				<?php the_field('how_right_col'); ?>

			</div>

		</div>
		
		<?php endif; ?>

	</div>
	
	<?php else : ?>
	<div class="content-container clearfix">
		    
		<?php 
		if( have_rows('how_left_col') ):
		while( have_rows('how_left_col') ): the_row(); ?>
	
		<div class="one-third">
	
			<div class="inner white-text">
	
				<h4><?php the_sub_field('col_title'); ?></h4>
				<h1 class="header"><?php the_sub_field('col_sub_title'); ?></h1>
				<?php the_sub_field('col_blurb'); ?>
	
			</div>
	
		</div>
			
		<?php 
		endwhile;
		endif; ?>
			
			<?php if ( get_field('how_right_col') ): ?>
	
		<div class="two-third">
	
			<div class="inner white-text">
	
				<?php the_field('how_right_col'); ?>
	
			</div>
	
		</div>
			
		<?php endif; ?>
	
	</div>
	<?php endif; ?>

</section>

<!--HOW-->

<!--WHO-->

<?php 
$bgimg = get_field('who_bg_img');
$bgoverlay = get_field('overlay');

if ( $bgimg && $bgoverlay ): ?>
<section id="who" style="background-image: url(<?php the_field('who_bg_img'); ?>);">
	<div class="overlay" style="background-color: <?php the_field('overlay'); ?>;"></div>
	
<?php elseif ( $bgimg ): ?>
<section id="who" style="background-image: url(<?php the_field('who_bg_img'); ?>);">

<?php else : ?>
<section id="who" style="background-image: url(<?php echo get_template_directory_uri() ?>/images/orange-wall.jpg);">
<?php endif;

	if ( get_field('who_text_colour') == 'dark' ): ?>
	<article class="clearfix">
	    
	    <?php 
		if( have_rows('who_left_col') ):
		while( have_rows('who_left_col') ): the_row(); ?>

		<div class="one-third black-text light-overlay">

			<div class="inner">

				<h4><?php the_sub_field('col_title'); ?></h4>

				<h1 class="header"><?php the_sub_field('col_sub_title'); ?></h1>

				<?php the_sub_field('col_blurb'); ?>

			</div>

		</div>
		
		<?php
		endwhile;
		endif;
		?>
		
		<?php 
		if( have_rows('who_right_col') ):
		while( have_rows('who_right_col') ): the_row(); ?>

		<div class="two-third black-text light-overlay">

			<div class="inner">

				<?php the_sub_field('who_right_col_first_row'); ?>

				<div class="two-col" style="margin-bottom: 25px;">
	
					<div class="clearfix">
						<div class="l-col">
						    
						    <?php the_sub_field('who_right_col_second_row_1'); ?>
		
						</div><!-- / LEFT-COL -->
		
						<div class="r-col">
						    
						    <?php the_sub_field('who_right_col_second_row_2'); ?>
		
						</div><!-- / RIGHT-COL -->
					</div>
	
				</div><!-- / TWO-COL -->
			
				<?php if ( get_sub_field('who_right_col_third_row') ): ?>
				<?php the_sub_field('who_right_col_third_row'); ?>
				<?php endif; ?>
				
				<?php
				$wholastrow1 = get_sub_field('who_right_col_last_row_1');
				$wholastrow2 = get_sub_field('who_right_col_last_row_2');
				
				if ( $wholastrow1 == true && $wholastrow2 == true ): ?>
				
				<div class="two-col clearfix" style="margin-top: 0;">
	
					<div class="clearfix">
						<div class="l-col">
						    
						    <?php echo $wholastrow1; ?>
		
						</div>
		
						<div class="r-col">
						    
						    <?php echo $wholastrow2; ?>
		
						</div>
					</div>
	
				</div><!-- / TWO-COL -->
				
				<?php endif; ?>
				
			</div><!-- / INNER -->

		</div><!-- / TWO-THIRD -->
		
		<?php
		endwhile;
		endif;
		?>

	</article>
	
	<?php elseif ( get_field('who_text_colour') == 'light' ): ?>
	<article class="clearfix">
		    
		<?php 
		if( have_rows('who_left_col') ):
		while( have_rows('who_left_col') ): the_row(); ?>
		
		<div class="one-third white-text">
		
			<div class="inner">
		
				<h4><?php the_sub_field('col_title'); ?></h4>
		
				<h1 class="header"><?php the_sub_field('col_sub_title'); ?></h1>
		
				<?php the_sub_field('col_blurb'); ?>
		
			</div>
		
		</div>
				
		<?php
		endwhile;
		endif; ?>
				
		<?php 
		if( have_rows('who_right_col') ):
		while( have_rows('who_right_col') ): the_row(); ?>
		
		<div class="two-third white-text">
		
			<div class="inner">
		
				<?php the_sub_field('who_right_col_first_row'); ?>
		
				<div class="two-col" style="margin-bottom: 25px;">
			
					<div class="clearfix">
						<div class="l-col">
								    
							<?php the_sub_field('who_right_col_second_row_1'); ?>
				
						</div><!-- / LEFT-COL -->
				
						<div class="r-col">
								    
							<?php the_sub_field('who_right_col_second_row_2'); ?>
				
						</div><!-- / RIGHT-COL -->
					</div>
			
				</div><!-- / TWO-COL -->
					
				<?php if ( get_sub_field('who_right_col_third_row') ): ?>
				<?php the_sub_field('who_right_col_third_row'); ?>
				<?php endif; ?>
						
				<?php
				$wholastrow1 = get_sub_field('who_right_col_last_row_1');
				$wholastrow2 = get_sub_field('who_right_col_last_row_2');
						
				if ( $wholastrow1 == true && $wholastrow2 == true ): ?>
						
				<div class="two-col clearfix" style="margin-top: 0;">
			
					<div class="clearfix">
						<div class="l-col">
								    
							<?php echo $wholastrow1; ?>
				
						</div>
				
						<div class="r-col">
								    
							<?php echo $wholastrow2; ?>
				
						</div>
					</div>
			
				</div><!-- / TWO-COL -->
						
				<?php endif; ?>
						
			</div><!-- / INNER -->
		
		</div><!-- / TWO-THIRD -->
				
		<?php
		endwhile;
		endif; ?>
	
	</article>
	<?php endif; ?>

</section>

<!--WHO-->



<!--EXPERIENCE-->

<?php if ( get_field('experience_bg_img') ): ?>
<section id="experience" style="background-image: url(<?php the_field('experience_bg_img'); ?>);">

<?php else : ?>

<section id="experience" style="background-image: url(<?php echo get_template_directory_uri() ?>/images/experience.jpg);">

<?php endif;

	if ( get_field('experience_text_colour') == 'dark' ): ?>
	<article class="clearfix no-column-bg">
	    
	    <?php 
		if( have_rows('experience_left_col') ):
		while( have_rows('experience_left_col') ): the_row(); ?>

		<div class="one-third black-text mobile-inner-padding">

			<div class="inner">

			<h4><?php the_sub_field('col_title'); ?></h4>

				<h1 class="header"><?php the_sub_field('col_sub_title'); ?></h1>

			</div>

		</div>
		
		<?php
		endwhile;
		endif;
		?>
		
		<?php 
		if( have_rows('experience_right_col') ):
		while( have_rows('experience_right_col') ): the_row(); ?>

		<div class="two-third black-text">

			<div class="two-col clearfix no-margin mobile-inner-padding">

				<div class="l-col">
				    
				    <?php the_sub_field('col_right_col_1'); ?>

				</div>

				<div class="r-col">

					<?php the_sub_field('col_right_col_2'); ?>

				</div>

			</div>
			
			<?php if ( get_sub_field('exp_col_right_row2') ): ?>
			<div>
			    <?php the_sub_field('exp_col_right_row2'); ?>
			</div>
			<?php endif; ?>

		</div>
		
		<?php
		endwhile;
		endif;
		?>

	</article>
	
	<?php elseif ( get_field('experience_text_colour') == 'light' ): ?>
	<article class="clearfix no-column-bg">
		    
		<?php 
		if( have_rows('experience_left_col') ):
		while( have_rows('experience_left_col') ): the_row(); ?>
	
		<div class="one-third dark-text mobile-inner-padding">
	
			<div class="inner white-text">
				<h4><?php the_sub_field('col_title'); ?></h4>
				<h1 class="header"><?php the_sub_field('col_sub_title'); ?></h1>
			</div>
	
		</div>
			
		<?php
		endwhile;
		endif; ?>
			
		<?php 
		if( have_rows('experience_right_col') ):
		while( have_rows('experience_right_col') ): the_row(); ?>
	
		<div class="two-third dark-text mobile-inner-padding">
	
			<div class="two-col clearfix white-text no-margin">
	
				<div class="l-col">
					    
					<?php the_sub_field('col_right_col_1'); ?>
	
				</div>
	
				<div class="r-col">
	
					<?php the_sub_field('col_right_col_2'); ?>
	
				</div>
	
			</div>
				
			<?php if ( get_sub_field('exp_col_right_row2') ): ?>
			<div class="white-text">
				<?php the_sub_field('exp_col_right_row2'); ?>
			</div>
			<?php endif; ?>
	
		</div>
			
		<?php
		endwhile;
		endif; ?>
	
	</article>
	
	<?php else : ?>
	<article class="clearfix">
		    
		<?php 
		if( have_rows('experience_left_col') ):
		while( have_rows('experience_left_col') ): the_row(); ?>
	
		<div class="one-third dark-text mobile-inner-padding">
	
			<div class="inner white-text">
				<h4><?php the_sub_field('col_title'); ?></h4>
				<h1 class="header"><?php the_sub_field('col_sub_title'); ?></h1>
			</div>
	
		</div>
			
		<?php
		endwhile;
		endif; ?>
			
		<?php 
		if( have_rows('experience_right_col') ):
		while( have_rows('experience_right_col') ): the_row(); ?>
	
		<div class="two-third dark-text mobile-inner-padding">
	
			<div class="two-col clearfix white-text no-margin">
	
				<div class="l-col">
					    
					<?php the_sub_field('col_right_col_1'); ?>
	
				</div>
	
				<div class="r-col">
	
					<?php the_sub_field('col_right_col_2'); ?>
	
				</div>
	
			</div>
				
			<?php if ( get_sub_field('exp_col_right_row2') ): ?>
			<div class="white-text">
				<?php the_sub_field('exp_col_right_row2'); ?>
			</div>
			<?php endif; ?>
	
		</div>
			
		<?php
		endwhile;
		endif; ?>
	
	</article>
	<?php endif; ?>

</section>

<!--EXPERIENCE	-->



<!--CLIENTS-->

<section id="clients">

	<article>
		
		<?php 
		$args = array(
			'post_type' => 'client',
			'posts_per_page' => -1,
		);
		
		$query = new WP_Query($args);
		
		if ( $query->have_posts() ) : ?>

		<ul class="logo-container clearfix" style="list-style: none;">
		
			<?php while ( $query->have_posts() ) : $query->the_post();
			$square_logo = get_field('square_logo', get_the_ID());
			$logo = get_the_post_thumbnail_url( get_the_ID(), 'large');
			$title = get_the_title(get_the_ID());
			$thumbnail_id = get_post_thumbnail_id( get_the_ID() );
			$alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
			$default_logo = get_template_directory_uri() . '/images/placeholder/logo-placeholder.png'; ?>
		
			<li class="logo-box">
			
				<?php if ($logo): ?>
			
				<img src="<?php echo $logo ?>"<?php if ($square_logo): echo ' class="client-logo-max-width-150"'; endif; ?> alt="<?php if ($alt): echo $alt; else: echo $title; endif; ?>" />
				
				<?php else: ?>
				
				<img src="<?php echo $default_logo ?>" style="padding: 25px;"<?php if ($square_logo): echo ' class="client-logo-max-width-150"'; endif; ?> />
				
				<?php endif; ?>
			
			</li>
			
			<?php endwhile; ?>
			
		</ul>
		
		<?php endif; wp_reset_query(); ?>

	</article>

</section>

<!--CLIENTS-->

<!--CONTACT-->

<?php if ( get_field('colour_picker', 'options' ) ): ?>
<section id="contact" style="background-color: <?php the_field('colour_picker', 'options' ); ?>;">

<?php else : ?>

<section id="contact">

<?php endif; ?>

	<article class="white-text clearfix">
	    
	    <?php 
	    if( have_rows('contact_left_col') ):
	    while( have_rows('contact_left_col') ): the_row(); ?>

		<div class="half">

			<h1><?php the_sub_field('col_title'); ?> &nbsp;&nbsp;<span><a href="<?php the_sub_field('twitter_link'); ?>" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></span></h1>

			<?php the_sub_field('col_blurb'); ?>

		</div>
		
		<?php
	    endwhile;
	    endif;
	    ?>
	    
	    <?php if( get_field('contact_right_col') ): ?>

		<div class="half">

			<?php the_field('contact_right_col'); ?>

		</div>
		
		<?php endif; ?>

	</article>

</section>

<!--CONTACT-->



<?php get_footer(); ?>