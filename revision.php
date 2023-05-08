<?php

//phpinfo();

echo date('Y-m-d H:i:s');
echo "<br/>";

$demain = date('Y-m-d', strtotime('+1 month'));
echo $demain;

echo "<br/>";

$date = new DateTime('2100-01-01');
echo $date->format('d-m-Y H:i:s');
echo "<br/>";

echo time();
/*var_dump(time());//temps écoulé en seconde depuis 1970
if(strtotime('2025-06-12') < time())
    echo "valide";

$date = new DateTime('2000-02-25');
$date2 = new DateTime();

if($date < $date2)
    echo "Valide";*/
/*----------------------------Les tableaux----------------------------- */
/*$tableau = [];

$tableau = [1,2,3];

foreach ($tableau as $key => $val){
    echo $key . "=>" . $val;
}

echo "<br/>";
//on peut creer nous meme notre tableau avec des clés personnalisé
$tableauPerso = [
    "un" => 7,
    "deux" => 9,
    "trois" => 11
];
echo $tableauPerso['deux'];
echo "<br/>";
foreach($tableauPerso as $key => $val){
    echo $key . "=>" . $val;
}
echo "<br/>";
//on peu tavoir en vie de fair un tableau de tableau: une matrice en quelque sorte
$matrice = [
    0 => [1,2,3],
    1 => [4,5,6],
    2 => [7,8,9]
];
foreach($matrice as $mat1){
    foreach($mat1 as $val)
        echo $val;
    echo "<br/>";
}

//fonctions de tri pour les tableaux
shuffle($tableau); //permet de mélanger les elmts dans un tableau
var_dump($tableau);
echo "<br/>";

$tableau1 = [
    5 => 3,
    3 => 2,
    7 => 1,
];
ksort($tableau1);//permet de trier par ordre croissant des clés
var_dump($tableau1);
echo "<br/>";
arsort($tableau1);//permet de trier par ordre décroissant les valeurs
var_dump($tableau1);
echo "<br/>";
asort($tableau1);// est l'inverse de asort
var_dump($tableau1);
echo "<br/>";

//union de deux tableaux
$union = array_merge($tableau,$tableau1);
var_dump($union);
echo "<br/>";
var_dump(array_keys($tableau1)); //recupère que les clés
echo "<br/>";
var_dump(array_values($tableau1)); //recupère les valeurs
echo "<br/>";
var_dump(array_diff($tableau,$tableau1)); //comparer les deux tableaus et retourne les valeurs du premiers tableau qui e sont pas présente dans le deuxième

//recherche dans un tableau
var_dump(array_search(2,$tableau1)); //renvoie la position de la valeur 2 dans le tableau
echo "<br/>";
var_dump(in_array(5,$tableau1)); //verifie si la valeur est dans le tableau
echo "<br/>";
var_dump(key_exists(3,$tableau1)); //verifie que la clé est disponible
echo "<br/>";
var_dump(array_key_exists(3,$tableau1));*/
/*-----------------------------------------Fonctions de base de mabipulation de nombres-------------------------- */
/*echo abs(-3.99);
echo "<br/>";
echo floor(3.99);
echo "<br/>";
echo ceil(3.99);
echo "<br/>";
echo round(-3.84,1);// 1 chiffre après la virgule
echo "<br/>";
echo round(-3.85,1);
echo "<br/>";
echo 11%4;
echo "<br/>";
echo 12%4;
echo "<br/>";
echo pi();*/
/*----------------------------------------Fonctions de base de manipulation de chaines--------------------------- */
/*$test= "Foo Bar Tii";

$tab = explode(" ",$test); //convertir une chaine de caractère en tableau. Ici il coupe a chaque fois il trouve un espace
var_dump($tab); //var_dump pour afficher les trucs compliqués comme les tableaux

$tab = implode(" ",$tab); //convertir le tableau e chaine de caractère séparé par des espaces
var_dump($tab);

$heure = 15;
$name = "Jonh";
$format = "Bonjour %s, il est %d h";
echo sprintf($format,$name,$heure);

$test= "Foo Bar Tii";
echo str_replace("Foo","Judo",$test);

echo strlen($test);

echo trim($test);//supprime les caractères au début et à la fin de la chaine de caractères

echo substr("abcdefgh",-1); //affiche le dernier element du string

echo substr("abcdefgh",0,-3); //affiche à partir du premier element et enlève les 3 derniers

echo ucfirst($test); //mettre en majuscule le premier caractère d'un string*/
/*---------------------------------------Concaténer et additionner des variables------------------------------------ */
/*$string = "foo";
$string1 = "bar";

echo "$string$string1";
echo $string . $string1;

$name = "Jonh";

echo <<<EOT
Bonjour "$name".
Lorem Ipsum.
EOT;

echo nl2br("\r\n" . "Bonjour $name.");//nl2br permet de preciser qu'il doit convertir \n en br*/
/*--------------------------------------------Manipuler les types de base------------------------------------------- */
/*$val1 = 5.5;
$val2 = 10;

echo $val1 * $val2;
echo "<br/>";
echo $val1 + $val2;
echo "<br/>";
echo $val1 - $val2;
echo "<br/>";
echo $val1 / $val2;
echo "<br/>";
echo $val1 . $val2; //pour concaténer du code*/



/*------------------------------------------- Aborder les types de bases------------------------------------------ */
//$bool = true;
//$int = 10;

//echo gettype($int);// pour avoir le type de la variable

//$float = 1.234;
//$string = "fop $int";
//$string1 = 'fop $int';

//echo $string;
//echo $string1;// les doubles cotes sont interprété, l'autre, non

//$float = 1 + "15.5";
//echo $float;
//echo gettype($float);

//$tableau = [1,2,3];

/*class demo{
    function do()
    {
        echo "Bonjour demo";
    }
}

$demo = new demo;
$demo -> do();*/