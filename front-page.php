<?php get_header(); ?>

<div class="preloading fadeIn">

<div class="container">

<!--- HERO HEADER --->
        <div class="row">
            <div class="col-md-12">
                 <div class="hero-bg" >
            <h1 class="fade-anime-top"> <?php the_field('name'); ?> </h1>
            <h1 class="fade-anime-top"> <?php the_field('description'); ?> </h1>
                      <h2 class="fade-anime-bottom"> <?php the_field('quote'); ?> </h2>					
                 </div>
            </div>
  </div>
<!--- THE END HERO HEADER --->

<!--- ABOUT --->
<?php if( have_rows('about') ): 

while( have_rows('about') ): the_row(); 
?>
  <div class="row">
          <div class="col-md-6 col-xs-12">
                <div class="lg-col-bg" >
          <div class="lg-col-ttl2"><?php the_sub_field('title'); ?></div>
                    <div class="lg-col-wrt"> <?php the_sub_field('content'); ?>
      </div>							
                </div>
          </div>

  <div class="col-md-6 col-xs-12">
                <div class="lg-col-bg2" >
                        <img src="<?php the_sub_field('picture'); ?>" alt="" class="img-lg-col2">					   
                </div>
          </div>
  
  </div>
<?php endwhile; ?>

<?php endif; ?>
       
<!--- THE END ABOUT CLIENT --->

<!--- HERO HEADER WORK SLIDER --->
<?php if( have_rows('social_networks') ): 

while( have_rows('social_networks') ): the_row(); 
?>
<div class="row">
  <div class="col-md-12 xs-col-12">
    <div class="lg-col-bg">
      <div class="lg-col-ttl2"><?php the_sub_field('title'); ?></div>
      <div class="lg-col-wrt2">
        <?php the_sub_field('content'); ?>
      </div>
    </div>
  </div>
</div>
<?php endwhile; ?>

<?php endif; ?>

    <div class="row">
            <div class="col-md-6 col-xs-12">
                  <div class="prjct-bg" >					
                <a target="blank" href="https://unsplash.com/photos/BP3XOsSPlGA"> <img src="img/covers/1.jpg" alt="" class="img-prjct-wrk"> </a>
              <div class="prjct-wrt-left-wrk"> </div>
          <div class="shw-cs2"> Project Title </div>
          <div class="shw-cs4"> Branding, Identity </div>
          <div class="shw-cs"> Case study ( Coming soon ) </div>
      </div>					
            </div>
    
            <div class="col-md-6 col-xs-12">
                  <div class="prjct-bg" >					
                <a target="blank" href="https://unsplash.com/photos/i_6Y2V81ceA"> <img src="img/covers/2.jpg" alt="" class="img-prjct-wrk"> </a>
              <div class="prjct-wrt-right-wrk"> </div>
          <div class="shw-cs2"> Project Title </div>
          <div class="shw-cs4"> Typography </div>
          <div class="shw-cs"> Case study ( Coming soon ) </div>
      </div>
            </div>
          </div>

    <div class="row">
            <div class="col-md-6 col-xs-12">
                  <div class="prjct-bg" >					
                <a target="blank" href="https://unsplash.com/photos/aX6MnM_xvXo"> <img src="img/covers/3.jpg" alt="" class="img-prjct-wrk"> </a>
              <div class="prjct-wrt-left-wrk"> </div>
          <div class="shw-cs2"> Project Title </div>
          <div class="shw-cs4"> Illustration, Art Direction </div>
          <div class="shw-cs"> Case study ( Coming soon ) </div>
      </div>					
            </div>
    
            <div class="col-md-6 col-xs-12">
                  <div class="prjct-bg" >					
                <a target="blank" href="https://unsplash.com/photos/qX9Ie7ieb1E"> <img src="img/covers/4.jpg" alt="" class="img-prjct-wrk"> </a>
              <div class="prjct-wrt-right-wrk"> </div>
          <div class="shw-cs2"> Project Title </div>
          <div class="shw-cs4"> Street Art </div>
          <div class="shw-cs"> Case study ( Coming soon ) </div>
      </div>
            </div>
          </div>	

    <div class="row">
            <div class="col-md-6 col-xs-12">
                  <div class="prjct-bg" >					
                <a target="blank" href="https://unsplash.com/photos/5E5N49RWtbA"> <img src="img/covers/5.jpg" alt="" class="img-prjct-wrk"> </a>
              <div class="prjct-wrt-left-wrk"> </div>
          <div class="shw-cs2"> Project Title </div>
          <div class="shw-cs4"> Art Direction </div>
          <div class="shw-cs"> Case study ( Coming soon ) </div>
      </div>					
            </div>
    
            <div class="col-md-6 col-xs-12">
                  <div class="prjct-bg" >					
                <a target="blank" href="https://unsplash.com/photos/GCQaYDCQwgc"> <img src="img/covers/6.jpg" alt="" class="img-prjct-wrk"> </a>
              <div class="prjct-wrt-right-wrk"> </div>
          <div class="shw-cs2"> Project Title </div>
          <div class="shw-cs4"> Branding, Web Design, App. Design </div>
          <div class="shw-cs"> Case study ( Coming soon ) </div>
      </div>
            </div>
          </div>	
<?php get_footer(); ?>
