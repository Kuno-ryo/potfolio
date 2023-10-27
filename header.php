<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://use.fontawesome.com/releases/v6.1.1/css/all.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/reset.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/animate.css">
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="<?php echo get_template_directory_uri() ?>/script.js"></script>
    <script src="<?php echo get_template_directory_uri() ?>/wow.min.js"></script>
    <script>new WOW().init();</script>
</head>
<body>
    <header>
        <div class="header wow fadeInDown">
            <div  class="header-left">
                <div class="header-main">Ryo</div>
                <div class="header-sub">Portfolio</div>
            </div>
            <div class="header-right">
                <a href="https://twitter.com/Ryo41768750"><i class="fa-brands fa-twitter"></i></a>
                <a href="https://www.instagram.com/ryom_a1115/"><i class="fa-brands fa-instagram"></i></a>
            </div>
            <div class="drawer-icon">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </header>
    <a class="contact-icon wow fadeInDown" href="#contact"><p>制作を依頼</p><i class="fa-regular fa-envelope"></i><i class="fa-regular fa-envelope-open"></i></a>

    <div class="drawer-contents">
        <dl>
            <a href="#work">
                <dt>Work</dt>
                <dd>／　実績</dd>
            </a>
            <a href="#skill">
                <dt>Skill</dt>
                <dd>／　スキル各種</dd>
            </a>
            <a href="#schedule">
                <dt>Schedule</dt>
                <dd>／　仕事の流れ</dd>
            </a>
            <a href="#Q&A">
                <dt>Q&A</dt>
                <dd>／　よくある質問</dd>
            </a>
            <a href="#contact">
                <dt>Contact</dt>
                <dd>／　お問い合わせ</dd>
            </a>
        </dl>
        <ul>
            <a href="https://twitter.com/Ryo41768750"><i class="fa-brands fa-twitter"></i></a>
            <a href="https://www.instagram.com/ryom_a1115/"><i class="fa-brands fa-instagram"></i></a>
        </ul>
    </div>

    <div class="drawer-background"></div>

<?php wp_head(); ?>