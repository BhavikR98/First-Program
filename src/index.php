
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
<div class="table-responsive-sm">
    <table class="table">
        <?php
        include("Pokedex.php");
        Pokedex::start("../data/pokemon.csv");
        ?>
    </table>
</div>

</body>
</html>




