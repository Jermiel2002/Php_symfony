<?php
    require_once(__DIR__ . '/partials/const.php');

    $title = "Register";
    $h1 = "Page de création de compte";
?>

<!--Header-->
<?php
    require_once(__DIR__ . '/partials/header.php');
?>

<!-- Header -->
<?php
    if (isset($_POST["submit"]))
    {
        $handler = fopen('files/users.csv', 'a'); // le a pour eviter de supp ce qui y avait deja dans le fichier
        fputcsv($handler, [
            $_POST["email"],
            $_POST["password"],
            $_POST["firstname"],
            $_POST["lastname"]
        ]);
        fclose($handler);
    }
?>

<form action="register.php" method="GET">
    <label>Email</label>
    <input type="email" name="email" required>

    <label>Mot de passe</label>
    <input type="password" name="password" required>

    <label>Prénom</label>
    <input type="firstname" name="firstname" required>

    <label>Nom</label>
    <input type="lastname" name="lastname" required>

    <input type="submit" id="submit" name="submit" value="valider">
</form>

<?php
    echo "<p>Register</p>";
?>

<!--Footer-->
<?php
    require_once(__DIR__ . '/partials/footer.php');
?>