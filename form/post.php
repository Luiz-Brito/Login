<?php

    $nome = $_POST["txtNome"];
    $email = $_POST["txtEmail"];
    $sex = $_POST["sexo"];
    $exp = isset($_POST["exp"])? $_POST["exp"] : "Junior";
    $senha = $_POST["txtSenha"];
        
?>

<?php

    $nome = $_POST["txtNome"];
    $email = $_POST["txtEmail"];
    $sex = $_POST["sexo"];
    $exp = isset($_POST["exp"])? $_POST["exp"] : "Junior";
        
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="malone.css">
    <script src="https://kit.fontawesome.com/4a9d1be222.js" crossorigin="anonymous"></script>
    <title>Perfil</title>
</head>
<body>

    <div id="clockDisplay" class="clock" onload="showTime()"></div>

    <div class="container">
      <div class="top-side">
          <div class="img">
            <img src="https://thumbs.dreamstime.com/b/default-avatar-profile-icon-vector-social-media-user-portrait-176256935.jpg">
        </div>

        <?php
            
        echo "<div class='nome'>$nome</div>";
        echo "<div class='desc'>$exp</div>";
        echo "<div class='sexo'>$sex</div>";
        echo "<div class='fullPass'> <div id='senha' class='senha'>$senha </div> <i class='fas fa-eye-slash' onclick='mostrar()'></i> </div>";
        echo "<br> <div class='email'>$email</div>";

        ?>    

        </div>
        <div class="bot-side">
            <div class="posts">
                <span>0</span>
                <p>posts</p>
            </div>
            <div class="followers">
                <span>0</span>
                <p>followers</p>
            </div>
            <div class="following">
                <span>0</span>
                <p>following</p>
            </div>
        </div>
    </div>

    
    <script src="clock.js"></script>
</body>
</html>