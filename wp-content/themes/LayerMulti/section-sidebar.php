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