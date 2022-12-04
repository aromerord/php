<?php 
$error = 'faltan_valores';

if (!empty($_POST['name']) && !empty($_POST['surname']) && !empty($_POST['age']) && 
    !empty($_POST['email']) && !empty($_POST['password'])) {

    $error = 'ok';

    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if(!is_string($name) || !preg_match("/[A-Za-z ]+/", $name)){
        $error = 'nombre';
    }
    if(!is_string($surname) || !preg_match("/[A-Za-z ]+/", $surname)){
        $error = 'surname';
    }
    if(!is_int($age) || filter_var($age, FILTER_VALIDATE_INT)){
        $error = 'age';
    }
    if(!is_string($email) || filter_var($email, FILTER_VALIDATE_EMAIL)){
        $error = 'email';
    }
    if(!empty($password) || strlen($password ) < 5 ){
        $error = 'password';
    }
}

header("Location: form.php?error=$error");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularios</title>
</head>
<body>

<h1>Datos del usuario</h1>
<?php if($error === 'ok') : ?>
    <? echo '<h2>' . $name . ' '. $surname  . ' - ' . $age . '</h2>' ?> 
    <?php endif; ?>   

</body>
</html>

