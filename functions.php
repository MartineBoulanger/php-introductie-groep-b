<?php
$naam = "martine";
$email = "martine.boulanger@gmail.com";
// kan ook strpbrk() en strstr() gebruiken
//$domein = strstr($email, '@');
//$domein = strpbrk($email, '@');
$domein = substr($email, strpos($email, '@')); 
$username = substr($email, 0, strpos($email, '@'));
// html_entity_decode() is om de entity code om te zetten naar het teken.
$tekst = "De prijs is 20€ & dit is écht een koopje!";
$tekst2 = "<p>Dit is een <b>stukje</b> tekst. Lorem ipsum dolor sit amet <em>consectetur</em> adipisicing elit. Repellendus, nobis!</p>";
$tags = "html, css, drupal, javascript";
// van ^ naar v  
// $tags = ['html', 'css', 'drupal', 'javascript'];
// print_r() funtie is handig om te testen wat er in de array zit
$tag_array = explode(", ", $tags);
// html - css - drupal - javascript maken van array naar string
$tag_string = implode(" - ", $tag_array);
$scores = [3, 6, 8, 4, 5, 9, 7, 4, 6, 3, 8, 9];
shuffle($tag_array);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hallo, <?php echo $naam ?></h1>
    <h1>Hallo, <?php echo strtoupper($naam) ?></h1>
    <h1>Hallo, <?php echo ucfirst($naam) ?></h1>
    <p>Jouw naam is <?php echo strlen($naam) ?> tekens lang.</p> 
    <?php
        if (strpos($email, '@')) {
            echo "<p>Uw emailadres is geldig!</p>";
        } else {
            echo "<p>Uw email adres is niet geldig!</p>";
        }
    ?>
    <?php
        if (strpos($email, '@')) {
            echo "<p>Uw emailadres is geldig!</p>";
            echo "<p>Uw domein is $domein en uw username is $username.</p>";
        } else {
            echo "<p>Uw email adres is niet geldig!</p>";
        }
    ?>
    <!-- <p><?php echo strpos($email, '@') ?></p> -->
    <p><?php echo htmlentities($tekst) ?></p>
    <p><?php echo strip_tags($tekst2) ?></p>
    <p>Array: <?php echo print_r($tag_array) ?></p>
    <p>Tags: <?php echo print_r($tag_string) ?></p>
    <p>Lijn: <?php echo str_repeat('~*', 25) ?></p>
    <?php
        if (in_array('javascript', $tag_array)) {
            echo "<p>Deze cursus gebruikt Javascript!</p>";
        }
    ?>
    <p>Er zijn <?php echo count($tag_array) ?> tags aan deze pagina gekoppeld.</p>
    <p>Het gemiddelde van de scores is <?php echo array_sum($scores)/count($scores) ?></p>
</body>
</html>