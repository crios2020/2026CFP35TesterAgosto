-- Active: 1729293266338@@127.0.0.1@3306@colegio
drop database if exists colegio;
create database colegio;
use colegio;
create table cursos(
    id integer AUTO_INCREMENT,
    titulo varchar(25) not null,
    profesor varchar(25) not null,
    dia varchar(12) not null 
                check(dia IN('LUNES','MARTES','MIERCOLES','JUEVES','VIERNES')),
    turno varchar(25) not null
                check(turno IN('MAÑANA','TARDE','NOCHE')),
    activo boolean default TRUE,
    primary key(id)
);

create table alumnos(
    id integer AUTO_INCREMENT,
    nombre varchar(25) not null,
    apellido varchar(25) not null,
    edad int not null check(edad >=18 and edad<=120),
    id_curso int null references cursos(id),
    activo boolean default TRUE,
    primary key(id)
);

drop view if exists v_alumnos;
create view v_alumnos as 
    select a.id id, nombre, apellido, edad, id_curso, 
            titulo, profesor, dia, turno, a.activo activo
        from alumnos a join cursos c on a.id_curso=c.id;

