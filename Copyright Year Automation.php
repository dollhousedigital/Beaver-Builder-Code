// Shortcode for the copyright year below. [currentyear]

function currentyear_shortcode() { $year = date('Y'); return $year; } 
add_shortcode('currentyear', 'currentyear_shortcode');
