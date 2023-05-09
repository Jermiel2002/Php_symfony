<?php
    require_once(__DIR__ . '/partials/const.php');

    $title = "Upload";
    $h1 = "Page d'envoi de fichier";
?>

<!--Header-->
<?php
    require_once(__DIR__ . '/partials/header.php');
?>

<?php
    file_put_contents('./files/demo.txt', 'Bonjour Jonh ! comment tu vas ?');
    echo file_get_contents('./files/demo.txt');
    //ou on peut encore faire
    $fichier = fopen('./files/demo2.txt', 'c+b'); //c pour que le fichier soit créer s'il n'existe pas et b pour créer le fichier en mode binaire
    fwrite($fichier,'Fichier n°2 !');

    echo "<br/><br/>";
?>


<!-- Header -->
<?php
    if (isset($_POST["submit"])) {
        var_dump($_FILES);
        die();
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