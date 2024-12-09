# Use a imagem oficial do PHP com Apache
FROM php:8.1-apache

# Instalar as extensões necessárias do PHP
RUN apt-get update && apt-get install -y \
    git \
    curl \
    zip \
    unzip \
    libpq-dev \
    libzip-dev \
    libxml2-dev \
    libonig-dev \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    && docker-php-ext-install pdo pdo_mysql mbstring zip exif pcntl bcmath gd

# Instalar o Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Configurar o diretório de trabalho
WORKDIR /var/www/html

# Copiar todos os arquivos do projeto para o container
COPY . .

# Instalar as dependências do Laravel
RUN composer install --no-scripts --no-autoloader

# Definir as permissões corretas para as pastas necessárias
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 775 /var/www/html \
    && chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache \
    && chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# Gera o autoload do Composer
RUN composer dump-autoload --optimize

# Expõe a porta 80
EXPOSE 80

# Iniciar o Apache
CMD ["apache2-foreground"]
