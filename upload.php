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