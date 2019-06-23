<?php

// récupération de la largeur et hauteur du fichier
$size=getimagesize($_FILES['image']['tmp_name']);
$ratio=$size['0']/$size['1'];

// on défini la valeur max du fichier de sorti
$largeur=1400;
$hauteur=800/$ratio;
$small_largeur=350;
$small_hauteur=350/$ratio;	

// calcul des nouvelles largeur/hauteur grace au ratio 
if($ratio>1){
	$largeur=1400;
	$hauteur=1400/$ratio;
	$small_largeur=350;
	$small_hauteur=350/$ratio;	
}elseif($ratio<1){
	$largeur=1400;
	$hauteur=1400/$ratio;
	$small_largeur=350;
	$small_hauteur=350/$ratio;
}else{
	$largeur=1400;
	$hauteur=1400;
	$small_largeur=350;
	$small_hauteur=350;
}


// on génère un nom de fichier
$img=time()."-".rand(1000,9999);
// ou on récupère l'id du dernier ID inséré grace à mysqli_insert_id().

//Creation de la grande image
$thumb = imagecreatetruecolor($largeur, $hauteur);
$source = imagecreatefromjpeg($_FILES['image']['tmp_name']);
imagecopyresampled($thumb, $source, 0, 0, 0, 0, $largeur, $hauteur, $size['0'], $size['1']);
imagejpeg($thumb,"./assets/evenements/".$img.".jpg",80);


?>