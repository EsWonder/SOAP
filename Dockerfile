# Usar la imagen base oficial de PHP
FROM php:8.1-cli

# Instalar dependencias necesarias para PHP (si es necesario)
RUN apt-get update && apt-get install -y \
    curl \
    zip \
    git \
    && rm -rf /var/lib/apt/lists/*

# Copiar los archivos PHP al contenedor
COPY . /var/www/html/

# Establecer el directorio de trabajo
WORKDIR /var/www/html

# Exponer el puerto 8000 para que el servidor pueda ser accedido
EXPOSE 8000

# Comando para iniciar el servidor PHP embebido
CMD ["php", "-S", "0.0.0.0:8000"]
