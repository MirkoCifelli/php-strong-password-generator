<?php
session_start();
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Password</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>




    <main>
        

                <div class="container mt-2 p-4 bg-body-secondary">
                    <?php       
                        include __DIR__ ."./functions.php";
                        
                    ?>
                    <div class="text-center">
                        <h2>
                            Password Generata
                        </h2>  
                    </div>

                    <div class="text-center bg-black text-white mt-3 ">
                        <h3>
                            <?php
                                echo generatepassword();
                                ?>
                            
                        </h3>
                    </div>
                </div> 

                <div class="text-center mt-2 p-4 container bg-body-secondary">
                    <a href="./index.php" class=" text-decoration-none text-black fs-4 fw-bold ">
                        Ritorna alla home page
                    </a>
                </div> 
            
        
    </main>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>