<?php
    require_once(__DIR__ . '/partials/const.php');

    $title = "Upload";
    $h1 = "Page d'envoi de fichier";
?>

<!--Header-->
<?php
    require_once(__DIR__ . '/partials/header.php');
?>

<!-- Header -->
<?php
/*on va apprendre à uploader un ficier sur notre serveur
lorsque l'utilisateur telecharge un fichier, il est dans un dossier temporaire, ensuite il faut le bouger du temporaire, vers le fichier à coté de notre site pour pouvoir le récupérer
dossier de destination des fichiers sur le serveur
dans le upload on crée le nom du fichier, on concatène le dossier et avec le md5(permet de générer une empreinte de 32 caractères
completement aléatoire);; le uniqid permet de créer un id unique; on faait ça pour éviter l'écrasemnt d'un fichier par un autre
le basename permet de récupérer le nom final du chemin du fichier.
ensuite on recupere le chemin du fichier temporaire et le mettre dans le chemin defini dans le if*/ 
    if (isset($_POST["submit"])) 
    {
        $filesDir = './files/'; 
        $uploadfile = $filesDir . md5(uniqid()) . basename($_FILES['file']['name']);
        if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile))
        {
            echo "le fichier est valide.";
        }
    }
?>

<form action="upload.php" method="POST" enctype="multipart/form-data"> <!--très important le enctype pour envoyer un fichier-->
    <label>File</label>
    <input type="file" name="file" required>

    <input type="submit" id="submit" value="valider">
</form>

<!-- Footer -->
<?php
    require_once(__DIR__ . '/partials/footer.php');
?>