<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EX 03</title>
</head>
<body>
<?php

for($cont=0;$cont<101;$cont++){
        if($cont%3==0){
            echo "$cont A";
        }
        elseif($cont%5==0){
            echo "$cont B";
        }
        elseif($cont%3==0 && $cont%5==0){
            echo "$cont AB";
        }

}
    


?>    
</body>
</html>