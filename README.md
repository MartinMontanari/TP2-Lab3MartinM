<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

--------------------------------------------------------------------------------------------------


# Instrucciones de Instalación

Este documento describe los pasos necesarios para configurar el entorno de desarrollo en la PC local bajo sistemas operativos Linux utilizando Docker.

### Pre instalación del Proyecto.

* Tener instalado Git.
* Tener instalado Composer.
* Tener instalado php-client php-mbstring.

### Clonar Repositorio de GitHub.

### Realizar la instalación de composer en el proyecto.
```
https://getcomposer.org/download/
```
```
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('SHA384', 'composer-setup.php') === '544e09ee996cdf60ece3804abc52599c22b1f40f4323403c44d44fdfdd586475ca9813a858088ffbc1f233e9b180f061') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"
```
PD: Tener en cuenta que el hash de arriba siempre se actualiza por lo que es mejor entrar a la página de composer. ===> ENTRAR A COMPOSER .org y ejecutar script de descarga composer.phar

#### Copiamos el `composer.phar` de instalación que nos proveen los comandos anteriores en la carpeta raíz del proyecto (`docku/`)

### Instalación de los contenedores de Docker.
* Primeramente tener `docker` y `docker-compose` instalados (utilizar las guías de Digital Ocean estan bien documentadas).

1. Entrar a la carpeta de docker del proyecto. (`TP2-Lab3MartinM/docker`)

2. Realizar un `docker-compose pull`

3. Realizar un `docker-compose up` (Al realizar este comando en un momento queda clavado el proceso porque ya termino, debemos cancelarlo al proceso con `Ctrl + C`)

4. Encender los contenedores con `docker-compose start`

5. Listo ya se encuentra levantado el servidor y la base de datos (MySQL).

### Asignación de los permisos de Laravel.
Es necesario para la correcta visualización y funcionamiento del proyecto que se asignen los siguientes permisos en la carpeta raíz del proyecto (`docker/`):

```
    sudo chown -R 1000:33 storage/
    sudo chmod -R g+w storage/
    sudo chown -R 1000:33 bootstrap/cache
    sudo chmod -R g+w bootstrap/cache
```

PD: Puede suceder que en momentos al crearse archivos de Logs nuevos tengamos que reasignar los permisos al storage/ (ver como solucionar esto, muchas veces al terminar la instalación del proyecto necesitamos asignar de nuevo estos permisos).
 
### Instalación de las dependencias.
1. Nos ubicamos en la carpeta de docker del proyecto (`docker`)

2. Acceder al Lord Commander (Ricky Fort) ejecutando `./webapp` (basicamente es nuestro bash de nginx `docker-compose run --user=1000 phpnginx bash`)

3. 
a)  Si es la primera vez que instlamos las dependencencias ejecutamos `php composer.phar require ocramius/proxy-manager
` <br>
b)  Ejecutamos `./composer.phar install`

4. Esperar la instalación de dependencias de Laravel y compañía.

### Crear archivo de Enviroment
1. Crear un archivo ```.env```
2. Copiar lo que existe en el ```.env.example```
3. Este archivo contiene las credenciales de las cuentas de los servicios utilizados.
4. En la carpeta raíz del proyecto ejecutar el comando `cp .env.example .env`

### Ejecución de las migraciones (Laravel)
0. Primeramente actualizar el archivo `cp .env.example .env` con los datos correspondientes de la BD:

```
DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=producto
DB_USERNAME=test
DB_PASSWORD=test
```

1. Entramos al `bash nginx` del Lord Commander ubicados en `lacade/docalacade` ejecutar: `./webapp`.

2. Ejecutamos dentro del bash `php artisan migrate`

3. Una vez terminada la ejecución ya tendremos las tablas correspondientes en nuestra base de datos `producto`.

4. Ejecutar para tener el `.env` completo y correcto `php artisan key:generate`.

5. Listo ya podemos salir del comandante.

### Ultimos pasos.
1. Ya podemos entrar al sitio `localhost`

2. Deberíamos visualizar correctamente el sitio de bienvenida (O algun Health Check en el caso de ser API).




 framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
