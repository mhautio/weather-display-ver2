<!-- Valakia Interactive Oy -->
<?php

// Haetaan tiedoista säätila, sanitoidaan että jää vain kirjaimet ja numerot sekä liitetään ikonit eri säätiloihin
$condition = $weather->weather[0]->icon;
$sanitized_condition = filter_var($condition, FILTER_SANITIZE_STRING);
$search1 = array("01d", "01n", "02d", "02n", "03d", "03n", "04d", "04n", "09d", "09n", "10d", "10n", "11d", "11n", "13d", "13n", "50d", "50n");
$replace1 = array("fa fa-sun-o fa-3x", "fa fa-moon-o fa-3x", "fa fa-cloud fa-3x", "fa fa-cloud fa-3x", "fa fa-cloud fa-3x", "fa fa-cloud fa-3x", "fa fa-cloud fa-3x", "fa fa-cloud fa-3x", "fa fa-tint fa-3x", "fa fa-tint fa-3x", "fa fa-tint fa-3x", "fa fa-tint fa-3x", "fa fa-bolt fa-3x", "fa fa-bolt fa-3x", "fa fa-snowflake-o fa-3x", "fa fa-snowflake-o fa-3x", "fa fa-cloud fa-3x", "fa fa-cloud fa-3x");
$replace2 = array("yellow", "white", "DarkTurquoise", "DarkTurquoise", "DarkTurquoise", "DarkTurquoise", "DarkTurquoise", "DarkTurquoise", "blue", "blue", "blue", "blue", "orange", "orange", "AliceBlue", "AliceBlue", "DarkTurquoise", "DarkTurquoise");
$real_condition = str_replace($search1, $replace1, $sanitized_condition);
$color = str_replace($search1, $replace2, $sanitized_condition);

// Tulostetaan asiat
echo '<i style="color:' . $color . '; margin-top: 29px; margin-right: 5px; font-size: 310%" class="' . $real_condition . '" aria-hidden="true"></i>';

?>