<?php
session_start();
$_SESSION['success_message'] = null;
$_SESSION['danger_message'] = null;

$etape = $_POST['etape'];
$mdp = $_POST['mdp'];

$mdp_par_etape = ['1' => 'go', '2' => 'azerty'];
$page_par_etape = ['1' => 'salle.php', '2' => 'couloir.php'];
$message_par_etape = ['1' => 'bon début'];

if (array_key_exists($etape, $mdp_par_etape) && $mdp_par_etape[$etape] == $mdp) {

    if (array_key_exists($etape, $message_par_etape)) {
        $_SESSION['success_message'] = $message_par_etape[$etape];
    }
    header("Location: $page_par_etape[$etape]");
} else {
    $_SESSION['danger_message'] = "PERDU!";

    header('Location: ' . $_SERVER['HTTP_REFERER']);
}
