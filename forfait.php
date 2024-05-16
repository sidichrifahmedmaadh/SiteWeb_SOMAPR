<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <Link rel="stylesheet" href="style.css">
    <script src="main.js"></script>
    <title>Forfait</title>

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

    <section class="forms" id="type_forfait">
        <div class="content">
            <!-- onsubmit="estimerMontantEtRediriger(); return false;" -->
            <form action="database.php" method="post" >

                <div  class="form-forfait">
                    <h2>Bienvenue 😊 <br>
                        Dans Les Forfaits SOMAPR</h2>

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
                        <label for="Numero">Plaque d'Immatriculation</label> <br>
                        <input type="text" id="Numero"
                        name="carNumber"
                        placeholder = "Format : 8702-AA-02" maxlength="10" minlength="10"
                        pattern="[0-9]{4}-[A-Z]{2}-[0-9]{2}" required title="ajouter numero de la plaque 🚗">
                    </div>
    
                    <div>
                        <input type="hidden" id="type" value="forfait">
                        <label for="type_forfaits">Type du Forfait</label> <br>
                        <input list="TypeForfaits" name="typeForfait" id="Forfait" required>
                        <datalist id="TypeForfaits">
                            <option value="Forfait Silver">
                            <option value="Forfait Gold">
                            <option value="Forfait Diamond">
                        </datalist>
                    </div>

                    <div>
                        <input type="submit" value="Envoyer" name="EnvoyerForfait">
                    </div>

                </div>
            </form>
        </section>

    <footer class="footer">
        <p class="footer-title">&copy; 2024 SOMAPR. Tous droits réservés.</p>
    </footer>

</body>
</html>