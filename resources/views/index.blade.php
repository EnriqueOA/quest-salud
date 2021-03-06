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
                        <h3 class="title has-text-black">CUESTIONARIO DE SALUD DE EMPLEADOS</h3>
                        <hr class="login-hr">
                        <div class="box">
                            @if ($errors->any())
                            <div class="notification is-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                            <form method="post" action={{ route("cuestionario.guardar") }} enctype="multipart/form-data">
                                @csrf
                                <div class="has-text-centered">
                                    <div class="field">
                                        <p>Ingresa tu nombre completo</p>
                                        <div class="control">
                                            <input class="input" type="text" name="nombres" placeholder="Nombre" autofocus="">
                                        </div>
                                    </div>
                                    <div class="field">
                                        <p>Ingresa tus apellidos</p>
                                        <div class="control">
                                            <input class="input" type="text" name="apellidos" placeholder="Apellidos" autofocus="">
                                        </div>
                                    </div>
                                    <div class="field">
                                        <p>Ingresa tu correo de la empresa</p>
                                        <div class="control">
                                            <input class="input" type="email" name="correo" placeholder="Correo @tec.mx" autofocus="">
                                        </div>
                                    </div>
                                    <div class="field">
                                        <p>Fecha de nacimiento</p>
                                        <div class="control">
                                            <input type="date" id="start" name="fechanac" value="2018-07-22" min="1910-01-01" max="2002-12-31">
                                        </div>
                                    </div>
                                    <div class="field">
                                        <p>Edad</p>
                                        <div class="control">
                                            <input class="input" type="number" name="edad" placeholder="edad" autofocus="">
                                        </div>
                                        <br>
                                    </div>
                                </div>
                                <h3 class="subtitle has-text-black">Las siguientes preguntas se basan en los riesgos laborales. Por favor, elija las opciones de respuesta m??s apropiadas. </h3>
                                <div class="field">
                                    <b><p>1- Con qu?? frecuencia empuja o levanta manualmente art??culos que pesen m??s de 20 kg?</p></b>
                                    <div class="control">
                                          <br>
                                          <input type="radio" name="question1" value=1> <label for="nunca">Nunca</label>
                                          <input type="radio" name="question1" value=2> <label for="unaano">Una vez al a??o</label>
                                          <input type="radio" name="question1" value=3> <label for="6meses">Cada 6 meses</label>
                                          <input type="radio" name="question1" value=4> <label for="3meses">Cada 3 meses</label>
                                          <input type="radio" name="question1" value=5> <label for="1mes">Cada mes</label>
                                          <input type="radio" name="question1" value=6> <label for="na">N/A</label>
                                          <br>
                                    </div>  
                                </div>
                                <div class="field">
                                    <b><p>2- Con qu?? frecuencia hace movimientos repetitivos con las manos durante al menos 3 horas durante el d??a.</p></b>
                                    <div class="control">
                                        <br>
                                          <input type="radio" name="question2" value=1> <label for="nunca">Nunca</label>
                                          <input type="radio" name="question2" value=2> <label for="unaano">Una vez al a??o</label>
                                          <input type="radio" name="question2" value=3> <label for="6meses">Cada 6 meses</label>
                                          <input type="radio" name="question2" value=4> <label for="3meses">Cada 3 meses</label>
                                          <input type="radio" name="question2" value=5> <label for="1mes">Cada mes</label>
                                          <input type="radio" name="question2" value=6> <label for="na">N/A</label><br>
                                    </div>  
                                </div>
                                <div class="field">
                                    <b><p>3- Con qu?? frecuencia realiza tareas con las que no est?? familiarizado</p></b>
                                    <div class="control">
                                        <br>
                                          <input type="radio" name="question3" value=1> <label for="nunca">Nunca</label>
                                          <input type="radio" name="question3" value=2> <label for="unaano">Una vez al a??o</label>
                                          <input type="radio" name="question3" value=3> <label for="6meses">Cada 6 meses</label>
                                          <input type="radio" name="question3" value=4> <label for="3meses">Cada 3 meses</label>
                                          <input type="radio" name="question3" value=5> <label for="1mes">Cada mes</label>
                                          <input type="radio" name="question3" value=6> <label for="na">N/A</label>
                                        <br>
                                    </div>  
                                </div>
                                <div class="field">
                                    <b><p>4- Con qu?? frecuencia interactua con productos qu??micos o sustancias inflamables.</p></b>
                                    <div class="control">
                                        <br>
                                          <input type="radio" name="question4" value=1> <label for="nunca">Nunca</label>
                                          <input type="radio" name="question4" value=2> <label for="unaano">Una vez al a??o</label>
                                          <input type="radio" name="question4" value=3> <label for="6meses">Cada 6 meses</label>
                                          <input type="radio" name="question4" value=4> <label for="3meses">Cada 3 meses</label>
                                          <input type="radio" name="question4" value=5> <label for="1mes">Cada mes</label>
                                          <input type="radio" name="question4" value=6> <label for="na">N/A</label>
                                        <br>
                                    </div>  
                                </div>
                                <div class="field">
                                    <b><p>5- Con qu?? frecuencia trabaja en posiciones inc??modas (doblar, torcer, trabajo manual pesado)</p></b>
                                    <div class="control">
                                        <br>
                                          <input type="radio" name="question5" value=1> <label for="nunca">Nunca</label>
                                          <input type="radio" name="question5" value=2> <label for="unaano">Una vez al a??o</label>
                                          <input type="radio" name="question5" value=3> <label for="6meses">Cada 6 meses</label>
                                          <input type="radio" name="question5" value=4> <label for="3meses">Cada 3 meses</label>
                                          <input type="radio" name="question5" value=5> <label for="1mes">Cada mes</label>
                                          <input type="radio" name="question5" value=6> <label for="na">N/A</label>
                                        <br>
                                    </div>  
                                </div>
                                <div class="field">
                                    <b><p>6- Con qu?? trabaja a una altura de m??s de 5 metros.</p></b>
                                    <div class="control">
                                        <br>
                                          <input type="radio" name="question6" value=1> <label for="nunca">Nunca</label>
                                          <input type="radio" name="question6" value=2> <label for="unaano">Una vez al a??o</label>
                                          <input type="radio" name="question6" value=3> <label for="6meses">Cada 6 meses</label>
                                          <input type="radio" name="question6" value=4> <label for="3meses">Cada 3 meses</label>
                                          <input type="radio" name="question6" value=5> <label for="1mes">Cada mes</label>
                                          <input type="radio" name="question6" value=6> <label for="na">N/A</label>
                                        <br>
                                    </div>  
                                </div>
                                <div class="field">
                                    <b><p>7- Con qu?? trabaja trabaja en altos niveles de decibelios</p></b>
                                    <div class="control">
                                        <br>
                                          <input type="radio" name="question7" value=1> <label for="nunca">Nunca</label>
                                          <input type="radio" name="question7" value=2> <label for="unaano">Una vez al a??o</label>
                                          <input type="radio" name="question7" value=3> <label for="6meses">Cada 6 meses</label>
                                          <input type="radio" name="question7" value=4> <label for="3meses">Cada 3 meses</label>
                                          <input type="radio" name="question7" value=5> <label for="1mes">Cada mes</label>
                                          <input type="radio" name="question7" value=6> <label for="na">N/A</label>
                                        <br>
                                    </div>  
                                </div>
                                <div class="field">
                                    <b><p>8- Con qu?? se queda de pie por m??s de 3 horas al d??a.</p></b>
                                    <div class="control">
                                        <br>
                                          <input type="radio" name="question8" value=1> <label for="nunca">Nunca</label>
                                          <input type="radio" name="question8" value=2> <label for="unaano">Una vez al a??o</label>
                                          <input type="radio" name="question8" value=3> <label for="6meses">Cada 6 meses</label>
                                          <input type="radio" name="question8" value=4> <label for="3meses">Cada 3 meses</label>
                                          <input type="radio" name="question8" value=5> <label for="1mes">Cada mes</label>
                                          <input type="radio" name="question8" value=6> <label for="na">N/A</label>
                                        <br>
                                    </div>  
                                </div>
                                <button class="button is-block is-info is-large is-fullwidth">Enviar<i class="fa fa-sign-in" aria-hidden="true"></i></button>
                            </form>
                        </div>
                        <div class="has-text-grey has-text-centered"> Hecho por &nbsp;??&nbsp;Enrique &nbsp;??&nbsp;ITC</div>
                    </div>
                </div>
            </div>
        </section>
        <script async type="text/javascript" src="../js/bulma.js"></script>
    </body>
</html>
