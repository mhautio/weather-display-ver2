<!-- Valakia Interactive Oy -->
<?php

// Haetaan tiedoista lämpötila ja sanitoidaan että jää vain numerot (desimaalilla), pyöristetään se ja muutetaan -0 nollaksi
$temp = $weather->main->temp;
$sanitized_temp = filter_var($temp, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
$rounded_temp = round($sanitized_temp, 0);

if (strpos($rounded_temp, '-0') !== false) {
    $final_temp = '0';
} else {
    $final_temp = $rounded_temp;
}

// Tulostetaan asiat
echo '<h3>' . $final_temp . '&#176;</h3>';

?>