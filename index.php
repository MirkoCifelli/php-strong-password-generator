<!-- <php?

$passlenght = $_GET['pass_lenght];
function getRandomPassword($passlenght){
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!?&%$<>^+-*/()[]{}@#_=';
    $password = '';
    for($i = 0; $i < $passlength; $i++){
        $password .= $characters[rand (0, strlen($characters)- 1)];
     }
    return $password;
};

?> -->

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Php-password-generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>



    <main>
        <div class="container">
            <h1 class="text-center mt-2 ">Php Password Generator</h1>
        </div>

        <div class="container">
            <form action="./index.php" method="get">
                <div>
                    <label for="input" name="pass_lenght">
                        Inserisci la lunghezza della password da generare
                    </label>
                    <input type="nunber" name="pass_lenght">
                </div>
                
                <div>
                    <button type="submit" class="btn btn-dark">
                        Crea
                    </button>
                </div>

                <div>
                    <?php       
                    
                        function generatepassword(){
                            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!?&%$<>^+-*/()[]{}@#_=';
                            $password = '';
                            for($i = 0; $i < $_GET['pass_lenght']; $i++){
                                $password .= $characters[mt_rand(0, strlen($characters)- 1)];
                            }
                            return $password;
                        };
                        var_dump(generatepassword());
                    
                    ?>
                </div>     
            </form>
        </div>
    </main>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>