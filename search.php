<?php
/**
 * The template for displaying search results pages
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 * @package Portfolio
 */
?>
<?php get_header();?>
        <div class="hero__heading">
			<h1>Search Disabled :(</h1>  
			<a href="<?php bloginfo('url');?>" class="hero__home">Home</a>          
        </div>
    </header>

    <!-- include other page partials -->
    <?php include('main.php'); ?>
    <?php include('contact.php'); ?>
<?php get_footer(); ?>
    