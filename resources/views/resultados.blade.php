<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Questrial&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://unpkg.com/bulma@0.9.0/css/bulma.min.css" />
        <link rel="stylesheet" type="text/css" href="../css/login.css">
    </head>
    <body>
        <section class="hero is-success is-fullheight">
            <div class="hero-body">
                <div class="container ">
                    <div>
                        <h3 class="title has-text-black">RESULTADOS DEL CUESTIONARIO DE SALUD DE EMPLEADOS</h3>
                        <hr class="login-hr">
                        <div class="box">
                                <table class="table">
                                  <thead>
                                        <tr>
                                              <th>Pregunta</th>
                                              <th>Nunca</th>
                                              <th>Una vez al año</th>
                                              <th>Cada 6 meses</th>
                                              <th>Cada 3 meses</th>
                                              <th>Cada mes</th>
                                              <th>N/A</th>
                                        </tr>
                                  </thead>
                                  <tbody>
                                        <tr>
                                              <th> 1- Con qué frecuencia empuja o levanta manualmente artículos que pesen más de 20 kg?</th>
                                                @foreach($results[0] as $val)
                                                  <td>{{ $val }}</td>
                                                @endforeach
                                        </tr>
                                        <tr>
                                              <th> 2- Con qué frecuencia hace movimientos repetitivos con las manos durante al menos 3 horas durante el día.</th>
                                                @foreach($results[1] as $val)
                                                  <td>{{ $val }}</td>
                                                @endforeach
                                        <tr>
                                              <th> 3- Con qué frecuencia realiza tareas con las que no está familiarizado</th>
                                                @foreach($results[2] as $val)
                                                  <td>{{ $val }}</td>
                                                @endforeach
                                        <tr>
                                              <th> 4- Con qué frecuencia interactua con productos químicos o sustancias inflamables</th>
                                                @foreach($results[3] as $val)
                                                  <td>{{ $val }}</td>
                                                @endforeach
                                        <tr>
                                              <th> 5- Con qué frecuencia trabaja en posiciones incómodas (doblar, torcer, trabajo manual pesado)</th>
                                                @foreach($results[4] as $val)
                                                  <td>{{ $val }}</td>
                                                @endforeach
                                        <tr>
                                              <th> 6- Con qué trabaja a una altura de más de 5 metros</th>
                                                @foreach($results[5] as $val)
                                                  <td>{{ $val }}</td>
                                                @endforeach
                                        <tr>
                                              <th> 7- Con qué trabaja trabaja en altos niveles de decibelios</th>
                                                @foreach($results[6] as $val)
                                                  <td>{{ $val }}</td>
                                                @endforeach
                                        <tr>
                                              <th> 8- Con qué se queda de pie por más de 3 horas al día</th>
                                                @foreach($results[7] as $val)
                                                  <td>{{ $val }}</td>
                                                @endforeach
                                  </tbody>
                                </table>
                                <a class="button is-block is-info is-large is-fullwidth" href="{{ route('cuestionario.index') }}">Volver a contestar <i class="fa fa-undo" aria-hidden="true"></i></a>
                            </div>
                        <div class="has-text-grey has-text-centered"> Hecho por &nbsp;·&nbsp;Enrique &nbsp;·&nbsp;ITC</div>
                    </div>
                </div>
            </div>
        </section>
        <script async type="text/javascript" src="../js/bulma.js"></script>
    </body>
</html>
