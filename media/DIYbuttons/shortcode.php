// Paste this function in custom_functions.php

function diy_buttons($atts, $content = null)
{
	extract(shortcode_atts(array(
		'type' => '',
		'color' => '',
		'link' => '',
		'icon' => ''
	), $atts));
	
	if($type == 'engraved')
	{
		$output = '<div class="engraved"><a href="' . $link . '" class="' . $color . '">' . do_shortcode($content) . '</a></div>';
	}
	elseif($type == 'icon')
	{
		$output = '<a href="' . $link . '" class="' . $type . ' ' . $color . '"><span>' . $icon . '</span>' . do_shortcode($content) . '</a>';
	}
	else
	{
		$output = '<a href="' . $link . '" class="' . $type . ' ' . $color . '">' . do_shortcode($content) . '</a>';
	}

	return $output;

}
	add_shortcode('button', 'diy_buttons');
	add_filter('widget_text', 'do_shortcode'); // Allows use in widgets