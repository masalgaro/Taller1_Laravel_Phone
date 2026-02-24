# SETUP.TXT (Pero en Markdown porque markdown da formatos y poner fragmentos de código y todo eso)

## ¿CÓMO EJECUTAR EL PROYECTO?

Para empezar. *sí* es necesario realizar migraciones. Esto para sincronizar la base de datos en el servidor de XAMPP, asumiendo que existe una base de datos/schema llamado 'Phone'.

Si no existe esta base de datos, se debe crear desde phpmyadmin. No es necesario crear ninguna tabla, solo asegurarse que exista una base de datos llamada Phone.

El archivo de migraciones, el modelo, la configuración en `.env`, y demás ya están hechos, así que es tan fácil como ejecutar el comando de siempre:

```bash
php artisan migrate
```

Con eso listo, solo es necesario ejecutar `php artisan serve` desde una terminal para iniciar la aplicación de Laravel.

## USO DEL PROYECTO

Cuando se ingrese al sitio web, el usuario será presentado una página de bienvenida, mostrando dos botones:

* El primero llevara a un formulario para crear una nueva entrada en la base de datos. Todos los campos son requeridos.
    - Como clarificación adicional, el último campo pide una **URL** para la imágen. Esto fue hecho por velocidad, permitiendo no solo usar imágenes que estén en la carpeta de public, sino también permitiendo usar otras imágenes de la web sin necesidad de descargarlas. La base de datos guarda la URL de la imágen como un string. Blade permite cargar de forma dinámica la imágen a la hora de mostrar los productos. Es 100% posible almacenar imágenes en laravel usando un <input type="file"> o <input type="image">.
* El segundo lleva a una galería, mostrando cada registro de la base de datos. Siempre se mostrará la imágen, el nombre, y la cantidad de telefónos. Desde aquí se puede acceder al detalle del telefóno para ver el resto de información, o eliminar un registro específico.

No debería ser necesario hacer ninguna otra actividad con terminal o con los archivos del proyecto mismo, todo funciona perfectamente desde el sitio web.

## CRÉDITOS

* El único ejemplar que tenían de Practical Laravel en la biblioteca de la universidad.
* W3Schools.
* La documentación de Laravel.
* Las clases de Tópicos de Ingenieria de Software/Arquitectura de Software.
* Stackoverflow

## USO DE IA 

**No.** O al menos no intencional, no puedo asegurar que ninguna de las fuentes consultadas anteriormente haya usado o no IA en algo.

Aparte de ser parte del pacto en clase (la IA no sabe de las convenciones de código limpio que manejamos y demás), la idea a fin de cuentas es aprender, no preguntarle al robot que gasta un galón de agua para alucinar después de 2 prompts.

