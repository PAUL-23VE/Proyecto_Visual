# 🌐 CV Cuarto · Aplicación web en PHP

Aplicación web desarrollada en equipo en **cuarto semestre de Ingeniería de Software**: sitio con páginas de inicio, nosotros, servicios y contacto, inicio de sesión y **reportes en PDF**.

![PHP](https://img.shields.io/badge/PHP-777BB4?style=flat-square&logo=php&logoColor=white) ![MySQL](https://img.shields.io/badge/MySQL-4479A1?style=flat-square&logo=mysql&logoColor=white) ![jQuery](https://img.shields.io/badge/jQuery-0769AD?style=flat-square&logo=jquery&logoColor=white) ![FPDF](https://img.shields.io/badge/FPDF-E34F26?style=flat-square) ![JasperReports](https://img.shields.io/badge/JasperReports-D52B1E?style=flat-square)

## ✨ Funcionalidades

- Páginas públicas: inicio, nosotros, servicios y contacto (guarda los mensajes de contacto).
- **Login** con verificación de token y operaciones de guardar, editar y borrar registros.
- **Reportes** en PDF con FPDF y con plantillas de JasperReports (`.jrxml`), incluido un reporte por cédula.
- Arquitectura por capas: `VIEW`, `CONTROLS` y `MODELS`.

## 🗂️ Estructura

```
cv_cuarto/
  VIEW/        # páginas
  CONTROLS/    # controlador
  MODELS/      # acceso a datos y lógica
  Reportes/    # FPDF, JasperReports y reportes
  CSS/  images/  jquery/
```

## 🚀 Cómo ejecutarlo

1. Copia `cv_cuarto/` a tu servidor local (XAMPP, WAMP…).
2. Configura los datos de la base de datos en `MODELS/conexion.php`.
3. Abre `http://localhost/cv_cuarto/`.

## 🤝 Equipo

[AngieCaiza27](https://github.com/AngieCaiza27) · [W1llAn](https://github.com/W1llAn) · [PAUL-23VE](https://github.com/PAUL-23VE) · [DavidGR21](https://github.com/DavidGR21) · [LUISALEXANDERQUISHPE](https://github.com/LUISALEXANDERQUISHPE)

---

<sub>Parte del portafolio de **Paul Velastegui** · [paul-23ve.github.io](https://paul-23ve.github.io) · [GitHub](https://github.com/PAUL-23VE)</sub>
