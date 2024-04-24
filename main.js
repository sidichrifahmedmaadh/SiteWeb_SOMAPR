// Fonction peremet d'obtenir la localisation 
function obtenirLocalisation() {
    if (navigator.geolocation) {
      navigator.geolocation.getCurrentPosition(showPosition);
    } else {
      alert("La géolocalisation n'est pas prise en charge par votre navigateur.");
    }
  }
  
  function showPosition(position) {
    var latitude = position.coords.latitude;
    var longitude = position.coords.longitude;
    var locationString = latitude + ", " + longitude;
    document.getElementById('location').value = locationString;
  }

  document.getElementById('assistanceForm').addEventListener('submit', function(event) {
      event.preventDefault(); 
      estimerMontantEtRediriger(); 
});


// Fonction peremet d'estimer le montant du service ou du forfait souhaite
function estimerMontantEtRediriger() {
    var type = document.getElementById('type').value;
    var montantEstime = 0;
    var typeAssistanceChoice = "";
    var typeForfaitChoice = "";

    switch (type) {
        case "demande_assistance":
            var typeAssistance = document.getElementById('Assistance').value;
            switch (typeAssistance) {
                case "Services de remorquage":
                    typeAssistanceChoice = "Srv. Remorquage";
                    montantEstime = 1700;
                    break;
                case "Services de roue":
                    typeAssistanceChoice = "Srv. de Roue";
                    montantEstime = 1100;
                    break;
                case "Services de batterie":
                    typeAssistanceChoice = "Srv. Batterie";
                    montantEstime = 2200;
                    break;
                case "Services du carburant":
                    typeAssistanceChoice = "Srv. Carburant";
                    montantEstime = 400;
                    break;
                case "Services d'ouverture des serrures":
                    typeAssistanceChoice = "Srv. d'Ouv Serrure";
                    montantEstime = 500;
                    break;
                case "Services remplissage du gaz":
                    typeAssistanceChoice = "Srv. du Gaz";
                    montantEstime = 1200;
                    break;
                default:
                    typeAssistanceChoice = "Autre Service";
                    montantEstime = "📞";
            }
            break;

        case "forfait":
            var typeForfait = document.getElementById('Forfait').value;
            switch (typeForfait) {
                case "Forfait Silver":
                    typeForfaitChoice = "Forfait Silver";
                    montantEstime = 2000;
                    break;
                case "Forfait Gold":
                    typeForfaitChoice = "Forfait Gold";
                    montantEstime = 3000;
                    break;
                case "Forfait Diamond":
                    typeForfaitChoice = "Forfait Diamond";
                    montantEstime = 4000;
                    break;
                default:
                    alert("Le type de forfait sélectionné n'est pas reconnu.");
                    return;
            }
            break;

        default:
            alert("Le type sélectionné n'est pas reconnu.");
            return;
    }

    // Rediriger vers la page de paiement -> (paying.html) avec le montant estimé et le type (d'assistance ou forfait)
    window.location.href = 'paying.html?type=' + (type === "demande_assistance" ? typeAssistanceChoice : typeForfaitChoice) + '&montant=' + montantEstime;
}
