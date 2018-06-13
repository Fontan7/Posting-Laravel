<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  @section('title')
     Home
  @endsection


</head>

<body>
@section('content')
  <div class="container-fluid">

    <!--============ NAV ================-->


    <!--============ Body ===============-->
    <div class="faq">
      <section>
        <article>
          <h2 class="faqsTitle">Preguntas Frecuentes</h2>
          <hr>
          <br>
          <ul>
            <li>
              <h3 class="question">
                ¿Qué es Posting?
              </h3>
              <h4 class="answer">
                Es una herramienta que permite publicar posts en todas tus redes sociales desde una misma plataforma.
                Esta pensado para ayudar a mejorar la productividad de las personas que quieren tener una presencia activa en las redes sociales.
                En nuestra plataforma podes:
                <ul>
                  <li>Crear estados o postear.</li>
                  <li>Seguir el proceso de los posts.</li>
                  <li>Subir imagenes.</li>
                  <li>Subir videos.</li>
                </ul>
              </h4></li>
              <br>

              <li>
                <h3 class="question">
                  ¿Cuál es el beneficio de usar Posting?
                </h3>
                <h4 class="answer">
                  La ventaja de usar Posting es que podes ahorrar mucho tiempo a la hora de compartir tus posteos en las disitntas redes sociales, y ver en tiempo real el impacto, por ejemplo: likes, retweets, comentarios.
                  Con Posting podes escribir tus postedes, subir imagenes y videos en muy poco tiempo.
                </h4> </li>
                <br>

                <li>
                  <h3 class="question">
                    ¿Cómo usar Posting?
                  </h3>
                  <h4 class="answer">
                    Lo primero que tenes que hacer es registrar en Posting, una vez que lo hagas y verifiques tu emial podrás agregar las cuentas de cada red social en las que queres que se publique el contenido.
                    En el menú encontrarás "cuentas" y la imagen de cada red social.
                    Una vez, agregadas las redes sociales podrás comenzar a postear desde nuestra plataforma y el contenido aparecerá en todas las redes sociales que elegiste.
                  </h4></li>
                </br>

                <li>
                  <h3 class="question">
                    ¿Cómo agregar cuentas sociales a mi panel de control?
                  </h3>
                  <h4 class="answer">
                    Ir a: Cuentas > agregar cuenta > seleccionas la cuenta que queres > das los permisos y listo.
                  </h4></li>
                </br>

                <li>
                  <h3 class="question">
                    ¿Cómo elijo en que cuenta publicar cada posteo?
                  </h3>
                  <h4 class="answer">
                    Ir a: Publicar estado > Escribis el estado > Enviar > Seleccionas las cuentas en las que queres el posteo.
                  </h4></li>
                </br>

                <li>
                  <h3 class="question">
                    ¿Cómo eliminar cuentas sociales?
                  </h3>
                  <h4 class="answer">
                    Ir a: Cuentas > eliminar cuenta > Seleccionar cuentas a eliminar > Aceptar.
                  </h4></li>
                </br>

                <li>
                  <h3 class="question">
                    ¿Que redes sociales soporta la Posting?
                  </h3>
                  <h4 class="answer">
                    En la versión Beta: Facebook, Twitter e Instagram. Con el tiempo se agregaran mas redes sociales.
                  </h4></li>
                </br>

                <li>
                  <h3 class="question">
                    ¿Puedo re-publicar un post antiguo?
                  </h3>
                  <h4 class="answer">
                    En la versión Alpha no. Más adelante se evaluará.
                  </h4></li>
                </br>
              </ul>
            </article>
          </section>
        </div>
      </body>
        @endsection
        @include('partials/footer')
      </html>
