<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>example method static</title>
</head>
<body>
        <?php
            class Login {
                public static $user;

                public static function verificarLogin(){
                    echo "O usuário".self::$user."esta logado";
                }
                public function sairSistema(){
                    echo "O usuario deslogou";
                }
            }

            $login = new Login();
            $login ->sairSistema();
        ?>
    
</body>
</html>