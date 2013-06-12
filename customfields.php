function save_post_date( $post_id )
{  

if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;	
	// if our nonce isn't there, or we can't verify it
	if( !isset( $_POST['meta_box_nonce'] ) || !wp_verify_nonce( $_POST['meta_box_nonce'], 'my_meta_box_nonce' ) ) return;
	
	// if our current user can't edit this post
	if( !current_user_can( 'edit_post' ) ) return;
	
	// now we can actually save the data
	$allowed = array( 
		'a' => array( // on allow a tags
			'href' => array() // and those anchords can only have href attribute
		)
	);	
	if( isset( $_POST['YOUR_FIELD_NAME']) ){
	update_post_meta( $post_id, 'YOUR_FIELD_NAME', esc_attr( $_POST['YOUR_FIELD_NAME'] ) );
		
	}		
	
}
