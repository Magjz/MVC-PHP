<?php require_once(dirname(dirname(__FILE__))."/Components/header.php");
require_once(dirname(dirname(__FILE__))."/Components/nav.php");?>


<div class="container login-box">
    <h1>Inscrivez-vous</h1>
        <form class ="margin-bot" method = "POST" action= <?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>>
            <?php echo $input['name']; ?>
            <?php echo $input['email']; ?>
            <?php echo $input['password']; ?>
            <?php echo $input['password_conf']; ?>
            <?php echo $input['submit']; ?>  
        </form>
   
</div>

<?php require_once(dirname(dirname(__FILE__))."/Components/footer.php");?>