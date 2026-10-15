-- Active: 1729293266338@@127.0.0.1@3306@colegio
use colegio;
select version();


-- 1. Seleccionar todos los cursos
SELECT * FROM cursos;

-- 2. Seleccionar todos los alumnos
SELECT * FROM alumnos;

-- 3. Seleccionar cursos activos
SELECT * FROM cursos WHERE activo = TRUE;

-- 4. Seleccionar alumnos activos
SELECT * FROM alumnos WHERE activo = TRUE;

-- 5. Contar la cantidad de alumnos por curso
SELECT id_curso, COUNT(*) AS cantidad_alumnos
FROM alumnos
GROUP BY id_curso;

-- 6. Obtener información de un curso específico
SELECT * FROM cursos WHERE id = 1;

-- 7. Obtener alumnos mayores de 25 años
SELECT * FROM alumnos WHERE edad > 25;

-- 8. Obtener cursos que se imparten los viernes
SELECT * FROM cursos WHERE dia = 'VIERNES';

-- 9. Obtener nombres y apellidos de alumnos junto con el título del curso
SELECT a.nombre, a.apellido, c.titulo
FROM alumnos a
LEFT JOIN cursos c ON a.id_curso = c.id;

-- 10. Obtener la lista de profesores y la cantidad de cursos que imparten
SELECT profesor, COUNT(*) AS cantidad_cursos
FROM cursos
GROUP BY profesor;

UPDATE cursos SET activo=true WHERE id=12;

select * from alumnos;
select * from alumnos a join cursos c on a.id_curso=c.id where a.activo=true;

show tables;