<?
/*
Template Name: Bois gorgé d'eau
*/
?>


<? get_header('page-2'); ?>




<div class="row gorge">

	<div class="col-sm-12">

		<!-- Vérification si contenu dans boucle -->

		<? if( have_rows('slider_gorge') ): ?>

			<div class="col-sm-6 modif">

				<div class="gorge_bloc_1" id="<? the_sub_field('id_du_bloc_slider') ?>">

					<div class="main-gallery">

						<!-- Début de la boucle Php -->

						<? while ( have_rows('slider_gorge') ) : the_row(); ?>

							<!-- élément à faire boucler -->

							<div class="gorge_bloc_1_img">

								<img src="<? the_sub_field('slider_gorge_image'); ?>" alt="">

							</div>

						<? endwhile; ?>

						<!-- Fin de boucle -->

					</div>

				</div>

			</div>

		<? endif; ?>

		<!-- Fin condition -->

		<div class="col-sm-6 gorge_bloc_2">

			<div class="gorge_eau">

				<div class="gorge_eau_title">


					<? the_field("gorge_slider_right_title"); ?>


				</div>

				<div class="gorge_eau_text">

					<? the_field("gorge_slider_right_texte"); ?>

				</div>

				<div class="gorge_eau_span">

				</div>

				<div class="gorge_eau_contactus">

					<a href="#">

					Contactez_nous

					</a>

					<div class="gorge_eau_contactus_dottedbox"></div>

				</div>

			</div>

		</div>

	</div>

</div>

<!----------------------------------------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------------------------------------->

		<!-- Vérification si contenu dans boucle -->
<? if( have_rows('slider_etape') ): ?>

<div class="row etape">

		<div class="main-gallery-2" >

			<? while ( have_rows('slider_etape') ) : the_row(); ?>

				<div class="etape_bloc">

						<div class="wrapper_etape" >

							<!-- Début de la boucle Php -->

									<div class="etape_container_1 " id="<? the_sub_field('etape') ?>" >

											<div class='etape_title_1' >

												<? the_sub_field('etape_title_1'); ?>

											</div>

											<div class="etape_bloc">

												<div class="etape_title_2">

													<? the_sub_field('etape_title_2'); ?>

												</div>

												<div class="etape_text">

													<? the_sub_field('etape_text'); ?>

												</div>

											</div>

									</div>





									<div class="etape_container_2" >

										<div class="etape_image_bloc">

												<div class="etape_image" style="background-image: url('<? the_sub_field('etape_image');  ?>')">

													<!-- <img src="<? //the_sub_field('etape_image'); ?>" alt=""> -->

												</div>

										</div>

									</div>

								<!-- Fin de boucle -->

						</div>

				</div>

			<? endwhile; ?>

		</div>

</div>

<? endif; ?>


<!----------------------------------------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------------------------------------->
<!----------------------------------------------------------------------------------------------------------------->


<div class="row contexte">

				<div class="col-sm-12">

						<div class="col-sm-6 contexte_left">

							<div class="contexte_left_bloc">

								<div class="contexte_left_title">

									<? the_field("contexte_left_title"); ?>

								</div>

								<div class="contexte_left_text">

									<? the_field("contexte_left_texte"); ?>

								</div>

							</div>

						</div>

						<div class="col-sm-6 contexte_right">

							<div class="contexte_right_bloc">

									<div class="contexte_right_title">

										<? the_field("contexte_right_title"); ?>

									</div>

									<div class="contexte_right_text">

										<? the_field("contexte_right_texte"); ?>

									</div>

									<div class="contexte_right_pdf">

											<a href="#" class="">

												<? the_field("contexte_right_download"); ?>

											</a>

											<div class="contexte_right_pdf_dotted_box">

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



<div class="row download">

  <div class="download_background">

		<div class="download_pdf">

				<a href="#" class="">

					Téléchargez notre brochure complète

				</a>

				<div class="download_pdf_dotted_box">

				</div>

		</div>

  </div>

</div>

<? get_footer('approche'); ?>
