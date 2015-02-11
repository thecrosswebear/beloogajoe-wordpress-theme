		
                <!--
                <div id="subscribe">
                <h2>Subscribe</h2>
                    <ul>
                            <li><a href="<?php bloginfo('rss2_url'); ?>">Entries (RSS)</a></li>
                            <li><a href="<?php bloginfo('comments_rss2_url'); ?>">Comments (RSS)</a></li>
                    </ul>
                </div>
                -->
                <div id="footer">
                    <!--<h6>Subscribe</h6> -->
                    <ul style="list-style-type: none;">
                            <li><a href="<?php bloginfo('rss2_url'); ?>">(RSS)</a></li>
                            <!--<li><a href="<?php bloginfo('comments_rss2_url'); ?>">Comments (RSS)</a></li>-->
                    </ul>
                        <br>
			&copy; <?php echo date("Y"); echo " "; bloginfo('name'); ?>
                        <!--<br>WordPress theme by Fuck You--?
		</div>

	</div>

	<?php wp_footer(); ?>
	
	<!-- Don't forget analytics -->
	
</body>

</html>
