<?php get_header(); ?>
    
    <?php if (have_posts()): while (have_posts()) : the_post(); ?>
    <single>
        <?php if(has_post_thumbnail()): ?>
            <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
            <div class="bg-holder" style="background-image: url('<?=$image[0];?>');" data-width="1024" data-height="768">
            <div class="content intro">
                <h1><?php the_title(); ?></h1>
<!--                <p>Parallax-Scroll</p>-->
<!--                <div class="cta">-->
<!--                  <a href="https://github.com/aentan/Parallax-Scroll/archive/master.zip" class="btn-cta">Download</a>-->
<!--                  <a href="https://github.com/aentan/Parallax-Scroll" class="btn-cta">View on GitHub</a>-->
<!--                </div>-->
            </div>
            </div>
            
            <div class="container">
                <div class="col-sm-offset-2 col-sm-8">
                    <div class="post-meta"><?php echo get_avatar( $post->post_author, 30 ); ?>
                    <?php $fname = get_the_author_meta('first_name'); ?>
                    <?php $lname = get_the_author_meta('last_name');?>
                    <?php echo "By {$fname} {$lname}"; ?>
                    </div>
                </div>
                <div class="col-sm-offset-2 col-sm-8">
                    <div class="content">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>

        <?php endif; ?>
        
        
    <?php endwhile; ?>
	<?php else: ?>
		<article>
			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>
		</article>
	<?php endif; ?>
    </single>
<?php get_footer(); ?>