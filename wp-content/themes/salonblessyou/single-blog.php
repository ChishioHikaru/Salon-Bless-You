<?php
  $terms = get_the_terms( $post->ID, 'blog_category' );
  if ( !empty( $terms ) ) {
    foreach ( $terms as $term ){
      if( 0 == $term->parent )
      $slug_current = $term->slug;
    }
  }
?>
<?php get_header(); ?>
<div id="contents">
    <div class="blog_content detail">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="detail_head">
            <div class="info">
                <time><?php the_time("Y.m.d"); ?></time>
                <?php
                            $terms = get_the_terms($post_id,"blog_category");
                            foreach ($terms as $term) {
                                $name = $term->name;
                                echo '<span class="cat">'.$name.'</span>';
                            }
                        ?>
            </div>
            <h2 class="detail_ttl"><?php the_title(); ?></h2>
        </div>
        <div class="detail_content">
            <?php the_content(); ?>
        </div>
        <?php endwhile; endif; ?>
        <div class="detail_foot">
            <div class="prev-next">
                <?php if (get_previous_post()):?>
                <div class="prev afterarrow red ablt basebtn">
                    <?php previous_post_link(' %link', '前の記事へ'); ?>
                </div>
                <?php endif; ?>
                <?php if (get_next_post()):?>
                <div class="next afterarrow red ablt basebtn">
                    <?php next_post_link('%link ', '次の記事へ'); ?>
                </div>
                <?php endif; ?>
            </div>
            <a href="<?php echo home_url('blog/'); ?>" class="blog_back">一覧に戻る</a>
        </div>
    </div>
</div>

<?php get_footer(); ?>