------<<<<<<< Posting v0.1 vanilla (LARAVEL) >>>>>>>--------


-------------------Esta es la primer subida de    Posting  Laravel.    ----------------

-Notar que ya estan hechas las rutas basicas de get para welcome, home, ubercommand, profile
y sus respectivas blades.

-Tambien esta incuida la ruta básica para apis con un test y el controlador en su respectiva carpeta
para apis de forma separada.

-Notar que en las vistas cree una sub carpeta llamada layouts en la cual hay un archivo master.blade del cual
otras vistas podrán extender y app.blade que se creo con el auth de signUp y signIn.

 Tambien esta creada la carpeta de Includes para las vistas, dentro un header.blade básico.


-------------- SI TIENEN PROBLEMAS PARA ARRANCAR EL PHP ARTISAN SERVE -------------

1 Dentro de la carpeta Posting laravel abran la consola.
2 Pongan el comando composer install y esperen.
3 Pongan el comando cp .env.example .env
4 Pongan el comando php artisan key:generate , tiene que salir un mensaje de una linea verde.
5 Si ya hay base de datos pongan el comando php artisan migrate y esperen. Si no ya esta.
-----------------------------------------------------------------------------------
1 En el archivo .env en el campo APP_NAME:Laravel cambiarlo por APP_NAME:Posting ,guardar y reiniciar servidor.
