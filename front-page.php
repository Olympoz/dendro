<? get_header('home'); ?>

<!-- Autoplay is allowed. -->


<div class="blur-test">

  <div class="image_top main-gallery-3">


    <div class="image_1">

      <div class="shadow">

        <div class="shadow_back">

        </div>

      </div>

        <div class="top_left">Actualité</div>

        <div class="top_publie">

          <p class="top_publie_first_lign">Les Fougerets - 56060</p>

          <p class="top_publie_second_lign">Publié le 27.04.18</p>

          <p class="top_publie_third_lign">Dernière expertise</p>

          <span class="top_publie_vertical"></span>

        </div>

        <div class="top_right">Approche</div>

    </div>

    <div class="image_2">

        <video style="width: 100%; min-height: 100%; overflow: hidden; "  id="video" src="<?php echo get_template_directory_uri(); ?>/img/dendrotech_video_slide_2.mp4" controls allow="autoplay" loop></video>

          <div class="slide2_textbox">

            <div class="slide2_text1">

              pour que demeure

            </div>

            <div class="slide2_text2">

              ...une histoire exceptionnelle

            </div>

          </div>

          <div class="top_left">Actualité</div>

          <div class="top_publie">

            <p class="top_publie_second_lign">Lancer l'animation</p>

            <p class="top_publie_third_lign">Notre approche</p>

            <span class="top_publie_vertical"></span>

          </div>

          <div class="top_right">Dernière Expertise</div>

    </div>


    <div class="image_3">

      <div class="slide3_textbox">

      </div>

      <div class="top_left">Notre approche</div>

      <div class="top_publie">

        <p class="top_publie_second_lign_2">DENDROTECH était présent au Salon qui se tenait au Louvre le 1er Novembre 2017</p>

        <p class="top_publie_third_lign">Actualités</p>

        <span class="top_publie_vertical"></span>

      </div>

      <div class="top_right">Dernière expertise</div>

    </div>

  </div>

<!----------------------------------------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------------------------------------->

  <div class="row">

  	<div class="content_row col-sm-12">

      	<div class="col-sm-6 charpente_raz">

          <a class="charpente_link" href="<? site_url() ?>/dendrotech/bois-de-charpente/">

        		<div class="charpente ">

              <div class="charpente_particulier">Tout public</div>

        			 <h2 class="charpente_expertiser"> <? the_field("titre_gras_1_expertiser", "options" );?></h2>

        			  <h3 class="charpente_bois"><? the_field("titre_leger_1_expertiser", "options" );?></h3>

        			     <div class="charpente_text_descriptif"> <? the_field("contenu_1_expertiser", "options" );?></div>

                <div class="charpente_dotted_box"></div>

              <div class="charpente_dotted_box_2"></div>

              <div class="overlay">

                <div class="charpente_particulier">Tout public</div>

                <div class="overlay_more">

                  En savoir plus

                  <div class="overlay_dotted_up"></div>

                  <div class="overlay_dotted_down"></div>

                </div>

              </div>

              <div class="overlay_brown"></div>

        		</div>

      		</a>

      	</div>

<!----------------------------------------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------------------------------------->

      	<div class="col-sm-6 gorge_water_raz">


          <a class="gorgewater_link" href="<? site_url()  ?>/dendrotech/bois-gorge-deau/" >

        		<div class="gorgewater">

              <div class="gorgewater_archi">Archi, Archéologue</div>

        			   <h2 class="gorgewater_expertiser"><? the_field("titre_gras_2_expertiser", "options" );?></h2>

        			     <h3 class="gorgewater_bois"><? the_field("titre_leger_2_expertiser", "options" );?></h3>

        			     <div class="gorgewater_text_descriptif"> <? the_field("contenu_2_expertiser", "options" );?> </div>

                <div class="gorgewater_dotted_box"></div>

                <div class="gorgewater_dotted_box_2"></div>

                <div class="overlay">

                    <div class="gorgewater_archi">Archi, Archéologue</div>

                    <div class="overlay_more">En savoir plus

                    <div class="overlay_dotted_up"></div>

                    <div class="overlay_dotted_down"></div>

                    </div>

                </div>

                <div class="overlay_brown"></div>

        		</div>

          </a>

      	</div>

  	</div>

  </div>


<!----------------------------------------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------------------------------------->

  <div class="row bloc_2">

  		<div class="content_row col-sm-12">

				  	<div class="col-sm-4">

					  	<section class="notre">

				  			<p class="notre_first_title"><? the_field("titre_leger_1_notre", "options" );?></p>

					  		<h3 class="notre_second_title"><? the_field("titre_gras_1_notre", "options" );?></h3>

					  		<p class="notre_arbre">

                </p>

					  	</section>

				  	</div>

				  	<div class="col-sm-8">

				  		<section class="methode">

				  			<h2 class="methode_title">

				  				<? the_field("titre_gras_1_methode", "options" );?>

				  			</h2>

				  		        <? the_field("contenu_1_methode", "options" );?>

                   <div class="methode_more">
                       <a href="<? site_url()  ?>/dendrotech/notre-approche/" class="methode_more_link">
                         <? the_field("contenu_2_methode", "options" );?>
                       </a>
                       <div class="methode_more_dotted_box">

                       </div>
                   </div>

                    <div class="methode_cross_box">

                      <div class="methode_cross"> </div>

                    </div>

				  		</section>

				  	</div>

  		</div>

  </div>

  </div>

<? get_footer(); ?>
