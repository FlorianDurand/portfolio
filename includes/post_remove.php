<?php 
function portfolio_post_remove ()    
{ 
   remove_menu_page('edit.php');
}
add_action('admin_menu', 'portfolio_post_remove');  
