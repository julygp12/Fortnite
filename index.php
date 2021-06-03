<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" type="text/css" href="./estilos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

</head>
<body>

    <div class="container m-5">
        <div class="form-row align-items-center">
            <div class="col-auto my-1">
                <form name="arma" action="resultados.php" method="POST"> 
                <label class="mr-sm-2" for="inlineFormCustomSelect">Elija su arma a equipar</label>
                    <select name="arma1"class="custom-select mr-sm-2" id="entrada">
                        <option selected>Elije...</option>
                        <option value="M4A1" >M4A1</option>
                        <option value="AWP">AWP</option>
                        <option value="P90" >P90</option>
                        <option value="KARAMBIT">KARAMBIT</option>
                        <option value="DEAGLE">DEAGLE</option>
                    </select>
                    <button type="submit" class="btn btn-primary">Enviar</button>

                </form>

            </div>
        </div>
    </div>
    


  <script src="./javascript.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>  

</body>


</html>

