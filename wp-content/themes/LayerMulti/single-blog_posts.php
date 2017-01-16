<?php get_header(); ?>

<div id="templatemo_content" class="post_comments">
    
    <section class="post">      
                 
      <?php 
                   
            if(have_posts() ){
                  
                the_post();
                            
                ?>
                  
                        <h2><?php the_title(); ?></h2>
                                      
                       <?php the_content();  ?>
                      
                        <span class="badge">Posted on <?php echo get_the_date('Y-m-d H:i:s');?></span><br>
                            
    </section>

    <section class="comments">                            

            <strong>Comments:</strong> <br><hr>
            <?php comments_template(); ?>

        <?php  } ?>
                
     </section>
    <!--End Main Container -->

</div>



<div id="templatemo_content_wrapper">

    <div id="templatemo_sidebar">

       <div id="news_section">
            
            <h2>Blog Posts</h2>
            
            <?php 
                            $multi_layer_post = null;
                            $multi_layer_post = new WP_Query(array(
                            'post_type'=>'post',
                            'posts_per_page'=> 3
                            ));
                        
                            if( $multi_layer_post->have_posts() ){
                                $content = get_the_content();
                                $x=0;
                                while( $multi_layer_post->have_posts() ){
                                $x++;
                                $multi_layer_post->the_post();
                                ?>
            <div class="news_box">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              <?php the_content(); ?>

            </div>
            
             <?php }
                        }else{
                            echo 'No post';
                        }
                            wp_reset_postdata();
                    ?>
            
            <div class="cleaner"></div>  
               
        </div>
        
        <div class="section_rss_twitter">
            <!-- Social Icons -->
            <div style="background: url(<?php echo ($multi_layer['social_icon_up']['url']); ?>) right bottom no-repeat;" class="rss_twitter twitter">
            <a href="<?php echo ($multi_layer['text_3']); ?>" target="<?php echo ($multi_layer['text_4']); ?>"><?php echo  $multi_layer['text_1']; ?> <span><?php echo ($multi_layer['text_2']); ?></span></a>
            </div>
            
            <div  class="margin_bottom_20"></div>
            
            <div style="background: url(<?php echo ($multi_layer['social_icon_up_2']['url']); ?>) right bottom no-repeat;" class="rss_twitter rss">
            <a href="#"><?php echo ($multi_layer['text_1_2']); ?> <span><?php echo ($multi_layer['text_2_2']); ?></span></a>
            </div>
        
        </div>
    
        <div class="cleaner"></div>
    </div> <!-- end of sidebar -->
</div> <!-- end of sidebar -->
   


 <?php multi_layer_fallback_style(); ?>
 <?php get_footer();?>
     

