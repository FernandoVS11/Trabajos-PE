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

## CRUD

Una vez conectados, crearemos nuestra primera petición (o query), para eso simplemente tendremos que hacer click derecho sobre MySQL y dar click  en "New Query", nos creara una pestaña con un archivo donde podremos empezar a trabajar.

### Leer una tabla (Read)

Escribiremos "use lista_alumnos; ", esto nos permitirá acceder a la base de datos "lista_alumnos"

Posterior a eso en la siguiente linea escribiremos "SELECT * FROM alumnos;", en la que básicamente vamos a visualizar la tabla alumnos.

El resultado debería ser algo asi:
```MySQL
 use lista_alumnos;
 SELECT * FROM alumnos;
```

Una vez puesto esto damos click derecho y "Run MySQL query"

### Eliminar una fila (Delete)

Creamos un nuevo query como la vez pasada, haciendo click derecho y click en "New query"

Seguiremos en la misma base de datos y vamos a trabajar en la misma tabla. Como se pudo ver la tabla es una lista del salon, sin embargo, la lista del salon esta mal, entonces tendremos que borrar la fila donde esta nuestro nombre, para eso escribimos:

```MySQL
use lista_alumnos;
DELETE FROM alumnos WHERE id='';
```
En la parte que dice " id='' ", entre las comillas simples pondremos el id de la fila donde se encuentra nuestro nombre mal escrito. Una vez ponemos el id ejecutamos el codigo como la vez pasada, haciendo click derecho y luego click en "Run MySQL query".

### Crear una fila (Create)

Creamos un nuevo query como la vez pasada, haciendo click derecho y click en "New query"

En esta ocasion ingresaremos nuestro nombre, en esta ocasion bien escrito, entonces en este nuevo query escribimos:

```MySQL
use lista_alumnos;
INSERT INTO alumnos('nombre') VALUES ('Nombre completo');
```
**Aqui reemplazaremos "Nombre completo" por nuestro nombre**.

Aqui seguimos trabajando en la base de datos lista_alumnos, donde insertamos una fila en la tabla 'alumnos' con nuestro nombre. Cuando ya hayamos puesto nuestro nombre completo ejecutamos el codigo como antes, dando click derecho y luego click en "Run MySQL query"

### Actualizar una fila (Update)

Creamos un nuevo query como la vez pasada, haciendo click derecho y click en "New query".

Para este ultimo query lo que realizaremos es actualizar la fila que acabamos de insertar, si nos damos cuenta en la tabla hay 3 columnas:
- El id
- El nombre del alumno
- El numero de lista del alumno

Sin embargo, cuando creamos la fila no insertamos nombre de lista, entonces tendremos que actualizar este valor, para ello tendremos que poner lo siguiente:

```MySQL
use lista_alumnos;
UPDATE alumnos SET num_de_lista='Tu numero de lista' WHERE id='Tu id';
```
**En donde dice 'tu numero de lista' lo cambiamos por nuestro numero de lista y en donde dice 'tu id' lo cambiamos por el id de la fila que creamos anteriormente**

Aqui estamos trabajando en la base de datos lista_alumnos, especificamente en la tabla alumnos, donde cambiamos el valor de la columna "numero_de_lista" a nuestro numero de lista usando como referencia el id de la misma fila. Cuando ya hayamos puesto el valor del id de nuestra fila y nuestro numero de lista, damos click derecho y hacemos click en "Run MySQL query".


# Recopilacion Codigos CRUD

## Crear una fila (Create)

```MySQL
use lista_alumnos;
INSERT INTO alumnos('nombre') VALUES ('Nombre completo');
```

## Visualizar la tabla (Read)

```MySQL
 use lista_alumnos;
 SELECT * FROM alumnos;
```

## Actualizar una tabla (Update)

```MySQL
use lista_alumnos;
UPDATE alumnos SET num_de_lista='Tu numero de lista' WHERE id='Tu id';
```

## Eliminar una fila (Delete)

```MySQL
use lista_alumnos;
DELETE FROM alumnos WHERE id='';
```
