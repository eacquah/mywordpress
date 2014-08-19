<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
    <title><?php bloginfo('name'); ?></title>
    <meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; <?php bloginfo('charset'); ?>" />
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen,projection" />
    <?php wp_head(); ?>
</head>

<body>

<div id="wrapper">

    <div id="header">

        <p class="description">

            <?php bloginfo('description'); ?>

        </p>

        <h1><a href="<?php echo get_option('home'); ?>"><?php bloginfo('name'); ?></a></h1>

        <ul id="nav">

            <?php wp_list_pages('sort_column=menu_order&title_li='); ?>

        </ul>

    </div>