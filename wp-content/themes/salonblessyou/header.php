<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
    <!-- <link rel="shortcut icon" href="<?php echo home_url('asset/img/common/favicon.svg'); ?>" type="image/x-icon"> -->
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <div id="stage">
        <header class="header">
            <div class="header_inner flx jfc_sb aic">
                <h1 class="logo">
                    <a href="<?php echo home_url('/'); ?>">
                        <div class="header_logo">
                            <img src="<?php echo home_url('asset/img/top/logo.png'); ?>" alt="">
                        </div>
                    </a>
                </h1>
                <div class="menuBtn trigger">
                    <div class="bar"></div>
                    <div class="bar"></div>
                    <div class="bar"></div>
                </div>
                <nav class="nav">
                    <div class="nav__mainnav">
                        <ul class="flx aic">
                            <li>
                                <div class="pc"><a href="<?php echo home_url('/'); ?>" class="parent_list">TOP</a></div>
                                <div class="sp">
                                    <a href="<?php echo home_url('/'); ?>">TOP</a>
                                </div>
                            </li>
                            <li>
                                <div class="pc"><a href="<?php echo home_url('service/'); ?>" class="parent_list">サロン内容</a></div>
                                <div class="sp">
                                    <a href="<?php echo home_url('service/'); ?>">事業紹介</a>
                                </div>
                            </li>
                            <li>
                                <div class="pc"><a href="<?php echo home_url('introduction/'); ?>" class="parent_list">自己紹介</a></div>
                                <div class="sp">
                                    <a href="<?php echo home_url('introduction/'); ?>">自己紹介</a>
                                </div>
                            </li>
                            <li>
                                <div class="pc"><a href="<?php echo home_url('blog/'); ?>" class="parent_list">ブログ</a></div>
                                <div class="sp">
                                    <a href="<?php echo home_url('blog/'); ?>">ブログ</a>
                                </div>
                            </li>
                            <li>
                                <div class="pc"><a href="<?php echo home_url('contact/'); ?>" class="contact_link">お問い合わせ</a></div>
                                <div class="sp">
                                    <a href="<?php echo home_url('contact/'); ?>">お問い合わせ</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>

                <div class="menu">
                    <div class="base_menu_box">
                        <div class="menu_nav flx jfc_sb">
                            <div class="box left flx jfc_sb clm">
                                <a href="<?php echo home_url('/'); ?>" class="parent_link">トップページ</a>
                                <a href="<?php echo home_url('service/'); ?>" class="parent_link border_none">サロン内容</a>
                                <ul class="child_list">
                                    <li><a href="<?php echo home_url('service01/'); ?>">小顔メンテナンス</a></li>
                                    <li><a href="<?php echo home_url('service02/'); ?>">歪みメンテナンス</a></li>
                                    <li><a href="<?php echo home_url('service03/'); ?>">産後メンテナンス</a></li>
                                    <li><a href="<?php echo home_url('service04/'); ?>">自律神経メンテナンス</a></li>
                                </ul>
                                <a href="<?php echo home_url('blog/'); ?>" class="parent_link">ブログ</a>
                                <a href="<?php echo home_url('contact/'); ?>" class="contact_link pc">お問い合わせ</a>
                            </div>
                            <!-- <div class="box right flx jfc_sb clm"></div> -->
                            <a href="<?php echo home_url('contact/'); ?>" class="contact_link sp">お問い合わせ</a>
                        </div>
                        <div class="menu_foot flx jfc_sb aic">
                            <ul class="sns_list flx aic jfc_sb">
                                <li><a href="<?php echo home_url('privacypolicy/'); ?>">プライバシーポリシー</a></li>
                                <li><a href="https://www.instagram.com/mekikinin/?hl=ja" target="_blank" class="hvrop">
                                        <img src="<?php echo home_url('asset/img/common/icon-inst.png'); ?>" alt="">
                                    </a></li>
                                <li><a href="https://twitter.com/youki_ide" target="_blank" class="hvrop">
                                        <img src="<?php echo home_url('asset/img/common/icon-tw.png'); ?>" alt="">
                                    </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="overlay"></div>
                <!-- <div class="fix_btn">
                    <a href="<?php echo home_url('service/'); ?>flow/">
                        <img src="<?php echo home_url('asset/img/common/logo.png'); ?>" alt="" class="pc">
                        <img src="<?php echo home_url('asset/img/common/logo.png'); ?>" alt="" class="sp">
                    </a>
                </div> -->
            </div>
        </header>
