<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/main.css">
    <title>hashing</title>
</head>
<body>
    <section>
        <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
            <input type="text" name="identifiant" value="identifiant" required placeholder="identifiant">
            <input type="password" name="password" value="password" required placeholder="password">
            <input type="submit" name="valider" value="valider">
            <input type="reset" name="annuler" value="annuler">
        </form>
    </section>

    <?php
        var_dump($_POST['password']);
        var_dump(md5("-/*54".$_POST['password']));
        var_dump(crypt(md5($_POST['password']),"-/"));
        // ne jamais faire ça

        $password=$_POST['password'];

        var_dump(hash("sha256", $password));
        var_dump(hash("sha512", $password));

        var_dump(password_hash($password,PASSWORD_DEFAULT ));
        var_dump(password_verify($password,PASSWORD_DEFAULT));
        var_dump(password_verify($password,PASSWORD_BCRYPT));

        // faire la différence entre l'encodage,chiffrement, cryptographie
    ?>
</body>
</html>