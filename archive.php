<?php get_header( ); ?>

<main class="p-main">
    <div class="p-main-visual p-main-visual--archive">
        <img src="<?php echo esc_url( get_template_directory_uri()); ?>/image/archive-main.jpg" alt="アーカイブページ">
        <h1>Menu:</h1>
        <p><?php single_term_title( ); ?></p>
        <div class="c-background--gray p-main-visual--archive__layer"></div>
    </div>

    <section class="p-humburger-menuList c-margin--LR">
        <div class="p-humburger-menuList__title">
            <h1>小見出しが入ります</h1>
            <p>テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
            </p>
        </div>
        <?php if ( have_posts( ) ): ?>
            <?php
            while ( have_posts( ) ):
                the_post( ) ;
                ?>
                <?php get_template_part( 'template-parts/loop','post' ); ?>
            <?php endwhile; ?>
        <?php endif; ?>

        <div class="p-page-move">
            <div class="p-page-move__prev">
                <?php the_post_navigation(array('prev_text'=>'&lt&lt;前へ' )); ?>
            </div>
            <div class="p-page-move__next">
                <?php the_post_navigation(array('next_text'=>'次へ&gt;&gt;' )); ?>
            </div>
            <!-- <a href="#">＜＜前へ</a>
            <a href="#">次へ＞＞</a> -->
        </div>
        <?php if (function_exists( 'custom_wp_pagenavi' )){
             custom_wp_pagenavi();
        } ?>
    </section>


</main>
</div>
<?php get_sidebar( ); ?>

</div>

<?php get_footer( ); ?>