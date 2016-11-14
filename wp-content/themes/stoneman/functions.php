<?php if ( function_exists('register_sidebar') )
register_sidebar(array('name'=>'sidebar1',
'before_widget' => '',
'after_widget' => '',
'before_title' => '<h2>',
'after_title' => '</h2>',
));
register_sidebar(array('name'=>'sidebar2',
'before_widget' => '',
'after_widget' => '',
'before_title' => '<h4>',
'after_title' => '</h4>',
));
register_sidebar(array('name'=>'sidebar3',
'before_widget' => '',
'after_widget' => '',
'before_title' => '<h4>',
'after_title' => '</h4>',
));
register_sidebar(array('name'=>'sidebar4',
'before_widget' => '',
'after_widget' => '',
'before_title' => '<h4>',
'after_title' => '</h4>',
));
register_sidebar(array('name'=>'sidebar5',
'before_widget' => '',
'after_widget' => '',
'before_title' => '<h4>',
'after_title' => '</h4>',
));

add_theme_support( 'post-thumbnails', array( 'post' ) );
function new_excerpt_length($length) {
return 50;
}
add_filter('excerpt_length', 'new_excerpt_length');
function new_excerpt_more($more) {
return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');
/* COMMENTS
/* ----------------------------------------------*/
function mytheme_comment($comment, $args, $depth) {
$GLOBALS['comment'] = $comment; ?>
<li <?php comment_class(); ?> id="comment-<?php comment_ID() ?>">
    
	<div class="comm">
        
		<div class="avatar">
      		  <?php echo get_avatar( $comment, 60 ); ?> 
       		 </div>
		
       		<div class="comment-meta">
			<?php if ($comment->comment_approved == '0') : ?>
       			 <p><em><?php _e('Your comment is awaiting moderation.') ?></em></p>
       			 <?php endif; ?>
		


		<div class="comhead"><?php printf(__('%s'), get_comment_author_link()) ?> - <small><?php printf(__('%1$s'), get_comment_date()) ?></small></div>
		<div class="says"><?php comment_text() ?></div>
        
<?php comment_reply_link(array_merge( $args, array('add_below' => 'comment', 'depth' => $depth, 'max_depth' => $args['max_depth']))) ?> 
	</div>
	<div class="clearfix"></div>
    	</div>



<?php
        }
?>