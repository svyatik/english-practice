<?php
if (is_active_sidebar( 'custom-side-bar' )  ) : ?>
    <div id="secondary" class="secondary">
   
        <div id="widget-area" class="widget-area" role="complementary">
            <?php dynamic_sidebar( 'custom-side-bar' ); ?>
        </div><!-- .widget-area -->
       

    </div><!-- .secondary -->

<?php endif; ?>