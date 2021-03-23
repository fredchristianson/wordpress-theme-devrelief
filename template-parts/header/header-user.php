<div class='user-profile'>
<?
    global $userdata, $current_user, $user_identity;

    
    if ( is_user_logged_in() ):
        ?>
        <span class='username'>
            <a class='edit-profile' href='<?echo get_edit_profile_url()?>'><?echo $current_user->user_firstname ?: $user_identity?></a>
            <a class='logout' href='<?wp_logout_url()?>'>Logout</a>
            
        </span><?
    else:
        
        ?>
            <span class='login-register'>
                    <span class='login'>
                        <a href='<?echo wp_login_url();?>'>Login</a>
                    </span><span>
                        <a href='<?echo wp_registration_url();?>'>Register</a>
                    </span>
            </span>
        <?
        
    endif;

?>
</div>