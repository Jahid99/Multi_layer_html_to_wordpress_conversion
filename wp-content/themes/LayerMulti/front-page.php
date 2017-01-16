<?php get_header(); ?>
        
        <!-- Content slider -->

        <div id="templatemo_banner">        
             <div id="one" class="contentslider">
                    <div class="cs_wrapper">
                        <div class="cs_slider">                         	
                            <?php 
                                $multi_layer_post = null;
                                $multi_layer_post = new WP_Query(array(
                                'post_type'=>'slider',
                                'posts_per_page'=> -1
                                ));
                            
                                if( $multi_layer_post->have_posts() ){
                                    $content = get_the_content();
                                    $x=0;
                                    while( $multi_layer_post->have_posts() ){
                                    $x++;
                                    $multi_layer_post->the_post();
                                    
                                    $slider_caption = get_post_meta(get_the_ID(),'_multi-layer_slider_caption',true);
                                    $slider_read_more = get_post_meta(get_the_ID(),'_multi-layer_slider_read_more',true);
                                    ?>
                                    
                                   <div class="cs_article">
                                    <div class="left">
                                    <h2><?php the_title(); ?></h2>
                                    <p><?php echo $slider_caption; ?></p>
                                    
                                    <div class="button"><a href="#"><?php echo $slider_read_more; ?></a></div>
                                </div>
                                <div class="right">
                               <a href="#" target="_parent"><?php the_post_thumbnail() ; ?></a>
                                </div>
                                                                
                            </div><!-- End cs_article -->
                                           
                                    
                            <?php }
                            }else{
                                echo 'No post';
                            }
                                wp_reset_postdata();
                        ?>

                               
                      
                        </div><!-- End cs_slider -->
                    </div><!-- End cs_wrapper -->
                </div><!-- End content slider -->
                
                
             
                <div class="cleaner"></div>
   
        </div>

</div>

<div id="templatemo_content_wrapper_outer">
<div id="templatemo_content_wrapper_inner">
<div id="templatemo_content_wrapper">

	<div id="templatemo_content">
        <h2><?php echo ($multi_layer['home_title_1']); ?></h2>
        <?php echo ($multi_layer['home_description_1']); ?>
        <h2><?php echo ($multi_layer['home_title_2']); ?></h2>
        <?php echo ($multi_layer['home_description_2']); ?>
        
            
            <div class="cleaner_h40"></div>

            <h2>Web Templates</h2>
            <div id="recent_project">
                <ul>

                <?php 
                    $multi_layer_post = null;
                    $multi_layer_post = new WP_Query(array(
                    'post_type'=>'recent_projects',
                    'posts_per_page'=> 2
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
                    </li>

                            <?php }
                            }else{
                                echo 'No post';
                            }
                                wp_reset_postdata();
                        ?>
                </ul>
                
                <div class="cleaner"></div>
                <div class="button float_l"><a href="<?php echo site_url() ; ?>/gallery">View All</a></div>
        	</div>
            

            
            
        </div> <!-- end of templatemo_content -->
        
        <div id="templatemo_sidebar">         
            <?php
            $sorter_options = $multi_layer['sorter_options']['Active'];
 
                if(is_array($sorter_options)){
                    foreach($sorter_options as $key=>$value){
                        switch($key){
                            case 'sidebar':
                            get_template_part('section-sidebar');
                            break;
                           
                        }
                    
                    }
                }  ?>
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