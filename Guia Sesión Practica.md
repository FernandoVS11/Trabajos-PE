# COMANDOS BASICOS DE MYSQL

Mysql es un lenguaje de administracion de sistemas de bases de datos relacionales (Relational Database Mangement System). Durante esta sesion practica nos daremos la tarea de enseñar a realizar el CRUD (Create Read Update and Delete) en una base de datos con MySQL.

## Instalacion en VSCode

En primer lugar tendremos que descargar una extencion en VSCode. Para instalarlo tendremos que ir a la ventana de extensiones en Visual Studio y buscaremos la extension llamada "MySQL", esa tendremos que descargar.
<img width="1366" alt="Extension para VSCode de MySQL hecha por Jun Han" src="https://user-images.githubusercontent.com/89323622/169140761-4ae2378f-4b65-4f15-a6f7-818df724bf8c.png">

## Configurar la extension
Antes de empezar tenemos que conectarnos a un servidor, para ello tendremos que irnos a las pestaña de "Explorer ".
<img width="329" alt="Screen Shot 2022-05-18 at 14 37 35" src="https://user-images.githubusercontent.com/89323622/169142077-2982ba20-bbd5-4cb2-80c3-69fd8d285964.png">
 
 Y darle click donde dice "MySQL", Posterior habrá que dar click a la cruz 
 <img width="265" alt="Screen Shot 2022-05-18 at 14 39 49" src="https://user-images.githubusercontent.com/89323622/169142452-9e1e931e-c5ca-4bf8-a8c4-f832b882a806.png">

Y a partir de aqui tendremos que ingresar los datos que se le han provisto por medio del chat de Teams.
## Descarga Xampp
- XAMPP para Windows
Debes ir a esta página https://www.apachefriends.org/es/index.html y descargarlo para windows.
Al momento de instalarlo deberás marcar estas opciones:

![MicrosoftTeams-image](https://user-images.githubusercontent.com/97609743/170083240-beed176a-77eb-4438-9db8-bae9c3574500.png)

y si quieres quitar esta marca 

![MicrosoftTeams-image (1)](https://user-images.githubusercontent.com/97609743/170083279-31018fa9-29e0-4d7a-9c57-5dba9a5d3daf.png)

y listo!
Si tienes algún problema o quieres asegurarte de que esté bien instalado mírate este video:
       Windows: https://www.youtube.com/watch?v=MtllDrDm4cM
- XAMPP para MacOS
Para este caso solo debes ir a https://www.apachefriends.org/es/index.html y descargar para OS X, al momento de instalarlo solo debes darle a next no es necesario que quites ninguna marca solo está si es que quieres
![MicrosoftTeams-image (2)](https://user-images.githubusercontent.com/97609743/170083349-839bbf86-08bc-468d-8b60-617c93c5d38a.png)
Si sientes que no lo instalaste bien o prefieres verlo de un tutorial aquí te dejo uno:
       MacOs: https://www.youtube.com/watch?v=hPrgo4fnFSg
## Xampp
Una vez seguidas las instrucciones del teams podremos usar xampp para acceder a phpmyadmin, para esto tendrás que activar estos dos: 
![image](https://user-images.githubusercontent.com/97609743/169921654-4102a53b-88d0-4770-8d3e-b4ef616febbc.png)

En xammp podrás cambiar tu port e incluso volverlo de manera remota, también podrás acceder a otros lenguajes y servers según desees.También podrás por ejemplo, al usar php, desde tu navegador de una manera local o remota, ver como se ve representado tu código.

Para más detalle checate estge video:
https://www.youtube.com/watch?v=p8Ozqop6O3s

## PhpMyAdmin
Con lo anterior debería ser suficiente para conecctarse con su base de datos local y crear lo que pide el ejercicio, pero algo que igual permite el xampp es acceder a phpmyadmin donde podrán de igual manera usar sql y realizar los comandos que les vamos a enseñar en clase.

Para acceder a este deben darle click a admin en la linéa donde está mysql:
![image](https://user-images.githubusercontent.com/97609743/169921765-64c4a600-e6c6-43bb-949f-e7d4866b03de.png)

Para usar el lenguaje sql debes acceder a esta pestaña:
![image](https://user-images.githubusercontent.com/97609743/169922261-5682a4f6-c96d-4393-bccb-908455bddff6.png)

En phpmyadmin puedes de manera visual crear tu base de datos y las tablas que este lo incluyen, incluso después de realizarlo te muestra como este sería en SQL, es como cuando en Pseint usabas los diagramas de flujo y luego veías el código.

Para ver más en detalle el uso de phpmyadmin te recomendamos ver este video:
https://www.youtube.com/watch?v=7RmTCGQ-dvg


## Crear base de datos
Podemos crear una base de datos con el siguiente comando:
```MySQL
create database mi_base_de_datos;
```
## Eliminar base de datos
Podemos eliminar una base de datos con el siguiente comando:
```MySQL
drop database mi_base_de_datos;
```
## Seleccionar base de datos
Podemos seleccionar una base de datos con el siguiente comando:
```MySQL
use mi_base_de_datos;
```
## Crear tabla
Podemos crear una tabla en la base de datos que queramos con el siguiente comando:
```MySQL
use mi_base_de_datos;
CREATE TABLE lista_alumnos(
    id BIGINT AUTO_INCREMENT,
    nombre VARCHAR(150),
    nlista int,
    PRIMARY KEY(id)
);
```
## CRUD

Una vez conectados, crearemos nuestra primera petición (o query), para eso simplemente tendremos que hacer click derecho sobre MySQL y dar click  en "New Query", nos 
creara una pestaña con un archivo donde podremos empezar a trabajar.

### Leer una tabla (Read)

Escribiremos "use login_db; ", esto nos permitirá acceder a la base de datos "lista_alumnos"

Posterior a eso en la siguiente linea escribiremos "SELECT * FROM lista_alumnos;", en la que básicamente vamos a visualizar la tabla alumnos.

El resultado debería ser algo asi:
```MySQL
 use login_db;
 SELECT * FROM lista_alumnos;
```

Una vez puesto esto damos click derecho y "Run MySQL query"

### Eliminar una fila (Delete)

Creamos un nuevo query como la vez pasada, haciendo click derecho y click en "New query"

Seguiremos en la misma base de datos y vamos a trabajar en la misma tabla. Como se pudo ver la tabla es una lista del salon, sin embargo, la lista del salon esta mal, entonces tendremos que borrar la fila donde esta nuestro nombre, para eso escribimos:

```MySQL
use login_db;
DELETE FROM lista_alumnos WHERE id='';
```
En la parte que dice " id='' ", entre las comillas simples pondremos el id de la fila donde se encuentra nuestro nombre mal escrito. Una vez ponemos el id ejecutamos el codigo como la vez pasada, haciendo click derecho y luego click en "Run MySQL query".

### Crear una fila (Create)

Creamos un nuevo query como la vez pasada, haciendo click derecho y click en "New query"

En esta ocasion ingresaremos nuestro nombre, en esta ocasion bien escrito, entonces en este nuevo query escribimos:

```MySQL
use login_db;
INSERT INTO lista_alumnos(nombre, nlist) VALUES ('Nombre completo','Tú número lista');
```
**Aqui reemplazaremos "Nombre completo" por nuestro nombre y Tú numero lista con tu número de lista**.

Aqui seguimos trabajando en la base de datos login_db, donde insertamos una fila en la tabla 'lista_alumnos' con nuestro nombre. Cuando ya hayamos puesto nuestro nombre completo ejecutamos el codigo como antes, dando click derecho y luego click en "Run MySQL query"

### Actualizar una fila (Update)

Creamos un nuevo query como la vez pasada, haciendo click derecho y click en "New query".

Para este ultimo query lo que realizaremos es actualizar la fila que acabamos de insertar, si nos damos cuenta en la tabla hay 3 columnas:
- El id
- El nombre del alumno
- El número de lista del alumno

Sin embargo, cuando creamos la fila no insertamos nombre de lista, entonces tendremos que actualizar este valor, para ello tendremos que poner lo siguiente:

```MySQL
use lista_alumnos;
UPDATE lista_alumnos SET nlista='Tu numero de lista' WHERE id='Tu id';
```
**En donde dice 'tu numero de lista' lo cambiamos por nuestro número de lista y en donde dice 'Tu id' lo cambiamos por el id de la fila que creamos anteriormente**

Aqui estamos trabajando en la base de datos login_db, especificamente en la tabla alumnos, donde cambiamos el valor de la columna "nlista" a nuestro número de lista usando como referencia el id de la misma fila. Cuando ya hayamos puesto el valor del id de nuestra fila y nuestro numero de lista, damos click derecho y hacemos click en "Run MySQL query".


# Recopilacion Codigos CRUD

## Crear una fila (Create)

```MySQL
use login_db;
INSERT INTO lista_alumnos('nombre') VALUES ('(el nombre que quieras poner)');
```

## Visualizar la tabla (Read)

```MySQL
 use login_db;
 SELECT * FROM lista_alumnos;
```

## Actualizar una tabla (Update)

```MySQL
use login_db;
UPDATE lista_alumnos SET nlista='(el número que quieras poner)' WHERE id='(el id que hay en la fila que quieres modificar)';
```

## Eliminar una fila (Delete)

```MySQL
use login_db;
DELETE FROM lista_alumnos WHERE id='(el id de la fila que quieras eliminar)';
```

# Videos para seguir con el tema
En este video se puede ver más comandos y el uso de MySQL Workbench, la cual es la interfaz gráfica más popular para MySQL.

https://www.youtube.com/watch?v=uUdKAYl-F7g

En este lista de reproducción se ven aún más comandos pero usados desde el cmd, además de recapitular los términos vistos en esta sesión.

https://youtube.com/playlist?list=PLg9145ptuAihPxpM3YfQJYwPHv-Vnh_bV
