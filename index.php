<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * 
 * @package Portfolio
 */?>
 
<?php get_header();?>

        <?php include('mailer.php'); ?>
    </header>

    <!-- link other partial page -->
    <?php include('main.php'); ?>
    <?php include('contact.php'); ?>
<?php get_footer(); ?>
