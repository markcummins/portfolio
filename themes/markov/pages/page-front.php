<?php  

/*
Template Name: Front
*/

?>

<?php get_header(); ?>
   
<link rel='stylesheet prefetch' href='//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
<link rel='stylesheet prefetch' href='//cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.3/animate.min.css'>
   
    <style>
        
        @import url('//fonts.googleapis.com/css?family=Raleway:400,300,600');

        .img-responsive{
        width: 100%;  
        }

        .no-pad{
        padding: 0px;
        margin: 0px;
        }
        .header {
        /* display: none; */
        width: 100%;
        font-weight: bold;
        text-align: center;
        transition: .3s;
        }

        /***********************
          OUTLINE BUTTONS
        ************************/

        .btn.outline {
            background: none;
            padding: 12px 22px;
        }
        .btn-primary.outline {
            border: 2px solid #9C1D1D;
            color: #9C1D1D;
        }
        .btn-primary.outline:hover, .btn-primary.outline:focus, .btn-primary.outline:active, .btn-primary.outline.active, .open > .dropdown-toggle.btn-primary {
            color: #D95050;
            border-color: rgb(217, 80, 80);
        }
        .btn-primary.outline:active, .btn-primary.outline.active {
            border-color: #8e2d2e;
            color: #8e2d2e;
            box-shadow: none;
            background: none;
        }

        /***********************
          CUSTON BTN VALUES
        ************************/

        .btn {
            padding: 14px 24px;
            border: 0 none;
            font-weight: 700;
            letter-spacing: 1px;
            text-transform: uppercase;
        }
        .btn:focus, .btn:active:focus, .btn.active:focus {
            outline: 0 none;
        }
        
        .btn {
          border-radius:0;
        }
        
        .btn-hdr{
            display: none;
        }
        
        .header-overlay{
            margin: 0 auto;
            padding: 20px;
            display: flex;
            position: absolute;
            justify-content: center;
            align-items: center;
            overflow: auto;
            z-index: 999;
            width: 100%;
            height: 100%;
        }

        .header-overlay div{
            overflow: hidden;
            min-height: 180px;
            padding: 20px;
        }
        
        .header-overlay .btn{
            margin: 10px;
        }
        
        .nav-logo{
            width: 90px;
            padding: 4px 10px;
        }

        .nav {
            padding: 4px;
            text-align: center;
            font-family: Raleway;
            box-shadow: 2px 2px 8px -1px #333;
            width: 100%;
            display: none;
        }
        #nav-1 {
          background: #AD4445;
        }

        .link-1 {
          transition: 0.3s ease;
          background: #AD4445
          color: #ffffff;
          font-size: 20px;
          text-decoration: none;
          border-top: 4px solid rgb(217, 80, 80);;
          border-bottom: 4px solid rgb(217, 80, 80);;
          padding: 8px 0;
          margin: 0 14px;
        }
        .link-1:hover {
          border-top: 4px solid #ffffff;
          border-bottom: 4px solid #ffffff;
          padding: 6px 0; 
        }
        
        a.deco-none {
            color:#FFF !important;
            text-decoration:none;
            cursor:pointer; 
        }
        
        .portfolio{
            display: none;   
        }
        
        /* DATE */
        
        .date {
            margin-top: 20px;
            position: relative;
            width: 70px;
            color: #AD4445;
        }

        .day, .month, .year {
        position: absolute;
        }

        .day { 
        font-size: 30px;
        top: 15px;
        }

        .month { 
        top: 0;
        left: 0;  
        font-size: 18px;
        }

        .year { 
        top: 14px;
        right: 0;
        font-size: 20px;
        rotation: -90deg !important;
        /* ** Hacks ** */
        -webkit-transform: rotate(-90deg);
        -moz-transform: rotate(-90deg);  
        }
        
    </style>
    

<!--    <div class="bloque paraxify foto foto-2"></div>-->

    <div>
           
        <div class="nav animated" id="nav-1">
            <a class="deco-none link-1" href="#">Blog</a>
            <img class="nav-logo" src="<?= bloginfo('template_directory'); ?>/img/logo.svg"/>
            <a class="deco-none link-1" href="#">About</a>
        </div>
            
<!--            <div class="row no-pad header-wrapper">-->
        <div class="header animated">

        <div class="header-overlay">
            <div>
            <button id="btn-animate-pfolio" class="btn-hdr animated btn btn-primary outline">Portfolio</button>                     <br/>
            <button id="btn-animate-blog" class="btn-hdr animated btn btn-primary outline">Blog</button>                          </div>
        </div>

        <div class="no-pad col-sm-6">
              <img class="img-responsive" src="<?= bloginfo('template_directory'); ?>/img/front/left.png"/>
        </div>
        <div class="no-pad col-sm-6">
              <img class="img-responsive" src="<?= bloginfo('template_directory'); ?>/img/front/right.png"/>
        </div>
        </div>
<!--            </div>  -->
            
        <div class="container">
        <div class="row portfolio animated">                
                
            <?php if (have_posts()): while (have_posts()) : the_post(); ?>

            <!-- article -->
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                <div class="col-xs-3 col-sm-2 col-md-1">
                <div class="date">
                    <span class="day"><?php the_time('d'); ?></span>
                    <span class="month"><?php the_time('M'); ?></span>
                    <span class="year"><?php the_time('Y'); ?></span>
                </div>
                </div>
                
                <div class="col-xs-9 col-sm-10 col-md-11">
                <!-- post thumbnail -->
                <?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                        <?php the_post_thumbnail(); // Fullsize image for the single post ?>
                    </a>
                <?php endif; ?>
                <!-- /post thumbnail -->

                <!-- post title -->
                <h1>
                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                </h1>
                <!-- /post title -->

                <!-- post details -->
                <span class="date"><?php the_time('F j, Y'); ?> <?php the_time('g:i a'); ?></span>
                <span class="author"><?php _e( 'Published by', 'html5blank' ); ?> <?php the_author_posts_link(); ?></span>
                <span class="comments"><?php if (comments_open( get_the_ID() ) ) comments_popup_link( __( 'Leave your thoughts', 'html5blank' ), __( '1 Comment', 'html5blank' ), __( '% Comments', 'html5blank' )); ?></span>
                <!-- /post details -->

                <?php the_content(); // Dynamic Content ?>

                <?php the_tags( __( 'Tags: ', 'html5blank' ), ', ', '<br>'); // Separated by commas with a line break at the end ?>

                <p><?php _e( 'Categorised in: ', 'html5blank' ); the_category(', '); // Separated by commas ?></p>

                <p><?php _e( 'This post was written by ', 'html5blank' ); the_author(); ?></p>

                <?php edit_post_link(); // Always handy to have Edit Post Links available ?>

                <?php comments_template(); ?>
                </div>
            </article>
            <!-- /article -->

        <?php endwhile; ?>           
        <?php endif; ?>           
        </div>      
    </div>    
    </div>    
    
<?php get_footer(); ?>
