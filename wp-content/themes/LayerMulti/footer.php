 </div>
 <?php global  $multi_layer; ?>       
<div id="templatemo_footer_wrapper">
    <div id="templatemo_footer">

        <div class="footer_menu">
            <?php wp_nav_menu(array(
            'theme_location' => 'primary_menu'
        ))  ; ?>
        </div>
    
        
        <?php echo  $multi_layer['copy_txtd']; ?>
    
</div> <!-- end of footer -->

</div> <!-- end of footer_wrapper -->

<div align=center></div>
<?php wp_footer();?>
</body>
</html>