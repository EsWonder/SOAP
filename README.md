# SOAP Hello World Project

This project demonstrates a simple SOAP web service implemented in PHP. It includes a server (`soap-server.php`) and a client (`test-soap.php`) that interacts with the server to perform basic SOAP operations. The project is containerized using Docker to simplify deployment and execution.

## Requirements

- PHP 8.1 or higher
- Docker (for containers)
- Docker Compose (if using a multi-container setup)

## Project Description

The server exposes a `sayHello` function that takes a name and returns a greeting message. The client sends a request to the server and receives the response.

## Technologies Used

- **PHP 8.1 (CLI)**
- **Docker**

## Steps to Clone and Run the Project

### Clone the repository

To clone this project, execute the following command:

```bash
git clone https://your-repository-url.git

### Without Docker:
Navigate to the project directory:

bash
Copiar código
cd soap-hello-world
Start the PHP embedded server:

bash
Copiar código
php -S localhost:8000
With Docker (Recommended):
Build the Docker image:

bash
Copiar código
docker build -t soap-server .
Run the Docker container:

bash
Copiar código
docker run -p 8000:8000 soap-server
The server will be accessible at: http://localhost:8000/soap-server.php.

Docker Hub
For pre-built Docker images, visit the Docker Hub link to pull and run the image.

License
This project is licensed under the MIT License. See the LICENSE file for details.






