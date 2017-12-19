<?php 
require_once(dirname(dirname(__FILE__))."/Components/header.php");
require_once(dirname(dirname(__FILE__))."/Components/nav.php");
?>
<h1>Bienvenue sur l'espace writer</h1><br>
<h2>Toutes les recettes</h2>
<div class="container">

<?php 
   foreach($article as $k => $v){
    echo '<h3>'.$article[$k]['title'].'</h3>';

    echo '<p style="font-weight:bold"> Auteur : ' . $article[$k]['name']. '</p>';
    echo '<a class="waves-effect waves-light btn" href="Writer-show-'.$article[$k]['id']. '">Modifier la recette</a>';
}
?> 
</div>
<?php 
 
?> 
</div>

<?php require_once(dirname(dirname(__FILE__))."/Components/footer.php");