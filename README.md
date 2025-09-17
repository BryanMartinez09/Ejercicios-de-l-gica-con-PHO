\
# Módulo 4 - Actividad 3 – Ejercicios de lógica con estructuras de datos en PHP

Cuatro scripts **simples y funcionales** en PHP, listos para correr por CLI.  
Cada archivo está **comentado** como si fuera escrito por un humano, explicando los pasos.

## Requisitos
- PHP 8.x (recomendado).  
- Extensión `mbstring` para un mejor soporte de UTF-8 en el ejercicio 3 (opcional pero recomendado).

## Estructura
```
actividad3-php/
 ├── 1-lista-invertida.php
 ├── 2-suma-pares.php
 ├── 3-frecuencia-caracteres.php
 └── 4-piramide.php
```

## Cómo ejecutar

Desde la carpeta del proyecto:

### 1) Lista invertida
```bash
php 1-lista-invertida.php "1,2,3,4,5"
# Sin argumento usa: [1,2,3,4,5]
```

### 2) Suma de números pares
```bash
php 2-suma-pares.php "10,15,22,33,40,7,8"
# Sin argumento usa un ejemplo por defecto
```

### 3) Frecuencia de caracteres (UTF-8 friendly)
```bash
php 3-frecuencia-caracteres.php "Hola mundo"
# Puedes usar acentos o emojis si tienes mbstring
```

### 4) Pirámide con bucles anidados
```bash
php 4-piramide.php 7
# Sin argumento imprime 5 filas
