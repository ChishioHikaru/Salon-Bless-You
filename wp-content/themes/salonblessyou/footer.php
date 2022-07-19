<div class="contact_area">
    <div class="contact_area_txt">
        <p>Salon bless you への<br><span>お問い合わせ</span>・<span>ご予約</span></p>
    </div>
    <div class="contact_area_btn flx">
        <a href="" class="contact_btn"><span>お問い合わせ</span></a>
        <a href="" class="reserve_btn"><span>ご予約</span></a>
    </div>
</div>
<footer class="footer flx jfc_sb">
    <div class="info_area flx clm jfc_c">
        <h1 class="logo">
            <a href="<?php echo home_url('/'); ?>">
                <img src="<?php echo home_url('asset/img/top/logo.png'); ?>" alt="">
            </a>
        </h1>
        <p class="address">〒000-0000 兵庫県〇〇市</p>
    </div>
    <div class="nav_area">
        <nav class="flx jfc_sb">
            <div class="nav_item">
                <a href="<?php echo home_url('home/'); ?>" class="parent_link">TOP</a>
            </div>
            <div class="nav_item">
                <a href="<?php echo home_url('service/'); ?>" class="parent_link">サロン内容</a>
            </div>
            <div class="nav_item">
                <a href="<?php echo home_url('introduction/'); ?>" class="parent_link">自己紹介</a>
            </div>
            <div class="nav_item">
                <a href="<?php echo home_url('blog/'); ?>" class="parent_link">ブログ</a>
            </div>
            <div class="nav_item">
                <a href="<?php echo home_url('contact/'); ?>" class="parent_link">お問い合わせ</a>
            </div>
        </nav>
        <div class="sub_area flx">
            <ul class="sns_list flx aic jfc_sb">
                <li><a href="" target="_blank" class="hvrop">
                        <img src="<?php echo home_url('asset/img/common/icon-inst.png'); ?>" alt="">
                    </a></li>
                <li><a href="https://twitter.com/InadaHiroki_904" target="_blank" class="hvrop">
                        <img src="<?php echo home_url('asset/img/common/icon-tw.png'); ?>" alt="">
                    </a></li>
            </ul>
        </div>
        <div class="other flx aic">
            <a href="<?php echo home_url('privacypolicy/'); ?>" class="privacy hvrop">プライバシーポリシー</a>
            <p class="copyright">Copyright©Salon bless you 2022</p>
        </div>
    </div>
</footer>
</div><!-- #stage -->

<?php wp_footer(); ?>

</body>

</html>
