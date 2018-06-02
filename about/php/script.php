<?php 
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
    // echo '<meta http-equiv="refresh" content="0;url=../index.php?valid=1#contact"/>';
}
else{
    echo ('<label class="error"> Le formulaire n\'a pas pu être validé, la prochaine fois, activez le javascript Nondidju !</label>');
    echo ($badNom.' - nom');
    echo ($badPrenom.' - prenom');
    echo ($badMail.' - mail');
    echo ($badTel.' - tel');
}
?>