# Gestion de expedientes
El proyecto funciona con php y laravel

## Requisitos

__PHP__ 8.2 o posterior <br>
__Node.js__ 18.8.0 o posterior <br>
__Postgresql__ 
## Instalacion
### Dependencias
Para instalar las dependencias del proyecto es necesario ejecutar el siguiente comando en la consola con php instalado y en la carpeta del proyecto
```
composer install
```
Seguida del comando de node js para instalar las dependencias faltantes
```
npm install
```
### Base de datos
Es necesario crear una base de datos en postgresql antes de empezar la configuracion del proyecto. El nombre es importante tenerlo a la mano antes de empezar la configuracion para mas comodidad

## Configuracion
Copiar el archivo .env.example y renombrarlo a .env, en ese archivo hay una seccion que nos interesa para el funcionamiento
Este es un ejemplo

```
DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=gestionexpedientes
DB_USERNAME=root
DB_PASSWORD=
```
Aqui se cambian la configuracion de la conexion a la base de datos, puedes cambiarlo sin problemas en base a la base de datos que hayas creado con anterioridad.
Despues de esto ejecutar el comando
```
Php artisan key:generate
```
### Ejecutar las migraciones
Para ejecutar las migraciones junto con los seeders basta con el comando
```
php artisan migrate --seed
```
### Ultimo paso compilar los assets
Ejecutar el comando
```
npm run build
```
Con esto ya puedes abrir el proyecto

## Usuarios de los seeders
Administrador:  <br>
Usuario: <br>
*admin@admin.com*  <br>
Contraseña:  <br>
*admin*  <br>

Usuario:  <br>
*user@user.com*  <br>
Contraseña:  <br>
*user*  <br>


