<?php
/**
 * The header for our theme
 * @package Portfolio
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <title><?php bloginfo('name'); ?></title>
    <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/img/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700|Montserrat:300,400,600,700">    
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/Animate.css" >
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/lightcase.css" >
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css">
	<?php wp_head(); ?>
</head>
<body id="home" <?php body_class(); ?>>

    <header class="hero">
        <?php include('navigation.php'); ?>

        <div class="bg-video">
            <video class="bg-video__content" autoplay muted loop>
                <source src="<?php bloginfo('template_directory'); ?>/img/video.mp4" type="video/mp4">
                <source src="<?php bloginfo('template_directory'); ?>/img/video.webm" type="video/webm">
            </video>
        </div>