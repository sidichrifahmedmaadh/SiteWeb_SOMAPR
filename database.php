<?php
$conn = mysqli_connect("localhost", "root", "", "somapr_db");

if(isset($_POST['EnvoyerDemande'])){
    $username = $_POST['username'];
    $phoneNumber = $_POST['phoneNumber'];
    $typeAssistance = $_POST['typeAssistance'];
    $locations = $_POST['locations'];
    $messages = $_POST['messages'];
    
    $request = "insert into demandeassitance (username, phoneNumber, typeAssistance, locations, messages) values 
    ('$username', '$phoneNumber', '$typeAssistance', '$locations', '$messages')";
    mysqli_query($conn, $request);

    header('location:demande.php');

}
if (isset($_POST['EnvoyerForfait'])) {
    $username = $_POST['username'];
    $phoneNumber = $_POST['phoneNumber'];
    $carNumber = $_POST['carNumber'];
    $typeForfait = $_POST['typeForfait'];
    
    $request = "insert into forfait (username, phoneNumber, carNumber, typeForfait) values 
    ('$username', '$phoneNumber', '$carNumber', '$typeForfait')";
    mysqli_query($conn, $request);

    header('location:forfait.php');
}

else {
    echo "Erreur, Sidi mechi regde.";
}