<?php if(is_post_type_archive('processed') || is_tax('processed_storage')): ?>
<div class="method">
    <ul>
        <?php if(is_tax('processed_storage')): ?>
        <li><a href="<?php echo home_url('product/processed/'); ?>">全て</a></li>
        <?php else: ?>
        <li class="current"><a href="<?php echo home_url('product/processed/'); ?>">全て</a></li>
        <?php endif; ?>

        <?php
        $current_term = $term;
        $tax_pro = 'processed_storage';
        $terms = get_terms($tax_pro);
        foreach( $terms as $term ):
            $name = $term->name;
            $slug = $term->slug;
            $term_id = $term->term_id;
            $term_link = get_term_link($term_id);
            if ( is_wp_error( $term_link ) ) {
                continue;
            }
            $link = esc_url($term_link);
            $order = 'product/processed/product/processed/';
            $replace = 'product/processed/';
            $newlink = str_replace($order, $replace, $link);
            if($current_term == $slug){
                echo '<li class="current"><a href="'.$newlink.'">'.$name.'</a></li>';
            } else {
                echo '<li><a href="'.$newlink.'">'.$name.'</a></li>';
            }
            
        endforeach;
        ?>
        
    </ul>
</div>
<?php endif; ?>

<div class="productlist">
<?php
$the_query = new WP_Query($args);
if($the_query->have_posts()):
    while( $the_query->have_posts() ) : $the_query->the_post();
        echo '<a href="'.get_the_permalink().'" class="productlist__item">';
        if(has_post_thumbnail($post)):
            the_post_thumbnail('full');
        endif;
        $terms = get_the_terms($post->ID, $taxonomy);
        foreach ( $terms as $term ):
            echo '<span class="cat">'.$term->name.'</span>';
        endforeach;
        the_title('<h3 class="name">', '</h3>' );
        echo '</a>';
    endwhile;
    wp_reset_postdata();
else:
    echo '<p>こちらの商品は見つかりませんでした。</p>';
endif;
?>
</div>