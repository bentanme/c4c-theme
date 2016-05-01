<div class="posts-navigation">
<div class="nav-links">

<?php

/**
 *
 * Purpose of this function is to get
 * custom next and previous page
 * link buttons.
 *
 */

$navigation = "";
$next_link = get_previous_posts_link('Newer posts');
$prev_link = get_next_posts_link('Older posts');

if ( $next_link )
    $navigation .= '<div class="nav-previous">' . $next_link . '</div>';
else
	$navigation .= '<div class="nav-previous">Newer posts</div>';

$navigation .= '<div class="nav-separator">&middot;</div>';

if ( $prev_link )
    $navigation .= '<div class="nav-next">' . $prev_link . '</div>';
else
	$navigation .= '<div class="nav-next">Older posts</div>';

echo $navigation;

?>

</div>
</div>