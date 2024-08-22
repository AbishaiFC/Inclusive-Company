create database New_Vision;
use New_Vision;

create table usuario(
ID_Usuario int primary key auto_increment,
ID_Foro int,
ID_Notificacion int,
ID_Postulacion int,
Nombre varchar(50),
ApellidoPaterno varchar(50),
ApellidoMaterno varchar(50),
PerfilProfesional varchar(100),
DescripcionPerfilProfesional varchar(500),
Correo varchar(100),
Contraseña varchar(15),
Direccion varchar(50),
CodigoPostal int,
Telefonofijo varchar(12),
Foto varchar(255),
Curriculum varchar(255),
IMSS int);

create table Empresa(
ID_Empresa int primary key auto_increment,
Correo varchar(100),
Telefono varchar(12),
Direccion varchar(50),
CodigoPostal int,
DiscapacidadAdmitidas varchar(100),
TipoDeEmpresa varchar(25),
Estatus varchar(20),
Foto varchar(100));

create table notificacion(
ID_Notificacion int primary key auto_increment,
ID_Usuario int,
Titulo varchar(50),
Asunto varchar(75),
Estado varchar(25),
Categoria varchar(30),
Fecha date,
foreign key(ID_Usuario) references usuario(ID_Usuario)
);

create table entrevista(
ID_Entrevista int primary key auto_increment,
ID_Usuario int,
ID_Empresa int,
Estado varchar(25),
Descripcion varchar(100),
Resultado varchar(25),
FechaDeEmision date,
FechaDeResultado date,
foreign key(ID_Usuario)references usuario(ID_Usuario),
foreign key(ID_Empresa)references empresa(ID_Empresa));

create table foro(
ID_Foro int primary key auto_increment,
ID_Usuario int,
Titulo varchar(20),
Mensaje varchar(500),
NumeroDeRespuestas int,
FechaDePublicacion datetime,
FOREIGN KEY(ID_Usuario) REFERENCES usuario(ID_usuario));

create table discapacidad(
ID_Usuario int,
TipoDeDiscapacidad varchar(50),
Dependencias varchar(100),
NivelDeAfectacion varchar(100),
DescripciónAdicional varchar(300),
foreign key(ID_Usuario) references Usuario(ID_Usuario));

create table postulacion(
ID_Postulacion int primary key auto_increment,
ID_Usuario int,
ID_Discapacidad int,
PerfilProfesional varchar(50),
Descripcion varchar(200),
foreign key(ID_Usuario) references usuario(ID_Usuario));

create table trabajo(
ID_Trabajo int primary key auto_increment,
ID_Empresa int,
ID_EstatusLegal int,
Categoria varchar(25),
Nombre varchar(50),
Salario int,
TipoDiscapacidad varchar(100),
Descripcion varchar(200),
Requisitos varchar(100),
TipoDeContrato varchar(50),
DiasLaborales varchar(100),
FechaDePublicacion date,
FechaLimite date,
foreign key(ID_Empresa) references empresa(ID_Empresa));

create table estatusLegal(
ID_EstatusLegal int primary key auto_increment,
ID_Trabajo int,
EstatusDeLaEmpresa varchar (25),
Descripcion varchar(200),
FechaDeRevision date,
foreign key (ID_Trabajo) references trabajo(ID_Trabajo)
);