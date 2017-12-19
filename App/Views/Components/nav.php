<!-- Ouvre body-->
<body class="orange lighten-5">

    <!-- Ouvre container ppal-->
    <div class="container">

        <!-- Ouvre div taille nav-->
        <div class="col s12 l12 m12">
            <!-- Ouvre nav-->
            <nav class="yellow darken-4">
                
                <!-- Ouvre ul-->
                <ul class="right">
                    <!-- <li>
                        <a href="" class="">
                            <i class="tiny material-icons">local_dining</i><span>Index</span></a>
                    </li> -->

                    <li>
                        <a href="<?php echo $link_search ?>" class="">
                            <i class="tiny material-icons">search</i><span>Search</span></a>
                    </li>

                    <li>
                        <a href="Article-index" class="">
                            <i class="tiny material-icons">import_contacts</i><span>Articles</span></a>
                    </li>

                    <li>
                        <a href="<?php echo $link_modif_user ?>" class="">
                            <i class="tiny material-icons">settings</i><span>Settings</span></a>
                    </li>

                    <li>
                        <a href="User-login" class="">
                            <i class="tiny material-icons">power_settings_new</i><span>Login</span></a>
                    </li>

                    <!--verif si user est writer-->
                    <li>
                        <a href="<?php echo $_SESSION['group'] == writer ? $writer_admin : header('HTTP/1.0 403 Forbidden');  ?>" class="">
                            <i class="tiny material-icons">mode_edit</i><span>Writer</span></a>
                    </li>

                    <!--verif si user est admin-->
                    <li>
                        <a href="<?php echo $_SESSION['group'] == admin ? $admin : header('HTTP/1.0 403 Forbidden');?>" class="">
                            <i class="tiny material-icons">supervisor_account</i><span>Admin</span></a>
                    </li>

                <!-- Ferme ul-->
                </ul>

                <img class="left" src="img/logo.png" alt="Logo-marmitonne" />
                <h5> Marmitonne</h5>

                <!-- Ferme nav-->
            </nav>

            <!-- Ferme div taille nav-->
        </div>

        <div class="row">

            <!-- Ouvre div taille corps page-->
            <div class="col s12 l12 m12">

      
        
        <div class="carousel carousel-slider">
            <a class="carousel-item" href="#one!"><img src="img/slider-1.jpg" alt="marmitonne-img-food-slider-1"></a>
            <a class="carousel-item" href="#two!"><img src="img/slider-2.jpg" alt="marmitonne-img-food-slider-2"></a>
            <a class="carousel-item" href="#three!"><img src="img/slider-3.jpg" alt="marmitonne-img-food-slider-3"></a>
            <a class="carousel-item" href="#four!"><img src="img/slider-4.jpg" alt="marmitonne-img-food-slider-4"></a>
        </div>
        
        <ul class="indicators">
        <li class="indicator-item"></li>
        <li class="indicator-item"></li>
        <li class="indicator-item"></li>
        <li class="indicator-item"></li>
        </ul>

             

            <!-- Ferme div corps page-->
</div>
