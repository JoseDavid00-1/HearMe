/* base de datos: lenguasenas */
create table usuarios(
	usuario varchar(50) PRIMARY KEY,
	nombre varchar(50),
	apellido varchar(100),
	correo varchar(100) UNIQUE,
	contrasenia varchar(50),
	on_line int
)

create table modulos(
	id_m int primary key,
	niveles varchar(100)
)

create table temas(
	id_t int primary key,
	nombre_tema varchar(100),
	id_m int,
	FOREIGN KEY(id_m) REFERENCES modulos
)

create table contenido(
	id_c int primary key,
	nombre_contenido varchar(50),
	logro_c int,
	id_t int,
	FOREIGN KEY(id_t) REFERENCES temas
)

create table videos(
	id_v int primary key,
	id_c int,
	url varchar,
	FOREIGN KEY(id_c) REFERENCES contenido
	
)

create table usuario_logros(
	id_user int primary key,
	id_c int,
	id_t int,
	FOREIGN KEY(id_c) REFERENCES contenido,
	FOREIGN KEY(id_t) REFERENCES temas
	
)

alter table temas ADD COLUMN url varchar

drop table usuario_logros;
drop table videos;
drop table contenido;
drop table temas;
drop table modulos;
drop table usuarios;

create table usuarios(
	usuario varchar(50) PRIMARY KEY,
	nombre varchar(50),
	apellido varchar(100),
	correo varchar(100) UNIQUE,
	contrasenia varchar(50),
	on_line int
);

create table modulos(
	id_m serial primary key,
	niveles varchar(100),
	descripcion varchar
);

create table temas(
	id_t serial primary key,
	nombre_tema varchar(100),
	id_m int,
	FOREIGN KEY(id_m) REFERENCES modulos
);

create table contenido(
	id_c serial primary key,
	nombre_contenido varchar(50),
	id_t int,
	FOREIGN KEY(id_t) REFERENCES temas
);

create table videos(
	id_v serial primary key,
	id_c int,
	url varchar,
	FOREIGN KEY(id_c) REFERENCES contenido
	
);

create table usuario_logros(
	id_user serial primary key,
	id_c int,
	id_t int,
	logro_c int,
	FOREIGN KEY(id_c) REFERENCES contenido
	
	
);
alter table temas ADD COLUMN url varchar;

create table administradores(
	id_admin serial primary key,
	administrador varchar,
	codigo_acceso int,
	correo varchar unique
	

);

INSERT INTO administradores(id_admin,administrador,codigo_acceso, correo ) values(default,'iaguirola',04022001,'19000305@galileo.edu');



INSERT into modulos(id_m,niveles) values(default,'Nivel Básico');
select * from modulos
delete from modulos where id_m=1
INSERT into modulos(id_m,niveles) values(default,'Nivel Intermedio');
INSERT into modulos(id_m,niveles) values(default,'Nivel Avanzado');

INSERT INTO temas(id_t,nombre_tema,id_m ) values(default,'Abecedario',1);
INSERT INTO temas(id_t,nombre_tema,id_m ) values(default,'Pronombres Personales',1);
INSERT INTO temas(id_t,nombre_tema,id_m ) values(default,'Frase/Palabras de Cortesía',1);
INSERT INTO temas(id_t,nombre_tema,id_m ) values(default,'Tiempo',1);
INSERT INTO temas(id_t,nombre_tema,id_m ) values(default,'Días de la Semana',1);
INSERT INTO temas(id_t,nombre_tema,id_m ) values(default,'Meses del Año',1);

SELECT * FROM temas;


UPDATE temas set url='https://drive.google.com/uc?export=download&id=1jdkfqIBhNcezPyAPHYRDXTDJag7hX3uX' where id_t=1;

UPDATE temas set url='https://drive.google.com/uc?export=download&id=1cSgsXxckPMKT5fA-8yb9cI-x3PzKG5SX' where id_t=2;
UPDATE temas set url='https://drive.google.com/uc?export=download&id=1tDsNhqeRiuRtxXXsEgRQlOM7cjhRAYSU' where id_t=3;
UPDATE temas set url='https://drive.google.com/uc?export=download&id=1G3zS5uelWerMEzszHSd7_jFcKkyxunx1' where id_t=4;
UPDATE temas set url='https://drive.google.com/uc?export=download&id=18e_iw-7MUeW5YPw3h6MgPh0hvok4XVVw' where id_t=5;
UPDATE temas set url='https://drive.google.com/uc?export=download&id=13IOsMmyRsWD8YuG6w5yqfkTsDqWiuLVg' where id_t=6;




UPDATE modulos set descripcion='En este nivel darás tus primeros pasos aprendiendo Lengua de Señas.' WHERE id_m=1;

UPDATE modulos set descripcion='En este nivel aprenderás a nombrar lo que tienes a tu alrededor' WHERE id_m=2;
UPDATE modulos set descripcion='En este nivel aprenderás ampliar tu vocabulario.' WHERE id_m=3;

SELECT * FROM modulos;

INSERT INTO temas(id_t,nombre_tema,id_m ) values(default,'Número',2);
INSERT INTO temas(id_t,nombre_tema,id_m ) values(default,'Verbos',2);
INSERT INTO temas(id_t,nombre_tema,id_m ) values(default,'Frutas',2);
INSERT INTO temas(id_t,nombre_tema,id_m ) values(default,'Verduras',2);
INSERT INTO temas(id_t,nombre_tema,id_m ) values(default,'Colores',2);
INSERT INTO temas(id_t,nombre_tema,id_m ) values(default,'Familia',2);


INSERT INTO temas(id_t,nombre_tema,id_m ) values(default,'Ropa',3);
INSERT INTO temas(id_t,nombre_tema,id_m ) values(default,'Emociones',3);
INSERT INTO temas(id_t,nombre_tema,id_m ) values(default,'Departamentos de Guatemala',3);
INSERT INTO temas(id_t,nombre_tema,id_m ) values(default,'Animales',3);
INSERT INTO temas(id_t,nombre_tema,id_m ) values(default,'Medios de Transporte',3);
INSERT INTO temas(id_t,nombre_tema,id_m ) values(default,'Lugares de la Casa',3);

SELECT * FROM contenido
INSERT INTO contenido(id_c,nombre_contenido,id_t ) values(default,'A',1);
INSERT INTO contenido(id_c,nombre_contenido,id_t ) values(default,'B',1);
INSERT INTO contenido(id_c,nombre_contenido,id_t ) values(default,'C',1);
INSERT INTO contenido(id_c,nombre_contenido,id_t ) values(default,'D',1);
INSERT INTO contenido(id_c,nombre_contenido,id_t ) values(default,'E',1);
INSERT INTO contenido(id_c,nombre_contenido,id_t ) values(default,'F',1);
INSERT INTO contenido(id_c,nombre_contenido,id_t ) values(default,'G',1);
INSERT INTO contenido(id_c,nombre_contenido,id_t ) values(default,'H',1);
INSERT INTO contenido(id_c,nombre_contenido,id_t ) values(default,'I',1);
INSERT INTO contenido(id_c,nombre_contenido,id_t ) values(default,'J',1);
INSERT INTO contenido(id_c,nombre_contenido,id_t ) values(default,'K',1);
INSERT INTO contenido(id_c,nombre_contenido,id_t ) values(default,'L',1);
INSERT INTO contenido(id_c,nombre_contenido,id_t ) values(default,'M',1);
INSERT INTO contenido(id_c,nombre_contenido,id_t ) values(default,'N',1);
INSERT INTO contenido(id_c,nombre_contenido,id_t ) values(default,'Ñ',1);
INSERT INTO contenido(id_c,nombre_contenido,id_t ) values(default,'O',1);
INSERT INTO contenido(id_c,nombre_contenido,id_t ) values(default,'P',1);
INSERT INTO contenido(id_c,nombre_contenido,id_t ) values(default,'Q',1);
INSERT INTO contenido(id_c,nombre_contenido,id_t ) values(default,'R',1);
INSERT INTO contenido(id_c,nombre_contenido,id_t ) values(default,'S',1);
INSERT INTO contenido(id_c,nombre_contenido,id_t ) values(default,'T',1);
INSERT INTO contenido(id_c,nombre_contenido,id_t ) values(default,'U',1);
INSERT INTO contenido(id_c,nombre_contenido,id_t ) values(default,'V',1);
INSERT INTO contenido(id_c,nombre_contenido,id_t ) values(default,'W',1);
INSERT INTO contenido(id_c,nombre_contenido,id_t ) values(default,'X',1);
INSERT INTO contenido(id_c,nombre_contenido,id_t ) values(default,'Y',1);
INSERT INTO contenido(id_c,nombre_contenido,id_t ) values(default,'Z',1);

select * from temas
INSERT INTO contenido(id_c,nombre_contenido,id_t ) values(default,'Lunes',5);
INSERT INTO contenido(id_c,nombre_contenido,id_t ) values(default,'Martes',5);
INSERT INTO contenido(id_c,nombre_contenido,id_t ) values(default,'Miércoles',5);
INSERT INTO contenido(id_c,nombre_contenido,id_t ) values(default,'Jueves',5);
INSERT INTO contenido(id_c,nombre_contenido,id_t ) values(default,'Viernes',5);
INSERT INTO contenido(id_c,nombre_contenido,id_t ) values(default,'Sábado',5);
INSERT INTO contenido(id_c,nombre_contenido,id_t ) values(default,'Domingo',5);

INSERT INTO contenido(id_c,nombre_contenido,id_t ) values(default,'Yo',2);
INSERT INTO contenido(id_c,nombre_contenido,id_t ) values(default,'Tú',2);
INSERT INTO contenido(id_c,nombre_contenido,id_t ) values(default,'Él',2);
INSERT INTO contenido(id_c,nombre_contenido,id_t ) values(default,'Ella',2);
INSERT INTO contenido(id_c,nombre_contenido,id_t ) values(default,'Ellos',2);
INSERT INTO contenido(id_c,nombre_contenido,id_t ) values(default,'Ellas',2);
INSERT INTO contenido(id_c,nombre_contenido,id_t ) values(default,'Nosotros',2);
INSERT INTO contenido(id_c,nombre_contenido,id_t ) values(default,'Vosotros',2);
INSERT INTO contenido(id_c,nombre_contenido,id_t ) values(default,'Nuestro',2);
INSERT INTO contenido(id_c,nombre_contenido,id_t ) values(default,'Vuestro',2);
INSERT INTO contenido(id_c,nombre_contenido,id_t ) values(default,'Mío',2);
INSERT INTO contenido(id_c,nombre_contenido,id_t ) values(default,'Tuyo',2);
INSERT INTO contenido(id_c,nombre_contenido,id_t ) values(default,'Suyo',2);


INSERT INTO contenido(id_c,nombre_contenido,id_t ) values(default,'Hola',3);
INSERT INTO contenido(id_c,nombre_contenido,id_t ) values(default,'Adiós',3);
INSERT INTO contenido(id_c,nombre_contenido,id_t ) values(default,'Buenos Días',3);
INSERT INTO contenido(id_c,nombre_contenido,id_t ) values(default,'Buenas Tardes',3);
INSERT INTO contenido(id_c,nombre_contenido,id_t ) values(default,'Buenas Noches',3);
INSERT INTO contenido(id_c,nombre_contenido,id_t ) values(default,'Bienvenido',3);
INSERT INTO contenido(id_c,nombre_contenido,id_t ) values(default,'Gracias',3);
INSERT INTO contenido(id_c,nombre_contenido,id_t ) values(default,'Mucho gusto',3);
INSERT INTO contenido(id_c,nombre_contenido,id_t ) values(default,'Permiso',3);

INSERT INTO contenido(id_c,nombre_contenido,id_t ) values(default,'Dime tu nombre',3);
INSERT INTO contenido(id_c,nombre_contenido,id_t ) values(default,'Por favor',3);



INSERT INTO contenido(id_c,nombre_contenido,id_t ) values(default,'Hoy',4);
INSERT INTO contenido(id_c,nombre_contenido,id_t ) values(default,'Mañana',4);
INSERT INTO contenido(id_c,nombre_contenido,id_t ) values(default,'Ahora',4);
INSERT INTO contenido(id_c,nombre_contenido,id_t ) values(default,'Ahorita',4);
INSERT INTO contenido(id_c,nombre_contenido,id_t ) values(default,'Ayer',4);
INSERT INTO contenido(id_c,nombre_contenido,id_t ) values(default,'Día',4);
INSERT INTO contenido(id_c,nombre_contenido,id_t ) values(default,'Año',4);
INSERT INTO contenido(id_c,nombre_contenido,id_t ) values(default,'La próxima vez',4);








INSERT INTO contenido(id_c,nombre_contenido,id_t ) values(default,'Enero',6);
INSERT INTO contenido(id_c,nombre_contenido,id_t ) values(default,'Febrero',6);
INSERT INTO contenido(id_c,nombre_contenido,id_t ) values(default,'Marzo',6);
INSERT INTO contenido(id_c,nombre_contenido,id_t ) values(default,'Abril',6);
INSERT INTO contenido(id_c,nombre_contenido,id_t ) values(default,'Mayo',6);
INSERT INTO contenido(id_c,nombre_contenido,id_t ) values(default,'Junio',6);
INSERT INTO contenido(id_c,nombre_contenido,id_t ) values(default,'Julio',6);
INSERT INTO contenido(id_c,nombre_contenido,id_t ) values(default,'Agosto',6);
INSERT INTO contenido(id_c,nombre_contenido,id_t ) values(default,'Septiembre',6);
INSERT INTO contenido(id_c,nombre_contenido,id_t ) values(default,'Octubre',6);
INSERT INTO contenido(id_c,nombre_contenido,id_t ) values(default,'Noviembre',6);
INSERT INTO contenido(id_c,nombre_contenido,id_t ) values(default,'Diciembre',6);











INSERT INTO videos(id_v,id_c,url ) values(default,59,'https://drive.google.com/uc?export=download&id=1ILHcdNuWhaDbfj5cjGe1t6YmC9iGwFpt');
INSERT INTO videos(id_v,id_c,url ) values(default,60,'https://drive.google.com/uc?export=download&id=13eusM9RfPFLfMae3tPTwnSCGc3fs0Sqh');
INSERT INTO videos(id_v,id_c,url ) values(default,61,'https://drive.google.com/uc?export=download&id=15xEdgXKBjTDEJqMJ86Ag5TdFL8cJnfd0');
INSERT INTO videos(id_v,id_c,url ) values(default,62,'https://drive.google.com/uc?export=download&id=1ZpfcQ2VG5q3k85ui3hjG5wFjH6Z0HAeo');
INSERT INTO videos(id_v,id_c,url ) values(default,63,'https://drive.google.com/uc?export=download&id=1QeaS3JRl8ShDgr9Q5m5zeacloCHDe6pt');
INSERT INTO videos(id_v,id_c,url ) values(default,64,'https://drive.google.com/uc?export=download&id=1Jz9Ah-tfLAG8SxBYAKhWgSErxHUQexem');
INSERT INTO videos(id_v,id_c,url ) values(default,65,'https://drive.google.com/uc?export=download&id=1uX9Z2s7diWjimpXAQUagn0hx9j0SjOow');
INSERT INTO videos(id_v,id_c,url ) values(default,66,'https://drive.google.com/uc?export=download&id=1--OIXozd92xCzQaAgAvx-1KopEniVIuZ');


INSERT INTO videos(id_v,id_c,url ) values(default,48,'https://drive.google.com/uc?export=download&id=1S6DaV7r-jYWd_s7lvZ6JTvz3u7IuXRqO');
INSERT INTO videos(id_v,id_c,url ) values(default,49,'https://drive.google.com/uc?export=download&id=10jWXmIUFzvwz5lu8BXA2l3wkNnhl3yvs');
INSERT INTO videos(id_v,id_c,url ) values(default,50,'https://drive.google.com/uc?export=download&id=1Vpwb9pBDatAQBTf54gyfRJs8gw0MH3n_');
INSERT INTO videos(id_v,id_c,url ) values(default,51,'https://drive.google.com/uc?export=download&id=1u6TXKjBFAPyS4mRNMLhBQDRRYbMdo-5Q');
INSERT INTO videos(id_v,id_c,url ) values(default,52,'https://drive.google.com/uc?export=download&id=13yJ7sUVndrdooFcRIyRSSFCGloAvFSln');
INSERT INTO videos(id_v,id_c,url ) values(default,53,'https://drive.google.com/uc?export=download&id=emRkyjx4Xu_aDCeVuzhzJt549oiv_');
INSERT INTO videos(id_v,id_c,url ) values(default,54,'https://drive.google.com/uc?export=download&id=1O4ZTa-wCjqqPvutJpQPocEPrZADnK4ga');
INSERT INTO videos(id_v,id_c,url ) values(default,55,'https://drive.google.com/uc?export=download&id=1Nm3qZqcFmhLrGKsG5V9YPFf60bdFRcfT');
INSERT INTO videos(id_v,id_c,url ) values(default,56,'https://drive.google.com/uc?export=download&id=1uGz5OuavHm12u8kcLmMFxXsfsQmtC3h5');
INSERT INTO videos(id_v,id_c,url ) values(default,57,'https://drive.google.com/uc?export=download&id=1PCX4-t_spiS0JHTd2VnMApPp2q6FDG-P');
INSERT INTO videos(id_v,id_c,url ) values(default,58,'https://drive.google.com/uc?export=download&id=13JKuRrIqGFHpeyv-uNhPr3nH8RZVOotN');

INSERT INTO videos(id_v,id_c,url ) values(default,35,'https://drive.google.com/uc?export=download&id=1oaoTeWBnrdwY1981oeCVM0dLRURfyAoC');
INSERT INTO videos(id_v,id_c,url ) values(default,36,'https://drive.google.com/uc?export=download&id=1IXjQbXlMwWtcvpKPh_D03qShcuCHoa4F');
INSERT INTO videos(id_v,id_c,url ) values(default,37,'https://drive.google.com/uc?export=download&id=18QaUb5A8ST8G4DS9nM9yOI2QxLOCQIgT');
INSERT INTO videos(id_v,id_c,url ) values(default,38,'https://drive.google.com/uc?export=download&id=1z8GDp7pLAYTDCDE9JcTQwetXF4T2W_tp');
INSERT INTO videos(id_v,id_c,url ) values(default,39,'https://drive.google.com/uc?export=download&id=1mfc7RebeQf6bj_djDPv677zVxZJv_I0q');
INSERT INTO videos(id_v,id_c,url ) values(default,40,'https://drive.google.com/uc?export=download&id=164zJPWzIgI2rilFJB0ACPU0H42myPs8n');
INSERT INTO videos(id_v,id_c,url ) values(default,41,'https://drive.google.com/uc?export=download&id=1CcloiHhCwx24ml7Vbc57SumhoDSNst-k');
INSERT INTO videos(id_v,id_c,url ) values(default,42,'https://drive.google.com/uc?export=download&id=1p3GCMnuz43WDMTDBnllQzHGTx9CqwxYg');
INSERT INTO videos(id_v,id_c,url ) values(default,43,'https://drive.google.com/uc?export=download&id=1zKbtcR9lqh-lq_ozcknLV8-V1bcYBRcx');
INSERT INTO videos(id_v,id_c,url ) values(default,44,'https://drive.google.com/uc?export=download&id=1tq1CQsk_blBRIQcVIkkQYKe4_yEWfgHT');
INSERT INTO videos(id_v,id_c,url ) values(default,45,'https://drive.google.com/uc?export=download&id=1j16_xqTTEyHtqXVg6V2yI3EvwuFAj61y');
INSERT INTO videos(id_v,id_c,url ) values(default,46,'https://drive.google.com/uc?export=download&id=1pFHVzO2N_mGEMn02_X30AZ45gKr2R0eP');
INSERT INTO videos(id_v,id_c,url ) values(default,47,'https://drive.google.com/uc?export=download&id=1KTOqNxYkOuESsJu903-gLNHK1MKfARWV');

INSERT INTO videos(id_v,id_c,url ) values(default,67,'https://drive.google.com/uc?export=download&id=1zuVvnoKcPrvbJ4WNLAe4D5zpGLd4yT5w');
INSERT INTO videos(id_v,id_c,url ) values(default,68,'https://drive.google.com/uc?export=download&id=1e0fpjdHeODsUSh9UuYYexU8_vqLyemUj');
INSERT INTO videos(id_v,id_c,url ) values(default,69,'https://drive.google.com/uc?export=download&id=1FFw8KMTIiPQpZruBcv4oh1lqSp0A7nTe');
INSERT INTO videos(id_v,id_c,url ) values(default,70,'https://drive.google.com/uc?export=download&id=1o2dRFtld8OtwNqUEXhj_17YgaKaPPJ-U');
INSERT INTO videos(id_v,id_c,url ) values(default,71,'https://drive.google.com/uc?export=download&id=1EyeAMjuaaqqGpWKUyeeXIW2tC5FMYqQW');
INSERT INTO videos(id_v,id_c,url ) values(default,72,'https://drive.google.com/uc?export=download&id=1XjAkIHg4c53PP6A98ccqAJaaMTkpjtVk');
INSERT INTO videos(id_v,id_c,url ) values(default,73,'https://drive.google.com/uc?export=download&id=1xyDYwyXh1vWY_saUNSxlGZIGjok-hu-d');
INSERT INTO videos(id_v,id_c,url ) values(default,74,'https://drive.google.com/uc?export=download&id=1LXELu-yOq-FvTGrn11HUaKbT_wEDEn-D');
INSERT INTO videos(id_v,id_c,url ) values(default,75,'https://drive.google.com/uc?export=download&id=1edrC2LWSlwniqaZ2qgzCuK3VzKM0h693');
INSERT INTO videos(id_v,id_c,url ) values(default,76,'https://drive.google.com/uc?export=download&id=1yQj5VK5FWNHfVJhbDD54U5fT5cbg_wSv');
INSERT INTO videos(id_v,id_c,url ) values(default,77,'https://drive.google.com/uc?export=download&id=1etJb3rUmdDwG5kaAKENXSbXdVL3fZXCA');
INSERT INTO videos(id_v,id_c,url ) values(default,78,'https://drive.google.com/uc?export=download&id=19QjhBrJ_XIC1-NzLG9ymV0AI7t-pOPwa');




INSERT INTO videos(id_v,id_c,url ) values(default,28,'https://drive.google.com/uc?export=download&id=1cTeKSgBvgzkXFcg2Cp99EsqJkhJ_6-M-');
INSERT INTO videos(id_v,id_c,url ) values(default,29,'https://drive.google.com/uc?export=download&id=1UKWxW_BiP2kShPhcSLGUs0djyFeO3z5O');
INSERT INTO videos(id_v,id_c,url ) values(default,30,'https://drive.google.com/uc?export=download&id=1dbMpm4vuy3VeVAbkN6oTFf8NupTBLphq');
INSERT INTO videos(id_v,id_c,url ) values(default,31,'https://drive.google.com/uc?export=download&id=14URvYpYOHgkijbXdFTFgRKd3rRJY45Kb');
INSERT INTO videos(id_v,id_c,url ) values(default,32,'https://drive.google.com/uc?export=download&id=1rykRdh7HSOcAuum42lhjF8bd-m3szUDR');
INSERT INTO videos(id_v,id_c,url ) values(default,33,'https://drive.google.com/uc?export=download&id=1RU66c1kiCI1CjCRHnoYVXSLx9n633HEn');
INSERT INTO videos(id_v,id_c,url ) values(default,34,'https://drive.google.com/uc?export=download&id=1DYYYZoDZq2EtwKleqCCIwOB5a7gNs7rx');


UPDATE videos set url='https://drive.google.com/uc?export=download&id=1LC7emRkyjx4Xu_aDCeVuzhzJt549oiv_' where id_c=53;