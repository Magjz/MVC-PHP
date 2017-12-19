<?php
require_once(dirname(dirname(__FILE__))."/Components/header.php");
require_once(dirname(dirname(__FILE__))."/Components/nav.php");
?>

<h1><?php echo $article['title']?></h1>

<div class="container">

<p><?php echo $article['content']; ?></p><br>

<b>Publiée le : <?php echo $article['creation_date']?> | modifiée le <?php echo $article['modif_date']?></p>
<b>Auteur : <?php echo $article['name']; ?></p></b>
</div>

<?php require_once(dirname(dirname(__FILE__))."/Components/footer.php");?>
