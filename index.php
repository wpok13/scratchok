<?php 
    get_header( );
?>
    <?php
    if ( have_posts() ) : 
        while ( have_posts() ) : the_post();
            the_content();
        endwhile;
    else :
        _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
    endif;
    ?>
<?php 
    get_sidebar( );
    get_footer( );
?>

