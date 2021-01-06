<?php
    // let name = "Martine"; <= in JS
    // dus als variabele => integer, string, booleans, floats, arrays, objects => net als in JS enzo
    $date = date('Y');
    //$name = "Martine"; // string
    $leeftijd = 38; // integer
    $ingelogd = true; // boolean
    $prijs = 29.99; // float
    $oplossing = $prijs * $leeftijd / 20 + 100 - 2; // + - * / %
    $films = ['film1', 'film2', 'film3', 'film4', 'film5', 'film6']; // array
    $gebruiker = [
        "name" => "Martine",
        "email" => "martine.boulanger@gmail.com",
        "password" => "test123"
    ]; // object

    $firstname = "Martine";
    $lastname = "Boulanger";
    $name = "$firstname $lastname";
    //$name = '$firstname $lastname';
    $tekst = 'De man zegt "ik kom iets later"!';
    $tekst = "De man zegt \"ik kom iets later\"!";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introductie PHP</title>

    <style>
        .film-grid{
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 10px;
            transition: 500ms;
            margin: 50px;
        }
        .film{
            border: 1px solid #000;
            padding: 5%;
            background-color: rgba(0, 0, 0, .15);
        }
        .film:hover{
            background-color: rgba(0, 0, 0, .25);
        }
    </style>

</head>
<body>
    <h1>Mijn eerste PHP pagina</h1>

    <?php
        if ($ingelogd) {
            echo "<p>Hallo, $name!</p>";
        } else {
            echo "<p>Je bent nog niet ingelogd!</p>";
        }
    ?>

    <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. <br>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. <br>
        Lorem ipsum dolor sit amet consectetur adipisicing elit.
    </p>

    <?php
        if ($leeftijd >= 18) {
            echo "<p>Je bent $leeftijd en oud genoeg om volwassen te zijn!</p>";
        } elseif ($leeftijd == 0) {
            echo "<p>Je bent nog niet geboren!</p>";
        } elseif ($leeftijd < 5) {
            echo "<p>Je bent nog maar heel erg jong!";
        } else {
            echo '<p>Je bent nog maar ' . $leeftijd . ' en nog niet oud genoeg om volwassen te zijn!</p>';
        }
    ?>

    <!-- <?php
        $a = 0;
        while ($a <= 10) {
            echo "<p>De waarde is nu $a</p>";
            $a++;
        }

        for ($i=0; $i <= 6 ; $i++) { 
            echo "<h$i>De waarde is nu $i</h$i>";
        }
    ?> -->

    <p>
        Jaartal:
        <select>
        <?php
            for ($i=date('Y')-5; $i <= date('Y')+5; $i++) { 
                echo "<option value=\"$i\">$i</option>";
            }  
        ?>
        </select>
    </p>

    <ul>
        <?php
            foreach ($films as $film) {
                echo "<li>$film</li>";
            }
        ?>
    </ul>

    <section>
        <h1>Films</h1>
        <div class="film-grid">
            <?php foreach ($films as $film) { ?>
                <div class="film">
                    <h4><?php echo $film ?></h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium, laudantium aliquam sit magni ipsa assumenda aut rem veniam perferendis repellendus?</p>
                </div>
            <?php } ?>
        </div>
    </section>

    <footer>
        Copyright <?php echo $name ?> <?php echo $date ?>
    </footer>
</body>
</html>