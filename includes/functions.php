<?php

function error($err=''){

   $mess=($err!='')? $err:'Une erreur inconnue s\'est produite';

   exit('<p>'.$mess.'</p>

   <p>Cliquez <a href="./ari.php">ici</a> pour revenir à la page d\'accueil</p></div></body></html>');

}

function toValidURL($url){
	$string = $url;
	$pattern = '#/actToRemedyIssues/#';
	$replacement = '';
	$validURL = preg_replace($pattern, $replacement, $string);
	return $validURL;
}

function move_avatar($avatar)

{

    $extension_upload = strtolower(substr(  strrchr($avatar['name'], '.')  ,1));

    $name = time();

    $nomavatar = str_replace(' ','',$name).".".$extension_upload;

    $name = "./images/avatars/".str_replace(' ','',$name).".".$extension_upload;

    move_uploaded_file($avatar['tmp_name'],$name);

    return $nomavatar;

}