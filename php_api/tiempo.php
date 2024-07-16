<?php
    header("Content-type:text/html;charset=\"utf-8l\"");
    $previsionTiempo = "";
    $error = "";
    if (array_key_exists('ciudad', $_GET)) {

        $urlContents = file_get_contents("https://api.openweathermap.org/data/2.5/weather?q=" . urlencode($_GET['ciudad']) . ",&appid=[API_KEY]&lang=es");
        $array = json_decode($urlContents, true);
        $previsionTiempo = "El tiempo en " . $_GET['ciudad'] . " es actualmente " . $array['weather'][0]['description'] . "";
        $temperaturaEnCelsius = $array["main"]["temp"] - 273;
        $previsionTiempo .= ". La temperatura es " . intval($temperaturaEnCelsius) . "&deg;C";
        $tempMin = $array['main']['temp_min'] - 273;
        $tempMax = $array['main']['temp_max'] - 273;
        $previsionTiempo .= ", oscilando entre " . intval($tempMin) . "&deg;C de minima y " . intval($tempMax) . "&deg;C de máxima.";
    }

?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>¿Qué tiempo hace?</title>
            <style type="text/css">
                html {
                    background: url(wallpaper.jpg) no-repeat center center fixed;
                    -webkit-background-size: cover;
                    -moz-background-size: cover;
                    -o-background-size: cover;
                    background-size: cover;
                }

                body {
                    background: none;
                }


                .container {
                    text-align: center;
                    margin-top: 250px;
                    width: 450px,
                }

                input {
                    margin: 20px 0;
                }

                #prevision Tiempo {
                    margin-top: 30px;
                }
            </style>
</head>

<body>
    <div class="container">
        <h1 class="d-inline-flex p-2 rounded text-white" style="background-color: #3c5a9d" >¿Qué tiempo hace?</h1>
                <form>
                    <fieldset class="form-group">
                        <label for="ciudad" class="d-inline-flex p-2 rounded text-white" style="background-color: #6082c8" >Introduce el nombre de una ciudad :</label>
                                <input type="ciudad" class="form-control" id="ciudad" name="ciudad" placeholder="Por ej. Londres, Tokyo" value="" ?>
                    </fieldset>

                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
                <div> </div>
                <div id="prevision Tiempo">
                    <?php
                    if ($previsionTiempo) {
                        echo '<div class="alert alert-success" role="alert">' . $previsionTiempo . '</div>';
                    } else if ($error != "") {
                        echo '<div class="alert alert-danger" role="alert">' . $error . '</div>';
                    }
                    ?>
                </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>