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
            <div class="header_inner flx aic jfc_sb">
                <h1 class="logo">
                    <a href="<?php echo home_url('/'); ?>">
                        <div class="header_logo">
                            <img src="<?php echo home_url('asset/img/common/salon-logo@2x.png'); ?>" alt="">
                        </div>
                    </a>
                </h1>
                <div class="menuBtn trigger">
                    <div class="bar"></div>
                    <div class="bar"></div>
                    <div class="bar"></div>
                </div>
                <nav class="nav menu">
                    <div class="nav__mainnav">
                        <ul class="flx aic">
                            <li>
                                <div class="pc"><a href="<?php echo home_url('activity/'); ?>" class="parent_list">TOP</a></div>
                                <div class="sp">
                                    <a href="<?php echo home_url('activity/'); ?>">TOP</a>
                                </div>
                            </li>
                            <li>
                                <div class="pc"><a href="<?php echo home_url('activity/'); ?>" class="parent_list">サロン内容</a></div>
                                <div class="sp">
                                    <a href="<?php echo home_url('activity/'); ?>">サロン内容</a>
                                </div>
                            </li>
                            <li>
                                <div class="pc"><a href="<?php echo home_url('activity/'); ?>" class="parent_list">自己紹介</a></div>
                                <div class="sp">
                                    <a href="<?php echo home_url('activity/'); ?>">自己紹介</a>
                                </div>
                            </li>
                            <li>
                                <div class="pc"><a href="<?php echo home_url('business/'); ?>" class="parent_list">ブログ</a></div>
                                <div class="sp">
                                    <a href="<?php echo home_url('activity/'); ?>">ブログ</a>
                                </div>
                            </li>
                            <li class="contact_link pc"><a href="<?php echo home_url('contact/'); ?>">お問い合わせ</a></li>
                        </ul>
                    </div>

                    <div class="nav__contact">

                    </div>
                </nav>
            </div>
        </header>
        <a href="<?php echo home_url('special/'); ?>" class="special_btn"></a>
