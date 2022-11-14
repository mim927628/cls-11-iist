<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Project</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>


<?php
 echo'This is my first php program'

?>
    <div class="one">
        welcome

        <h1>PHP Project</h1>

        <?php
          
        echo'This is my first php program'

        ?>
    </div>
    <div class="two">
        <p>My First PHP Project</p>
    </div>

<div class="tree">
    <?php
     $num1=156;
     $num2=275;
     $rejult=$num1*$num2;


     echo 'The Muliplication= '.$rejult;
     if($num1===$num2){
        echo '<br> true <br>';
     }else{
        echo'<br> false <br>';
     }
     var_dump($num1);
     print_r($rejult);
    ?>





<?php
$t = date("H");

if ($t < "20") {
  echo " <br>Have a good day!";
}
?>
 
    </div>
</body>
</html>