<?php
$args = array(
	'number' => '100', // use post_id, not post_ID
	'post_id' => $post->ID
);
$comments = get_comments($args);
foreach($comments as $comment) :
	echo('<span style="color:yellow">'.$comment->comment_author . '</span><span>  :  </span>' . $comment->comment_content. '<br />'); ?>
	<span style="">Commented on</span> <?php echo get_the_date('Y-m-d H:i:s');
	?><hr><?php

	
   // echo get_comments_number();
endforeach;
comment_form();
?>