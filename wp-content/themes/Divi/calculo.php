
				<script src="https://www.power-sun.com/wp-content/themes/Divi/jquery-1.2.6.pack.js"></script>
				<script src="https://www.power-sun.com/wp-content/themes/Divi/jquery.easing.1.3.js"></script>
				<script src="https://www.power-sun.com/wp-content/themes/Divi/jquery.hotkeys-0.7.8-packed.js"></script>
				<script src="https://www.power-sun.com/wp-content/themes/Divi/jquery.calculation.min.js"></script>

				<script type="text/javascript">// <![CDATA[
                    jQuery(document).ready(function() {

                    jQuery('#mob').click(function() {
						var qte = jQuery("#mo1").val();
						var watts = jQuery("#mo2").val();
						var hrs = jQuery("#mo3").val();
                        jQuery("#mo4").val(qte*watts*hrs);
                        return false;
                    });
                    jQuery('#mob').trigger('click');

                    $('#peb').click(function() {
						var qte = $("#pe1").val();
						var watts = $("#pe2").val();
						var hrs = $("#pe3").val();
						$("#pe4").val(qte*watts*hrs);
						return false;
					});
                    jQuery('#peb').trigger('click');

                    $('#rfb').click(function() {
						var qte = $("#rf1").val();
						var watts = $("#rf2").val();
						var hrs = $("#rf3").val();
						$("#rf4").val(qte*watts*hrs); return false;
					});
                    jQuery('#rfb').trigger('click');

                    $('#cub').click(function() {
						var qte = $("#cu1").val();
						var watts = $("#cu2").val();
						var hrs = $("#cu3").val();
						$("#cu4").val(qte*watts*hrs); return false;
					});
                    jQuery('#cub').trigger('click');

                    $('#lab').click(function() {
						var qte = $("#la1").val();
						var watts = $("#la2").val();
						var hrs = $("#la3").val();
						$("#la4").val(qte*watts*hrs); return false;
					});
                    jQuery('#lab').trigger('click');

                    $('#seb').click(function() {
						var qte = $("#se1").val();
						var watts = $("#se2").val();
						var hrs = $("#se3").val();
						$("#se4").val(qte*watts*hrs); return false;
					});
                    jQuery('#seb').trigger('click');


                    $('#emb').click(function() {
						var qte = $("#em1").val();
						var watts = $("#em2").val();
						var hrs = $("#em3").val();
						$("#em4").val(qte*watts*hrs); return false;
					});
                    jQuery('#emb').trigger('click');

                    $('#veb').click(function() {
						var qte = $("#ve1").val();
						var watts = $("#ve2").val();
						var hrs = $("#ve3").val();
						$("#ve4").val(qte*watts*hrs); return false;
					});
                    jQuery('#veb').trigger('click');


                    $('#scb').click(function() {
						var qte = $("#sc1").val();
						var watts = $("#sc2").val();
						var hrs = $("#sc3").val();
						$("#sc4").val(qte*watts*hrs); return false;
					});
                    jQuery('#scb').trigger('click');

                    $('#ceb').click(function() {
						var qte = $("#ce1").val();
						var watts = $("#ce2").val();
						var hrs = $("#ce3").val();
						$("#ce4").val(qte*watts*hrs); return false;
					});
                    jQuery('#ceb').trigger('click');

                    $('#pob').click(function() {
						var qte = $("#po1").val();
						var watts = $("#po2").val();
						var hrs = $("#po3").val();
						$("#po4").val(qte*watts*hrs); return false;
					});
                    jQuery('#pob').trigger('click');

                    $('#tvb').click(function() {
						var qte = $("#tv1").val();
						var watts = $("#tv2").val();
						var hrs = $("#tv3").val();
						$("#tv4").val(qte*watts*hrs); return false;
					});
                    jQuery('#tvb').trigger('click');

                    $('#dvb').click(function() {
						var qte = $("#dv1").val();
						var watts = $("#dv2").val();
						var hrs = $("#dv3").val();
						$("#dv4").val(qte*watts*hrs); return false;
					});
                    jQuery('#dvb').trigger('click');


                    $('#stb').click(function() {
						var qte = $("#st1").val();
						var watts = $("#st2").val();
						var hrs = $("#st3").val();
						$("#st4").val(qte*watts*hrs); return false;
					});
                    jQuery('#stb').trigger('click');

                    $('#orb').click(function() {
						var qte = $("#or1").val();
						var watts = $("#or2").val();
						var hrs = $("#or3").val();
						$("#or4").val(qte*watts*hrs); return false;
					});
                    jQuery('#orb').trigger('click');

                    $('#prb').click(function() {
						var qte = $("#pr1").val();
						var watts = $("#pr2").val();
						var hrs = $("#pr3").val();
						$("#pr4").val(qte*watts*hrs); return false;
					});
                    jQuery('#prb').trigger('click');

                    $('#cjb').click(function() {
						var qte = $("#cj1").val();
						var watts = $("#cj2").val();
						var hrs = $("#cj3").val();
						$("#cj4").val(qte*watts*hrs); return false;
					});
                    jQuery('#cjb').trigger('click');


                    $('#aib').click(function() {
						var qte = $("#ai1").val();
						var watts = $("#ai2").val();
						var hrs = $("#ai3").val();
						$("#ai4").val(qte*watts*hrs); return false;
					});
                    jQuery('#aib').trigger('click');


                    $('#anb').click(function() {
						var qte = $("#an1").val();
						var watts = $("#an2").val();
						var hrs = $("#an3").val();
						$("#an4").val(qte*watts*hrs); return false;
					});
                        jQuery('#anb').trigger('click');


                        $('#otb').click(function() {
						var qte = $("#ot1").val();
						var watts = $("#ot2").val();
						var hrs = $("#ot3").val();
						$("#ot4").val(qte*watts*hrs); return false;
					});
                        jQuery('#otb').trigger('click');


                    $('#dib').click(function() {
						var qte = $("#di1").val();
						var watts = $("#di2").val();
						var hrs = $("#di3").val();
						$("#di4").val(qte*watts*hrs); return false;
					});
                        jQuery('#dib').trigger('click');


                    $('#cal_consoq').click(function() {
						var whs = $(".wh").sum();
						$("#consoq").val(whs); return false;
					});
                        //jQuery('#cal_consoq').trigger('click');


                        $('#cal_pow').click(function() {
						var consoq = $("#consoq").val();
						var hsol = $("#hsol").val();
						var coeff = $("#coeff").val()/100;
						$("#pow").val(parseInt(consoq/(0.77*coeff*hsol))); return false;
					});

					$('#cal_pow_bat').click(function() {
						var consoq = $("#consoq").val();
						var jours = $("#jours").val();
						$("#pow_bat").val(parseInt(consoq*jours*2.4));
						$("#capa6").val(parseInt(consoq*jours*2.4/6));
						$("#capa12").val(parseInt(consoq*jours*2.4/12));
						$("#capa24").val(parseInt(consoq*jours*2.4/24));
						$("#bat12").val(parseInt(consoq*jours*2.4/(12*200))+1);
						$("#bat24").val(parseInt(consoq*jours*2.4/(24*200))+1);
						return false;
					});

				});
				// ]]>
				</script>

<?php
/*
Template Name: calculo
*/

get_header();

$is_page_builder_used = et_pb_is_pagebuilder_used( get_the_ID() ); ?>

<div id="main-content">

<?php if ( ! $is_page_builder_used ) : ?>

	<div class="container">
		<div id="content-area" class="clearfix">
			<div id="left-area">

<?php endif; ?>

			<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php if ( ! $is_page_builder_used ) : ?>

					<h1 class="main_title"><?php the_title(); ?></h1>
				<?php
					$thumb = '';

					$width = (int) apply_filters( 'et_pb_index_blog_image_width', 1080 );

					$height = (int) apply_filters( 'et_pb_index_blog_image_height', 675 );
					$classtext = 'et_featured_image';
					$titletext = get_the_title();
					$thumbnail = get_thumbnail( $width, $height, $classtext, $titletext, $titletext, false, 'Blogimage' );
					$thumb = $thumbnail["thumb"];

					if ( 'on' === et_get_option( 'divi_page_thumbnails', 'false' ) && '' !== $thumb )
						print_thumbnail( $thumb, $thumbnail["use_timthumb"], $titletext, $width, $height );
				?>

				<?php endif; ?>

					<div class="entry-content">
					<?php
						the_content();

						if ( ! $is_page_builder_used )
							wp_link_pages( array( 'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'Divi' ), 'after' => '</div>' ) );
					?>
					</div> <!-- .entry-content -->

				<?php
					if ( ! $is_page_builder_used && comments_open() && 'on' === et_get_option( 'divi_show_pagescomments', 'false' ) ) comments_template( '', true );
				?>

				</article> <!-- .et_pb_post -->

			<?php endwhile; ?>

<?php if ( ! $is_page_builder_used ) : ?>

			</div> <!-- #left-area -->

			<?php get_sidebar(); ?>
		</div> <!-- #content-area -->
	</div> <!-- .container -->

<?php endif; ?>

</div> <!-- #main-content -->

<?php get_footer(); ?>
