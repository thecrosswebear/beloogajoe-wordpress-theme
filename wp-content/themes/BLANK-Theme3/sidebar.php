<aside>

        <nav class="text-center">
            <!--<ul>
                <li><a href='#'> infos</a></li>
                <li><a href='#'> boutique</a></li>
                <li><a href='#'> contact</a></li>
            </ul>
            
            -->
            <!-- nav nav-pills grey -->
            <?php wp_nav_menu(array('menu' => 'Main Nav Menu', 'menu_class'=> 'nav nav-pills')); ?>
            <!--$defaults = array('menu_class'=> 'nav nav-pills');
                wp_nav_menu( $defaults );-->
            
        </nav>
        
        <!-- c rien ici, je lai enlve -->
        <!--
         <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Sidebar Widgets')) : else : ?>
    
        <!-- All this stuff in here only shows up if you DON'T have any widgets active in this zone -->
        <!--
    	<?php get_search_form(); ?>
    
    	<?php wp_list_pages('title_li=<h2>Pages</h2>' ); ?>
    
    	<h2>Archives</h2>
    	<ul>
    		<?php wp_get_archives('type=monthly'); ?>
    	</ul>
       
        <h2>Categories penis</h2>
        <ul>
    	   <?php wp_list_categories('show_count=1&title_li='); ?>
        </ul>
        
    	<?php wp_list_bookmarks(); ?>
    
    	<h2>Meta</h2>
    	<ul>
    		<?php wp_register(); ?>
    		<li><?php wp_loginout(); ?></li>
    		<li><a href="http://wordpress.org/" title="Powered by WordPress, state-of-the-art semantic personal publishing platform.">WordPress</a></li>
    		<?php wp_meta(); ?>
    	</ul>
    	
    	<h2>Subscribe</h2>
    	<ul>
    		<li><a href="<?php bloginfo('rss2_url'); ?>">Entries (RSS)</a></li>
    		<li><a href="<?php bloginfo('comments_rss2_url'); ?>">Comments (RSS)</a></li>
    	</ul>
	 
	<?php endif; ?>
         
         -->

</aside>