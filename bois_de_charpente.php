<?
/*
Template Name: Bois de charpente
*/
?>

<? get_header('page-2'); ?>

<div class="row presentation ">

  <div class="col-sm-12 pres">

    <div class="col-sm-6 pres">

      <div class="presentation_video">

        <? $video_test = get_field('image_2_bois_de_charpente'); ?>

        <div id="presentation_video_img1" style="background-image: url('<? the_field('image_1_bois_de_charpente'); ?>')" ></div>

        <div id="presentation_video_img2" style="background-image: url('<? the_field('video_2_poster'); ?>')" >

          <video  class="video_charpente_test" loop src="<? echo $video_test; ?>" poster="<? the_field('video_2_poster'); ?>" controls  ></video>

        </div>

        <div id="presentation_video_img3" style="background-image: url('<? the_field('image_3_bois_de_charpente'); ?>')" ></div>

        <div id="presentation_video_img4" style="background-image: url('<? the_field('image_4_bois_de_charpente'); ?>')" ></div>

      </div>

    </div>

    <div class="col-custom-demi pres">

      <div class="presentation_onglet">

            <div id="presentation_onglet_pres" class="presentation_onglet_default" >

                <p class="pres_text"><? the_field("titre_gras_1_presentation") ;?></p>

            </div>

            <div id="presentation_onglet_test"  >

                <p class="pres_text"><? the_field("titre_leger_1_tests") ;?> <span class="presentation_title_span"><? the_field("titre_gras_1_tests") ;?></span></p>

            </div>

            <div id="presentation_onglet_expertise" >

                <p class="pres_text">  <? the_field("titre_leger_1_expertise") ;?><span class="presentation_title_span"><? the_field("titre_gras_1_expertise") ;?></span></p>

            </div>

            <div id="presentation_onglet_archeo" >

                <p class="pres_text">

                  La Dendro

                  <br>

                  Archéologie

                </p>

            </div>

      </div>

    </div>

    <div class="col-custom-quatre pres">

      <div class="presentation_pres">

          <div class="presentation_right_1" id="pres_1">

            <div class="presentation_right_title_1">

              <? the_field("titre_gras_1_presentation") ;?>

            </div>

            <div class="presentation_right_text_1">

                <? the_field("contenu_1_presentation") ;?>

            </div>

            <div class="presentation_right_span_1">

            </div>

            <div class="presentation_right_more_1">

              <? the_field("contenu_2_presentation") ;?>

            </div>

            <div class="presentation_right_contactus_1">

              <a href="<? site_url() ?>/dendrotech/contact/">

                <? the_field("contenu_3_presentation") ;?>

              </a>

              <div class="presentation_right_contactus_dottedbox"></div>

            </div>

          </div>

          <div class="presentation_right_2" id="pres_2">

                  <div class="presentation_right_title_2"><? the_field("titre_leger_1_tests") ;?> <span class="presentation_title_span"><? the_field("titre_gras_1_tests") ;?></span></div>

                  <div class="presentation_right_text_2">

                    <? the_field("contenu_1_tests") ;?>

                  </div>

                  <div class="presentation_right_span_2">

                  </div>

                  <div class="presentation_right_more_2">

                    <? the_field("contenu_2_tests") ;?>

                  </div>

                  <div class="presentation_right_contactus_2">

                    <a href="<? site_url() ?>/dendrotech/contact/">

                    <? the_field("contenu_3_tests") ;?>

                    </a>

                    <div class="presentation_right_contactus_dottedbox"></div>

                  </div>

          </div>

          <div class="presentation_right_3" id="pres_3">

                <div class="presentation_right_title_3">

                  <? the_field("titre_leger_1_expertise") ;?><span class="presentation_title_span"><? the_field("titre_gras_1_expertise") ;?></span>

                </div>

                    <div class="presentation_right_text_3">

                      <? the_field("contenu_1_expertise") ;?>

                    </div>

                <div class="presentation_right_span_3">

                </div>

                    <div class="presentation_right_more_3">

                      <? the_field("contenu_2_expertise") ;?>

                    </div>

                <div class="presentation_right_contactus_3">

                  <a href="<? site_url() ?>/dendrotech/contact/">

                  <? the_field("contenu_3_expertise") ;?>

                  </a>

                  <div class="presentation_right_contactus_dottedbox"></div>

                </div>

          </div>

          <div class="presentation_right_4" id="pres_4">

            <div class="presentation_right_title_4">

              <? the_field("titre_leger_1_dendro") ;?><span class="presentation_title_span"> <? the_field("titre_gras_1_dendro") ;?></span>

            </div>

                <div class="presentation_right_text_4">

                  <? the_field("contenu_1_dendro") ;?>

                </div>

            <div class="presentation_right_span_4">

            </div>

                <div class="presentation_right_more_4">

                  <? the_field("contenu_2_dendro") ;?>

                </div>

            <div class="presentation_right_contactus_4">

              <a href="<? site_url() ?>/dendrotech/contact/">

              <? the_field("contenu_3_dendro") ;?>

            </a>

              <div class="presentation_right_contactus_dottedbox"></div>

            </div>

          </div>

      </div>

    </div>

  </div>

</div>

<!----------------------------------------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------------------------------------->


<? if( have_rows('row_bois_de_charpente') ): ?>

  <div class="row application">

    <? while ( have_rows('row_bois_de_charpente') ) : the_row(); ?>

        <div class="col-sm-12" id="<? the_sub_field('id_du_bloc') ?>">

            <div class="col-sm-6 application_left">

              <div class="application_left_bloc">

                <div class="application_left_title_1">

                  <? the_sub_field('titre_1'); ?>

                </div>

                <div class="application_left_text_1">

                    <? the_sub_field('contenu_1'); ?>

                </div>

              </div>

            </div>

            <div class="col-sm-6 application_right">

              <div class="application_right_bloc">

                  <div class="application_right_title_1">

                    <? the_sub_field('titre_2'); ?>

                  </div>

                  <? if( have_rows('liste_pre_requis') ): ?>

                    <div class="application_right_text_1">

                          <? while ( have_rows('liste_pre_requis') ) : the_row(); ?>

                      <li class="application_right_list"><span class="application_right_span"><? the_sub_field('texte_liste_pre_requis'); ?></span></li>

                            <? endwhile; ?>

                    </div>

                  <? endif; ?>

                </div>

            </div>

        </div>

    <? endwhile; ?>

  </div>

<? else : ?>

  Oups, il n'y pas de contenu.

<? endif; ?>

<!----------------------------------------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------------------------------------->


<div class=" picture">

  <div class="picture_background">

  </div>

</div>

<? get_footer('approche'); ?>
