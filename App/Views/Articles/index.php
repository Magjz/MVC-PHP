<?php 
require_once(dirname(dirname(__FILE__))."/Components/header.php");
require_once(dirname(dirname(__FILE__))."/Components/nav.php");
?>
<h1>Toutes nos recettes</h1>
<div class="container">

<?php 
   foreach($article as $k => $v){
    echo '<h2>'.$article[$k]['title'].'</h2>';
    echo '<p style="font-weight:bold"> Publiée le : ' . $article[$k]['creation_date']. ' | Modifiée le : ' . $article[$k]['modif_date']. '</p>';
    echo '<p style="font-weight:bold"> Auteur : ' . $article[$k]['name']. '</p>';
    echo '<a class="waves-effect waves-light btn" href="Article-show-'.$article[$k]['id']. '">Voir la recette</a>';
}
?> 
</div>

<?php require_once(dirname(dirname(__FILE__))."/Components/footer.php");

