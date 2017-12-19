<?php require_once(dirname(dirname(__FILE__))."/Components/header.php");
require_once(dirname(dirname(__FILE__))."/Components/nav.php");?>


<div class="container">
    <h1>Connexion</h1>
        <form class ="margin-bot" method = "POST" action= <?php echo htmlspecialchars("Article-index")?>>
            <?php echo $input['email']; ?>
            <?php echo $input['password']; ?>
            <?php echo $input['submit']; ?>  
        </form>
    <div class="suscribe-box">
        <p class="title-medium">Pas encore inscrit ? <p>
        <a href="User-suscribe"><button class="orange btn waves-effect waves-light">S'inscire</button></a>
    </div>
</div>

<?php require_once(dirname(dirname(__FILE__))."/Components/footer.php");?>
