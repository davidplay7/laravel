# LARAVEL PROJECT

**Instalação no Ubuntu do PHP, COMPOSER**

#### *PHP*
```sh 
sudo apt-get install php php-cli php-mbstring unzip -y
```
#### *COMPOSER*
```sh 
sudo apt-get install composer -y
```
#### *Criação do projeto*
```sh 
composer create-project --prefer-dist laravel/laravel xxxxxx
```
#### *Configuração do ambiente*
```sh 
cp .env.example .env
```
#### *Criando a chave do projeto*
```sh 
php artisan key:generate
```
#### *Instalando dependencias do projeto se for projeto base*
```sh 
sudo apt-get install php-xml php-dom php-curl -y
composer install
composer update
```
#### *Start do projeto*
```sh 
php artisan serve
```

# MYSQL

**Instalação no Ubuntu do MYSQL**

#### *MYSQL Instalação*
```sh 
sudo apt-get install mysql-server
```

#### *MYSQL Start*
```sh 
sudo systemctl start mysql
```

