<!DOCTYPE html>
<!--
20160103 @iNani
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="http://localhost/2016/vue/img/favicon.ico" />
        <title>Isabelle Nani</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <!-- HTML5 shim et Respond.js pour le support des éléments HTML5 et des media queries dans IE8 -->
        <!-- ATTENTION: Respond.js ne fonctionne pas si on lit la page via file:// -->
        <!--[if lt IE 9]>
                <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
                <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <link rel="stylesheet" href="http://localhost/2016/vue/css/styles.css">
    </head>
    <body>
        <div id="container">
            <div class="row">
                <div class="col-sm-12">
                    <header>
                        <h1 class="text-right"><span class="text-uppercase">Web Dev</span><br /><span class="small">Productions 2014-2016 </span>&copy;Isabelle Nani</span></h1>
                    </header>
                </div>
            </div>
            <div class="row">

                <form class="col-md-12 well" action="" method="POST" name="connexion">
                    <h2 class="text-center">
                        <span class="glyphicon glyphicon-off"></span>
                        <br />Connexion
                    </h2>

                    <?php
                    // si erreur on l'affiche
                    if (isset($erreur)) {
                        echo "<div class='btn btn-info btn-block'>$erreur</div>";
                    }
                    ?>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="fa  fa-sign-in fa-fw"></i>
                        </span>
                        <input class="form-control" name="lelogin" type="text" placeholder="Login" />
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="fa fa-key fa-fw"></i>
                        </span>
                        <input class="form-control" name="lepass" type="password" placeholder="Password" />
                    </div>
                    <div class="input-group btn btn-block"> 
                        <input type="submit" value="Connexion" />
                    </div>

                </form>
            </div>
        </div>
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    </body>
</html>
