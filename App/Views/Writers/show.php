<?php
require_once(dirname(dirname(__FILE__))."/Components/header.php");
require_once(dirname(dirname(__FILE__))."/Components/nav.php");
?>

<div class="container">

<form method="post">
<input type="text" name="title" value=" <?php echo $article['title'];?>">
<textarea name="content" value="<?php $article['content'];?>"><?php echo $article['content'];?></textarea>
<input type="text" name="writer" value=" <?php echo $article['name'];?>">
<button type="submit" name="modify">Modifier</button>
</form><br>

</div>

<?php require_once(dirname(dirname(__FILE__))."/Components/footer.php");?>
