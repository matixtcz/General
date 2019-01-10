<?php 
/*
Template Name: Oferta
*/
get_header();

?>


<div class="text-center">
        <h1><?php the_title(); ?> </h1>
 </div>


      <!-- Oferta -->
       <div class="container">
       <!-- <div class="row"> -->

        <?php $loop = new WP_Query( array( 'post_type' => 'dodawanieofert', 'orderby'=>'post_id', 'order'=>'ASC' ) ); ?>

        <?php while( $loop->have_posts() ) : $loop->the_post(); ?>

         <?php 
          $krotki_opis_ofery = get_field('krotki_opis_ofery');
          $dlugi_opis_ofery  = get_field('dlugi_opis_ofery');
          $lp                = get_field('lp');
          ?>

          <div class="box-card">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title"><?php the_title();?></h5>
              <p class="card-text"><?php echo $krotki_opis_ofery; ?> </p>

              <button class="btn btn-secondary" type="button" data-toggle="collapse" data-target="#collapseExample<?php echo $lp; ?>" aria-expanded="false" aria-controls="collapseExample">
                Więcej &raquo;
              </button>
            
              <div class="collapse" id="collapseExample<?php echo $lp; ?>">
                <div class="card card-body">
                 <p> <?php echo $dlugi_opis_ofery; ?></p>
                </div>
            </div>
            </div>
          </div>
        </div><!-- end col -->

        <?php endwhile; ?>

    <!-- </div> --><!-- end row -->

    <?php get_footer(); ?>