<?php
/**
 * The template for displaying 404 pages (not found)
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 * @package Portfolio
 */
?>
<?php get_header();?>
        <div class="hero__heading">
			<h1>Page not found :(</h1>
			<a href="<?php bloginfo('url');?>" class="hero__home">Home</a>
        </div>
    </header>
    
    <!-- include other page partials -->
    <?php include('main.php'); ?>
    <?php include('contact.php'); ?>
<?php get_footer(); ?>
