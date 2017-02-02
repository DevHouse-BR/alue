<?php
/* 
Template name: Nova Pagina
*/
global $nature_mt;
get_header('mt');
?>

<style type="text/css">
	.mt-blog-single-post-content {
		margin-top:0px;
	}
</style>
<!-- Blog -->
    <section class="mtblog" id="conteudo">
        <div class="container">
            <!-- section title -->
            <div class="row">
                <div class="span12">
                    <div class="section-title">
                        <h2><span><?php the_title(); ?></span></h2>
                        <p><?php echo get_post_meta( $post->ID, '_cmb_p_sub_title', true ); ?></p>
                    </div>
                </div>
            </div>
            <!-- section title end -->            
            <!-- Blog Post's -->
            <div class="row single-blog-post-row">
                <div class="span12 single-blog-post-span">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                    <!-- Blog Post end -->
                <div class="row <?php post_class(); ?>" id="post-<?php the_ID(); ?>">
               		<div class="blog-post-box">
  						<?php $format = get_post_format(); if( false === $format || $format == 'image' ) { $format = 'standard'; } ?>

                        <!-- Post Featured Box -->
                        <?php if( has_post_thumbnail() || $format == 'gallery' || $format == 'video' )  : ?>
                        <div class="post-featured-box">
                            <div class="post-featured-image">
                                <?php the_post_thumbnail('blog-posts'); ?>
                                <?php get_template_part( '/postformats/' . $format . '-format' ); ?>
                            </div>
                        </div>
                        <?php endif; ?>
                        <!-- Post Featured Box end -->
 
                        <!-- post content -->
                        <div class="mt-blog-single-post-content"><?php the_content(''); ?></div>
                        <!-- post content end -->
                    </div>
                </div>
                    <?php endwhile; endif; ?>
                    <!-- Blog Post end -->
                </div>
            </div>
           <!-- Blog Post's end -->

        </div> 
    </section>



<?php get_footer();?>