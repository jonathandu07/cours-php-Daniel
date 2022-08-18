<?php
include_once("calculatrice.class.php");
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>Calculatrice</title>
</head>
<body>
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>"  method="POST">
    <input type="button" name="1" value="1">
    <input type="button" name="2" value="2">
    <input type="button" name="3" value="3">
    <input type="button" name="4" value="4">
    <input type="button" name="5" value="5">
    <input type="button" name="6" value="6">
    <input type="button" name="7" value="7">
    <input type="button" name="8" value="8">
    <input type="button" name="9" value="9">
    <input type="button" name="soustraction" value="-">
    <input type="button" name="multiplication" value="X">
    <input type="button" name="division" value="/">
    <input type="button" name="addtion" value="+">
    <input type="submit" name="submit" value="=">
    <input type="reset" name="reset" value="C">
</form>
</body>
</html>
<?php
    if ((isset($_POST['1'])) || (isset($_POST['2'])) || (isset($_POST['3'])) || (isset($_POST['4'])) || (isset($_POST['5'])) || (isset($_POST['6'])) || (isset($_POST['7'])) || (isset($_POST['8'])) || (isset($_POST['9'])) || (isset($_POST['0']))){
        $un = $_POST['1'];
        $deux = $_POST['2'];
        $trois = $_POST['3'];
        $quatre = $_POST['4'];
        $cinq = $_POST['5'];
        $six = $_POST['6'];
        $sept = $_POST['7'];
        $huit = $_POST['8'];
        $neuf = $_POST['9'];
        $zero = $_POST['0'];

        $nombre = $un || $deux || $trois || $quatre || $cinq || $six || $sept || $huit || $neuf || $zero;
    }
?>