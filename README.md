# Plantilla de Laravel con Argon Dashboard Integrado

[![Estado de la construcción](https://img.shields.io/badge/estado-construcci%C3%B3n_exitosa-brightgreen.svg)](https://github.com/tuusuario/turepositorio)
[![Licencia](https://img.shields.io/badge/licencia-MIT-blue.svg)](https://opensource.org/licenses/MIT)

Este repositorio proporciona una plantilla prediseñada para proyectos de Laravel que requieren un panel de administración. La plantilla está integrada con Argon Dashboard, una plantilla de panel de administración hermosa y de código abierto desarrollada por Creative Tim.

## Características

- Integración de Argon Dashboard para una interfaz de usuario elegante y moderna.
- Estructura de carpetas predefinida para una organización eficiente del código.
- Vistas predefinidas para páginas comunes como inicio, perfil, ajustes, etc.
- Formularios predefinidos con validaciones básicas para una rápida implementación.
- Autenticación de usuario lista para usar con páginas de inicio de sesión y registro.
- Documentación clara y detallada para ayudar a los desarrolladores a comenzar rápidamente.

## Requisitos Previos

Antes de comenzar a utilizar esta plantilla, asegúrate de tener instalado:

- [PHP](https://www.php.net/) >= 8.2
- [Composer](https://getcomposer.org/)
- [Node.js](https://nodejs.org/)
- [npm](https://www.npmjs.com/)

## Instalación

1. Clona este repositorio en tu máquina local:

    ```bash
    git clone https://github.com/StevenU21/argon](https://github.com/limberrodriguezCT/Argon.git
    ```

2. Navega a la carpeta del proyecto:

    ```bash
    cd argon
    ```

3. Instala las dependencias PHP usando Composer:

    ```bash
    composer install
    ```

4. Instala las dependencias de JavaScript:

    ```bash
    npm install
    ```

5. Copia el archivo de configuración de ejemplo y configura tu entorno:

    ```bash
    cp .env.example .env
    php artisan key:generate
    ```

6. Configura Mailtrap para la funcionalidad de verificación de correo electrónico y otros servicios de correo:
   
   - Crea una cuenta en [Mailtrap](https://mailtrap.io/).
   - Obtén tus credenciales de Mailtrap (username y password).
   - Añade tus credenciales de Mailtrap en el archivo `.env` de tu proyecto:

    ```env
    MAIL_MAILER=smtp
    MAIL_HOST=smtp.mailtrap.io
    MAIL_PORT=2525
    MAIL_USERNAME=your_mailtrap_username
    MAIL_PASSWORD=your_mailtrap_password
    MAIL_ENCRYPTION=null
    MAIL_FROM_ADDRESS=example@example.com
    MAIL_FROM_NAME="${APP_NAME}"
    ```

7. Ejecuta las migraciones de la base de datos y los seeders (si es necesario):

    ```bash
    php artisan migrate --seed
    ```

8. Inicia el servidor de desarrollo:

    ```bash
    php artisan serve
    ```
## Licencia

Este proyecto está bajo la Licencia MIT. Consulta el archivo [LICENSE](LICENSE) para obtener más detalles.

---
