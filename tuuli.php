<!-- Valakia Interactive Oy -->
<?php 

// Haetaan tiedoista tuulen suunan astelukema ja sanitoidaan että jää vain numerot, lisäksi käännetään suunta erottamalla asteluku 360:sta
$rotang = $weather->wind->deg;
$sanitized_ang = filter_var($rotang, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
$wind = 180 + 360 - $sanitized_ang;

// Haetaan tiedoista tuulen nopeus ja sanitoidaan että jää vain numerot sekä pyöristetään ja tiputetaan desimaalit
$wspeed = $weather->wind->speed;
$sanitized_wspeed = filter_var($wspeed, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
$rounded_wspeed = round($sanitized_wspeed, 0);

// Määritellään nuolikuva, käännetään sitä haetun asteluvun verran ja tulostetaan se muuttujaan sekä tyhjennetään muisti
$filename = 'arrow.png';
$source = imagecreatefrompng($filename) or die('Error opening file ' . $filename);
imagealphablending($source, false);
imagesavealpha($source, true);
$rotation = imagerotate($source, $wind, imageColorAllocateAlpha($source, 0, 0, 0, 127));
imagealphablending($rotation, false);
imagesavealpha($rotation, true);

ob_start();
imagepng($rotation);
$imagedata = ob_get_contents();
ob_end_clean();
imagedestroy($source);
imagedestroy($rotation);

// Tulostetaan asiat
echo '<img src="data:image/png;base64,' . base64_encode($imagedata) . '" />';
echo '<div class="cover"><h1>' . $rounded_wspeed . '</h1></div>';

?>