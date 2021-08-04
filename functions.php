<?php
function twentyten_posted_on_more() {
	userphoto_the_author_photo();
}
add_filter ('twentyten_posted_on', 'twentyten_posted_on_more' );
?>