

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
        <div class="container bg-body-secondary p-4 mt-2">
            <h1 class="text-center mt-2 ">Php Password Generator</h1>
        </div>

        <div class="container bg-body-secondary p-4">
            <form action="./password.php" method="get">
                <div class="text-center ">
                    <label for="input" name="pass_lenght" class=" fw-bold fs-4">
                        Inserisci la lunghezza della password da generare
                    </label>
                    <input type="nunber" name="pass_lenght">
                </div>

                <div class="text-center my-3">
                    <button type="submit" class="btn btn-dark m-2 fs-4">
                        Crea
                    </button>
                </div>

                      
            </form>
        </div>
    </main>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>