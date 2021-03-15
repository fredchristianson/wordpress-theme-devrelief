
<div id="sidebar-primary" class="sidebar primary">
    
    <?php do_action( 'before_sidebar' ); ?>
    <aside id="primary-sidebar-search" class="widget widget_search">
        <?php get_search_form(); ?>
    </aside>
    <aside id="primary-sidebar-archives" class"widget">
        <h3 class="widget-title"><?php _e( 'Archives', 'shape' ); ?></h3>
        <ul>
            <?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
        </ul>
    </aside>
    <aside id="primary-sidebar-meta" class="widget">
        <h3 class="widget-title"><?php _e( 'Meta', 'shape' ); ?></h3>
        <ul>
            <?php wp_register(); ?>
            <li><?php wp_loginout(); ?></li>
            <?php wp_meta(); ?>
        </ul>
    </aside>
    
    <? dynamic_sidebar( 'primary' ); ?>
    
   <?php do_action( 'after_sidebar' ); ?>
   
</div>