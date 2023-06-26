 <div class="user-comments">
  <div class="comments">
  <p>نظرات کاربران <i class="fa fa-comments" aria-hidden="true"></i></p>
  <?php comment_form(); 
/* add comment form , this code make default comment form then we go in a functions.php and customize
  as what we want , there are all a lot af ways to customize comment form and we didnt the best way so i dont put my codes for customize comment form in this repository 
  */
?>
  </div>  
  <?php

if(have_comments()){
    $awplc = array(
        'walker'            => null,
        'max_depth'         => 2,
        'callback'          => 'mytheme_comment',
        'end-callback'      => null,
        'type'              => 'comment',
        'reply_text'        => 'پاسخ دهید',
        'page'              => '',
        'per_page'          => '',
        'avatar_size'       => 60,
        'reverse_top_level' => null,
        'reverse_children'  => '',
        'format'            => 'xhtml', // or 'xhtml' if no 'HTML5' theme support
        'short_ping'        => false,   // @since 3.6
        'echo'              => true     // boolean, default is true
    );

    function mytheme_comment($comment, $awplc, $depth) {

        ?>

<div <?php comment_class( [empty( $awplc['has_children'] ) ? '' : 'parent' ,'user-comment' ]) ?> id="comment-<?php comment_ID(); ?>" >
    <p class="comment-author"><?php echo get_comment_author(); ?><span><?php echo get_comment_date('Y/m/d'); ?></span></p>
    <?php if ( $comment->comment_approved == '0' ) : ?>
     <span class="comment-awaiting-moderation" style="color: #3daa59"><?php _e( 'دیدگاه شما پس از بررسی و تایید ، نمایش داده خواهد شد' ); ?></span>
        <?php endif; ?>
    <div class="comment-type"> 
    <p>    
   <?php echo get_comment_text(); ?>
</p>
    <div class="post-details">
 <div class="reply-comment">
 <?php
  comment_reply_link( array_merge( $awplc, array('depth' => $depth, 'max_depth' => $awplc['max_depth'] ) ) );
   ?>
 </div>

 </div>

</div>

  </div>







        
    <?php
    }

    wp_list_comments($awplc);

}else{
    echo '';
}




  ?>









  </div>
