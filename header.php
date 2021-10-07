<?php
    $uri = get_theme_file_uri(); // ルートpath
    global $post;
    $slug = $post->post_name;
    $site_url = site_url(); // サイトURL
    $server_uri = $_SERVER['REQUEST_URI'];
    $server_uri_trimed = substr($server_uri, 0, strcspn($server_uri,'?')); 
?>

<!DOCTYPE html>
<html lang="ja">
<head>
<title>Document</title>
    <meta name="description" content="">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="canonical" href="<?=$site_url?>">
    <meta property="og:title" content="">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?=$site_url?>">
    <meta property="og:image" content="<?= $uri ?>/meta/OGP.jpg">
    <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#">
    <meta name="theme-color" content="">
    <link rel="apple-touch-icon" href="<?= $uri ?>/meta/icon.png">
    <link rel="shortcut icon" href="<?= $uri ?>/meta/favicon.ico">
    <link rel="stylesheet" href="<?= get_stylesheet_uri(); ?>">
    <link rel="stylesheet" href="<?= $uri ?>/css/normalize.css">
    <link rel="stylesheet" href="<?= $uri ?>/css/style.css">
    <link rel="stylesheet" href="<?= $uri ?>/css/bottomSlidein.css">
    <link rel="stylesheet" href="<?= $uri ?>/css/drawer.css">
    <link rel="stylesheet" href="<?= $uri ?>/css/header.css">
    <link rel="stylesheet" href="<?= $uri ?>/css/footer.css">
    <script src="<?= $uri ?>/js/jquery.3.4.1.js"></script>
    <script src="<?= $uri ?>/js/main.js"></script>
    <link href="<?= $uri ?>/js/slick-theme.css" rel="stylesheet" type="text/css">
    <link href="<?= $uri ?>/js/slick.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="<?= $uri ?>/js/slick.min.js"></script>
    <script src="<?= $uri ?>/js/thumb_slide.js"></script>
    <link rel="stylesheet" href="<?= $uri ?>/css/slide_orijinal.css">

    <?php if ($server_uri === '/'): ?>
        <link rel="stylesheet" href="<?= $uri ?>/css/top.css">
    <?php endif; ?>
    <link rel="stylesheet" href="<?= $uri ?>/css/news.css">
    
    <?php if ($slug === 'contact'): ?>
        <link rel="stylesheet" href="<?= $uri ?>/css/contact.css">
    <?php endif; ?>
    
    <?php wp_head(); ?>
</head>
    <body>
        <div class="container">
            <header>
                <div class="innerHeader">
                    <a href="<?=$site_url;?>" class="logo">
                        <img src="<?=$uri?>/img/common/logo.svg" class="logo" alt="logo">
                    </a>
                    <ul>
                        <li><a href="<?=$site_url;?>" class="<?=$active = ($server_uri === '/') ? 'active' : ''; ?>">HOME</a></li>
                        <li><a href="<?=$site_url;?>/news" class="<?=$active = ($server_uri === '/news/') ? 'active' : ''; ?>">NEWS</a></li>
                        <li><a href="<?=$site_url;?>/contact" class="<?=$active = ($slug === 'contact') ? 'active' : ''; ?>">CONTACT</a></li>
                    </ul>
                </div>
            </header>