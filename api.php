<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Obtener los datos de la API</title>
    <style>
        body {
            background-color: gray; /* Cambiar el color de fondo a verde */
            margin: 0; /* Eliminar el margen predeterminado */
            padding: 0; /* Eliminar el relleno predeterminado */
        }

        .pokemon-container {
            text-align: center;
            padding: 20px; /* Agregar un poco de espacio alrededor del contenedor de Pokemon */
        }

        .pokemon {
            display: inline-block;
            vertical-align: top;
            margin: 10px;
            background-color: white; /* Agregar un color de fondo blanco al contenedor de cada Pokemon */
            padding: 20px; /* Agregar un poco de espacio alrededor de cada Pokemon */
        }
    </style>
</head>
<body>
    <div class="pokemon-container">
        <?php
        // inicializa una nueva sesion de la curl
        $ch = curl_init();
        $url = 'https://pokeapi.co/api/v2/pokemon/charizard';
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);

        if (curl_errno($ch)){
            $error_msg = curl_error($ch);
            echo "Error al conectarse a la API";

        } else {
            curl_close($ch);
            $pokemonData = json_decode($response, true);

            echo '<div class="pokemon">';
            echo '<h1>' . $pokemonData['name'] . '</h1>';
            echo '<img src="' . $pokemonData['sprites']['front_default'] . '" alt="' . $pokemonData['name'] . '" >';
            echo '<ul>';
            echo '<li><strong>Nombre:</strong> ' . $pokemonData['name'] . '</li>';
            echo '<li><strong>Altura:</strong> ' . $pokemonData['height'] . '</li>';
            echo '<li><strong>Ancho:</strong> ' . $pokemonData['weight'] . '</li>';
            echo '<li><strong>Habilidades:</strong> ';
            echo '<ul>';
            foreach ($pokemonData['abilities'] as $ability) {
                echo '<li>' . $ability['ability']['name'] . '</li>';
            }
            echo '</ul>';
            echo '</li>';
            echo '</ul>';
            echo '</div>'; // Cerrar el div de pokemon
        }
        ?>

        <?php
        // inicializa una nueva sesion de la curl
        $ch = curl_init();
        $url = 'https://pokeapi.co/api/v2/pokemon/pikachu';
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);

        if (curl_errno($ch)){
            $error_msg = curl_error($ch);
            echo "Error al conectarse a la API";

        } else {
            curl_close($ch);
            $pokemonData = json_decode($response, true);

            echo '<div class="pokemon">';
            echo '<h1>' . $pokemonData['name'] . '</h1>';
            echo '<img src="' . $pokemonData['sprites']['front_default'] . '" alt="' . $pokemonData['name'] . '" >';
            echo '<ul>';
            echo '<li><strong>Nombre:</strong> ' . $pokemonData['name'] . '</li>';
            echo '<li><strong>Altura:</strong> ' . $pokemonData['height'] . '</li>';
            echo '<li><strong>Ancho:</strong> ' . $pokemonData['weight'] . '</li>';
            echo '<li><strong>Habilidades:</strong> ';
            echo '<ul>';
            foreach ($pokemonData['abilities'] as $ability) {
                echo '<li>' . $ability['ability']['name'] . '</li>';
            }
            echo '</ul>';
            echo '</li>';
            echo '</ul>';
            echo '</div>'; // Cerrar el div de pokemon
        }
        ?>
          <?php
        // inicializa una nueva sesion de la curl
        $ch = curl_init();
        $url = 'https://pokeapi.co/api/v2/pokemon/mew';
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);

        if (curl_errno($ch)){
            $error_msg = curl_error($ch);
            echo "Error al conectarse a la API";

        } else {
            curl_close($ch);
            $pokemonData = json_decode($response, true);

            echo '<div class="pokemon">';
            echo '<h1>' . $pokemonData['name'] . '</h1>';
            echo '<img src="' . $pokemonData['sprites']['front_default'] . '" alt="' . $pokemonData['name'] . '" >';
            echo '<ul>';
            echo '<li><strong>Nombre:</strong> ' . $pokemonData['name'] . '</li>';
            echo '<li><strong>Altura:</strong> ' . $pokemonData['height'] . '</li>';
            echo '<li><strong>Ancho:</strong> ' . $pokemonData['weight'] . '</li>';
            echo '<li><strong>Habilidades:</strong> ';
            echo '<ul>';
            foreach ($pokemonData['abilities'] as $ability) {
                echo '<li>' . $ability['ability']['name'] . '</li>';
            }
            echo '</ul>';
            echo '</li>';
            echo '</ul>';
            echo '</div>'; // Cerrar el div de pokemon
        }
        ?>
          <?php
        // inicializa una nueva sesion de la curl
        $ch = curl_init();
        $url = 'https://pokeapi.co/api/v2/pokemon/ditto';
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);

        if (curl_errno($ch)){
            $error_msg = curl_error($ch);
            echo "Error al conectarse a la API";

        } else {
            curl_close($ch);
            $pokemonData = json_decode($response, true);

            echo '<div class="pokemon">';
            echo '<h1>' . $pokemonData['name'] . '</h1>';
            echo '<img src="' . $pokemonData['sprites']['front_default'] . '" alt="' . $pokemonData['name'] . '" >';
            echo '<ul>';
            echo '<li><strong>Nombre:</strong> ' . $pokemonData['name'] . '</li>';
            echo '<li><strong>Altura:</strong> ' . $pokemonData['height'] . '</li>';
            echo '<li><strong>Ancho:</strong> ' . $pokemonData['weight'] . '</li>';
            echo '<li><strong>Habilidades:</strong> ';
            echo '<ul>';
            foreach ($pokemonData['abilities'] as $ability) {
                echo '<li>' . $ability['ability']['name'] . '</li>';
            }
            echo '</ul>';
            echo '</li>';
            echo '</ul>';
            echo '</div>'; // Cerrar el div de pokemon
        }
        ?>  <?php
        // inicializa una nueva sesion de la curl
        $ch = curl_init();
        $url = 'https://pokeapi.co/api/v2/pokemon/pichu';
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);

        if (curl_errno($ch)){
            $error_msg = curl_error($ch);
            echo "Error al conectarse a la API";

        } else {
            curl_close($ch);
            $pokemonData = json_decode($response, true);

            echo '<div class="pokemon">';
            echo '<h1>' . $pokemonData['name'] . '</h1>';
            echo '<img src="' . $pokemonData['sprites']['front_default'] . '" alt="' . $pokemonData['name'] . '" >';
            echo '<ul>';
            echo '<li><strong>Nombre:</strong> ' . $pokemonData['name'] . '</li>';
            echo '<li><strong>Altura:</strong> ' . $pokemonData['height'] . '</li>';
            echo '<li><strong>Ancho:</strong> ' . $pokemonData['weight'] . '</li>';
            echo '<li><strong>Habilidades:</strong> ';
            echo '<ul>';
            foreach ($pokemonData['abilities'] as $ability) {
                echo '<li>' . $ability['ability']['name'] . '</li>';
            }
            echo '</ul>';
            echo '</li>';
            echo '</ul>';
            echo '</div>'; // Cerrar el div de pokemon
        }
        ?>
          <?php
        // inicializa una nueva sesion de la curl
        $ch = curl_init();
        $url = 'https://pokeapi.co/api/v2/pokemon/snorlax';
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);

        if (curl_errno($ch)){
            $error_msg = curl_error($ch);
            echo "Error al conectarse a la API";

        } else {
            curl_close($ch);
            $pokemonData = json_decode($response, true);

            echo '<div class="pokemon">';
            echo '<h1>' . $pokemonData['name'] . '</h1>';
            echo '<img src="' . $pokemonData['sprites']['front_default'] . '" alt="' . $pokemonData['name'] . '" >';
            echo '<ul>';
            echo '<li><strong>Nombre:</strong> ' . $pokemonData['name'] . '</li>';
            echo '<li><strong>Altura:</strong> ' . $pokemonData['height'] . '</li>';
            echo '<li><strong>Ancho:</strong> ' . $pokemonData['weight'] . '</li>';
            echo '<li><strong>Habilidades:</strong> ';
            echo '<ul>';
            foreach ($pokemonData['abilities'] as $ability) {
                echo '<li>' . $ability['ability']['name'] . '</li>';
            }
            echo '</ul>';
            echo '</li>';
            echo '</ul>';
            echo '</div>'; // Cerrar el div de pokemon
        }
        ?>
          <?php
        // inicializa una nueva sesion de la curl
        $ch = curl_init();
        $url = 'https://pokeapi.co/api/v2/pokemon/squirtle';
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);

        if (curl_errno($ch)){
            $error_msg = curl_error($ch);
            echo "Error al conectarse a la API";

        } else {
            curl_close($ch);
            $pokemonData = json_decode($response, true);

            echo '<div class="pokemon">';
            echo '<h1>' . $pokemonData['name'] . '</h1>';
            echo '<img src="' . $pokemonData['sprites']['front_default'] . '" alt="' . $pokemonData['name'] . '" >';
            echo '<ul>';
            echo '<li><strong>Nombre:</strong> ' . $pokemonData['name'] . '</li>';
            echo '<li><strong>Altura:</strong> ' . $pokemonData['height'] . '</li>';
            echo '<li><strong>Ancho:</strong> ' . $pokemonData['weight'] . '</li>';
            echo '<li><strong>Habilidades:</strong> ';
            echo '<ul>';
            foreach ($pokemonData['abilities'] as $ability) {
                echo '<li>' . $ability['ability']['name'] . '</li>';
            }
            echo '</ul>';
            echo '</li>';
            echo '</ul>';
            echo '</div>'; // Cerrar el div de pokemon
        }
        
        ?>
         <?php
        // inicializa una nueva sesion de la curl
        $ch = curl_init();
        $url = 'https://pokeapi.co/api/v2/pokemon/charmander';
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);

        if (curl_errno($ch)){
            $error_msg = curl_error($ch);
            echo "Error al conectarse a la API";

        } else {
            curl_close($ch);
            $pokemonData = json_decode($response, true);

            echo '<div class="pokemon">';
            echo '<h1>' . $pokemonData['name'] . '</h1>';
            echo '<img src="' . $pokemonData['sprites']['front_default'] . '" alt="' . $pokemonData['name'] . '" >';
            echo '<ul>';
            echo '<li><strong>Nombre:</strong> ' . $pokemonData['name'] . '</li>';
            echo '<li><strong>Altura:</strong> ' . $pokemonData['height'] . '</li>';
            echo '<li><strong>Ancho:</strong> ' . $pokemonData['weight'] . '</li>';
            echo '<li><strong>Habilidades:</strong> ';
            echo '<ul>';
            foreach ($pokemonData['abilities'] as $ability) {
                echo '<li>' . $ability['ability']['name'] . '</li>';
            }
            echo '</ul>';
            echo '</li>';
            echo '</ul>';
            echo '</div>'; // Cerrar el div de pokemon
        }
        
        ?> <?php
        // inicializa una nueva sesion de la curl
        $ch = curl_init();
        $url = 'https://pokeapi.co/api/v2/pokemon/spearow';
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);

        if (curl_errno($ch)){
            $error_msg = curl_error($ch);
            echo "Error al conectarse a la API";

        } else {
            curl_close($ch);
            $pokemonData = json_decode($response, true);

            echo '<div class="pokemon">';
            echo '<h1>' . $pokemonData['name'] . '</h1>';
            echo '<img src="' . $pokemonData['sprites']['front_default'] . '" alt="' . $pokemonData['name'] . '" >';
            echo '<ul>';
            echo '<li><strong>Nombre:</strong> ' . $pokemonData['name'] . '</li>';
            echo '<li><strong>Altura:</strong> ' . $pokemonData['height'] . '</li>';
            echo '<li><strong>Ancho:</strong> ' . $pokemonData['weight'] . '</li>';
            echo '<li><strong>Habilidades:</strong> ';
            echo '<ul>';
            foreach ($pokemonData['abilities'] as $ability) {
                echo '<li>' . $ability['ability']['name'] . '</li>';
            }
            echo '</ul>';
            echo '</li>';
            echo '</ul>';
            echo '</div>'; // Cerrar el div de pokemon
        }
        
        ?>
         <?php
        // inicializa una nueva sesion de la curl
        $ch = curl_init();
        $url = 'https://pokeapi.co/api/v2/pokemon/jigglypuff';
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);

        if (curl_errno($ch)){
            $error_msg = curl_error($ch);
            echo "Error al conectarse a la API";

        } else {
            curl_close($ch);
            $pokemonData = json_decode($response, true);

            echo '<div class="pokemon">';
            echo '<h1>' . $pokemonData['name'] . '</h1>';
            echo '<img src="' . $pokemonData['sprites']['front_default'] . '" alt="' . $pokemonData['name'] . '" >';
            echo '<ul>';
            echo '<li><strong>Nombre:</strong> ' . $pokemonData['name'] . '</li>';
            echo '<li><strong>Altura:</strong> ' . $pokemonData['height'] . '</li>';
            echo '<li><strong>Ancho:</strong> ' . $pokemonData['weight'] . '</li>';
            echo '<li><strong>Habilidades:</strong> ';
            echo '<ul>';
            foreach ($pokemonData['abilities'] as $ability) {
                echo '<li>' . $ability['ability']['name'] . '</li>';
            }
            echo '</ul>';
            echo '</li>';
            echo '</ul>';
            echo '</div>'; // Cerrar el div de pokemon
        }
        
        ?> <?php
        // inicializa una nueva sesion de la curl
        $ch = curl_init();
        $url = 'https://pokeapi.co/api/v2/pokemon/meowth';
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);

        if (curl_errno($ch)){
            $error_msg = curl_error($ch);
            echo "Error al conectarse a la API";

        } else {
            curl_close($ch);
            $pokemonData = json_decode($response, true);

            echo '<div class="pokemon">';
            echo '<h1>' . $pokemonData['name'] . '</h1>';
            echo '<img src="' . $pokemonData['sprites']['front_default'] . '" alt="' . $pokemonData['name'] . '" >';
            echo '<ul>';
            echo '<li><strong>Nombre:</strong> ' . $pokemonData['name'] . '</li>';
            echo '<li><strong>Altura:</strong> ' . $pokemonData['height'] . '</li>';
            echo '<li><strong>Ancho:</strong> ' . $pokemonData['weight'] . '</li>';
            echo '<li><strong>Habilidades:</strong> ';
            echo '<ul>';
            foreach ($pokemonData['abilities'] as $ability) {
                echo '<li>' . $ability['ability']['name'] . '</li>';
            }
            echo '</ul>';
            echo '</li>';
            echo '</ul>';
            echo '</div>'; // Cerrar el div de pokemon
        }
        
        ?> <?php
        // inicializa una nueva sesion de la curl
        $ch = curl_init();
        $url = 'https://pokeapi.co/api/v2/pokemon/chimchar';
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);

        if (curl_errno($ch)){
            $error_msg = curl_error($ch);
            echo "Error al conectarse a la API";

        } else {
            curl_close($ch);
            $pokemonData = json_decode($response, true);

            echo '<div class="pokemon">';
            echo '<h1>' . $pokemonData['name'] . '</h1>';
            echo '<img src="' . $pokemonData['sprites']['front_default'] . '" alt="' . $pokemonData['name'] . '" >';
            echo '<ul>';
            echo '<li><strong>Nombre:</strong> ' . $pokemonData['name'] . '</li>';
            echo '<li><strong>Altura:</strong> ' . $pokemonData['height'] . '</li>';
            echo '<li><strong>Ancho:</strong> ' . $pokemonData['weight'] . '</li>';
            echo '<li><strong>Habilidades:</strong> ';
            echo '<ul>';
            foreach ($pokemonData['abilities'] as $ability) {
                echo '<li>' . $ability['ability']['name'] . '</li>';
            }
            echo '</ul>';
            echo '</li>';
            echo '</ul>';
            echo '</div>'; // Cerrar el div de pokemon
        }
        
        ?> <?php
        // inicializa una nueva sesion de la curl
        $ch = curl_init();
        $url = 'https://pokeapi.co/api/v2/pokemon/psyduck';
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);

        if (curl_errno($ch)){
            $error_msg = curl_error($ch);
            echo "Error al conectarse a la API";

        } else {
            curl_close($ch);
            $pokemonData = json_decode($response, true);

            echo '<div class="pokemon">';
            echo '<h1>' . $pokemonData['name'] . '</h1>';
            echo '<img src="' . $pokemonData['sprites']['front_default'] . '" alt="' . $pokemonData['name'] . '" >';
            echo '<ul>';
            echo '<li><strong>Nombre:</strong> ' . $pokemonData['name'] . '</li>';
            echo '<li><strong>Altura:</strong> ' . $pokemonData['height'] . '</li>';
            echo '<li><strong>Ancho:</strong> ' . $pokemonData['weight'] . '</li>';
            echo '<li><strong>Habilidades:</strong> ';
            echo '<ul>';
            foreach ($pokemonData['abilities'] as $ability) {
                echo '<li>' . $ability['ability']['name'] . '</li>';
            }
            echo '</ul>';
            echo '</li>';
            echo '</ul>';
            echo '</div>'; // Cerrar el div de pokemon
        }
        
        ?> <?php
        // inicializa una nueva sesion de la curl
        $ch = curl_init();
        $url = 'https://pokeapi.co/api/v2/pokemon/kadabra';
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);

        if (curl_errno($ch)){
            $error_msg = curl_error($ch);
            echo "Error al conectarse a la API";

        } else {
            curl_close($ch);
            $pokemonData = json_decode($response, true);

            echo '<div class="pokemon">';
            echo '<h1>' . $pokemonData['name'] . '</h1>';
            echo '<img src="' . $pokemonData['sprites']['front_default'] . '" alt="' . $pokemonData['name'] . '" >';
            echo '<ul>';
            echo '<li><strong>Nombre:</strong> ' . $pokemonData['name'] . '</li>';
            echo '<li><strong>Altura:</strong> ' . $pokemonData['height'] . '</li>';
            echo '<li><strong>Ancho:</strong> ' . $pokemonData['weight'] . '</li>';
            echo '<li><strong>Habilidades:</strong> ';
            echo '<ul>';
            foreach ($pokemonData['abilities'] as $ability) {
                echo '<li>' . $ability['ability']['name'] . '</li>';
            }
            echo '</ul>';
            echo '</li>';
            echo '</ul>';
            echo '</div>'; // Cerrar el div de pokemon
        }
        
        ?>
         <?php
        // inicializa una nueva sesion de la curl
        $ch = curl_init();
        $url = 'https://pokeapi.co/api/v2/pokemon/onix';
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);

        if (curl_errno($ch)){
            $error_msg = curl_error($ch);
            echo "Error al conectarse a la API";

        } else {
            curl_close($ch);
            $pokemonData = json_decode($response, true);

            echo '<div class="pokemon">';
            echo '<h1>' . $pokemonData['name'] . '</h1>';
            echo '<img src="' . $pokemonData['sprites']['front_default'] . '" alt="' . $pokemonData['name'] . '" >';
            echo '<ul>';
            echo '<li><strong>Nombre:</strong> ' . $pokemonData['name'] . '</li>';
            echo '<li><strong>Altura:</strong> ' . $pokemonData['height'] . '</li>';
            echo '<li><strong>Ancho:</strong> ' . $pokemonData['weight'] . '</li>';
            echo '<li><strong>Habilidades:</strong> ';
            echo '<ul>';
            foreach ($pokemonData['abilities'] as $ability) {
                echo '<li>' . $ability['ability']['name'] . '</li>';
            }
            echo '</ul>';
            echo '</li>';
            echo '</ul>';
            echo '</div>'; // Cerrar el div de pokemon
        }
        
        ?>
        
    </div>
    
</body>
</html>
