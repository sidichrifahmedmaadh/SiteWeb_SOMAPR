<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <Link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <Link rel="stylesheet" href="style.css">
    <title>Se Connecter</title>
</head>
<body>

    <header>
        <a class="navbar-brand" href="https://somapr.com/fr"> <img src="images/logo.png" alt=""></a>
        <nav class="navigation">
                <ul>
                    <li><a href="#Accueil">Accueil</a></li>
                    <li><a href="#Services">Services</a></li>
                    <li><a href="Demande.php" target="_blank">Demande d'Assistance</a></li>
                    <li><a href="#Contact">Contact</a></li>
                    <li>
                        <a href="#">Se connecter <i class="fas fa-caret-down"></i></a>
                        <ul class="dropdown">
                            <li><a href="login.php">Client</a></li>
                            <li><a href="serviceProvider.php">Fournisseur Service</a></li>
                        </ul>
                    </li>
                </ul>     
        </nav>

        <div class="menu-btn">
            <i class="fa-solid fa-bars"></i>
        </div>
    </header>

    <section class="forms">
        
        <div class="content">
            <form>
                <div class="form-login">
                    <h2>Login</h2>

                    <div>
                    <label for="nom">Nom d'utilisateur</label> 
                    <input type="text" required a
                    utofocus id="nom" name="Username" minlength="3" maxlength="30"
                    placeholder="Nom d'utilisateur ou email" autofocus>
                    </div>
    
                    <div>
                    <label for="Mot">Mot de passe</label> <br>
                    <input type="password" 
                    required id="Mot" name="Password" minlength="4" maxlength="8"
                    placeholder="Mot de passe" >
                    </div>
    
                    <div>
                        <input type="submit" value="Se connecter">
                    </div>
    
                    <div class="pass">
                        <a href="">Mot de passe oublie ?</a>
                    </div>
    
                    <div class="signup_limk">
                        <p>Vous n'avez de compte ? <a href="Signin.php">S'inscrire</a></p>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <footer class="footer">
        <p class="footer-title">&copy; 2024 SOMAPR. Tous droits réservés.</p>
    </footer>

</body>
</html>