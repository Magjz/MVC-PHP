<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <!--Import new Google Font-->
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Source+Sans+Pro" rel="stylesheet">

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <link rel="stylesheet" href="../../../Webroot/css/style.css">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>
        <?php echo $head_title; ?>
    </title>

</head>

<!-- Ouvre body-->

<body class="orange lighten-5">

    <!-- Ouvre container ppal-->
    <div class="container">

        <!-- Ouvre div taille nav-->
        <div class="col s12 l12 m12">
            <!-- Ouvre nav-->
            <nav class="orange darken-1">
                <img class="left" src="../../../Webroot/img/logo-blanc-intermediaire.png" alt="Logo-marmitonne" />
                <h5> Marmitonne</h5>

                <!-- Ouvre ul-->
                <ul class="right hide-on-sm-and-down">
                    <li>
                        <a href="index.php" class="orange lighten-4">
                            <i class="tiny material-icons">local_dining</i>Index</a>
                    </li>

                    <li>
                        <a href="search.php" class="orange lighten-4">
                            <i class="tiny material-icons">search</i>Search</a>
                    </li>

                    <li>
                        <a href="article.php" class="orange lighten-4">
                            <i class="tiny material-icons">import_contacts</i>Articles</a>
                    </li>

                    <li>
                        <a href="modify_account.php" class="orange lighten-4">
                            <i class="tiny material-icons">settings</i>Settings</a>
                    </li>

                    <li>
                        <a href="logout.php" class="orange lighten-4">
                            <i class="tiny material-icons">power_settings_new</i>Logout</a>
                    </li>

                    <!--verif si user est writer-->
                    <li>
                        <a href="writer.php" class="orange lighten-4">
                            <i class="tiny material-icons">mode_edit</i>Writer</a>
                    </li>

                    <!--verif si user est admin-->
                    <li>
                        <a href="admin.php" class="orange lighten-4">
                            <i class="tiny material-icons">supervisor_account</i>Admin</a>
                    </li>

                <!-- Ferme ul-->
                </ul>

                <!-- Ferme nav-->
            </nav>

            <!-- Ferme div taille nav-->
        </div>

        <!-- Ouvre div corps page-->
        <div class="row">

            <!-- Ouvre div taille corps page-->
            <div class="col s12 l12 m12">
                <h4 class="text center-align">
                    <?php echo $title_page ?>
                </h4>
                <br>

                <!-- Ouvre div position corps page-->
                <div class="row center">
                    <?php
                    echo $page;
                    ?>

                        <!-- Ferme div position corps page-->
                </div>

                <!-- Ferme div taille corps page-->
            </div>

            <!-- Ferme div corps page-->
        </div>

    <footer class="page-footer">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">Footer Content</h5>
                    <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
                </div>
                <div class="col l4 offset-l2 s12">
                    <h5 class="white-text">Links</h5>
                    <ul>
                        <li>
                            <a class="grey-text text-lighten-3" href="#!">Link 1</a>
                        </li>
                        <li>
                            <a class="grey-text text-lighten-3" href="#!">Link 2</a>
                        </li>
                        <li>
                            <a class="grey-text text-lighten-3" href="#!">Link 3</a>
                        </li>
                        <li>
                            <a class="grey-text text-lighten-3" href="#!">Link 4</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                © 2014 Copyright Text
                <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
        </div>
    </footer>

<!-- Ferme div container ppal-->
</div>
    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
</body>


</html>