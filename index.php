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
        <?php 
          $file = get_sub_field('resume');

          if( $file ): ?>
            
            <a href="<?php echo $file['url']; ?>">Résumé</a>

          <?php endif; ?>
      </div>
    </div>
  </div>
</div>
<?php endwhile; ?>

<?php endif; ?>
<div class="row">
<?php $project = array(
            'post_type' => 'project',
         );
         $the_query = new WP_Query( $project );
         if($the_query -> have_posts())
         {
             while($the_query -> have_posts())
            {
                 $the_query -> the_post();
                 ?> 
                  <div class="col-md-6 col-xs-12">
                    <div class="prjct-bg">
                      <a target="blank" href="<?php the_field('project_link'); ?>"> <img src="<?php the_field('project_image'); ?>" alt="" class="img-prjct-wrk">
                      </a>
                      <div class="prjct-wrt-left-wrk"> </div>
                      <div class="shw-cs2"><?php the_field('project_title'); ?> </div>
                      <div class="shw-cs4"><?php the_field('project_description'); ?> </div>
                      <div class="shw-cs"> <?php the_field('project_more'); ?></div>
                    </div>
                  </div>
    
                  <?php }}else{
            echo "no result";}
         ?>
          </div>	
<?php get_footer(); ?>
