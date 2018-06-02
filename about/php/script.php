<?php 

if (!isset($_POST['nom']) || !isset($_POST['prenom']) || !isset($_POST['tel']) || !isset($_POST['mail'])) {
    echo '<meta http-equiv="refresh" content="0;url=../index.php"/>';
}

session_start();

$badNom=false;
$badPrenom=false;
$badTel=false;
$badMail=false;

if(!preg_match("#^[A-Za-z\-\ ]+$#", $_POST['nom'])){
    $badNom=true;
}
if(!preg_match("#^[A-Za-z\-\ ]+$#", $_POST['prenom'])){
    $badPrenom=true;
}
if(!preg_match("#^((\+\d{1,3}(-| )?\(?\d\)?(-| )?\d{1,5})|(\(?\d{2,6}\)?))(-| )?(\d{3,4})(-| )?(\d{4})(( x| ext)\d{1,5}){0,1}$#", $_POST['tel'])){
    $badTel=true;
}
if(!preg_match("#^[0-9a-z\-\_\.]{1,}@[0-9a-z](\.?[0-9a-z])+\.?([a-z]){2,}$#", $_POST['mail'])){
    $badMail=true;
}
strip_tags($_POST['message']);

if(!$badNom && !$badPrenom && !$badTel && !$badMail){
    $to      = 'danielle.rogien@gmail.com';
    $subject = 'Message provenant de '.$_POST['nom'];
    $message = '
            <html>
            <head>
                <title> ---Message reçu du site daniele-rogien.be--- </title>
            </head>
            <body>
                <h1>---Message reçu du site daniele-rogien.be---</h1> 
                <p>Coordonnées de l\'envoyeur : <br> Nom -> '.$_POST['nom'].'<br> Prénom -> '.$_POST['prenom'].' <br> Mail -> '.$_POST['mail'].'<br> Tel -> '.$_POST['tel'].'</p>
                <h2> Message : </h2>
                <p>'.$_POST['message'].'</p>
            </body>
            ';

    $headers = 'From: '.$_POST['mail'] . "\r\n";
    $headers .= 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    echo $to;
    echo $subject;
    echo $message;
    echo $headers;

    mail($to, $subject, $message, $headers);
    echo '<meta http-equiv="refresh" content="0;url=../index.php?valid=1#contact"/>';
} else {
    $_SESSION['nom'] = $_POST['nom'];
    $_SESSION['prenom'] = $_POST['prenom'];
    $_SESSION['tel'] = $_POST['tel'];
    $_SESSION['mail'] = $_POST['mail'];
    $_SESSION['message'] = $_POST['message'];

    $errors = checkErr($badNom) . checkErr($badPrenom) . checkErr($badTel) . checkErr($badMail); 

    echo '<meta http-equiv="refresh" content="0;url=../index.php?valid=0&errors='.$errors.'#contact"/>';
}

function checkErr($e){
    if ($e == true) {
        return '1';
    }
    return '0';
}

?>