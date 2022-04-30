<div class="single__content">
    <div class="single__content--header">
        <?php if(has_post_thumbnail($post)): ?>
            <div class="thumb"><?php the_post_thumbnail('full'); ?></div>
        <?php endif; ?>
        <div class="textarea">
            <h3><?php the_title(); ?></h3>
            <p class="lead"><?php echo $cfs->get('cf_name_bottom_head'); ?></p>
            <p class="text"><?php echo $cfs->get('cf_name_bottom_text'); ?></p>
            <ul>
                <?php
                $eiyo_pdf = $cfs->get('cf_eiyou');
                $pdf = wp_get_attachment_link($eiyo_pdf);
                ?>
                <li><a href="<?php echo $pdf; ?>">栄養情報はこちらから</a></li>
                <li><a href="<?php echo $cfs->get('cf_buy'); ?>" target="_blank" rel="noopener noreferrer">ご購入はこちらから</a></li>
            </ul>
        </div>
    </div>

    <div class="single__content--info">
        <?php
        $groups = $cfs->get('cf_item_group');
        echo '<table>';
        foreach( $groups as $group ):
            $item = $group['cf_item'];
            $content = $group['cf_content'];
        ?>
            <tr>
                <th><?php echo $item; ?></th>
                <td><?php echo $content; ?></td>
            </tr>
        <?php endforeach; ?>
        </table>
    </div>
    
    <?php
    $msg01 = $cfs->get('cf_right_photo_layout');
    if( $msg01 ):
    foreach( $msg01 as $con01 ):
    ?>
    <div class="single__content--message flexbox">
        <div class="textarea">
            <h4><?php echo $con01['cf_red_head']; ?></h4>
            <p><?php echo $con01['cf_red_head_bottom_text']; ?></p>
            <h5><?php echo $con01['cf_black_head']; ?></h5>
            <p><?php echo $con01['cf_black_head_bottom_text']; ?></p>
        </div>
        <div class="thumb rightphoto">
            <?php
            $img_id = $con01['cf_img'];
            $img = wp_get_attachment_image_url($img_id, 'full');
            ?>
            <img src="<?php echo $img; ?>" alt="">
        </div>
    </div>
    <?php endforeach; ?>
    <?php endif; ?>

    <?php
    $msg02 = $cfs->get('cf_left_photo_layout');
    if( $msg02 ):
    foreach( $msg02 as $con02 ):
    ?>
    <div class="single__content--message flexbox reverse">
        <div class="textarea">
            <h4><?php echo $con02['cf_red_head']; ?></h4>
            <p><?php echo $con02['cf_red_head_bottom_text']; ?></p>
            <h5><?php echo $con02['cf_black_head']; ?></h5>
            <p><?php echo $con02['cf_black_head_bottom_text']; ?></p>
        </div>
        <div class="thumb leftphoto">
            <?php
            $img_id = $con02['cf_img'];
            $img = wp_get_attachment_image_url($img_id, 'full');
            ?>
            <img src="<?php echo $img; ?>" alt="">
        </div>
    </div>
    <?php endforeach; ?>
    <?php endif; ?>

    <?php
    $msg03 = $cfs->get('cf_no_photo_layout');
    if( $msg03 ):
    foreach( $msg03 as $con03 ):
    ?>
    <div class="single__content--message">
        <div class="textarea">
            <h4><?php echo $con03['cf_red_head']; ?></h4>
            <p><?php echo $con03['cf_red_head_bottom_text']; ?></p>
            <h5><?php echo $con03['cf_black_head']; ?></h5>
            <p><?php echo $con03['cf_black_head_bottom_text']; ?></p>
        </div>
    </div>
    <?php endforeach; ?>
    <?php endif; ?>

    <?php
    $voice = $cfs->get('cf_producer_voice');
    if( $voice ):
    foreach( $voice as $voice_val ):
    ?>
    <div class="single__content--voice">
        <div class="textarea">
            <h4><img src="<?php echo home_url('asset/img/product/voice.png'); ?>" alt="生産者の声"></h4>
            <h5><?php echo $voice_val['cf_head']; ?></h5>
            <p class="txt"><?php echo $voice_val['cf_text']; ?></p>
            <p class="name"><?php echo $voice_val['cf_name']; ?></p>
        </div>
        <div class="thumb">
            <?php
            $img_id = $voice_val['cf_img'];
            $img = wp_get_attachment_image_url($img_id, 'full');
            ?>
            <img src="<?php echo $img; ?>" alt="">
        </div>
    </div>
    <?php endforeach; ?>
    <?php endif; ?>
</div>