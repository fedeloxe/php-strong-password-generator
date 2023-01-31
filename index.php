<?php
function randomPassword($pass)
{
    $alphabet = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+-=[]{}|;<>,.?/";
    $password = array();
    $alphaLength = strlen($alphabet) - 1;
    for ($i = 0; $i < $pass; $i++) {
        $n = rand(0, $alphaLength);
        $password[] = $alphabet[$n];
    }
    return implode($password);
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Password </title>
</head>

<body>
    <div class="container ">
        <div class="row">
            <div class="col-8 mt-5">
                <h2>Generatore di password</h2>
                <form action="" class="d-flex mt-5" method="GET">
                    <input type="number" class="form-control me-5" placeholder="lunghezza password" name="pass">
                    <input class="btn btn-primary" type="submit" value="generate">


                </form>
                <h1>La tua password &#232; : <?php echo randomPassword($_GET["pass"]) ?></h1>



            </div>

        </div>

    </div>

</body>

</html>