# testBackBone

## Herramientas

Para la realización del ejercicio se utilizo laravel 8.75 como se puede revisar en el composer.json.

Para la implementación de la base de datos se hizo uso de mysql.

No se implemento unit test ni feature test porque no se vio necesario.

## Análisis

Primeramente se descargo los datos proporcionados en la pagina donde se pudo notar que estaban todo en un solo archivo, por lo que se realizo una descomposición llegando a tener las siguientes tablas para la base de datos:

* **ciudad** - Tabla principal donde se tiene el zip-code y los datos de la ciudad
* **federal_entity** - Datos del estado al que pertenece la ciudad 
* **municipality** - Datos del municipio
* **settlement_settlement_type** - Tabla relacional del poblado y el tipo
* **settlement_type** - Tipo de poblado
* **settlements** - Datos del poblado

Debido al ejemplo de la api no se hizo uso de todos los campos de la información proporcionada, ya que el resultado de la api fue la guía para reconocer la distribución de la información y seleccionar aquellos que eran mas importantes.

## Desarrollo

Con la base de datos ya implementada se procedió a la creación de los modelos y los respectivos enlaces simbólicos para poder realizar las consultas con Eloquent.

Ya con la consulta realizada y la obtención de todos los datos gracias a los enlaces simbólicos se procedió al armado de la respuesta para igualar al formato propuesto en la api de ejemplo, en este punto se realizaron las transformaciones necesarias a los textos de salida como ser la eliminación de caracteres con acento o especiales y la conversion en mayúscula de algunos campos.

## Despliegue

Por ultimo se crearon las rutas dentro del archivo api.php, el cual es el designado por laravel para almacenar las rutas para los api's. Tratando de respetar el formato establecido en la prueba donde la ruta es /api/zip-codes/{zip_code}.

## Consideraciones

Al momento de insertar los datos a la base de datos no se realizo una limpieza de los mismos como la eliminación de los acentos ya que considero que la información es importante como es proporcionada, claro que si se hubiera hecho esto se reduciría el tiempo de respuesta.

La base de datos fue implementada en mysql, y no se creo las respectivas migraciones y seeders en el proyecto laravel por considerarlas no necesarias.