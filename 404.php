<?php get_header(); ?>

<section class="not-found" style="background: #fff url(<?php echo get_template_directory_uri(); ?>/images/404-background.jpg) no-repeat bottom center fixed; background-size: cover; position: fixed; width: 100%; height: 100%; top: 0; left: 0;">
	<article style="max-width: 800px; margin: auto; color: #fff; height: 100%; display: table; width: 90%; text-align: center;">
	    <div style="display: table-cell; vertical-align: middle;">
	        <a href="<?php echo home_url(); ?>">
	            <img src="<?php echo get_template_directory_uri(); ?>/images/branding/general-public-partners-white.svg" style="margin-bottom: 20px;" class="error-logo">
	        </a>
		<h2>Page not found.</h2>
		<p>Please use the menu above, or click <a style="color: #fff; text-decoration: underline;" href="<?php echo home_url(); ?>">here</a> to go back to the home page.</p>
	    </div>
	</article>
</section>

<style>
    @media (max-width: 850px) and (orientation: landscape) {
        .error-logo {
            max-width: 100px;
            margin-bottom: 0!important;
        }
        .error404 #footer p {
            padding: 5px 0;
        }
    }
    body.error404 #footer {
        position: fixed;
        bottom: 0;
        width: 100%;
    }
    body.error404 #sdrn_bar {
        background-color: #001871!important;
    }
    .not-found:before {
        position: fixed;
        top: 0;
        left: 0;
        background: #000;
        opacity: 0.5;
        width: 100%;
        height: 100%;
        content: '';
    }
</style>

<?php get_footer(); ?>