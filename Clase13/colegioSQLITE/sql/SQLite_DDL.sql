-- Active: 1728482910837@@127.0.0.1@3306

-- CTROL - ENTER para ejecutar una sentencia
-- CTROL - SHIFT - ENTER para ejecutar todo el script

drop table if exists alumnos;
drop table if exists cursos;

create table cursos(
    id integer,
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
    id integer,
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