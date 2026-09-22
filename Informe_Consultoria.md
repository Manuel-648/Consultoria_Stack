### 1. Cliente vs Servidor

**El código del cliente** se ejecuta en el navegador del usuario, principalmente mediante **HTML, CSS y JavaScript**. Como el usuario puede inspeccionarlo y modificarlo, no se puede confiar en él para garantizar la seguridad.

**El código del servidor** se ejecuta en una máquina remota y utiliza tecnologías como **PHP, Python o Java**. Se encarga de gestionar la lógica de negocio, los datos, la autenticación y los permisos.

Por ello, una regla básica de seguridad es **"nunca confiar en los datos que vienen del cliente"**. El servidor debe validar siempre los datos recibidos y comprobar los permisos, aunque ya hayan sido validados en el navegador.



### 2. Web Estática vs Dinámica

**Una web estática** entrega siempre el mismo archivo HTML. Es sencilla, rápida y adecuada para contenidos que cambian poco, como documentación o páginas informativas.

**Una web dinámica** genera el contenido cuando el usuario realiza una petición y puede consultar una base de datos. Esto permite gestionar productos, usuarios, pedidos, carritos de compra y contenido personalizado.

Por estas características, una web dinámica es más adecuada para una tienda online, ya que permite trabajar con información que cambia constantemente.

También existen arquitecturas híbridas, como las **SPA**, donde el frontend se comunica con el backend mediante una **API REST**, normalmente utilizando datos en formato **JSON**.



### 3. La Infraestructura (Servidores)

**Un servidor web**, como **Apache o Nginx**, recibe las peticiones del navegador y devuelve los recursos solicitados. Apache utiliza procesos o hilos, mientras que **Nginx** utiliza una arquitectura basada en eventos que permite gestionar muchas conexiones de forma eficiente.

Para ejecutar PHP es recomendable utilizar **PHP-FPM** en lugar de CGI. CGI crea un proceso nuevo por cada petición, mientras que PHP-FPM utiliza un grupo de procesos reutilizables, mejorando el rendimiento y reduciendo el consumo de recursos.

**Laravel**, junto con PHP-FPM, facilita la gestión de tareas como rutas, sesiones, seguridad y acceso a bases de datos, actuando como parte de la lógica de la aplicación.

Para este proyecto utilizaremos **XAMPP (Apache + PHP + MySQL)** como entorno de desarrollo local.



### 4. Evaluación de Herramientas y Frameworks


Se ha elegido **PHP** porque es un lenguaje muy utilizado para desarrollar aplicaciones web dinámicas y permite trabajar fácilmente con **bases de datos**. Además, se integra directamente con el entorno **XAMPP** que utilizaremos en el proyecto.

Para el desarrollo utilizaremos **Laravel 12**, un framework de PHP que proporciona una estructura y herramientas que facilitan el desarrollo de aplicaciones.

Sus principales ventajas son:

* **Patrón MVC:** separa los datos, la lógica y la presentación, haciendo que el código sea más fácil de mantener.
* **Seguridad:** incluye herramientas para gestionar aspectos como la autenticación y la validación de datos.
* **Estructura organizada:** facilita la organización del proyecto y su mantenimiento.

Además, Laravel cuenta con herramientas como **Eloquent** para trabajar con bases de datos y **Blade** para crear las vistas.

Por estas razones, **PHP y Laravel 12 son una opción adecuada para desarrollar la plataforma web dinámica del proyecto**.
