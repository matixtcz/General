<?php 
/* 

Template Name:  Strona z Treścią


*/
get_header();
    $thumbnail_url = wp_get_attachment_url(get_post_thumbnail_id( $post->ID) );
?>

<div class="text-center">
        <h1><?php the_title(); ?> </h1>
 </div>

<!-- main content -->
<div class="container">
        <div class="row" id="primary">
            <div id="content" class="col-md-12">

                <section class="main-content">

                      <?php while ( have_posts () ) : the_post(); ?>

                            <?php the_content(); ?>
                            
                        <?php endwhile; ?>

                </section>
            </div> <!--content-->
        </div> <!--row-->
    </div> <!--container-->


<?php get_footer(); ?>