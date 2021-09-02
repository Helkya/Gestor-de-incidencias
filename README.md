# Gestor-de-incidencias
### Funcionalidad
·Sistema de login y registro
  ->Autentificación
  ->Autorización (administrador/usuario)
  ->Cifrado de contraseña
  
·Operaciones CRUD con base de datos
  ->Visualización de usuarios, incidencias y comentarios
  ->Crear usuarios, incidencias y comentarios
  ->Actualizar el estado de la incidencia y los comentarios
  ->Eliminar usuarios, incidencias y comentarios

·Paginación de comentarios

### Configuración
_Base de datos_
Las tablas de datos necesarias se encuentran en la carpeta '0DB' en formato SQL.
El nombre por defecto de la base de datos es 'gdi'. Si se desean cambiar los parámetros de la conexión ir a: 'GestorDeIncidencias\Model\dbConnexion.php'

_Iniciar sesión como administrador_
Debido a que solo un administrador puede crear otro administrador, en el sistema de login se ha implementado la creación de un administrador si la contraseña y usuario es 'admin' (sin comillas). Evitando la necesidad de crearlo desde la base de datos o manipulando el código.
