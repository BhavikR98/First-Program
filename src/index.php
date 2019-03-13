
/**
 * Created by PhpStorm.
 * User: shehabibrahim
 * Date: 2019-03-13
 * Time: 18:20
 */
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<table class="table table-dark">
    <thead>
        <?php
         include("Pokedex.php");
         Pokedex::start("../data/pokemon.csv");
        ?>
    </thead>
</table>

</body>
</html>

