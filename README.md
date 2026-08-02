# EnferDats-Laravel
Proyecto realizado utilizando Laravel
# ENFER-DATS

Aplicación web desarrollada con Laravel para la gestión de actividades de enfermería.

## Tecnologías utilizadas

- Laravel 10
- PHP 8.3 (Docker)
- MySQL 8
- Nginx
- Docker
- Docker Compose
- phpMyAdmin
- Git
- GitHub
- Visual Studio Code

---

## Requisitos

- Docker Desktop
- WSL2 (Windows)
- Ubuntu (WSL)
- Git
- Visual Studio Code

---

## Clonar el proyecto

```bash
git clone https://github.com/TU-USUARIO/EnferDats-Laravel.git
cd EnferDats-Laravel
```

---

## Levantar el entorno

Desde la carpeta del proyecto ejecutar:

```bash
docker compose up -d
```

---

## Detener el entorno

```bash
docker compose down
```

---

## Accesos

Aplicación Laravel

http://localhost:8000

phpMyAdmin

http://localhost:8080

---

## Servicios Docker

El proyecto está compuesto por cuatro contenedores:

- app (Laravel + PHP-FPM)
- nginx
- mysql
- phpMyAdmin

Todos los servicios son administrados mediante Docker Compose.

---

## Base de datos

Motor:

MySQL 8

Administrador:

phpMyAdmin

---

## Evolución del proyecto

Inicialmente el proyecto fue desarrollado utilizando Laragon como entorno local.

Posteriormente fue migrado a un entorno completamente contenerizado mediante Docker y Docker Compose, permitiendo ejecutar Laravel, MySQL, Nginx y phpMyAdmin de forma aislada y reproducible.

## Autor

Victor Hugo Peinado