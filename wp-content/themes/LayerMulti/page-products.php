<?php get_header(); ?>

        <!-- Content slider -->
    
        <div id="templatemo_banner">
            
            <?php 
                $multi_layer_post = null;
                $multi_layer_post = new WP_Query(array(
                'post_type'=>'page',
                'page_id'=>'36',
                'posts_per_page'=> -1
                ));
            
                if( $multi_layer_post->have_posts() ){
                    
                   
                    $multi_layer_post->the_post();
                    
                    $product_slider_title = get_post_meta(get_the_ID(),'_multi-layer_product_slider_title',true);
                    $product_slider_description = get_post_meta(get_the_ID(),'_multi-layer_product_slider_description',true);
                    $product_slider_read_more = get_post_meta(get_the_ID(),'_multi-layer_product_slider_read_more',true);
                    $product_slider_read_more_link = get_post_meta(get_the_ID(),'_multi-layer_product_slider_read_more_link',true);
                    ?>

            <h3><?php echo $product_slider_title; ?></h3>
            
            <p><?php echo $product_slider_description; ?></p>
            
           
            
            <div class="button"><a href="<?php echo $product_slider_read_more_link; ?>"><?php echo $product_slider_read_more; ?></a></div>
                
                 <?php 
                            }else{
                                echo 'No post';
                            }
                                wp_reset_postdata();
                        ?>
             
                <div class="cleaner"></div>
   
        </div>

</div> <!-- end of header_wrapper -->

<div id="templatemo_content_wrapper_outer">
<div id="templatemo_content_wrapper_inner">
<div id="templatemo_content_wrapper">

    <div id="templatemo_content">

        <h2><?php echo ($multi_layer['product_title']); ?></h2>
       <?php echo ($multi_layer['product_description']); ?>
    
         <div class="cleaner_h30"></div>


         <?php 
            $multi_layer_post = null;
            $multi_layer_post = new WP_Query(array(
            'post_type'=>'all_products',
            'posts_per_page'=> -1
            ));
        
            if( $multi_layer_post->have_posts() ){
                $content = get_the_content();
                $x=0;
                while( $multi_layer_post->have_posts() ){
                $x++;
                $multi_layer_post->the_post();
                $product_url = get_post_meta(get_the_ID(),'_multi-layer_product_url',true);
                ?>
        <div class="services_section">     
           <h4><?php the_title() ; ?></h4>

          <div class="services_content">
            
            <div class="right"><?php the_post_thumbnail(); ?></div>
                
                <div class="left">
                    <?php the_content() ; ?>
                    
            </div>
                
                <div class="cleaner"></div>
            </div>           
        </div>

          <?php }
                    }else{
                        echo 'No post';
                    }
                        wp_reset_postdata();
                ?>
        
        
            
            <div class="cleaner_h40"></div>
            
        

            
            
   
            
            
        </div> <!-- end of templatemo_content -->
        
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
            <!-- Social Icons -->
            <div class="section_rss_twitter">
        
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

    <div class="cleaner"></div>
</div>
</div>
</div>

<?php get_footer(); ?>