# Proyecto: Gestión de Etiquetas con Laravel y TDD

Este proyecto es el resultado del **Curso Básico de Testing con PHP y Laravel** impartido en Platzi. Es una aplicación sencilla que permite registrar y almacenar etiquetas, con un enfoque principal en la implementación de pruebas utilizando la metodología **Test-Driven Development (TDD)**.

## 🚀 Características Principales

- **Gestión de Etiquetas:**  
  - Creación y almacenamiento de etiquetas.  
  - Validación de datos para evitar duplicados o entradas inválidas.  

- **Pruebas Automatizadas:**  
  - Pruebas unitarias y funcionales diseñadas con Laravel para validar cada funcionalidad.  
  - Implementación de TDD desde la planificación hasta la ejecución de las pruebas.

## 🧪 Enfoque en TDD

El proyecto se desarrolló utilizando la metodología **TDD** para garantizar un enfoque guiado por pruebas. Las principales fases incluidas fueron:

1. **Escribir Pruebas:** Crear pruebas fallidas antes de implementar la funcionalidad.
2. **Hacer que las Pruebas Pasen:** Implementar la funcionalidad mínima para que las pruebas pasen.
3. **Refactorizar el Código:** Mejorar la calidad del código manteniendo todas las pruebas exitosas.

Las pruebas incluidas en este proyecto abarcan:
- Validación de entradas (longitud, duplicados, campos requeridos).
- Respuestas esperadas de las rutas de la aplicación.
- Pruebas de integración para verificar el comportamiento del modelo y la base de datos.

## 🛠️ Tecnologías Utilizadas

- **Framework:** Laravel (v10+).  
- **Lenguaje:** PHP (8.1+).  
- **Base de Datos:** MySQL (configurable).  
- **Testing:** PHPUnit, Laravel Testing Suite.  

## 📂 Estructura del Proyecto

- `/routes/web.php`: Configuración de rutas para el manejo de etiquetas.
- `/app/Models/Tag.php`: Modelo principal para gestionar etiquetas.
- `/tests/Feature/TagTest.php`: Pruebas funcionales para la gestión de etiquetas.
- `/tests/Unit/TagValidationTest.php`: Pruebas unitarias para validar las reglas del modelo.

## ⚙️ Requisitos Previos

1. PHP 8.1 o superior.  
2. Composer.  
3. MySQL o cualquier otra base de datos compatible.  
4. Laravel CLI.

## 🚀 Instalación y Configuración

1. Clona este repositorio:  
   ```bash
   git clone https://github.com/tu_usuario/nombre-del-repo.git
   cd nombre-del-repo
   ```

2. Instala las dependencias:  
   ```bash
   composer install
   ```

3. Configura el archivo `.env`:  
   ```plaintext
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=nombre_base_datos
   DB_USERNAME=tu_usuario
   DB_PASSWORD=tu_password
   ```

4. Ejecuta las migraciones:  
   ```bash
   php artisan migrate
   ```

5. Ejecuta las pruebas:  
   ```bash
   php artisan test
   ```

## 🌟 Contribuciones

Este proyecto es principalmente educativo, pero si tienes ideas o sugerencias, ¡no dudes en crear un Pull Request o abrir un Issue! 😊
   
