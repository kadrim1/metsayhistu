<?php
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
query_posts('cat=3&posts_per_page='.get_option('posts_per_page').'&paged=' . $paged);