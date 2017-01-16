<?php get_header(); ?>

        <!-- Content slider -->
    
         <div id="templatemo_banner">
        
            <?php 
                $multi_layer_post = null;
                $multi_layer_post = new WP_Query(array(
                'post_type'=>'page',
                'page_id'=>'11',
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

           <h2><?php echo ($multi_layer['gallery_title']); ?></h2>
       <?php echo ($multi_layer['gallery_description']); ?>
            
          <div class="cleaner_h40"></div>
            
            <div id="gallery">
                <ul>


                 <h2>Web Templates</h2>
            <div id="recent_project">
                <ul>

                <?php 
                    $multi_layer_post = null;
                    $multi_layer_post = new WP_Query(array(
                    'post_type'=>'recent_projects',
                    'posts_per_page'=> 6
                    ));
                
                    if( $multi_layer_post->have_posts() ){
                        $x=0;
                        while( $multi_layer_post->have_posts() ){
                        $x++;
                        $multi_layer_post->the_post();
                        
                        $project_link = get_post_meta(get_the_ID(),'_multi-layer_project_link',true);
                        $project_title = get_post_meta(get_the_ID(),'_multi-layer_project_title',true);
                        ?>

                    <li>
                        <a href="<?php echo $project_link; ?>" title="<?php echo $project_title; ?>"><?php the_post_thumbnail() ; ?></a><h5><?php the_title(); ?></h5>
                        <?php the_content(); ?>
                    </li>

                            <?php }
                            }else{
                                echo 'No post';
                            }
                                wp_reset_postdata();
                        ?>
                </ul>
                
                <div class="cleaner"></div>
                <div class="button float_l"><a href="<?php echo site_url() ; ?>/gallery">Visit Site</a></div>
            </div>

                   
                    
                </ul>

            </div>
            
            
            
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