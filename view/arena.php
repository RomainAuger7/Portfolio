<?php
    require '../Class/Pokemon.php'; 
    $pikachu = new Pokemon("Pikachu", "electric", 75);
    $ratata = new Pokemon("Ratata", "ridicule", 45);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../assets/styles/arena.css"/>
        <title>Arena | Romain Auger</title>
    </head>
    <body>
    <?php include 'components/header.php' ?>
        <div class="content has-text-center">
            <h1>Arena battle :</h1>
        </div>
        <p>

            <h3>
                <strong>First fighter :</strong>
                <?= $pikachu->__toString();?>
            </h3></br>
            <h3>
            <strong>Second fighter :</strong>
                <?= $ratata->__toString();?>
            </h3></br> 
            
            <h3>
                <?php 
                $pikachu->attack($ratata,  random_int(0, 70));
                $ratata->attack($pikachu, random_int(0, 110));

                if ($ratata->getHealth() <= 0 && $pikachu->getHealth() <= 0){
                    echo ("Wow ! Both fighters are KO. It's a tie !!");
                }elseif ($pikachu->getHealth() <= 0){
                echo ("Ratatata won the fight");
                }elseif ($ratata->getHealth() <= 0){
                    echo("Pikachu won the fight !!");
                }else{
                    echo ("Both fighters are still standing! Nobody won!");
                }
                ?>
            </h3>
        </p>
        </br>
        <button class="button is-danger" onClick="window.location.reload();">Fight again !</button>
    <?php include 'components/footer.php' ?>
    </body>
</html> 