# SOAP Hello World Project

Este proyecto demuestra un servicio web SOAP simple implementado en PHP. Incluye un servidor (`soap-server.php`) y un cliente (`test-soap.php`) que interactúa con el servidor para realizar operaciones básicas SOAP. El proyecto está dockerizado para facilitar su despliegue y ejecución.

## Requisitos

- PHP 8.1 o superior
- Docker (para contenedores)
- Docker Compose (si usas múltiples contenedores)

## Descripción del Proyecto

El servidor expone una función `sayHello` que recibe un nombre y devuelve un mensaje de saludo. El cliente realiza una solicitud al servidor y recibe la respuesta.

## Tecnologías Utilizadas

- **PHP 8.1 (CLI)**
- **Docker**

## Pasos para Clonar y Ejecutar el Proyecto

### Clonar el repositorio

Para clonar este proyecto, ejecuta el siguiente comando:

```bash
git clone https://your-repository-url.git

Without Docker:

Navigate to the project directory:
bash
```bash
cd soap-hello-world
```
Start the PHP embedded server:

```bash
php -S localhost:8000
```
With Docker (Recommended):

Build the Docker image:

```bash
docker build -t soap-server .
```
Run the Docker container:

```bash
docker run -p 8000:8000 soap-server
```
The server will be accessible at http://localhost:8000/soap-server.php.

Docker Hub
For pre-built Docker images, visit the Docker Hub link to pull and run the image.

License
This project is licensed under the MIT License - see the LICENSE file for details.
