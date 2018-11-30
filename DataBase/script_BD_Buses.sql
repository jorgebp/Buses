drop table buses.bus;
drop table buses.empresa;
drop table buses.conductor;
drop table buses.region;
drop table buses.ciudad;
drop table buses.pasaje;

create table buses.bus
(
	id bigint constraint PK_BUS primary key generated always as identity,
	nombreEmpresa varchar(100), 
	maximoAsientos smallint,
	largo smallint,
	ancho smallint,
	patente varchar(10),
	origen varchar(50), 
	destino varchar(50),
    estaEnGarage char(2),
    revisiontecnica timestamp default CURRENT_TIMESTAMP,
    comentario varchar(100)
);

create table buses.empresa
(
	idempresa bigint PK_EMPRESA primary key generated always as identity,
	nomempresa varchar(50),
	rutempresa varchar(14)
);

create table buses.conductor
(
	rut varchar(14) PK_PERSONA primary key generated always as identity,
	nomcond varchar(15),
	apepcond varchar(15),
	apemacond varchar(15),
	correocond varchar(100),
	fonocond varchar(15),
	dircond varchar(50),
	regcond bigint,
	ciucond bigint,
	empcond bigint
);

create table buses.region
(
	idregion bigint PK_CIUDAD primary key generated always as identity,
	region varchar(50)
);

create table buses.ciudad
(
	idciudad bigint PK_IDCIUDAD primary key generated always as identity,
	ciudad varchar(50) 
);

create table buses.pasaje
(
	id bigint constraint PK_PASAJE primary key generated always as identity,
	idpasajero bigint,
	nombre varchar(50),
	rut varchar(11),
	salida varchar(50),
	destino varchar(50),
	valorpasaje bigint,
	fecha timestamp default CURRENT_TIMESTAMP
);

/*Se realiza la insercuón de datos a las tablas*/
insert into buses.bus (nombreEmpresa, maximoAsientos, largo, ancho, patente, ciudadOrigen, ciudadDestino, estaEnGarage, revisiontecnica)
values
('Pullman Bus', 48, 30m, 4m, 'PK-5678', 'Santiago', 'Valparaíso','si','14-11-2019','Esta en buen estado'), ('Tur Bus', 90, 40, 5, 'TM-1094', 'Valparaíso', 'Santiago','no','14-11-2019','Esta en buen estado'), 
('Tas Choapa', 48, 17m, 4m, 'PG-5679', 'Arica', 'La Serena','no','14-11-2019','Esta en buen estado'), ('Pullman del Sur', 44, 17, 4, 'PA-5714', 'Temuco', 'Osorno','si','14-11-2019','Esta en buen estado');

insert into buses.empresa (idempresa, nomempresa)
values
(001,'Pullma Bus'),(002,'Tur Bus'),(003,'Tas Choapa'),(004,'Pullma del Sur'),