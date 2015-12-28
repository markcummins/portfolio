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

        body {
        background: url(https://www.brainpickings.org/wp-content/themes/brainpickings/images/bckgd_body.png);
        font-family: 'Raleway', sans-serif;
        }

        .img-responsive{
        width: 100%;  
        }

        .nav{
        position: fixed;
        top:0px;
        padding: 10px;
        background-color: #FFF;
        color: #AC4243;
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
        
        .header-wrapper{
            position: relative;
        }
        
        .header .btn {
            position: absolute;
            left: 0;
            right: 0;
            margin: auto;
            z-index: 999;
        }
        
        #btn-animate-pfolio{
            top: 46.5%;
        }        
        #btn-animate-blog{
            top: 56.5%;
        }


        /***********************
          OUTLINE BUTTONS
        ************************/

        .btn.outline {
            background: none;
            padding: 12px 22px;
        }
        .btn-primary.outline {
            border: 2px solid #D95050;
            color: #D95050;
        }
        .btn-primary.outline:hover, .btn-primary.outline:focus, .btn-primary.outline:active, .btn-primary.outline.active, .open > .dropdown-toggle.btn-primary {
            color: #D95050;
            border-color: #D95050;
            -webkit-animation: bounce 1s;
            animation: bounce 1s;
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
        
    </style>
    

<!--    <div class="bloque paraxify foto foto-2"></div>-->

    <div>
           
            <div class="nav animated col-xs-12">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            AAA
                        </div>
                    </div>
                </div>
            </div>  
            
            <div class="row no-pad header-wrapper">
                <div class="header animated">
                <button id="btn-animate-pfolio" class="btn-hdr animated btn btn-primary outline">Portfolio</button>
                <button id="btn-animate-blog" class="btn-hdr animated btn btn-primary outline">Blog</button>
                
                <div class="no-pad col-sm-6">
                      <img class="img-responsive" src="<?= bloginfo('template_directory'); ?>/img/front/left.png"/>
                </div>
                <div class="no-pad col-sm-6">
                      <img class="img-responsive" src="<?= bloginfo('template_directory'); ?>/img/front/right.png"/>
                </div>
                </div>
            </div>        
    </div>    
    
<?php get_footer(); ?>
