<p align="center">
  <img src="https://laika.com.co/assets/LAIKA.png" />
</p>

## Maquetación Laika Mascotas

Se realizó la prueba técnica **FrontEnd** enviada por **LAIKA MASCOTAS ** vía correo eléctronico donde se indicaba lo siguiente:

1. Deberá ser capaz de maquetar una página web con los screen que están al final del documento.

2. En la imagen dos se muestran unas cartas con productos, esta se debe llenar con información consumida desde un servicio que usted escriba en laravel, no tiene que hacerlo con base de datos, los datos pueden estar quemados en su controlador (Acá lo importante es que podamos ver la interacción con una api).

3. Esta página debe ser “responsive” desde dispositivos con medidas de (1024 x 1366).

Para la prueba se hizo uso de Laravel  <span style="color:#3e82f7;">**7.30.4**</span>, <span style="color:#3e82f7">**SASS**</span> y un poco de <span style="color:#3e82f7"> **Bootstrap**</span>

## Instalación del proyecto

Descargar el proyecto e instalar los paquetes de laravel con composer usando la linea de comando:

`composer install`

Para los productos se creo inicialmente un controlador y la migracion, luego de definir los campos en la migración se creo un factory para poder generar datos aleatorios. Primero creamos la base de datos en <span style="color:#3e82f7">**Mysql**</span> y luego desde <span style="color:#3e82f7">**TInker**</span> accediendo con `php artisan tinker` con el comando `$productos = factory(App\Productos::class, 10)->create();` creamos 10 datos fake los cuales son mostrados en la pantalla principal en la sección de productos.

Posteriormente desde la migracion se generaron tres productos con datos sacados de la página de [Laika](http:/https://laika.com.co/city/bog/cat/ "Laika") con los campos de nombre de producto, imagen, precio, precio de miembro, estrellas (calificación), marca, descripción, caracteristicas, beneficios, stock y referencia. Estos campos se usan tanto en la pagina principal con las tarjetas de los productos como en una pagina dinamica enfocada al producto en la cual se basa totalmente de la página de **LAIKA** para hacer uso de todos los datos. para esto solo ejecutamos el comando: 

`php artisan migrate	`

