<?php

function wpb_move_comment_field_to_bottom( $fields ) {
  $comment_field = $fields['comment'];
  unset( $fields['comment'] );
  unset( $fields['url'] );
        $fields = [
        'author' => " <div class=username><p>نام کاربری</p><input type=text name=author placeholder=نام کاربری خود را وارد نمائید> </div>",
        'email'  => " <div class=email><p>ایمیل</p><input type=text name=email placeholder=ایمیل خو را وارد نمائید></div>",
        'comment_field ' => " <div class=comment><p> نظر شما</p><textarea name=comment id=comment cols= rows=10 placeholder=نظر خود را وارد کنید></textarea></div>"
    ];
    if ( current_user_can( 'edit_pages' ) ) { 
    $fields['comment'] = $comment_field;
    }
  return $fields;


  }
   
  add_filter( 'comment_form_fields', 'wpb_move_comment_field_to_bottom' );

 



  function wpse250243_comment_form_defaults( $defaults ) {
    if ( isset( $defaults[ 'comment_notes_before' ] ) ) {
        $defaults[ 'comment_notes_before' ] = '';
    }
  
      $defaults[ 'title_reply' ] = "";

      $defaults['submit_button'] = "<input name=submit-1 type=submit id=submit class='submit comment_button' value='ارسال نظر'>";
    return $defaults;
}
add_filter( 'comment_form_defaults', 'wpse250243_comment_form_defaults', 10, 1 );


