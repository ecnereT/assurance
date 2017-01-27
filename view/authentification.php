<?php
$url='./index.php.';
 
function redirige($url)
{
    $url='./index.php';
    die('<meta http-equiv="refresh" content="3;URL='.$url.'">');
}
?>
<?php
require("../include/menu.inc.php");
 
if(isset($_POST['login_']) || isset($_POST['password_']))
{
    if($_POST['login_'] === 'admin' && $_POST['password_'] === 'superadmin')
    {
        $_SESSION['auth'] = true; ?>
        <p style='color: green;'>Authentification réussie, vous allez être redirigé à l'accueil</p>
        <?php
        redirige($url);
    }
    else
    {
        $erreur = "Le login et le MDP ne correspondent pas";
    }
}

if(isset($erreur) && $erreur != '')
{
    echo "<p style='color: red;'>$erreur</p>";
}

if(isset($_SESSION['auth']))
{
    $erreur = "Vous êtes déjà connecté";
}
else
{?>
    <form method="post" action="authentification.php" class="form-control" name="form_auth">
        <label style="cursor: pointer;" for="login_">Login :</label>
        <input type="text" name="login_" id="login_" placeholder="..." required />

        <label style="cursor: pointer;" for="password_">Mot de passe: </label>
        <input type="password" name="password_" id="password_" required />

        <button type="submit" class="btn btn-default">Se connecter</button>
    </form>

<?php
}
?>


