# PHP MVC - Framework light

Marco de desarrollo php vanilla construido bajo es estandar PSR-4 

## Arquitectura

En el proyecto se utilizó el patrón de arquitectura MVC para un mejor matenimiento y escalabilidad.

```
phpmvc
├── src
│   ├── app
│   │   ├── controller
│   │   │    ├── AuthController.php
│   │   │    ├── DashboardController.php
│   │   │    └── ErrorController.php
│   │   ├── models
│   │   │    ├── AuthModel.php
│   │   │    └── DashboardModel.php
│   │   └── views
│   │       ├── auth
│   │       │   └── auth.php
│   │       ├── dashboard
│   │       │   └── index.php
│   │       └── error
│   │           └── index.php
│   ├── config
│   │   └── config.php
│   ├── core
│   │   ├── BaseController.php
│   │   ├── BaseModel.php
│   │   ├── BaseView.php
│   │   ├── DB.php
│   │   ├── Router.php
│   │   └── Session.php
│   ├── public
│   │   ├── css
│   │   │   └── index.phtml
│   │   ├── img
│   │   │   └── index.phtml
│   │   └── js
│   │       └── index.phtml
│   ├── .htaccess
│   └── index.php
├── vendor
│   └── autoload.php
├── composer.json
└── .htaccess

```

## Iniciar la aplicacion

1. Clonar el repositorio.
2. Crear base de datos(postgressql) y ejecutar el scrypt db.sql contenida en el proyecto
3. Configurar ruta base y base de datos del preoyecto clonado en config/config.php
4. Ejecutar **composer dump** en la raiz del proyecto.


## Auth
Usuario: bill
Contraseña: 123
