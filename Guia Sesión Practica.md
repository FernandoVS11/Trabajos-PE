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

## Empezar a crear querys

Una vez conectados, crearemos nuestra primera petición (o query), para eso simplemente tendremos que hacer click derecho sobre MySQL y dar click  en "New Query", nos creara una pestaña con un archivo donde podremos empezar a trabajar.

### Visualiza una base de datos (Read)

Escribiremos "use lista_alumnos; ", esto nos permitirá acceder a la base de datos "lista_alumnos"

Posterior a eso en la siguiente linea escribiremos "SELECT * FROM alumnos;", en la que básicamente vamos a visualizar la tabla alumnos.

El resultado debería ser algo asi:
```SQL
 use lista_alumnos;
 SELECT * FROM alumnos;
```

### Crear una fila

Empezaremos con la misma 

