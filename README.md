# APIREST con Laravel 8.12 😉

CRUD para Usuarios que permitiran conectarse al api del studio Ghibli.

## Comenzando 💪🚀

Estas instrucciones son las necesarias para desplegar el proyecto de forma local.

### Instalación 🔧

Paso a paso de lo que debes ejecutar para tener el proyecto ejecutandose

 1. Primero que nada, clic en Fork 😊
 2. Inicia el git dentro de tu servidor:
    ```
    git init
    ```
 3. Luego, clona el repositorio dentro de la carpeta de tu servidor con el siguiente comando:
    ```
    git clone https://github.com/FelipeLazaro/ApiGhibli
    ```
 4. Ingresa a la carpeta del repositorio
    ```
    cd ApiGhibli
    ```
 5. Instala las dependencias del proyecto
    ```
    composer install
    ```
 5. Crea el archivo ".env" y cambiar valores de su Base de datos.
 6. Ejecute las migraciones
    ```
    php artisan migrate
    ```
 7. Inicialice el servidor local
    ```
    php artisan serve
    ```
 8. Listo, ya podrá visualizr e interactuar con el proyecto en local  😁

## Rutas para probar el API
Para probar estas rutas se recomienda el uso de Postman o Insomnia, la ruta de los usuarios es:
```
    http://127.0.0.1:8000/api/users
```
Para probar el consumo del api del Studio Ghibli:
```
http://127.0.0.1:8000/api/ghibli/id_user
```

## Construido con 🛠️

Las herramientas que utilice para crear este proyecto

* Framework de PHP [Laravel](https://laravel.com/docs/8.x).

## Autores ✒️

* **Felipe Lazaro** - GitHub: [FelipeLazaro](https://github.com/FelipeLazaro)

## Licencia 📄

Este proyecto está bajo la Licencia (GNU General Public License v3.0) - mira el archivo [LICENSE.md](https://github.com/susananzth/3-laravel-crud/blob/main/LICENSE) para detalles

