<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/coursera.css"></link>
    <title>Rodrigo Marquez PHP</title>
</head>
<body>
    <div class="paragraph-wrapper">
        <div class="page-container">
            <div class="row">
                <h1>Rodrigo Marquez PHP</h1>
                <?php
                    echo "The sha256 of Rodrigo Marquez is ";
                    echo hash('sha256','Rodrigo Marquez')
                ?>
                <pre>        
                        RRRRRRRRRRRRRRRRR   
                        R::::::::::::::::R  
                        R::::RRRRRR:::::::R 
                        R::::R      R:::::R
                        R::::R      R:::::R
                        R::::R     R:::::R
                        R::::RRRRRR:::::R 
                        R:::::::::::::RR  
                        R::::RRRRRR:::::R 
                        R::::R      R:::::R
                        R::::R       R:::::R
                        R::::R       R:::::R
                        R:::::R      R:::::R
                        R:::::R      R:::::R
                        R:::::R      R:::::R
                        RRRRRRR      RRRRRRR
                </pre>
                <a href="fail.php">Click here to check the error setting</a><br>
                <a href="check.php">Click here to cause a traceback</a>
            </div>
        </div>
    </div>
</body>
</html>