<!-- Valakia Interactive Oy -->
<html>
<head>
   <meta charset="utf-8">
   <title>Aika</title>
   <link rel="stylesheet" href="style.css">

</head>
<?php // Asetetaan aikavyöhyke ja kieli sekä haetaan päivä ja aika
date_default_timezone_set(DateTimeZone::listIdentifiers(DateTimeZone::UTC)[0]);
$pv = strftime("%A ");
if (date('I', time()) == 1) {
    $today = date("G.i", strtotime('+1 hours'));
} else {
    $today = date("G.i", strtotime('+2 hours'));
} ?>
<body>
    <div class="container">
    <div class="aika"><?php echo '<h1>' . $today . '</h1>' ?></div>
    </div>
</body>
</html>