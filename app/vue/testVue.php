<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Test</title>
    </head>
    <body>
        <?php
        // Cette vue dépend du niveau de droit de la personne connectée
        // Récupérer le droit      
// switch case selon droit
        $i = rand(1, 3);; //['ledroit'];
        switch ($i) {
            case 1:
                echo "<h1>Bijour Super Admin, full menu</h1>";
                break;
            case 2:
                echo "<h1>Vous êtes le Contributeur, vous pouvez, publier, modifier, supprimer des articles, des commentaires</h1>";
                break;
            case 3:
                echo "<h1>Vous êtes Éditeur, vous pouvez commenter les articles</h1>";
                break;
        }
        ?>
        <p><a href="?deconnect">Se déconnecter</a></p>
    </body>
</html>
