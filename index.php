<?php
include 'data.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>
<body>
    <header>
        <div class="top-header">
            <div class="left">
                <div class="image">
                    <img src="https://www.gstatic.com/images/branding/googlelogo/svg/googlelogo_clr_74x24px.svg" alt="">
                    
                </div>
                <div class="text">
                    <h2>Privacy e Termini</h2>
                </div>
            </div>

        </div>
        <nav>

        </nav>
    </header>
    <main>
        <div class="container">
            <?php foreach($faq as $value) { ?>

                <h2><?php echo $value['domanda']; ?></h2>
                <p><?php echo $value['risposta']; ?></p>

            <?php } ?>

        </div>
        
    </main>
    
</body>
</html>