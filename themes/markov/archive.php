<?php get_header(); ?>

<div class="container">
<div class="row portfolio animated">                

<?php if (have_posts()): while (have_posts()) : the_post(); ?>

<div class="col-sm-offset-2 col-sm-8 col-md-offset-3 col-md-6">

    <div class="entry">

        <?php if(has_post_thumbnail()): ?>
        <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
        
        <div class="photo">
        <a href="<?php the_permalink(); ?>">
            <img class="img-responsive" src="<?php echo $image[0]; ?>"/>
        </a>
        </div>
        <?php endif; ?>
        
        <div class="caption">
            <p><a href="<?php the_permalink(); ?>">
            <b><?php the_title(); ?></b></a><br></p>
            <p><?php the_excerpt(); ?><br></p>
        </div>

        <div class="details">

            <a href="<?php the_permalink(); ?>"><?php the_date("j M"); ?></a>

            <div class="share">
                <a target="_blank" href="#"><i class="fa fa-fw fa-facebook"></i></a>
                <a target="_blank" href="#"><i class="fa fa-fw fa-twitter"></i></a>
                <a href="#"><i class="fa fa-fw fa-pinterest-p"></i></a>
                <a target="_blank" href="#"><i class="fa fa-fw fa-google-plus"></i></a>
            </div>

            <div class="buttons"><span><a href="<?php the_permalink(); ?>">View</a></span></div>
        </div>

    </div>
</div>
<!--<div class="col-md-2 hidden-sm hidden-xs">aaa</div>-->

<?php endwhile; ?>           
<?php endif; ?>           
</div>      
</div> 

<?php get_footer(); ?>
