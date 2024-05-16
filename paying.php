<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <Link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <Link rel="stylesheet" href="style.css">
    <script src="main.js"></script>
    <title>Paiement</title>

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
                <div class="form-paying">
                    <h2>Payer en ligne</h2>

                    <div class="paying-icon">
                        <img src="images/bankily.png" alt="">
                        <img src="images/masrvi.jpeg" alt="">
                        <img src="images/sedad.png" alt="">
                    </div>

                    <p id="type_info" style="color: rgb(5, 5, 118);; font-weight: bold; font-size: xx-large;text-align: center;"></p>
                    <p id="montant_info" style="color: orange; font-weight: bold; font-size: xx-large;text-align: center;"></p>


                    <div>
                    <label for="nom"> Compte récepteur </label> 
                    <input type="text" id="mot" value="32929293" readonly required autofocus>
                    <button onclick="copierMot()" class="copier-btn" title="Copier le numero"><b>Copier</b></button>
                    </div>

                    <div>
                        <label for="Numero">Votre Téléphone</label> <br>
                        <input type="tel" id="Numero"
                        name="Phone Number"
                        placeholder = "Format : 1-2345678" maxlength="9" minlength="9"
                        pattern="[2-4]{1}-[0-9]{7}" required>
                    </div>
    
                    <div class="img-upload">
                        <label for="img-upload">Bon de transfert</label> <br>
                        <label id="custom-file-upload" class="upload-icon">
                        <i class="fa-solid fa-image" title="Click pour ajouter une image."></i>
                        <input type="file" id="img-upload" name="Bon_de_transfert" style="display: none;" required accept="image/*">
                        </label>
                      </div>

                    <div class="Bont-Trans-Img">
                    <caption for="img"><b>Exemple d'image</b></caption> <br>
                    <img src="images/Bont-Trans.png" alt="">
                    </div>
    
                    <div>
                        <input type="submit" value="Envoyer">
                    </div>
    
                </div>
            </form>
        </div>
    </section>

    <footer class="footer">
        <p class="footer-title">&copy; 2024 SOMAPR. Tous droits réservés.</p>
    </footer>

    <script>
        window.onload = function() {
            // Récupérer le type d'assistance ou de forfait et le montant estimé passés en paramètre dans l'URL
            var params = new URLSearchParams(window.location.search);
            var type = params.get('type');
            var montantEstime = params.get('montant');
            // Afficher le type d'assistance ou de forfait et le montant estimé sur la page
            document.getElementById('type_info').textContent = "TYPE : " + type;
            document.getElementById('montant_info').textContent = "MONTANT : " + montantEstime + ' MRU';

        }
    </script>

</body>
</html>