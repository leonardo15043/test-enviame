# Desafío Envíame

Para este proyecto se configuró un ambiente Docker con dos contenedores donde ejecutan todos los ejercicios incluyendo la información de la base de datos.

## Ejercicio 1: Docker

Se configuró dos contenedores, uno con la imagen **php:7.2.2-apache** y el otro para la base de datos **mysql:5.7**, a cada uno se le configuró un volumen para mantener la información.

La configuración completa la podremos ver en el archivo ``` docker-compose.yml ```, aquí se especifica lo mencionado anteriormente más algunos datos relevantes como la configuración de la base de datos.

La información de la base de datos se guarda en la carpeta db, no es recomendable subir estos datos al repositorio, pero por efectos prácticos de la prueba decidí hacerlo de esta manera.

#### - Instalación

Luego de clonar el repositorio y tener los archivos localmente debemos asegurarnos de tener [Docker Desktop](https://www.docker.com/products/docker-desktop) en nuestra computadora y luego desde la terminal de comando vamos a la carpeta del proyecto y ejecutamos el siguiente comando.

``` docker-compose up -d ``` este comando ejecutará toda la configuración que tenemos en el **docker-compose.yml**.

### Ejercicio 2: API REST + CRUD

Para este ejercicio y los demás, utilice como lenguaje de programación **PHP**, todos los servicios se encuentran en la carpeta **/api** que se comunica con el controlador de la Entidad correspondiente, adicional a esto cree las vistas del CRUD para que también se pueda interactuar por interfaz gráfica.

Para consumir los servicios lo pueden hacer importando la colección de **Postman** con el siguiente [Link](https://www.getpostman.com/collections/89d2a8c2f1558bbc971b)

Para consumir esta API pueden enviar los datos por **from-data** o también desde un formato **JSON** y para generar los datos **Fake** debemos especificar el número de registros que queremos generar.

### Ejercicio 3: Análisis + Desarrollo 

Este ejercicio está en la carpeta view y se llama ``` exercise-3.php ```, se implementaron 3 soluciones diferentes a este problema.

### Ejercicio 4: Consumo API Envíame para la creación de un envío

Para le consume del API de Enviame se creó una nueva clase en el proyecto alimentando el  JSON desde un formulario **HTML** llamado ``` exercise-4.php ``` para facilitar las pruebas de consumo, la respuesta que genera esta API se guarda en la base de datos en una tabla llamada **delivery** con tres campos que son el id de la respuesta, el título de la respuesta, la descripción de la respuesta y por último un código único que se le asigna a esa petición.

### Ejercicio 5: Análisis + Desarrollo

Para resolver el ejercicio de **Fibonacci**, implemente 2 funciones en el archivo  ``` exercise-5.php ``` , una para sacar los divisores y la otra para ejecutar un bucle while recorriendo todos los divisores de cada numero deteniéndolo hasta el número que le asignemos de divisores en la función.

### Ejercicio 6: Análisis + Desarrollo Aplicado a Negocio

En este ejercicio 6 que está en el archivo ``` exercise-6.php ``` implemente una función que se encarga de tener las reglas de la distancia con respecto a los días, tomando como base los 5 primeros rangos y agregando un else para los km n que llaman a la misma función, pero enviándole como parámetro la (distancia-el rango 1) y también para el 2 sumándolos como dice en la descripción del ejercicio, por último para sacar los rangos de km use la función ``` rand() ``` de **PHP** y le pase este dato a la función creada, dándome como respuesta el número de días para el condicional que me muestra el mensaje final.

### Ejercicio 7: SQL

Para actualizar la tabla **employees** con el nuevo reajuste anual tuve que hacer dos INNER JOIN para unir las tres tablas  y implementado la formula  ``` ((reajuste/100)+1)*salario ```  y por último filtre este update para que me afectara solo a los salarios que tengan 5000 o menos.

```  
UPDATE employees em 
INNER JOIN countries co ON co.id = em.country_id
INNER JOIN continents cont ON cont.id = co.continent_id
SET em.salary = ((cont.anual_adjustment/100)+1)*em.salary
WHERE em.salary <= 5000
``` 

Las tres tablas y el UPDATE lo pueden encontrar en el contenedor de **MYSQL**
