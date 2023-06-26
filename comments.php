 <div class="user-comments">
  <div class="comments">
  <p>نظرات کاربران <i class="fa fa-comments" aria-hidden="true"></i></p>
  <?php comment_form(); ?>
  </div>  
  <?php

if(have_comments()){
    $awplc = array(
        'walker'            => null,
        'max_depth'         => 2,
        'style'             => 'div',
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
        $GLOBALS['comment'] = $comment;
        extract($awplc, EXTR_SKIP);
            $tag = 'div';
            $add_below = 'comment';
        
        ?>
        <<?php echo $tag ?> <?php comment_class( [empty( $awplc['has_children'] ) ? '' : 'parent' ,"user-comment" ]) ?> id="comment-<?php comment_ID() ?>">

         <?php printf( __( '<p class="comment-author">%s<span class="says">%s1</span></p>' ), get_comment_author() , get_comment_date('Y/m/d')); ?>


        <?php if ( $comment->comment_approved == '0' ) : ?>
            <span class="comment-awaiting-moderation" style="color: #3daa59"><?php _e( 'دیدگاه شما پس از بررسی و تایید ، نمایش داده خواهد شد' ); ?></span>
        <?php endif; ?>

        <div class="comment-type"> 
        <?php comment_text();?>

            <div class="post-details">
            <div class="reply-comment">
            <?php comment_reply_link( array_merge( $awplc, array( 'add_below' => $add_below, 'depth' => $depth, 'max_depth' => $awplc['max_depth'] ) ) ); ?>
            </div>
            
            <div class="comment_like_dislike">

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

  
    <div class="user-comment">
    <p class="comment-author">آرش<span>1402/12/07</span></p>
    <div class="comment-type"> 
    <p>    
    عالی بود در آینده یک آدم موفق خواهی شد </p>
    <div class="post-details">
 <div class="reply-comment">
پاسخ دهید
 </div>

 </div>

</div>

  </div>







  </div>