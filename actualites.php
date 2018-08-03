<?
/*
Template Name: Actualités
*/
?>

<? get_header('page'); ?>

<div class="row actualites">

  <div class="title_actualites">

    <span>L'actualité</span> dendrotech

  </div>

  <div class="title_lign"></div>

  <div class="filters_actualites">

    <div class="filter_tags">

        évènements

        <div class="filter_tags_border"></div>

    </div>

    <div class="filter_tags">

        projets

        <div class="filter_tags_border">

        </div>

    </div>

    <div class="filter_tags">

        demeure historique

        <div class="filter_tags_border">

        </div>

    </div>

    <div class="filter_tags">

        études

        <div class="filter_tags_border">

        </div>

    </div>

    <div class="filter_tags">

        presse

        <div class="filter_tags_border">

        </div>

    </div>

  </div>

  <div class="actualites_jsp">


    <div class="actualites_wrapper">

      <?

      $args_article = array(
        'post_type'       => 'post',
        'orderby'         => 'date',
        'order'           => 'DESC',
        'posts_per_page'  => -1,
      );

      $query_article = new WP_Query( $args_article );

      ?>

      <?php  while ($query_article->have_posts()) : $query_article->the_post();  ?>

        <div class="actualites_content" id="test_ajax">

          <div class="actualites_tags">

            Projets

          </div>

          <div class="actualites_description">

            Le manoir de Fougères
            <br>
            Une demeure de Prestige

          </div>

          <div class="overlay">

            <div class="overlay_more">

              <a href="<?php the_permalink() ?>">

                En savoir plus

              </a>

              <div class="overlay_dotted_up"></div>

              <div class="overlay_dotted_down"></div>

            </div>

          </div>

          <div class="overlay_brown"></div>

        </div>

      <? endwhile; ?>

      <? wp_reset_postdata(); ?>

    </div>

  </div>

</div>

<? get_footer('approche'); ?>
