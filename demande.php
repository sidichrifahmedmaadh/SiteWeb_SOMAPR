<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <Link rel="stylesheet" href="style.css">
    <Link rel="stylesheet" href="demande.php">
    <script src="main.js"></script>
    <title>Demande d'Assistance</title>

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

    <section class="forms" id="type_assistance">

        <div class="content">
            <!-- onsubmit="estimerMontantEtRediriger(); return false;" -->
            <form action="database.php" method="post" >

                <div class="form">
                    <h2>Bienvenue 😊 <br>
                        Comment pouvons-nous vous servir ?</h2>

                    <div>
                        <label for="Nom">Votre Nom</label> <br>
                        <input type="text" id="Nom" minlength="3" maxlength="15"
                        name="username" placeholder="Nom" autofocus required>
                    </div>
    
                    <div>
                        <label for="Numero">Votre Téléphone</label> <br>
                        <input type="tel" id="Numero"
                        name="phoneNumber"
                        placeholder = "Format : 1-2345678" maxlength="9" minlength="9"
                        pattern="[2-4]{1}-[0-9]{7}" required>
                    </div>
    
                    <div>
                        <input type="hidden" id="type" value="demande_assistance">
                        <label for="Assistance">Type d'Assistance</label> <br>
                        <input list="TypeAssistance" name="typeAssistance" id="Assistance" required>
                        <datalist id="TypeAssistance">
                            <option value="Services de remorquage">
                            <option value="Services de roue">
                            <option value="Services de batterie">
                            <option value="Services du carburant">
                            <option value="Services d'ouverture des serrures">
                            <option value="Services remplissage du gaz">
                            <option value="D'autre">
                        </datalist>
                    </div>

                    <div class="location">
                        <label for="location">Localisation</label> <br>
                        <p class="loc-img" name="locations" onclick="obtenirLocalisation()" aria-required="false">
                            <img src="images/location.jpeg" alt="" title="Click pour obtenir Localisation">
                        </p>
                    </div>

                    <div>
                        <label for="Message">Message</label> <br>
                        <textarea name="messages" id="Message" title="Texte" cols="30" rows="5" placeholder="Texte"></textarea>
                    </div>
                    
                    <div>
                        <input type="submit" class="submits" value = "Envoyer" name="EnvoyerDemande">
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