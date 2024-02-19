<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## Proyecto de migraciones en laravel

>[!TIP]
> Para ejecutar este proyecto sigue los siguientes pasos:
> 1. Inicia tu servidor Apache
> 2. Inicia tu servidor MySQL
> 3. Abre el proyecto en el editor de código de tu preferencia
> 4. Abre una terminal en el proyecto y ejecuta el comando ``php artisan serve``, esto inciará el servidor de laravel
> 5. Ejecuta el comando ``npm install``, esto instalará las dependencias de node.js del proyecto, verás que se crea una carpeta llamada **node_modules**, allí se encuentran las dependencias.
> 6.  Crea una base de datos en MySQL
> 7. Agrega la información de tu base de datos en el archivo .env (esto deberás crearlo por tu cuenta, simplemente cambia el nombre del archivo ``.env.example`` a ``.env``)
> 8. Ejecuta el comando ``php artisan migrate``, esto creará las tablas en la base de datos a partir de los archivos de migración
>
>Listo ahora podrás ver en tu base de datos tablas como:
> * users
> * productos
> * proveedores
> * clientes