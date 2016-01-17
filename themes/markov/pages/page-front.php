<?php  

/*
Template Name: Front
*/

?>

<?php get_header(); ?>
   
<style>
    body {
        background: url(../img/front/bg.png) repeat;
        background-size: 100%;
    }
</style>

<div class="header animated">

    <div class="header-overlay">
        <div>
<!--            <button id="btn-animate-pfolio" class="btn-hdr animated btn btn-primary outline glow">About Me</button><br/>-->
        <a href="<?php echo get_post_type_archive_link( 'blog' ); ?>" id="btn-animate-blog" class="btn-hdr animated btn btn-primary outline glow">Blog</a>
        </div> 
    </div>

    <div class="no-pad col-sm-6">
          <img class="img-responsive" src="<?= bloginfo('template_directory'); ?>/img/front/left.png"/>
    </div>
    <div class="no-pad col-sm-6">
          <img class="img-responsive" src="<?= bloginfo('template_directory'); ?>/img/front/right.png"/>
    </div>
</div>   
    
<?php get_footer(); ?>
